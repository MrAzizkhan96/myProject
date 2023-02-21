<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\AdminRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $admins = User::get();
        return view('backend.pages.admins.index', compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {        
        $validated = $request->validated();
        

        if(!empty($request->password)){
            $validated = array_merge($validated, ['password' => Hash::make($request->password)]);
        };        

        User::create($validated);
        
        return redirect()->route('admin.index')->with('success', 'Müvəffəqiyyətlə əlavə edildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        return view('backend.pages.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::find($id);
        $password = $admin->password;
        return view('backend.pages.admins.edit', compact('admin', 'password'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $user = User::find($id);
        $validated = $request->validated();
        if(!empty($request->password)){
            $validated = array_merge($validated, ['password' => Hash::make($request->password)]);
        }else{
            $validated['password'] = $user->password;
        }
        $user->update($validated);

        return redirect()->route('admin.index')->with('success', 'İnformasiya yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.index')->with('error', 'İnformasiya silindi');
    }
}
