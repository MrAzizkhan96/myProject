<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\CustomerReviewRequest;
use App\Models\CustomerReview;
use Illuminate\Support\Facades\File;

class CustomerReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_reviews = CustomerReview::get();
        return view('backend.pages.customer_reviews.index', compact('customer_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.customer_reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerReviewRequest $request)
    {
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/customer_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }

        CustomerReview::create($validated);

        return redirect()->route('customer_review.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer_review = CustomerReview::find($id);
        return view('backend.pages.customer_reviews.show', compact('customer_review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer_review = CustomerReview::find($id);
        return view('backend.pages.customer_reviews.edit', compact('customer_review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerReviewRequest $request, $id)
    {
        $customer_review = CustomerReview::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/customer_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        $customer_review->update($validated);

        return redirect()->route('customer_review.index')->with('success', 'İnformasiya Yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer_review = CustomerReview::find($id);
        if(File::exists(public_path('frontend/customer_images/' . $customer_review->image))){
            File::delete(public_path('frontend/customer_images/' . $customer_review->image));
        }else{
            return redirect()->route('customer_review.index')->with('error', 'İnformasiya Silinmədi');
        }
        $customer_review->delete();
        return redirect()->route('customer_review.index')->with('error', 'İnformasiya Silindi');
    }
}
