@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="panel">Dashboard</div>
                <hr>
                <div class="panel-">
                    <a href="{{url('ajaxproducts')}}" class="btn btn-warning">Create Post</a>
                    <hr>
                    <h3>Your Plog Posts</h3>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection