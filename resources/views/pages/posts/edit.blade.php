@extends('layouts.app.layout')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      
    </div>
    
    <!-- Banner Ends Here -->

      <div class="container mr-top-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                    {{-- PROSTOR ZA FORMU --}} 
                    @include('pages.posts.form', ["action" => "posts.update"])
               
                </div>
            </div>
        </div>
    </div>

    
@endsection