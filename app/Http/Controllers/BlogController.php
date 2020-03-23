<?php

namespace App\Http\Controllers;

use App\Page;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //dd('index');
        $_page = Page::where(['id'=>3])->get();
        $page = $_page[0];
        $blogs = Blog::all();
       // dd( $page, $blogs );
        return view('admin.services.show_blogs', compact('page', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  dump('create blog');

        return view('admin.services.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       // dump($request);
          
        $attributes =  $request->validate([
            'icon' => 'image',
            'name'=> 'required',
            'alias'=> 'required',
            'text'=> 'required',
    
        ]);
       
         // dump($attributes);

           if( request()->has('icon')== true ) {
            
            $icon = $request->file('icon');
            $icon->move(public_path().'/assets/img', $icon->getClientOriginalName());
            
            $attributes['icon'] = $icon -> getClientOriginalName();
        }
      
     //   dump($attributes);
        Blog::create($attributes);
        $blogs = Blog::all();
        $page = Page::find('3');
      
         return view('admin.services.show_blogs', compact('blogs','page'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog =Blog::find($id);
     
        return view('admin.services.edit_blog', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
       // dd($blog, $id);
       $attributes =  $request->validate([
        'icon' => 'required | image',
        'name'=> 'required',
        'alias'=> 'required',
        'text'=> 'required',

    ]);

    if( request()->has('icon')== true ) {
            
        $icon = $request->file('icon');
        $icon->move(public_path().'/assets/img', $icon->getClientOriginalName());
        
        $attributes['icon'] = $icon -> getClientOriginalName();
    }
  
    
    $blog = Blog::find($id);
    $blog->update($attributes);
    
    $blogs = Blog::all();
    $page = Page::find('3');

    

     return view('admin.services.show_blogs', compact('blogs','page'));

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
       
       $blog = Blog::find($id);
       $blog->delete();

        $blogs = Blog::all();
        $page = Page::find('3');

    //dd($blogs);
    //dd(compact('blogs','page'));

     return view('admin.services.show_blogs', compact('blogs','page'));
    }
}
