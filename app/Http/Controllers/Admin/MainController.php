<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Main;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{

    public function index($page, $block)
    {
        $page = Main::getConstVal($page);
        $block = Main::getConstVal($block);
        $content = Main::where('page', $page)->where('block', $block)->first();

        return view('admin.home.edit')->withContent($content);
    }

    public function updateHeader(Request $request, Main $content)
    {
        $validatedData = $request->validate(
            [
                'title_ru' => 'nullable|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'title_kz' => 'nullable|string|max:255',
                'content_ru' => 'nullable|string',
                'content_en' => 'nullable|string',
                'content_kz' => 'nullable|string',
                'image' => 'nullable|image|max:4096',
            ]
        );
        $validatedData = collect($validatedData);

        if ($request->hasFile('image')) {
            Storage::delete($content->image);
            $image = $validatedData->get('image');
            $validatedData->forget('image')
                ->put('image', Main::handleUploadedImage($image));
        }

        $content->update($validatedData->toArray());
        session()->flash('message', 'Успешное обновление');
        return redirect()->back();
    }






}
