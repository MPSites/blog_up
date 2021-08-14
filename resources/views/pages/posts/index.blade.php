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
              <div id="posts" class="row">

                {{-- post --}}

                {{-- ISPIS IZ PHP ALI URADJENO SA FILTRACIJAMA IZ JAVASCRIPT-A SA AJAXOM --}}

                {{-- @if ($posts->count())
                    @foreach ($posts as $post)
                    <div class="col-lg-6">
                      <div class="blog-post">
                        <div class="blog-thumb">
                          <img src="assets/images/blog-thumb-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                          <span></span>
                          <a href="{{ route('post', $post->id)}}"><h4>{{ $post->title }}</h4></a>
                          <ul class="post-info">
                            <li><a href="#">{{ $post->user->name }}</a></li>
                            <li><a href="#">{{ $post->created_at->format('m-d-Y')}}</a></li>
                            <li><a href="#">{{ $post->comments->count() }} {{ Str::plural('comment', $post->comments->count()) }}</a></li>
                          </ul>
                          <p>{{ $post->body }}</p>
                          <div class="post-options">
                            <div class="row">
                              <div class="col-lg-12">
                                <ul class="post-tags">
                                  <li><i class="fa fa-tags"></i></li>
                                  <li><a href="#">Blog.Up</a></li>
                                  <li><a href="#">@2021</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                   
                    
                @else
                    <p>There are currently no posts</p>
                @endif --}}
                

                {{-- post --}}

                {{-- <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/blog-thumb-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4>Suspendisse et metus</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 22, 2020</a></li>
                        <li><a href="#">26 Comments</a></li>
                      </ul>
                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/blog-thumb-03.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4>Donec tincidunt leo</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 18, 2020</a></li>
                        <li><a href="#">42 Comments</a></li>
                      </ul>
                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/blog-thumb-04.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4>Mauris ac dolor ornare</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 16, 2020</a></li>
                        <li><a href="#">28 Comments</a></li>
                      </ul>
                      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                
                {{-- <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
            <div class="pagination-js">
              {{-- {{ $posts->links("pagination::bootstrap-4") }}  --}}
              
            </div>
            
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input id="search" type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      {{-- <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li>
                      </ul> --}}

                      <ul class="">
                        @foreach($categories as $category)
                          <li class="">
                            <input type="checkbox" name="categories" class="categories" id="{{ $category->id }}" value="{{ $category->name }}"/> {{ $category->name }}
                          </li>
                        @endforeach
                      </ul>
                    </br>
                        <ul class="">
                            
                            <li class="">
                                <input type="radio" id="desc" checked="checked" value="desc" name="btnDate" class="btnDate"/> Date: New to Old
                            </li>
                            <li class="">
                              <input type="radio" id="asc"  value="asc" name="btnDate" class="btnDate"/> Date: Old to New
                           </li>
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