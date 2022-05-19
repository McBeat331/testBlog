@extends('admin.layouts.app', ['activePage' => 'profile', 'titlePage' => __('Create User Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('admin.post_category._form')
            </div>
        </div>
    </div>
</div>
@endsection