@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Magazine</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('magazines.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('magazines.update', $magazines) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Type:</strong>
                   <input type="text" name="type" class="form-control" value="{{ $magazines->type }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Name:</strong>
                   <input type="text" name="name" class="form-control" value="{{ $magazines->name }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Date of Receipt:</strong>
                   <input type="date" name="dateReceipt" class="form-control" id="datepicker"  value="{{ $magazines->dateReceipt }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Date of Published:</strong>
                   <input type="date" name="datePublished" class="form-control" id="datepicker" value="{{ $magazines->datePublished }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Pages:</strong>
                   <input type="number" name="pages" class="form-control" value="{{ $magazines->pages }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Price:</strong>
                   <input type="decimal" name="price" class="form-control" value="{{ $magazines->price }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Publisher:</strong>
                   <input type="text" name="publisher" class="form-control" value="{{ $magazines->publisher }}">
               </div>
           </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
