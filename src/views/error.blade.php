@extends('self-updater::layout')

@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-danger">
                <div class="panel-heading">Oops! There is an error.</div>
                <div class="panel-body">{{$error}}</div>
            </div>
        </div>
    </div>
@endsection