<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;



class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $logo = Logo::first();

        //todo move to model
        // $logo_path = public_path() .'\\assets\\img\\' . $logo->logo;                           
        // $logo_size =  filesize ($logo_path);
       
        return view('admin.pages.show_logo', compact('logo'));
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
        $logo = Logo::first();
        return view('admin.pages.edit_logo', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {  //dd($request->width);
        // dump($request);
        // dump($request->logofile);
      $attributes = $request->validate([
            'logofile'=> ' max:100  | image',
            'width'=> 'required | max:500',
        ]);
    
       
        if ($request->has('logofile') == true) {

            $logofile = $request->file('logofile');

            $logofile->move(public_path().'/assets/img', $logofile->getClientOriginalName());

            $logo->update([
               'logo' => $logofile -> getClientOriginalName(),
               'width' => $request->width,
            ]);      
        }
        else {
            $logo->update($attributes);}

        return back();
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
