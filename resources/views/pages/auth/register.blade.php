@extends('layouts.app.layout')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      
    </div>
    
    <!-- Banner Ends Here -->
    {{-- <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Become a member</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="{{ route('register')}}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              @error('name')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              <input name="name" type="text" id="name" placeholder="Your name" @error('name') class="border border-danger" @enderror value="{{ old('name') }}">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              @error('email')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              <input name="email" type="email" id="email" placeholder="Your email" @error('email') class="border border-danger" @enderror value="{{ old('email') }}">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              @error('password')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              <input name="password" type="password" id="password" placeholder="Choose a password" @error('password') class="border border-danger" @enderror>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="password_confirmation" type="password" id="password_confirmation" placeholder="Repeat password">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Register</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section> --}}

    <div class="container mr-top-2">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header org-bg form-h">Register</div>
  
                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf
  
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
  
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                              <div class="col-md-6">
                                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                  @error('username')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
  
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
  
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
  
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
  
                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>
  
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn form-btn">
                                      Register
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection