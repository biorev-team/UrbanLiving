<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;                        
use App\Http\Controllers\Controller;
use App\Models\Homes;
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
        $homes=Homes::get();
        return view('admin.homes.homes')->with('homes',$homes);
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
        $featured_img =  Str::slug($request['title'], '-').time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\featuredImages\homes\\').$featured_img);
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
            'featured_image'=>$featured_img,
            'gallery'=>implode(',', $gallery),
            'slug'=>$request['slug'],
            'meta_description'=>$request['meta_description'],
            'meta_title'=>$request['meta_title'],
        ]);
        
        $community=Communities::where('title',$request['community'])->first();
        $community=Home::where('title',$request['title'])->first();
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
       return Homes::where('id',$id)->get()->first();
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
        $community=Communities::where('title',$request['community'])->first();
        HomeCommunity::where('home_id',$id)->update([
            'home_id'=>$id,
            'community_id'=>$community->id,
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
        $home = Homes::findOrFail($id);
        $home->delete(); 
    }
}
