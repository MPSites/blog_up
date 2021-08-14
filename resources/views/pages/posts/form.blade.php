<div class="card-header org-bg form-h">@if($action == "posts.update") Edit your post @else Create a new post! @endif</div>
    
<div class="card-body">
    @include('partials.success-message')
    @include('partials.error-message')
    <form action="@if($action == "posts.update") {{ route($action, $post) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">
        @csrf
        @if($action == "posts.update")
            @method('PUT')
        @endif
        <div class="form-group row">
            <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>

            <div class="col-md-8">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title ?? old('title') }}" autofocus>

                @error('title')
                    <span class="feedback-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="body" class="col-md-3 col-form-label text-md-right">Text</label>

            <div class="col-md-8">
                <textarea id="body" rows="5" class="form-add @error('body') border border-danger @enderror" name="body" >{{ $post->body ?? old('body') }}</textarea>

                @error('body')
                    <span class="feedback-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-3 col-form-label text-md-right">Category</label>

            <div class="col-md-8">
                <select class="form-add @error('category_id') border border-danger @enderror" id="cat" name="category_id">
                    <option>Choose..</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->name}}</option> 
                    @endforeach
                </select>

                @error('category_id')
                    <span class="feedback-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-3 col-form-label text-md-right">Image</label>

            <div class="col-md-8">
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                    <span class="feedback-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn form-btn">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>