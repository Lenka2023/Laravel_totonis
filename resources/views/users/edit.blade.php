@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
                  
                    
                      <form method="POST" action="{{ route('/user') }}">
                        @csrf
                         <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('login') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{{$user->login}}}" required autocomplete="name" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                          <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('fname') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{{$user->fname}}}" required autocomplete="name" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('lname') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{{$user->name}}}" required autocomplete="name" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{{$user->date}}}" required autocomplete="name" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{{$user->email}}}" required autocomplete="name" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{{$user->password}}}" required autocomplete="name" autofocus>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="btnSignup" id="btnSignup" class="btn btn-primary" >
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form> 


        @foreach($adresses as $key=>$value)                  
    <form method="POST" action="{{ route('create') }}">
                        @csrf
                         <div class="form-group row">
                            <label for="Index_addr" class="col-md-4 col-form-label text-md-right">{{ __('Index_addr') }}</label>

                            <div class="col-md-6">
                                <input id="Index_addr" type="text" class="form-control @error('Index_addr') is-invalid @enderror" name="Index_addr" value="{{{$user->Index_addr}}}" required autocomplete="name" autofocus>

                                @error('Index_addr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                          <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="Country" type="text" class="form-control @error('Country') is-invalid @enderror" name="Country" value="{{{$user->Country}}}" required autocomplete="name" autofocus>

                                @error('Country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="Housenum" class="col-md-4 col-form-label text-md-right">{{ __('Housenum') }}</label>

                            <div class="col-md-6">
                                <input id="Housenum" type="text" class="form-control @error('Housenum') is-invalid @enderror" name="Housenum" value="{{{$user->Housenum}}}" required autocomplete="name" autofocus>

                                @error('Housenum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="City" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="City" type="text" class="form-control @error('City') is-invalid @enderror" name="City" value="{{{$user->City}}}" required autocomplete="name" autofocus>

                                @error('City')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="Street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="Street" type="text" class="form-control @error('Street') is-invalid @enderror" name="Street" value="{{{$user->Street}}}" required autocomplete="name" autofocus>

                                @error('Street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Officenum" class="col-md-4 col-form-label text-md-right">{{ __('Officenum') }}</label>

                           <div class="col-md-6">
                                <input id="Officenum" type="text" class="form-control @error('Officenum') is-invalid @enderror" name="Officenum" value="{{{$user->Officenum}}}" required autocomplete="name" autofocus> 

                                @error('Officenum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="btnSignup" id="btnSignup" class="btn btn-primary" >
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form> 
                     @endforeach             
    </div>
</div>
@endsection
