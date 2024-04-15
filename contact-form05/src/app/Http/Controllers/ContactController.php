<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Todo;


class ContactController extends Controller
{
    //
    public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
{
$contact = $request->only(['name', 'email', 'tel', 'content']);
   return view('confirm', compact('contact'));
  }
  public function store(ContactRequest $request)

{
     // ここに処理を記述していきます
     $contact = $request->only(['name', 'email', 'tel', 'content']);
     Contact::create($contact);
     return view('thanks');
}

public function admin()
{
   // $todos = Todo::all();
        //return view('admin');
        return view('admin');
}
public function store1(Request $request)
     {
         $todo = $request->only(['content']);
         Todo::create($todo);

         return redirect('/admin');
     }

     public function register()
   {
       return view('register');
   }

   
     public function login()
   {
       return view('login');
   }
}
