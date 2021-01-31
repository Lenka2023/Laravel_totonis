@extends('layouts.app')

@section('content')
    <div>
       
    
        @foreach($users as $user)

                <div class="col-md-4">
                    <p>{!! $user->login !!}</p> 
                     <p>{!! $user->fname !!}</p>
                     <p>{!! $user->lname !!}</p>
                     <p>{!! $user->date !!}</p>
                     <p>{!! $user->email !!}</p>
                     <p>{!! $user->password !!}</p>  
                      @endforeach
                      @foreach($addresses as $address)

                <div class="col-md-4">
                    <p>{!! $address->Index_addr !!}</p> 
                     <p>{!! $address->Country !!}</p>
                     <p>{!! $address->City !!}</p>
                     <p>{!! $address->Street !!}</p>
                     <p>{!! $address->Housenum !!}</p>
                     <p>{!! $address->Officenum !!}</p>             
                  

                </div>

        @endforeach
    </div>

@endsection
