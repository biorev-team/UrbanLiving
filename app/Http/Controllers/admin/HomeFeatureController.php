<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
Use App\Models\Features;
Use App\Models\Homes;
use App\Http\Controllers\Controller;
use Redirect;

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
          $image = $request->file('featured-image');
          $name = $image->getClientOriginalName();
          $destinationPath = public_path('/uploads');
          $image->move($destinationPath, $name);
            $this->validate($request,[
           'title'=>'required',
           ]);
       Features::create([
           'home_id'=>$request['home_id'],
           'title'=>$request['title'],
            'image'=>$name,
       ]);
       return Redirect::back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       return Features::where('id',$id)->get()->first();
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
       return Redirect::back();
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
