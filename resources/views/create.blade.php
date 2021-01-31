@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
                  
                    
                     
                 
    <form method="POST" action="/user">
                        @csrf
                         <div class="form-group row">
                            <label for="Index_addr" class="col-md-4 col-form-label text-md-right">{{ __('Index_addr') }}</label>

                            <div class="col-md-6">
                                <input id="Index_addr" type="text" class="form-control @error('Index_addr') is-invalid @enderror" name="Index_addr" value="{{ old('Index_addr') }}" required autocomplete="name" autofocus>

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
                                <input id="Country" type="text" class="form-control @error('Country') is-invalid @enderror" name="Country" value="{{ old('Country') }}" required autocomplete="name" autofocus>

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
                                <input id="Housenum" type="text" class="form-control @error('Housenum') is-invalid @enderror" name="Housenum" value="{{ old('Housenum') }}" required autocomplete="name" autofocus>

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
                                <input id="City" type="text" class="form-control @error('City') is-invalid @enderror" name="City" value="{{ old('City') }}" required autocomplete="name" autofocus>

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
                                <input id="Street" type="text" class="form-control @error('Street') is-invalid @enderror" name="Street" value="{{ old('Street') }}" required autocomplete="name" autofocus>

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
                                <input id="Officenum" type="text" class="form-control @error('Officenum') is-invalid @enderror" name="Officenum" value="{{ old('Officenum') }}" required autocomplete="name" autofocus> 

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
                             

                  
    </div>
</div>
@endsection
