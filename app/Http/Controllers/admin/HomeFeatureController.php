<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
Use App\Models\Features;
Use App\Models\Homes;
use App\Http\Controllers\Controller;

class HomeFeatureController extends Controller
{ 
   public function index(Request $request)
   {
       $id =$request['id'];
       $features = Features::where('home_id',$id)->get(); 
       $homes = Homes::where('id',$id)->get(); 
       return view('admin.homes.manage_homes')->with('features',$features)->with('homes',$homes) ;
   }
    
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $featured_img = time().explode('.',$request['featured-image'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
           $request['image'],';')))[1])[1];  

       \Image::make($request['image'])->save(public_path('uploads\featuredImages\homeFeatures\\').$featured_img);
       $this->validate($request,[
           'title'=>'required',
           'home_id'=>'required'
           ]);
       Features::create([
           'home_id'=>'14',
           'title'=>$request['title'],
            'image'=>$featured_img,
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
       if ($request->hasFile('image')) {
           $featured_img = time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
               $request['image'],';')))[1])[1];  
   
           \Image::make($request['image'])->save(public_path('uploads\featuredImages\homeFeatures\\').$featured_img);
       }
       else
       {
         $feature = Features::where('id',$id)->first();
         $image=$feature->image;
       }
       $this->validate($request,[
           'title'=>'required',
           'home_id'=>'required'
           ]);
       Features::where('id',$id)->upadte([
           'home_id'=>$request['home_id'],
           'title'=>$request['title'],
            'image'=>$image,
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
       $feature = Features::findOrFail($id);
       $feature->delete(); 
   }
  
}
