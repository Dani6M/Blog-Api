@extends('layout')
@section('dashboard-content')
    <h1>Create product From</h1>
    @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden=true>&times;</span>
        </button>
    </div>
    @endif

    @if(Session::get('failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('failed')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden=true>&times;</span>
        </button>
    </div>
    @endif
    <form action="{{URL::to('post-product-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="productName">Product Name</label>
            <hr>
            <input type="text" class="form-control" id="productName"
             placeholder="Enter name" name="productName">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
@stop