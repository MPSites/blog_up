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
                    @if (session('status'))
                        <p class="text-danger">{{ session('status') }}</p>
                    @endif
                    <div class="sidebar-heading">
                      <h2>Welcome</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="{{ route('login')}}" method="post">
                        @csrf
                        <div class="row">
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
                              <input name="password" type="password" id="password" placeholder="Your password" @error('password') class="border border-danger" @enderror>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <label for="remember">Remember me</label>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="remember" type="checkbox" id="remember">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Login</button>
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
                <div class="card-header org-bg form-h">Welcome</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login')}}">
                        @csrf
                        @if (session('status'))
                                
                                <div class="form-group row">
                                  <div class="col-md-6">
                                    <p class="text-danger">{{ session('status') }}</p>
                                  </div>
                                </div>
                        @endif
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn form-btn">
                                    Login
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