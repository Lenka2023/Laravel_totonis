<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Address;
class UsersController extends Controller
{
    public function index()
    {
      $users = User::all();
      $addresses = Address::all();
       return view('index', ['user'=>$users, 'address'=>$addresses]);
    }
    public function show(User $user)
    {
    	 $users = User::all();
      $addresses = Address::all();
        return view('show', ['user'=>$user, 'address'=>$address]);
    }
    public function create()
    {
     $users = User::all();
      $addresses = Address::all();	
        return view("create", ['user'=>$users, 'address'=>$addresses]);
    }
	 public function store(request $request)
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
        return view("edit");
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





        