<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>@if($action == "cat_update") Edit @else Create a new @endif</strong> Category
        </div>
        <div class="card-body card-block">
            
            {{-- include message partials blade --}}

            @include('partials.success-message')
            @include('partials.error-message')

            <form action="@if($action == "cat_update") {{ route($action, $category) }} @else {{ route($action) }} @endif" method="post" class="form-horizontal">
                @csrf
                @if($action == "cat_update")
                    @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name ?? old('name') }}">
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>@if($action == "cat_update") Update @else Submit @endif 
                    </button>
                </div>
            </form>
        </div> 
    </div>
</div>