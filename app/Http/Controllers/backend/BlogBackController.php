<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\backend\BlogRequest;
use Illuminate\Support\Facades\File;


class BlogBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('backend.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $validated = $request->validated();


        if($image = $request->file('image')){
            $imagePath = 'frontend/blog_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }
        Blog::create($validated);
        return redirect()->route('blogback.index')->with('success', 'Müvəffəqiyyətlə əlavə edildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('backend.pages.blogs.show', compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('backend.pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/blog_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }

        $blog->update($validated);

        return redirect()->route('blogback.index')->with('success', 'Məlumat yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(File::exists(public_path('frontend/blog_images/' . $blog->image))){
            File::delete(public_path('frontend/blog_images/' . $blog->image));
        }else{
            return redirect()->route('blogback.index')->with('error', 'İnformasiya Silinmədi');
        }

        $blog->delete();

        return redirect()->route('blogback.index')->with('error', 'İnformasiya Silindi');
    }
}
