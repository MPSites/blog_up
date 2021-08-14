@extends('layouts.admin.layout')

@section('content')
<!-- DATA TABLE-->
<section class="mt-3">
    <div class="container-fluid">
        
        @include('pages.admin.users.form', ['action' => 'admin_user_store'])

    </div>
</section>
<!-- END DATA TABLE-->
@endsection