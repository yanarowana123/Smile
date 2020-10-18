<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Position;
use App\Models\Employee;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class StaffController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $staff = Staff::latest()->paginate(config('app.pagination'));

        return view('admin.staff.index',
            [
                'staff' => $staff
            ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name_ru' => 'required|max:255',
                'name_en' => 'required|max:255',
                'name_kz' => 'required|max:255',
                'image' => 'required|image|mimes:jpg,jpeg,png|max:4096',
                'content_ru' => 'required|string|max:255',
                'content_en' => 'required|string|max:255',
                'content_kz' => 'required|string|max:255',
            ]
        );
        $attributes = collect($request);
        $image = $request->file('image');
        $attributes->forget('image')
            ->put('image', Main::handleUploadedImage($image));
        Staff::create($attributes->toArray());
        return redirect()
            ->route('admin.staff.index')
            ->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit',
            [
                'staff' => $staff
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $staff
     * @return RedirectResponse
     */
    public function update(Request $request, Staff $staff)
    {
        $validatedData = $request->validate(
            [
                'name_ru' => 'required|max:255',
                'name_en' => 'required|max:255',
                'name_kz' => 'required|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
                'content_ru' => 'required|string|max:255',
                'content_en' => 'required|string|max:255',
                'content_kz' => 'required|string|max:255',
            ]
        );
        $attributes = collect($request);
        if ($request->hasFile('image')) {
            Storage::delete($staff->image);
            $image = $request->file('image');
            $attributes->forget('image')
                ->put('image', Main::handleUploadedImage($image));
        }

        $staff->update($attributes->toArray());
        return redirect()
            ->route('admin.staff.index')
            ->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Staff $staff
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Staff $staff)
    {
        Storage::delete($staff->image);
        $staff->delete();
        return redirect()->route('admin.staff.index');
    }
}
