@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
           
               

                <div class="card-body">
                   
                    
                     <table class="table table-hover table-botdered">
                    <thead>
                        <tr>
                             <th width="3">login</th>
                             <th width="3">fname</th>
                             <th width="3">lname</th>
                             <th width="3">date</th>
                             <th width="3">email</th>
                            <th width="3">Email</th>
                            <th width="3">password</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td></td>
                           <td>{{$value->login}}</td>
                            <td>{{$value->fname}}</td>
                            <td>{{$value->lname}}</td>
                            <td>{{$value->date}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->password}}</td>
                        </tr>
                         </tbody>
                </table>
                 @foreach($adresses as $key=>$value)
                 <table class="table table-hover table-botdered">
                    <thead>
                        <tr>
                             <th width="3">Index_addr</th>
                             <th width="3">Country</th>
                             <th width="3">City</th>
                             <th width="3">Street</th>
                             <th width="3">Housenum</th>
                            <th width="3">Email</th>
                            <th width="3">Officenum</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>{{$value->Index_addr}}</td>
                            <td>{{$value->Country}}</td>
                            <td>{{$value->City}}</td>
                             <td >{{$value->Street}}</td>
                              <td>{{$value->Housenum}}</td>
                              <td>{{$value->Officenum}}</td>
                                     
                         </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
