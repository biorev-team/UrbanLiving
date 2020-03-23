<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $return ='';
        $pages = Pages::all();
        foreach($pages as $ky => $page )
        {
            $return .= '<tr><td>'.(++$ky).'</td><td>'.$page->title.'</td><td>'.$page->meta_title.'</td><td>'.$page->meta_description.'</td>
            <td><img style="width:50px; height:50px;" src = "/'.$page->featured_image.'"></td>
            <td>
            <span><a href="pages/edit/'.$page->id.'" style="text-decoration:none;color:#212529;"><i class="far fa-edit"></i></a></span>
             <span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-file"></i></a></span>
          </td>
            </tr>';
        } 
        return $return ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
