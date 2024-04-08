@extends('layouts.app')
@section('content')

<body style="background-image:url('/assets/images/elephan1.jpg');">
    
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row text-center d-flex justify-content-center mt-5">
             <div class="col-sm-3">
              <a href="{{route('show-items-offer')}}" style="text-decoration:none;">
                <div class="card">
                    <div class="card-body" style="background-color: rgb(221, 214, 147);">
                        <i class="bi bi-phone text-center" style="font-size: 60px;"></i>
                            <h4> Discover offers </h4>
                    </div>
                </div>
              </a>
             </div>
            
         
             <div class="col-sm-3">
                <a href="{{route('show-items-offer')}}" style="text-decoration:none;"></a>
                <div class="card">
                    <div class="card-body" style="background-color: rgb(148, 224, 243);">
                        <i class="bi bi-house text-center" style="font-size: 60px;"></i>
                            <h4> Discover the sights</h4>
                    </div>
                </div>
             </div>
             
        </div>

       
    </div>
</body>

@endsection