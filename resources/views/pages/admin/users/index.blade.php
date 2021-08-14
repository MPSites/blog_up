@extends('layouts.admin.layout')

@section('content')
<!-- DATA TABLE-->
<section class="mt-3">
    <div class="container-fluid">
        
        @include('pages.admin.table', ["data" => "users"])

    </div>
</section>
<!-- END DATA TABLE-->
@endsection