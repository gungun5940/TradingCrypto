@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> TRADING
                <!-- <div class="container">
  <div class="row align-items-start">
    <a href="#" class="btn btn-sm btn-outline-success" style="margin-right: 10px;">BTC</a>
    <a href="#" class="btn btn-sm btn-outline-success" style="margin-right: 10px;">BTC</a>
    <a href="#" class="btn btn-sm btn-outline-success" style="margin-right: 10px;">BTC</a>
  </div>
  </div> -->
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
