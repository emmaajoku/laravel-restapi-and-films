@extends('layouts.app')

@section('content')
<div class="container">
     <form class="card" role="form" method="POST" action="{{ route('movies.store') }}">
        {{ csrf_field() }}
        <input type="hidden"  id="crew_value" name="crew_value" value="">
        <input type="hidden"  id="cast_value"  name="cast_value"  value="">
        
        {{ csrf_field() }}
         <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                <h3 class="card-title">Create a new Film </h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Name</label>
                                      <input id="name" name="name" class="form-control" placeholder="Films Name" value="" type="text">
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Year</label>
                                        <input  id="release_year" name="release_year" class="form-control" placeholder="Release Name" value="" type="text">
                                      </div>
                                  </div>
                                 <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Ticket Price</label>
                                        <input  id="ticket_price" name="ticket_price" class="form-control" placeholder="Ticket Price" value="" type="text">
                                      </div>
                                  </div>

                                <div class="col-sm-10 col-md-6">
                                    <div class="form-group">
                                      <label class="form-label">Description</label>
                                      <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description goes here"></textarea>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label class="form-label">Genres in (command separated)</label>

                                        <input  id="genres" name="genres" class="form-control" placeholder="Genres goes here" value="" type="text">
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                      <label class="form-label">Image URL</label>
                                      <input  id="image" name="image" class="form-control" placeholder="Movie Image" value="" type="text">
                                    
                                    </div>
                              </div>


                                    
                </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('movies.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </div>
        </div>


            </div>
    </div>
</form>
</div>


@endsection

