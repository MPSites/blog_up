
<section class="mt-3">
    <div class="container-fluid">
        @if($data == "users")
            <h3 class="title-5 m-b-35">Users table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="{{ route("admin_user_create") }}">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add new user</button>
                    </a>
                </div>
            </div>
            @if ($users->count())
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>joined date</th>
                                <th>status</th>
                                <th>total posts</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                                {{-- Cekiranje id-a, da se admin ne izlistava u tabeli --}}

                                @if ($user->id === auth()->user()->id)
                                    
                                @else
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('m-d-Y') }}</td>
                                        <td>
                                            @if ($user->role_id === 1)
                                                Admin
                                            @else
                                                User
                                            @endif
                                        </td>
                                        <td>{{ $user->posts->count() }}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('admin_user_edit', $user) }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="#">
                                                    <form action="{{ route('admin_user_delete', $user)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach   
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $users->links("pagination::bootstrap-4") }}
                </div>
            @else
                There are currently no users
            @endif
            
        @elseif($data == "posts")
            <h3 class="title-5 m-b-35">Posts table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="{{ route("admin_post_create") }}">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add new post</button>
                    </a>
                </div>
            </div>
            @if ($posts->count())
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>author</th>
                                <th>added</th>
                                <th>category</th>
                                <th>total comments</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user->username }}</td>
                                    <td>{{ $post->created_at->format('m-d-Y') }}</td>
                                    <td>
                                        @foreach ($post->categories as $cat)
                                            {{ $cat->name}}
                                        @endforeach
                                    </td>
                                    <td>{{ $post->comments->count() }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('admin_post_edit', $post) }}">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <form action="{{ route('posts.delete', $post) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                            </a>
                                            <a href="{{ route('admin_comment_add', $post)}}">
                                                <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Comment">
                                                    <i class="zmdi zmdi-comment-more"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $posts->links("pagination::bootstrap-4") }}
                </div>
            @else
                <p>There are currently no posts</p>
            @endif
            
        @elseif($data == "categories")
            <h3 class="title-5 m-b-35">categories table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <a href="{{ route("cat_create") }}">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add category</button>
                    </a>
                </div>
            </div>
            @if ($categories->count())
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>added</th>
                                <th>total posts</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->created_at->format('m-d-Y') }}</td>
                                    <td>{{ $cat->posts->count() }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('cat_edit', $cat) }}">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <form action="{{ route('cat_delete', $cat)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $categories->links("pagination::bootstrap-4") }}
                </div>
            @else
                <p>There are currently no categories</p>
            @endif
            
        @elseif($data == "comments")
            <h3 class="title-5 m-b-35">comments table</h3>
            @if ($comments->count())
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>Post</th>
                                <th>added</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->post->title }}</td>
                                    <td>{{ $comment->created_at->format('m-d-Y') }}</td>
                                    <td>{{ $comment->user->username }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#">
                                                <form action="{{ route('comments_delete', $comment)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $comments->links("pagination::bootstrap-4") }}
                </div>
            @else
                There are currently no comments
            @endif
            
        @endif    
    </div>
</section>
