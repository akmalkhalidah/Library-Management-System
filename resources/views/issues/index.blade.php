@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'class' => 'col-lg-7'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    </div>

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-xl-15 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">

                        <div class="text-right">
                    <a class="btn btn-success" href="{{ route('issues.create') }}">Add New Issued</a>
                </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')


                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="table-responsive">
                            <table class="table table-striped align-items-center">

                              <div class="container">
                                <th>Book Title</th>
                              <th>Issue Date</th>
                              <th>Due Date</th>
                              <th>Status</th>
                              <th>Action</th>
                                <th width="280px">Action</th>
                          </tr>
                          @foreach($issues as $issue)
                                <tr>

                                    <td>{{ $issue->book->title }}</td>
                                    <td>{{ $issue->issue_date }}</td>
                                    <td>{{ $issue->due_date }}</td>
                                    <td>{{ $issue->statusTitle }}</td>
                                    <td>


                              <form action="{{ route('issues.destroy',$issue->id) }}" method="POST">


                                               <a class="btn btn-primary" href="{{ route('issues.edit', $issue->id ) }}">Edit</a>

                                               @csrf
                                               @method('DELETE')

                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                       </td>
                                     </tr>

                                   @endforeach
                               </table></div>
                            @include('layouts.footers.auth')
                          </div>
                            @endsection
