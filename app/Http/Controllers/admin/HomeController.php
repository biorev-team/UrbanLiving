<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;                        
use App\Http\Controllers\Controller;
use App\Models\Homes;
use App\Models\HomeCommunity;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ='';
        $homes = Homes::all();
        foreach($homes as $ky => $home )
        {
            $data .=' <div class="col-md-4" >
            <div class="card">
              <img class="card-img-top" src="/urbanliving/public/uploads/homes/'.$home->featured_image.'">
              <div class="card-body">
              <h5 class="card-title" style="font-size: 15px;">'.$home->title.'</h5>
                 <br><br>
                 <div class="row">
                <div class="col-md-3">
                <a type="button" href="/admin/home/manage/'.$home->id.'" style="font-size: 15px;" class="btn btn-success">Manage</a>
                 </div>
                 <div class="col-md-4">   
                 <button type ="button" onclick="deleteHome('.$home->id.')" style="font-size: 15px;" class="btn btn-danger">Delete</button>
                </div>
                </div>
                </div>
            </div>
          </div>';
        } 
        return $data ;
    }
     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $gallery=[];
        $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
            $request['featured-image'],';')))[1])[1];  

        \Image::make($request['featured-image'])->save(public_path('uploads\homes\\').$featured_img);
       
        // $files = $request->file('gallery');
        // foreach($files as $file)
        // {
        //     $extension = $file->getClientOriginalExtension(); 
        //     $filename =time().'.'.$extension;
        //     $file->move(public_path('uploads'), $filename);
        //     array_push($gallery, $filename);
        // }
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'meta-description'=>'required',
            'meta-title'=>'required',
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
            'gallery'=>'a.jpg',
            // 'gallery'=>implode(',', $gallery),
            'slug'=>Str::slug($request['title'], '-'),
            'meta_description'=>$request['meta-description'],
            'meta_title'=>$request['meta-title'],
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
        // if ($request->hasFile('featured-image')) {
            $featured_img =  time().explode('.',$request['featured-image-name'])[0].'.' . explode('/', explode(':',substr($request['featured-image'],0,strpos(
                $request['featured-image'],';')))[1])[1];  
    
            \Image::make($request['featured-image'])->save(public_path('uploads\homes\\').$featured_img);
           
        // }
        // else{
        //     $featured_image_name=$home->featured_image;
        // }
        
        // $gallery = explode(',', $home->gallery);
        // if($request->file('gallery'))
        // {
        //     $files = $request->file('gallery');
        //     foreach($files as $file)
        //     {
        //         $extension = $file->getClientOriginalExtension(); 
        //         $filename =time().'.'.$extension;
        //         $file->move(public_path('uploads'), $filename);
        //         array_push($gallery, $filename);
        //     }
        //     $gname=implode(',', $gallery);
        // }
        // else
        // {
        //     $gname=$home->gallery;
        // }

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'bedroom'=>'required',
            'bathroom'=>'required',
            'garage'=>'required',
            'stories'=>'required',
            'mls'=>'required',
            'area'=>'required',
            'meta-description'=>'required',
            'meta-title'=>'required',

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
            'featured_image'=>$featured_img,
            'gallery'=>'anjkfd.jpg',
            'slug'=>Str::slug($request['title'], '-'),
            'meta_description'=>$request['meta-description'],
            'meta_title'=>$request['meta-title'],
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
