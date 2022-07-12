@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a name="" id="" class="btn btn-primary" href="{{route('task.index')}}" role="button">Task Management System</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
