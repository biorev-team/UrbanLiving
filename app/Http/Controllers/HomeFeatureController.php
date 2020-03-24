<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFeatureController extends Controller
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
        $featured_img = time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['image'],0,strpos(
            $request['image'],';')))[1])[1];  

        \Image::make($request['image'])->save(public_path('uploads\featuredImages\homeFeatures\\').$featured_img);
        $this->validate($request,[
            'title'=>'required',
            'home_id'=>'required'
            ]);
        Features::create([
            'home_id'=>$request['home_id'],
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
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('uploads');
            $image->move($destinationPath, $name);
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
