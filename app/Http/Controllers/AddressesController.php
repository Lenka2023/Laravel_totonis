<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Address;
class AddressesController extends Controller
{
    public function index()
    {
      $address = Address::all();
       return view('', compact('addresses'));
    }
    public function show(Address $address)
    {
    	//$post= Post::find($id);
        return view('show', compact('address'));
    }
    public function create()
    {
    	
        return view("create");
    }
	 public function store()
    {
        //dd("store");
        $this->validate(request(), [
           'Index_addr' => 'required',
            'Country' => 'required',
            'City' => 'required',
            'Street' => 'required',
            'Housenum' => 'required',
            'Officenum',
        ]);

        Address::create(
            request(array('Index_addr', 'Country', 'City', 'Street', 'Housenum', 'Officenum'))
        );

        return redirect('/');
    }

	    public function edit(Address $address, request $request)
    {
$address->Index_addr=$request->input('Index_addr');        
$address->Country=$request->input('Country');
$address->City=$request->input('City');
$address->Street=$request->input('Street');
$address->Housenum=$request->input('Housenum');
$address->Officenum=$request->input('Officenum');
        return view("edit", 'address'=>$address);
    }
     public function update(Address $address)
    {
        //dd(request()->all());
        $this->validate(request(), [
           'Index_addr' => 'required',
            'Country' => 'required',
            'City' => 'required',
            'Street' => 'required',
            'Housenum' => 'required',
            'Officenum',
        ]);
        $address->update(request(['Index_addr', 'Country', 'City', 'Street', 'Housenum', 'Officenum']));
        return redirect('/');
    }
    public function destroy(Address $address){
         // dd("destroy");
        $address->delete();
        return redirect('/');
    }
}




