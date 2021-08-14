@extends('layouts.app.layout')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      
    </div>
    
    <!-- Banner Ends Here -->

    


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('assets/images/')}}/{{ $post->image }}" alt="{{ $post->title }}">
                    </div>
                    <div class="down-content">
                      <span>
                        @foreach ($post->categories as $category)
                            {{ $category->name }}
                        @endforeach
                      </span>
                      <a href="#"><h4>{{ $post->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{ $post->user->username }}</a></li>
                        <li><a href="#">{{ $post->created_at->diffForHumans() }}</a></li>
                        <li><a href="#">{{ $post->comments->count() }} {{ Str::plural('comment', $post->comments->count()) }}</a></li>
                      </ul>
                      <p>{{ $post->body }}</p>
                      
                    </div>
                    <br/>
                    
                    @can('delete', $post)
                      <div class="row mx-1">
                        <form action="{{ route('posts.delete', $post) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                      </div>
                    @endcan
                      
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>{{ $post->comments->count() }} {{ Str::plural('comment', $post->comments->count()) }}</h2>
                    </div>
                    <div class="content">
                      <ul>
                          @if ($comments->count() != null)
                            @foreach ($comments as $comment)
                              <li>
                                <div class="right-content">
                                  <h4>{{$comment->user->username}}<span>{{ $comment->created_at->diffForHumans() }}</span></h4>
                                  <p>{{$comment->content}} </p>
                                </div>
                              </li>
                            @endforeach
                            <div>
                              {{ $comments->links("pagination::bootstrap-4") }}
                            </div>
                          @else
                            <li>
                              <div class="right-content">
                                <p></p>
                              </div>
                            </li>
                          @endif
                          
                        
                        {{-- <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 20, 2020</span></h4>
                            <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                          </div>
                        </li> --}}
                        {{-- <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-03.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                            <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                          </div>
                        </li> --}}
                        {{-- <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 22, 2020</span></h4>
                            <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                          </div>
                        </li> --}}
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  @auth
                    <div class="sidebar-item submit-comment">
                      <div class="sidebar-heading">
                        <h2>Your comment</h2>
                      </div>
                      <div class="content">
                        <form id="comment" action="{{ route('comments.store', $post) }}" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="content" rows="6" id="message" @error('content') class="border border-danger" @enderror placeholder="Type your comment" ></textarea>
                              </fieldset>
                              @error('content')
                                  <span class="feedback-error" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  @endauth
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($posts as $post)
                          <li><a href="{{ route('post', $post->id)}}">
                            <h5>{{ $post->title }}</h5>
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                          </a></li>
                        @endforeach
                        
                        {{-- <li><a href="post-details.html">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li> --}}
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
    
