@extends('layouts.admin.layout')

@section('content')
<!-- DATA TABLE-->
<section class="mt-3">
    <div class="container-fluid">
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <strong>Account</strong> Details:
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Name:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{ auth()->user()->name }}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Username:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{ auth()->user()->username }}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">E-Mail:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div> 
                <div class="card-footer">
                    <a href="{{ route('admin_user_edit', auth()->user()) }}">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update details
                        </button>
                    </a> 
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END DATA TABLE-->
@endsection