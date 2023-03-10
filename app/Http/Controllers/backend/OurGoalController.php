<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurGoal;
use App\Http\Requests\backend\OurGoalRequest;
use Illuminate\Support\Facades\File;

class OurGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_goals = OurGoal::get();
        return view('backend.pages.our_goals.index', compact('our_goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.our_goals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurGoalRequest $request)
    {
        $validated = $request->validated();
        

        if($image = $request->file('image')){
            $imagePath = 'frontend/our_goals/';
            $ourGoalImage = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $ourGoalImage);
            $validated['image'] = "$ourGoalImage"; 
        }
        OurGoal::create($validated);
        
        
        return redirect()->route('our_goal.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $our_goal = OurGoal::find($id);
        return view('backend.pages.our_goals.show', compact('our_goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $our_goal = OurGoal::find($id);
        return view('backend.pages.our_goals.edit', compact('our_goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OurGoalRequest $request, $id)
    {
        $our_goal = OurGoal::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/our_goals/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }

        $our_goal->update($validated);

        return redirect()->route('our_goal.index')->with('success', 'İnformasiya Yeniləndi');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $our_goal = OurGoal::find($id);
        if(File::exists(public_path('frontend/our_goals/' . $our_goal->image))){
            File::delete(public_path('frontend/our_goals/' . $our_goal->image));
        }

        $our_goal->delete();
        return redirect()->route('our_goal.index')->with('error', 'İnformasiya Silindi');
    }
}
