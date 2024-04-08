@extends('layouts.base')

@section('content')
<div class="container ">
    <div class="row mt-5">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Add New Offer
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Add New Offer</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                 <div class="modal-body " >
                                    <form action="{{route('create-offer')}}" method="post">
                                    @csrf                                    
                                    <div class="row">
                                        <div class="col ">
                                            <label for="color"> Title offer </label>
                                        <input type="text"  id="Offername" class="form-control @error('Title offer') is-invalid @enderror" value="{{ old('Offername') }}" name="Offername">
                                        </div>
                                        <div class="col">
                                            <label for="color"> Description </label>
                                        <input type="text" id="Decription" class="form-control @error('Title offer') is-invalid @enderror" value="{{ old('Decription') }}" name="Decription">

                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="color"> Price </label>
                                        <input type="text"  id="Price" class="form-control @error('Price') is-invalid @enderror" value="{{ old('Price') }}" name="Price">
                                        </div>
                                        <div class="col">
                                            <label for="color"> Image Address </label>
                                        <input type="text" id="Image" class="form-control @error('Image') is-invalid @enderror" value="{{ old('Image') }}" name="Image">
                                    
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-2 mt-3">
                                        <button type="submit "class="btn btn-info mt-0">Save</button>
                                        </div>
                                        <div class="col-sm-8 mt-3 ">
                                        <button type="button" class="btn btn-secondary mt-0" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    
                                    </div>

                                    
                                    </form>
                                </div>

                    </div>
                </div>
        </div>
        
    </div>
    </div>


    <div class="row">
        @foreach($products as $items)
       
        <div class="col mt-3">

            <div class="card" style="width: 18rem;">
                <img src="\assets\images\{{$items->Image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$items->Offername}}</h5>
                  <p class="card-text text-dark">{{$items->Decription}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Start Price : {{$items->Price}} SAR</li>

                </ul>
                <div class="card-body">
                        <td> <a href="{{route('edit-offer',['id'=>$items->id])}}"><i class="fa fa-edit text-success" aria-hidden="true"></i></a></td>
                        <td><a href="{{route('del-offer',['id'=>$items->id])}}"><i class="fa fa-trash text-danger mx-5 " aria-hidden="true"></i></a></td>
                    
                </div>
                <div></div>
              </div>
        </div>
        
        @endforeach
    </div>



    
    
  

@endsection