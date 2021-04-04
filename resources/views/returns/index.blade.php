@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'class' => 'col-lg-7'
    ])

    <div class="container-fluid mt--7">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">List of Returned Books</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th scope="col">Book Title</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Returned Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($issues as $issue)
                        <tr>
                            <th scope="row"> </th>
                            <td>{{ $issue->book->title }}</td>
                            <td>{{ $issue->issue_date->format('d M Y') }}</td>
                            <td>{{ $issue->due_date->format('d M Y') }}</td>
                            <td>{{ $issue->return_date->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    </div>
@endsection
