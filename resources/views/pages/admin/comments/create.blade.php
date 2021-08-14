@extends('layouts.admin.layout')

@section('content')
<!-- DATA TABLE-->
<section class="mt-3">
    <div class="container-fluid">
        
        @include('pages.admin.comments.form', ["action" => "comments.store"])

    </div>
</section>
<!-- END DATA TABLE-->
@endsection