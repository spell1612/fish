@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <table border=1>
                     <th>ID</th>
                     <th>Tag</th>
                     <th>About</th>
                     <th>Date/Time</th>
                     <th>Action</th>
                      @foreach($asdf as $a)
                          <tr>
                          <td>{{$a->id}}</td>
                          <td>{{$a->userid}}</td>
                          <td>{{$a->password}}</td>
                          <td>{{$a->created_at}}</td>
                           <td><a href ='/dbdel/{{$a->id}}'><input type=button value=Delete></a></td>
                           <!-- <td><a href ='/dbedit/{{$a->id}}'><input type=button value=Edit></a></td> -->
                          </tr>

                      @endforeach
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
