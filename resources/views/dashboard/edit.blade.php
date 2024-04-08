@extends('layouts.base')

@section('content')

<div class="container">

    
    <div class="card mt-5">
    <div class="card-body bg-white">
        <form action="{{route('Update-offer')}}"  method="post">
            @csrf
            <div class="row mt-3 text-center">
            <input type="hidden" name="id" value="{{$products['id']}}">
                <div class="col-3">
                    <label for="Offername"> Offer Title</label>
                    <input type="text" name="Offername" class="form-control p-1" id="Offername" value="{{$products['Offername']}}">
                </div>
                <div class="col-5">
                    <label for="Decription"> Description</label>
                    <input type="text" name="Decription" class="form-control p-1" id="prname" value="{{$products['Decription']}}">
                </div>
                <div class="row"></div>
                <div class="col-2">
                    <label for="Price"> Price </label>
                    <input type="text" name="Price" class="form-control p-1" id="Price" value="{{$products['Price']}}">
                </div>
                <div class="col-5">
                    <label for="Image"> Image Address</label>
                    <input type="text" name="Image" class="form-control p-1" id="Image" value="{{$products['Image']}}">
                </div>
                
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </div>

        </form>


    </div>
    </div>
</div>

@endsection