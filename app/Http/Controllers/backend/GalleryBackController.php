<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Requests\backend\GalleryRequest;
use Illuminate\Support\Facades\File;

class GalleryBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::with('galleryCategory')->get();

        return view('backend.pages.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery_categories = GalleryCategory::get();
        return view('backend.pages.gallery.create', compact('gallery_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/gallery_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        Gallery::create($validated);

        return redirect()->route('galleryback.index')->with('success', 'MMüvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('backend.pages.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery_categories = GalleryCategory::get();
        $gallery = Gallery::find($id);
        $gallery_category = $gallery->gallery_category;
        return view('backend.pages.gallery.edit', compact('gallery', 'gallery_category', 'gallery_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $validated = $request->validated();
        $gallery_category = Gallery::find($id);

        if($image = $request->file('image')){
            $imagePath = 'frontend/gallery_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }
        $gallery_category->update($validated);

        return redirect()->route('galleryback.index')->with('success', 'Məlumat yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if(File::exists(public_path('frontend/gallery_images/' . $gallery->image))){
            File::delete(public_path('frontend/gallery_images/' . $gallery->image));
        }
        $gallery->delete();
        return redirect()->route('galleryback.index')->with('error', 'İnformasiya Silindi');
    }
}
