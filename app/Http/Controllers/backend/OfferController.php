<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Http\Requests\backend\OfferRequest;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::get();
        return view('backend.pages.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        $validated = $request->validated();        

        if($image = $request->file('image')){
            $imagePath = 'frontend/offers/images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        Offer::create($validated);

        return redirect()->route('offer.index')->with('success', 'Müvəffəqiyyətlə əlavə edildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::find($id);
        return view('backend.pages.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        return view('backend.pages.offers.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferRequest $request, $id)
    {
        $offer = Offer::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/offers/images/';            
            $imageName = date('YmdHis') . '.' . $image->extension();            
            $image->move($imagePath, $imageName);            
            $validated['image'] = "$imageName";            
        }else{
            unset($validated['image']);            
        }

        $offer->update($validated);

        return redirect()->route('offer.index')->with('success', 'Məlumat əlavə edildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);

        if(File::exists(public_path('frontend/offers/images/' . $offer->image))){
            File::delete(public_path('frontend/offers/images/' . $offer->image));
        }else{
            return redirect()->route('offer.index')->with('error', 'İnformasiya Silinmədi');
        }

        $offer->delete();

        return redirect()->route('offer.index')->with('error', 'İnformasiya Silindi');
    }
}
