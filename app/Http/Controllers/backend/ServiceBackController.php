<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\backend\ServiceRequest;
use Illuminate\Support\Facades\File;

class ServiceBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('backend.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/services/images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        if($icon = $request->file('icon')){
            $iconPath = 'frontend/services/icons/';
            $iconName = date('YmdHis') . '.' . $icon->extension();
            $icon->move($iconPath, $iconName);
            $validated['icon'] = "$iconName";
        }
        
        if( $url = $request->file('url')){            
            $urlPath = 'frontend/services/files';            
            $urlName = date('YmdHis') . '.' . $url->extension();            
            $url->move($urlPath, $urlName);            
            $validated['url'] = "$urlName";
        }

        Service::create($validated);

        return redirect()->route('serviceback.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('backend.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/services/images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }
        if($icon = $request->file('icon')){
            $iconPath = 'frontend/services/icons/';
            $iconName = date('YmdHis') . '.' . $icon->extension();
            $icon->move($iconPath, $iconName);
            $validated['icon'] = "$iconName";
        }else{
            unset($validated['icon']);
        }
        
        if( $url = $request->file('url')){            
            $urlPath = 'frontend/services/files';            
            $urlName = date('YmdHis') . '.' . $url->extension();            
            $url->move($urlPath, $urlName);            
            $validated['url'] = "$urlName";
        }else{            
            unset($validated['url']);
        }
        $service->update($validated);

        return redirect()->route('serviceback.index')->with('success', 'Məlumat Yeniləndi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if(File::exists(public_path('frontend/services/icons/' . $service->icon))){
            File::delete(public_path('frontend/services/icons/' . $service->icon));
        }else{
            return redirect()->route('serviceback.index')->with('error', 'İnformasiya Silinmədi');
        }

        if(File::exists(public_path('frontend/services/images/' . $service->image))){
            File::delete(public_path('frontend/services/images/' . $service->image));
        }else{
            return redirect()->route('serviceback.index')->with('error', 'İnformasiya Silinmədi');
        }

        if(File::exists(public_path('frontend/services/files/' . $service->url))){
            File::delete(public_path('frontend/services/files/' . $service->url));
        }else{
            return redirect()->route('serviceback.index')->with('error', 'İnformasiya Silinmədi');
        }
        $service->delete();
        return redirect()->route('serviceback.index')->with('error', 'İnformasiya Silindi');
    }
}


