<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Page;
use App\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
         return view('admin/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {//dd( compact('page'));
        return view('admin/pages/show_'.$page->alias, compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    { //return $page;
        return view('admin/pages/edit_'.$page->alias, compact('page'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
      // dump($request);

       $attributes =  $request->validate([
        'logo'=> '  max:100  | image',
        'image'=> '  max:500  | image',
        'title'=> '  max:255  ',
        'text'=> '  max:1000',
        'name'=> ' max:255 ',

    ]);
      // dd($attributes);
      
        if( request()->has('logo')== true ) {
            
            $logo = $request->file('logo');
            $logo->move(public_path().'/assets/img', $logo->getClientOriginalName());
            
            $attributes['logo'] = $logo -> getClientOriginalName();
        }

        if ( request()->has('image') == true) {
         
            $image = $request->file('image');          
            $image->move(public_path().'/assets/img', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
           
        }



        $page->update($attributes);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
