@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    
                <h1 class="text-center"> <i class="bi bi-receipt-cutoff text-success"></i> </h1>
                    <a href="{{route('GetInvoice')}}"><h4 class="text-dark text-center">Invoice</h4></a>
                </div>
            </div>
        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
        <div class="col">
            
        </div>
    </div>
</div>

@endsection