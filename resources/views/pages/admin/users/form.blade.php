<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>@if($action == "admin_user_update") Edit @else Create a new @endif</strong> User
        </div>
        <div class="card-body card-block">
            
            {{-- include message partials blade --}}

            @include('partials.success-message')
            @include('partials.error-message')

            <form action="@if($action == "admin_user_update") {{ route($action, $user) }} @else {{ route($action) }} @endif" method="post" class="form-horizontal">
                @csrf
                @if($action == "admin_user_update")
                    @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name ?? old('name') }}">
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="username" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username ?? old('username') }}">
                        @error('username')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email" class=" form-control-label">E-Mail</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email ?? old('email') }}">
                        @error('email')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="role_id" class=" form-control-label">Role</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="role_id" id="role_id" class="form-control  @error('role_id') is-invalid @enderror">
                            <option>Choose..</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id}}">{{ $role->name}}</option> 
                            @endforeach
                        </select>
                        @error('role_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>@if($action == "admin_user_update") Update @else Submit @endif 
                    </button>
                </div>
            </form>
        </div> 
    </div>
</div>