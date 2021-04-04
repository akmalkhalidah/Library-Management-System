  @extends('layouts.app', ['title' => __('User Profile')])

  @section('content')
      @include('users.partials.header', [
          'class' => 'col-lg-7'
      ])


      <div class="container-fluid mt--7">
        <div class="card-body">
          <div class="row">
              <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                      </div>

                      <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                          <div class="col-lg-12 margin-tb">


                          </div>
                        </div>


                            <div class="col-xl-15 order-xl-1">
                                <div class="card bg-secondary shadow">
                                    <div class="card-header bg-white border-0">
                                      <div class="pull-left">
                                        <h2> Add New Book</h2>
                                      </div>
                                    </div>
                                    <div class="card-body">

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

                                      <form action="{{ route('books.store') }}" method="POST">
                                          @csrf


                                           <div class="form-row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>ISBN NO:</strong>
                                                      <input type="number" name="isbn" class="form-control" placeholder="ISBN NO">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Book Title:</strong>
                                                      <input type="text" name="title" class="form-control" placeholder="Book Title">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Book Type:</strong>
                                                      <input type="text" name="type" class="form-control" placeholder="Book Type">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Author Name:</strong>
                                                      <input type="text" name="name" class="form-control" placeholder="Author Name">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Quantity:</strong>
                                                      <input type="number" name="qty" class="form-control" placeholder="Quantity">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Purchase Date:</strong>
                                                      <input type="date" name="date" class="form-control" id="datepicker" placeholder="Purchase Date">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Edition:</strong>
                                                      <input type="number" name="edition" class="form-control" placeholder="Edition">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Price:</strong>
                                                      <input type="float" name="price" class="form-control" placeholder="Price">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Pages:</strong>
                                                      <input type="number" name="pages" class="form-control" placeholder="Pages">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                      <strong>Publisher:</strong>
                                                      <input type="text" name="publisher" class="form-control" placeholder="Publisher">
                                                  </div>
                                              </div>

                                              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                      <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>

                                              </div>
              </form></div>

                              @include('layouts.footers.auth')
                            </div>
                              @endsection

                              <script>
                                $( function() {
                                  $( "#datepicker" ).datepicker();
                                } );
                                </script>
