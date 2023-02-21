<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\backend\TeamRequest;
use Illuminate\Support\Facades\File;

class TeamBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('backend.pages.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/team_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }

        Team::create($validated);

        return redirect()->route('teamback.index')->with('success', 'Müvəffəqiyyətlə əlavə olundu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('backend.pages.teams.show', compact('team'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('backend.pages.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $team = Team::find($id);
        $validated = $request->validated();

        if($image = $request->file('image')){
            $imagePath = 'frontend/team_images/';
            $imageName = date('YmdHis') . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $validated['image'] = "$imageName";
        }else{
            unset($validated['image']);
        }
        $team->update($validated);

        return redirect()->route('teamback.index')->with('success', 'İnformasiya Yeniləndi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        if(File::exists(public_path('frontend/team_images/' . $team->image))){
            File::delete(public_path('frontend/team_images/' . $team->image));
        }else{
            return redirect()->route('teamback.index')->with('error', 'İnformasiya Silinmədi');
        }
        $team->delete();

        return redirect()->route('teamback.index')->with('error', 'İnformasiya Silindi');

    }
}
