@extends('admin.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.post._form')
                </div>
            </div>
        </div>
    </div>
@endsection