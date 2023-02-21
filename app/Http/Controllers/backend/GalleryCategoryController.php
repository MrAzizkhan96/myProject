<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\GalleryCategoryRequest;
use App\Models\GalleryCategory;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::get();
        return view('backend.pages.gal_categories.index', compact('gallery_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gal_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryCategoryRequest $request)
    {
        $validated = $request->validated();
        GalleryCategory::create($validated);

        return redirect()->route('gallery_category.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery_category = GalleryCategory::find($id);
        return view('backend.pages.gal_categories.show', compact('gallery_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery_category = GalleryCategory::find($id);
        return view('backend.pages.gal_categories.edit', compact('gallery_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryCategoryRequest $request, $id)
    {
        $gallery_category = GalleryCategory::find($id);
        $validated = $request->validated();
        $gallery_category->update($validated);

        return redirect()->route('gallery_category.index')->with('success', 'İnformasiya Yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryCategory::find($id)->delete();
        return redirect()->route('gallery_category.index')->with('error', 'İnformasiya Silindi');
    }
}
