<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Homes;
use App\Models\Communities;
use App\Models\HomeCommunity;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=[];
        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $name = $featured_image->getClientOriginalName();
            $size = $featured_image->getClientSize();
            $destinationPath = public_path('uploads');
            $featured_image->move($destinationPath, $name);
        }
        $files = $request->file('gallery');
        foreach($files as $file)
        {
            $extension = $file->getClientOriginalExtension(); 
            $filename =time().'.'.$extension;
            $file->move(public_path('uploads'), $filename);
            array_push($gallery, $filename);
        }
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'slug'=>'required',
            'meta_description'=>'required',
            'meta_title'=>'required',
            'com_title'=>'required',
            'address'=>'required',
            'area'=>'required',
            'subdivission'=>'required',
            'city'=>'required',
            'county'=>'required',
            'state'=>'required',
            'zipcode'=>'required'
            ]);
        Homes::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'stories'=>$request['stories'],
            'mls'=>$request['mls'],
            'builder'=>$request['builder'],
            'area'=>$request['area'],
            'featured_image'=>$name,
            'gallery'=>implode(',', $gallery),
            'slug'=>$request['slug'],
            'meta_description'=>$request['meta_description'],
            'meta_title'=>$request['meta_title'],
        ]);
        Communities::create([
            'title'=>$request['com_title'],
            'address'=>$request['address'],
            'area'=>$request['com_area'],
            'subdivission'=>$request['subdivission'],
            'city'=>$request['city'],
            'county'=>$request['county'],
            'state'=>$request['state'],
            'zipcode'=>$request['zipcode'],
        ]);
        $home=Homes::where('title',$request['title'])->first();
        $community=Communities::where('title',$request['com_title'])->first();
        HomeCommunity::create([
            'home_id'=>$home->id,
            'community_id'=>$community->id,
        ]);
        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home =  Homes::whereId($id)->first();
        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $name = $featured_image->getClientOriginalName();
            $size = $featured_image->getClientSize();
            $destinationPath = public_path('uploads');
            $featured_image->move($destinationPath, $name);
        }
        else{
            $name=$home->featured_image;
        }
        
        $gallery = explode(',', $home->gallery);
        if($request->file('gallery'))
        {
            $files = $request->file('gallery');
            foreach($files as $file)
            {
                $extension = $file->getClientOriginalExtension(); 
                $filename =time().'.'.$extension;
                $file->move(public_path('uploads'), $filename);
                array_push($gallery, $filename);
            }
            $gname=implode(',', $gallery);
        }
        else
        {
            $gname=$home->gallery;
        }

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'slug'=>'required',
            'meta_description'=>'required',
            'meta_title'=>'required',
            'title'=>'required',
            'address'=>'required',
            'area'=>'required',
            'subdivission'=>'required',
            'city'=>'required',
            'county'=>'required',
            'state'=>'required',
            'zipcode'=>'required'
            ]);
        Homes::where('id',$id)->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'bedroom'=>$request['bedroom'],
            'bathroom'=>$request['bathroom'],
            'garage'=>$request['garage'],
            'stories'=>$request['stories'],
            'mls'=>$request['mls'],
            'area'=>$request['area'],
            'featured_image'=>$name,
            'gallery'=>$gname,
            'slug'=>$request['slug'],
            'meta_description'=>$request['meta_description'],
            'meta_title'=>$request['meta_title'],
        ]);
        $data=HomeCommunity::where('home_id',$id)->first();
        Communities::where('id',$data->community_id)->update([
            'title'=>$request['com_title'],
            'address'=>$request['address'],
            'area'=>$request['com_area'],
            'subdivission'=>$request['subdivission'],
            'city'=>$request['city'],
            'county'=>$request['county'],
            'state'=>$request['state'],
            'zipcode'=>$request['zipcode'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        //
    }
}
