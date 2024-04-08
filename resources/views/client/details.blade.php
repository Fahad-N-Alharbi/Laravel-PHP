@extends('layouts.app')
@section('content')

<body style="background-image:url('/assets/images/Background.png');">
<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" >
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="\assets\images\{{$data->Image}}"/>
            </a>
          </div>
        
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
                {{$data->Offername}}
            </h4>
            <div class="d-flex flex-row my-3">

              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-2"></i>{{$data->Decription}}</span>
              
            </div>
  
            <div class="mb-3">
              <span class="h5">Price :{{$data->Price}} SAR </span>
              <span class="text-muted"> /1 person</span>
            </div>
  

  
            <div class="modal-body " >
              <form action="{{ route('new-invoice', ['id' => $data->id]) }}" method="post">
              @csrf                                    
              <div class="row">
                  <div class="col text-success">
                      <label for="people"> How many people </label>
                      <select class="form-select" id="person" name="person">
                        
                        <option class="text-dark" value="1" selected>1 person</option>
                        <option class="text-dark" value="2">2 people</option>
                        <option class="text-dark" value="3">3 people</option>
                        <option class="text-dark" value="4">4 people</option>
                        <option class="text-dark" value="5">5 people</option>
                        <option class="text-dark" value="6">6 people</option>
                        <option class="text-dark" value="7">7 people</option>
                        
                    </select>
                  </div>
                  <div class="col">
                      <label for="days"> how many days </label>
                      <select class="form-select" id="days" name="days">
                        
                        <option class="text-dark" value="1" selected>1 day</option>
                        <option class="text-dark" value="2">2 days</option>
                        <option class="text-dark" value="3">3 days</option>
                        <option class="text-dark" value="4">4 days</option>
                        <option class="text-dark" value="5">5 days</option>
                        <option class="text-dark" value="6">6 days</option>
                        <option class="text-dark" value="7">7 days</option>
                        
                    </select>

              </div>

              <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
              </form>


          </div>

  
         
        </main>
      </div>
    </div>
  </section>

  

</body>

@endsection