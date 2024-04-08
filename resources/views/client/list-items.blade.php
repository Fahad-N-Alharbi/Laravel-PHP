@extends('layouts.app')

@section('content')

<body style="background-image:url('/assets/images/Background.png');">
<div class="container">
   <div class="row">
        @foreach($data as $items)
       
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
                    <a href="{{route('show-offer-details',['id'=>$items->id])}}" class="btn btn-primary">Details</a>     
                    
                     </div>
                     
              </div>
        </div>
        
        @endforeach
    </div>
</div>
</body>
@endsection