@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'class' => 'col-lg-7'
    ])

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Add Issued Book</div>

                    <form action="{{ route('issues.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-10">@include('issues.form')</div>
                    </form>


                </div>
            </div>
        </div>

    </div>


@endsection
