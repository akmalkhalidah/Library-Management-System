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
                <h2>Edit Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
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

    <form action="{{ route('books.update', $books) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>ISBN NO:</strong>
                   <input type="number" name="isbn" class="form-control"  value="{{ $books->isbn }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Book Title:</strong>
                   <input type="text" name="title" class="form-control" value="{{ $books->title }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Book Type:</strong>
                   <input type="text" name="type" class="form-control" value="{{ $books->type }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Author Name:</strong>
                   <input type="text" name="name" class="form-control" value="{{ $books->name }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Quantity:</strong>
                   <input type="number" name="qty" class="form-control" value="{{ $books->qty }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Purchase Date:</strong>
                   <input type="date" name="date" class="form-control" id="datepicker" value="{{ $books->date }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Edition:</strong>
                   <input type="number" name="edition" class="form-control" value="{{ $books->edition }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Price:</strong>
                   <input type="float" name="price" class="form-control" value="{{ $books->price }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Pages:</strong>
                   <input type="number" name="pages" class="form-control" value="{{ $books->pages }}">
               </div>
           </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Publisher:</strong>
                   <input type="text" name="publisher" class="form-control" value="{{ $books->publisher }}">
               </div>
           </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
