@extends('issues.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Issue</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('issues.index') }}">Back</a>
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

    <form action="{{ route('issues.store') }}" method="POST">
        @csrf

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Issued Date:</strong>
                    <input type="date" name="issue_date" class="form-control" id="datepicker"  placeholder="Date of Receipt">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Due date:</strong>
                    <input type="date" name="due_date" class="form-control" id="datepicker"  placeholder="Date Published">
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title:</strong>
                <input type="text" name="book_id" class="form-control" placeholder="Publisher">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Returned Date:</strong>
                <input type="date" name="return_date" class="form-control" id="datepicker"  placeholder="Date of Receipt">
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Publisher">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </div>
