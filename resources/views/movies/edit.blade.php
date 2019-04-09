@extends('layouts.app')

@section('content')
<div class="container">
    <form class="card" role="form" method="POST" action="{{ route('movies.update',$movie->id) }}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden"  id="crew_value" name="crew_value" value="">
        <input type="hidden"  id="cast_value"  name="cast_value"  value="">
        
        {{ csrf_field() }}
         <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                <h3 class="card-title">Editing Movie : {{ $movie->name }}</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Name</label>
                                      <input id="name" name="name" class="form-control" placeholder="Movie Name" value="{{$movie->name}}" type="text">
                                      </div>
                                  </div>

                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Year</label>
                                        <input  id="release_year" name="release_year" class="form-control" placeholder="Release Name" value="{{$movie->release_year}}" type="text">
                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label class="form-label">Ticket Price</label>
                                        <input  id="ticket_price" name="ticket_price" class="form-control" placeholder="Ticket Price" value="{{$movie->ticket_price}}" type="text">
                                      </div>
                                  </div>


                              <div class="col-sm-2 col-md-2">
                                  <div class="form-group">
                                    <label class="form-label">&nbsp;</label>
                                    <input  id="crew_btn" name="crew_btn" class="form-control btn btn-success add-more" placeholder="Release Name" value="Add" type="button">
                                  </div>
                              </div>



                </div>
        </div>
        
        <div class="card-footer text-right">
                <div class="d-flex">
                  <a href="{{ route('movies.index') }}" class="btn btn-link">Cancel</a>
                  <button type="submit" class="btn btn-primary ml-auto">Update</button>
                </div>
        </div>


            </div>
    </div>
</form>
</div>

