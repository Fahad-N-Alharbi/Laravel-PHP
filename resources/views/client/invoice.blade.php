@extends('layouts.app')
@section('content')

<body style="background-image:url('/assets/images/Background.png');">
<section class="py-5">
    <div class="container">
      <h1 class="text-center fw-bold">Invoice Details</h1>
      <div class="row gx-5">
        <aside class="col-lg-6">
          <h4 class="title text-dark mt-3">  {{$data->Offername}} </h4>
          <div class="row mt-5">
            <div class="col-2">
            <h5 class="fw-bold">{{$person}} person</h5>
            </div>
            <div class="col-2">
              <h5 class="fw-bold">{{$days}} days</h5>
            </div>
            <div class="col-5">
              <h5 class="text-success fw-bold">Total Price {{$total}} SAR</h5>
            </div>
          </div>
          <div class="row mt-3">
            <form action="{{ route('create-invoice', ['id' => $data->id, 'person' => $person, 'days' => $days]) }}" method="post">
              @csrf
            <div class="col-7">
              <label for="name" class="form-label fw-bold">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="col-7">
              <label for="phone" class="form-label fw-bold">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="">
            </div>
            <div class="col-7">
              <label for="email" class="form-label fw-bold">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-5">Buy</button>
        </form>
        </aside>


        <div class="col">
          <div class="border rounded-4 mb-3 d-flex justify-content-center mt-5 opacity-75 ">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" >
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="\assets\images\{{$data->Image}}"/>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

</body>
@endsection