@extends('layouts.app.layout')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      
    </div>
    
    <!-- Banner Ends Here -->

    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow org-bg">
          
          <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Welcome back {{ $user->username }}!</h6>
            <small>Member since {{ $user->created_at->diffForHumans() }}</small>
          </div>
        </div>
  
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-bottom border-gray pb-2 mb-0">Recent posts</h6>

          @if($posts->count())
            @foreach ($posts as $post)
              <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <strong class="d-block text-gray-dark">#{{ $post->title }}</strong>
                  Newly added to Blog {{ $post->created_at->diffForHumans() }} <a href="{{ route('post', $post->id)}}"> Read More</a>
                </p>
              </div>
            @endforeach
              
          @else
            <div class="media text-muted pt-3">
              <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                
                This user doesn't have any posts yet
              </p>
            </div>
          @endif
          
          <small class="d-block text-right mt-3">
            <a href="{{ route('posts.create')}}" class="btn btn-primary">Add a new post</a>
          </small>
          @if (auth()->user()->role_id === 1)
            <a href="{{ route("admin") }}">Admin dashboard</a>
          @endif
        </div>
        <div class="">
          {{ $posts->links("pagination::bootstrap-4") }}
        </div>
      </main>    
    
@endsection