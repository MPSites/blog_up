<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
            <strong>Leave a new </strong> comment
        </div>
        
        {{-- include message partials blade --}}

        @include('partials.success-message')
        @include('partials.error-message')

        <div class="card-body card-block">
            <form action="{{ route($action, $post) }}" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="content" class=" form-control-label">Text</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="content" id="content" rows="9" class="form-control  @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>