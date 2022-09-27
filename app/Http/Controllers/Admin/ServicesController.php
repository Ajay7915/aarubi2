<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Service::latest()->paginate(100000);
        return view('admin.service.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);
        
        $data= new Service;
        $data->services_name=$request->input('name');
       
        if($request->hasFile('image')){
           $file=$request->image;
            $name=$file->getClientOriginalName();
            $filename= time().'.'.$name;
            $file->move('Services_photo',$filename);
            $data->image=$filename;
        }
        $data->description=$request->input('description');
        
        
        $data->save();
        return redirect('admin_service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));

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
        $data=Service::find($id);
        $data->services_name=$request->input('name');
       
        if($request->hasFile('image')){
           $file=$request->image;
            $name=$file->getClientOriginalName();
            $filename= time().'.'.$name;
            $file->move('Services_photo',$filename);
            $data->image=$filename;
        }
        $data->description=$request->input('description');
        
        
        $data->save();
        return redirect('admin_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrfail($id);
        $service->delete();
       
        return redirect()->route('admin_service.index')
                        ->with('success','Data deleted successfully');
    }
}
