@extends('layouts.app')

@section('content')
    <div>
       
    
        @foreach($addresses as $address)

                <div class="col-md-4">
                    <p>{!! $address->Index_addr !!}</p> 
                     <p>{!! $address->Country !!}</p>
                     <p>{!! $address->City !!}</p>
                     <p>{!! $address->Street !!}</p>
                     <p>{!! $address->Housenum !!}</p>
                     <p>{!! $address->Officenum !!}</p>         
                   <p><a href="addresses/{{ $address->id}}" class="btn btn-default"></a> </p>
                   <p><a href="/addresses/{{$address->id}}/edit" class="btn btn-primary"></a> </p>
                    <form action="/addresses/{{$address->id}}" method="post">
                        {{csrf_field()}}
                        {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>

                </div>

        @endforeach
    </div>

@endsection
