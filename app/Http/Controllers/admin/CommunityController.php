<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Communities;

class CommunityController extends Controller
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
        Communities::create([
            'title'=>$request['title'],
            'address'=>$request['address'],
            'area'=>$request['area'],
            'subdivission'=>$request['subdivission'],
            'city'=>$request['city'],
            'county'=>$request['county'],
            'state'=>$request['state'],
            'zipcode'=>$request['zipcode'],
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
        return Communities::where('id',$id)->get()->first();
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
        Communities::where('id',$id)->update([
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
        $community = Communities::findOrFail($id);
        $community->delete(); 
    }
}
