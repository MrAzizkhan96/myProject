<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\BannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        return view('backend.pages.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        
        $validated = $request->validated();  
            

        if($image = $request->file('image')){
            $imagePath = 'frontend/banners/';
            $imageName = date('YmdHis') . "." . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        Banner::create($validated);

        return redirect()->route('banner.index')->with('success', 'Müvəffəqiyyətlə əlavə edildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('backend.pages.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.pages.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        $validated = $request->validated();

        if ($image = $request->file('image')) {
            $imagePath = 'frontend/banners/';
            $imageName = date('YmdHis') . "." . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }
          
        Banner::find($id)->update($validated);

        return redirect()->route('banner.index')->with('success', 'İnformasiya Yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(File::exists(public_path('frontend/banners/' . $banner->image))){
            File::delete(public_path('frontend/banners/' . $banner->image));
        }else{
            return redirect()->route('banner.index')->with('error', 'İnformasiya Silinmədi');                
        }
        $banner->delete();
        return redirect()->route('banner.index')->with('error', 'İnformasiya Silindi');
    }
}
