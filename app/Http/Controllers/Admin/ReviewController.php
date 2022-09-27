<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\review;



class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=review::all();
        return view('admin.review.index',compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
        
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
            'name'=>'required',
            'post'=>'required',
            'msg'=>'required',
            'img'=>'required',

        ]);
        $review = new review;
        if($request->file('img')){//form name
            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/review/'),$filename);
            $review['image']=$filename;//database name
        }
        $review->name=$request->name;
        $review->post=$request->post;
        $review->message=$request->msg;

        $review->save();

        return redirect()->route('admin_review.index')
        ->with('success','review  has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('admin.review.show',compact('review'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review,$id)
    {
        $review=Review::find($id);
        return view('admin.review.edit',compact('review'));
        
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
            'name'=>'required',
            'post'=>'required',
            'msg'=>'required',
            'img'=>'required',

        ]);
        $review =  Review::find($id);
        if($request->hasFile('img')){//form name
            $file = $request->img;
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img/review/'),$filename);
            $review['image']=$filename;//database name
        }
        $review->name=$request->name;
        $review->post=$request->post;
        $review->message=$request->msg;

        $review->save();

        return redirect()->route('admin_review.index')
        ->with('success','review has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review,$id)
    {
        $review = review::findOrFail($id);
        $image_path = public_path("img/review/{$review->image}");
    
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
        $review->delete();
        return redirect()->route('admin_review.index')
        ->with('success','review has been deleted successfully');
    }
}
