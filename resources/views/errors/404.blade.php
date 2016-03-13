@extends('welcome') 

@section('breakcrumbs')
<div class="download">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <span>Error 404.</span>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('content')
    <div class="container content-sm">  
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">404</span>
                    <span>That’s an error!</span>
                    <p>The requested URL was not found on this server. That’s all we know.</p>
                    <a class="btn-u btn-bordered" href="{{url('')}}">Back Home</a>
                </div>
            </div>
        </div>
        </div>
@endsection