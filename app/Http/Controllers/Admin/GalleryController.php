<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\GalleryPhoto;
use App\Models\Photo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::getPages();

        return view('admin.gallery.index',
            [
                'photos' => $photos
            ]);
    }


    public function deleteImage(Request $request)
    {
        $image = Photo::find($request->key);
        Storage::delete($image->path);
        $image->delete();
        return true;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($block)
    {
        $gallery = Photo::where('page', $block)->get();
        $imagesUrls = [];
        foreach ($gallery as $item) {
            $imagesUrls[] = [
                'id' => $item->id,
                'path' => $item->path
            ];
        }


        return view('admin.gallery.edit',
            [
                'block' => $block,
                'gallery' => $gallery,
                'imagesUrls' => $imagesUrls
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $block)
    {
        $validatedData = $request->validate([
            'images' => 'nullable|array|',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
        ]);

        $validatedData = collect($validatedData);

        if ($request->images)
            foreach ($validatedData->get('images') as $image) {
                $newImage = new Photo();
                $newImage->path = $image->storePublicly('uploads');
                $newImage->page = (int)$block;
                $newImage->save();
            }

        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
