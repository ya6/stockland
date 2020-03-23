<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Page;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();

       return view( 'admin.portfolio.show_portfolio', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.portfolio.create_portfolio'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes =  $request->validate([
            'category' => 'required',
            'filter'=> 'required',
            'name'=> 'required',
            'image'=> 'required | image',
    
        ]);

       // dump($attributes);

        if( request()->has('image')== true ) {
            
            $image = $request->file('image');
            $image->move(public_path().'/assets/img/products', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }
       

        Portfolio::create($attributes);
        $portfolios = Portfolio::all();
        $page = Page::find('4');
        
       // dd(compact('portfolios','page'));
      
         return view('admin.portfolio.show_portfolio', compact('portfolios','page'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio =Portfolio::find($id);
     
        return view('admin.portfolio.edit_portfolio', compact('portfolio'));

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
        $attributes =  $request->validate([
            'category' => 'required',
            'filter'=> 'required',
            'name'=> 'required',
            'image'=> 'image',
    
        ]);

       // dump($attributes);

        if( request()->has('image')== true ) {
            
            $image = $request->file('image');
            $image->move(public_path().'/assets/img/products', $image->getClientOriginalName());
            
            $attributes['image'] = $image -> getClientOriginalName();
        }
       
        $portfolio = Portfolio::find($id);
        $portfolio->update($attributes);
        $portfolios = Portfolio::all();
        $page = Page::find('4');
        
       // dd(compact('portfolios','page'));
      
         return view('admin.portfolio.show_portfolio', compact('portfolios','page'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        $portfolios = Portfolio::all();
        $page = Page::find('4');
        
       
      
         return view('admin.portfolio.show_portfolio', compact('portfolios','page'));
    }
}
