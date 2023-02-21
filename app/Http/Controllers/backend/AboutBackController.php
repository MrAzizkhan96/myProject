<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\AboutRequest;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;


class AboutBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::get();

        return view('backend.pages.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $validated = $request->validated();        

        if($icon = $request->file('icon')){
            $iconPath = 'frontend/about_icons/';
            $iconName = date('YmdHis') . "." . $icon->extension();
            $icon->move($iconPath, $iconName);
            $validated['icon'] = "$iconName";
        }

        About::create($validated);

        return redirect()->route('aboutback.index')->with('success', 'Müvəffəqiyyətlə əlavə edildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::find($id);

        return view('backend.pages.abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.pages.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, $id)
    {
        $about = About::find($id);
        $validated = $request->validated();
        
        if($icon = $request->file('icon')){
            $iconPath = 'frontend/about_icons/';
            $iconName = date('YmdHis') . "." . $icon->extension();
            $icon->move($iconPath, $iconName);
            $validated['icon'] = "$iconName";
        }else{
            unset($validated['icon']);
        }

        $about->update($validated);

        return redirect()->route('aboutback.index')->with('success', 'Məlumat Yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if(File::exists(public_path('frontend/about_icons/' . $about->icon))){
            File::delete(public_path('frontend/about_icons/' . $about->icon));
        }else{
            return redirect()->route('aboutback.index')->with('error', 'Silinmədi');
        }
        $about->delete();
        return redirect()->route('aboutback.index')->with('error', 'Məlumat Silindi');
        }
}
