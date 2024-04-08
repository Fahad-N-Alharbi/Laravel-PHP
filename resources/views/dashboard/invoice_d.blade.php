@extends('layouts.base')

@section('content')

<div class="container mt-5">
 <div class="card">
    <div class="card-body">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Person</th>
        <th>Days</th>
        <th>Total Price</th>
        <th>Offer ID</th>
      </tr>
    </thead>
    @foreach($data as $items)
    <tbody>
      <tr> 
        <td>{{$items->id}}</td>
        <td>{{$items->name}}</td>
        <td>{{$items->Phone}}</td>
        <td>{{$items->Email}}</td>
        <td>{{$items->Person}}</td>
        <td>{{$items->Days}}</td>
        <td>{{$items->Total_Price}}</td>
        <td>{{$items->Offerid}}</td>
        
      </tr>@endforeach

    </tbody>
  </table>
    </div>
 </div>
</div>


@endsection