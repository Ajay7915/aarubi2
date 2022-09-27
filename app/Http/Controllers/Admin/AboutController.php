<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=About::all();
        return view('admin.about.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
        
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
        $about = new About;
        if($request->file('img')){//form name
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/about/'),$filename);
            $about['image']=$filename;//database name
        }
        $about->title=$request->title;
        $about->description=$request->desc;

        $about->save();

        return redirect()->route('admin_about.index')
        ->with('success','about  has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show',compact('about'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$id)
    {
        $about=About::find($id);
        return view('admin.about.edit',compact('about'));
        
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
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required',

        ]);
        $about =  About::find($id);
        if($request->hasFile('img')){//form name
            $file = $request->img;
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/about/'),$filename);
            $about['image']=$filename;//database name
        }
        $about->title=$request->title;
        $about->description=$request->desc;

        $about->save();

        return redirect()->route('admin_about.index')
        ->with('success','about has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about,$id)
    {
        $about = About::findOrFail($id);
        $image_path = public_path("img/about/{$about->image}");
    
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
        $about->delete();
        return redirect()->route('admin_about.index')
        ->with('success','about has been deleted successfully');

    }
}
