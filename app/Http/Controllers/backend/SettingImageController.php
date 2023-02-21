<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingImage;
use App\Http\Requests\backend\SettingImageRequest;
use Illuminate\Support\Facades\File;

class SettingImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_images = SettingImage::get();
        return view('backend.pages.setting_images.index', compact('setting_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.setting_images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingImageRequest $request)
    {
        $validated = $request->validated();

        if($image = $request->file('value')){
            $imagePath = 'frontend/setting_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['value'] = "$imageName";
        }
        SettingImage::create($validated);

        return redirect()->route('setting_image.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $setting_image = SettingImage::find($id);
         return view('backend.pages.setting_images.show', compact('setting_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting_image = SettingImage::find($id);
         return view('backend.pages.setting_images.edit', compact('setting_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingImageRequest $request, $id)
    {
        $validated = $request->validated();

        $setting_image = SettingImage::find($id);

        if($image = $request->file('value')){
            $imagePath = 'frontend/setting_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['value'] = "$imageName";
        }
        $setting_image->update($validated);

        return redirect()->route('setting_image.index')->with('success', 'İnformasiya Yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting_image = SettingImage::find($id);
        if(File::exists(public_path('frontend/setting_images/' . $setting_image->value))){
            File::delete(public_path('frontend/setting_images/' . $setting_image->value));
        }else{
            return redirect()->route('setting_image.index')->with('error', 'Silinmədi');
        } 
        $setting_image->delete();
        return redirect()->route('setting_image.index')->with('error', 'İnformasiya Silindi');
    }
}
