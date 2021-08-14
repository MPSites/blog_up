<div class="col-lg-7">
    <div class="card">
        <div class="card-header">
            <strong>@if($action == "posts.update") Edit @else Create a new @endif</strong> post
        </div>

        {{-- include message partials blade --}}

        @include('partials.success-message')
        @include('partials.error-message')

        <div class="card-body card-block">
            <form action="@if($action == "posts.update") {{ route($action, $post) }} @else {{ route($action) }} @endif" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @if($action == "posts.update")
                    @method('PUT')
                @endif
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="title" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{ $post->title ?? old('title') }}">
                        @error('title')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="body" class=" form-control-label">Text</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="body" id="body" rows="9" class="form-control  @error('body') is-invalid @enderror">{{ $post->body ?? old('body') }}</textarea>
                        @error('body')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="category_id" class=" form-control-label">Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="category_id" id="category_id" class="form-control  @error('category_id') is-invalid @enderror">
                            <option>Choose..</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id}}">{{ $category->name}}</option> 
                            @endforeach
                        </select>
                        @error('category')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="image" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="image" name="image" class="form-control-file  @error('image') is-invalid @enderror">
                        @error('image')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i>@if($action == "posts.update") Update @else Submit @endif 
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>