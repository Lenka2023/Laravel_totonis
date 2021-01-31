<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Address;
class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
       return view('show', compact('users'));
    }
    public function show(User $user)
    {
    	//$post= Post::find($id);
        return view('show', compact('user'));
    }
    public function create()
    {
    	
        return view("create");
    }
	 public function store()
    {
        //dd("store");
        $this->validate(request(), [
            'login' => 'required|min:4',
            'fname' => 'required|min:6',
            'lname' => 'required',
            'date' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        User::create(
            request(array('login', 'fname', 'lname', 'date', 'email', 'password'))
        );

        return redirect('/');
    }

	    public function edit(User $user, request $request)
    {
$user->login=$request->input('login');        
$user->fname=$request->input('fname');
$user->lname=$request->input('lname');
$user->date=$request->input('date');
$user->email=$request->input('email');
$user->password=$request->input('password');
        return view("edit", 'user'=>$user);
    }
     public function update(User $user)
    {
        //dd(request()->all());
        $this->validate(request(), [
           'login' => 'required|min:4',
            'fname' => 'required|min:6',
            'lname' => 'required',
            'date' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user->update(request(['login', 'fname', 'lname', 'date', 'email', 'password']));
        return redirect('/');
    }
    public function destroy(User $user){
         // dd("destroy");
        $user->delete();
        return redirect('/');
    }
}





        