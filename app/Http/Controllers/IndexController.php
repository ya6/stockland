<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;
use App\Blog;
use App\Page;
use App\Portfolio;
use App\Logo;
use App\Contact;


class IndexController extends Controller
{
    public function index() {
    $pages = Page::all();
    $blogs = Blog::all();
    $portfolios = Portfolio::all();
    $categories = Portfolio::all()->unique('filter');
    $logo = Logo::all();
    $contact = Contact::all();


    return view('site.index', compact('pages', 'blogs', 'portfolios', 'categories', 'logo', 'contact'));
}

public function sendmail(Request $request){

    $messages = [   'required' => "Поле :attribute необходимо заполнить",
                    'email' => 'Укажите Ваш email', ];

    $contact = (object)$contact = request()->validate(
    [
        'name' => 'required | max:255',
        'email' => 'required | email',
        'text' => 'required',
    ], $messages );
   
   // dd('www', config('mail.to.address'));
   $result = Mail::to(config('mail.to.address'))->send(new \App\Mail\ContactMail($contact));

 return back()->with('messages','Сообщение отправлено!');
  //test
}

}
