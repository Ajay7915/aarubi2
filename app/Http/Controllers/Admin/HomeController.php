<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\File;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Home::all();
        return view('admin.home.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required',

        ]);
        $home = new Home;
        if($request->file('img')){//form name
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/home/'),$filename);
            $home['image']=$filename;//database name
            
        }
        $home->title=$request->title;
        $home->description=$request->desc;

        $home->save();

        return redirect()->route('admin_home.index')
        ->with('success','home  has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view('admin.home.show',compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home=Home::find($id);
        return view('admin.home.edit',compact('home'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    $request->validate([
    'title' => 'required',
    'desc' => 'required',
    'img' => 'required',
    ]);
    $home = Home::find($id);
    if($request->file('img')){//form name
        $file = $request->file('img');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('img/home/'),$filename);
        $home['image']=$filename;//database name
    }
    $home->title = $request->title;
    $home->description = $request->desc;
    $home->save();
    return redirect()->route('admin_home.index')
    ->with('success','Home has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home,$id)
    {
        $home = Home::findOrFail($id);
        $image_path = public_path("..\img\home\{$home->image}");
    
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
        $home->delete();
        return redirect()->route('admin_home.index')
        ->with('success','about has been deleted successfully');
    }
}
