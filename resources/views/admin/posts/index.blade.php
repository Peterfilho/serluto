@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts
                            <a href="{{ url('admin/posts/create') }}" class="btn right"><i class="material-icons">add</i> Criar Post</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table highlight responsive-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->body, 60) }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->tags->implode('name', ', ') }}</td>
                                        <td>{{ $post->published }}</td>
                                        <td>
                                          <div class="row">
                                              @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'public';
                                                        $color = 'green';
                                                      } else {
                                                        $label = 'public_off';
                                                        $color = 'orange';
                                                      }
                                              @endphp
                                              <!-- <a class="btn-floating green btn-small"
                                                  href="{{ url("/admin/posts/{$post->id}/publish?method=put") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">
                                                    <i class="material-icons {{ $color }}">{{ $label }}</i>
                                              </a> -->

                                              <form action="{{ url("/admin/posts/{$post->id}/publish") }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" name="" class="btn-floating {{ $color }} btn-small">
                                                  <i class="material-icons {{ $color }}">{{ $label }}</i>
                                                </button>
                                              </form>


                                          @endif
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn-floating yellow darken-1 btn-small"><i class="material-icons">create</i></a>
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
                                          </div>
                                        </td>

                                        <!--
                                            @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Draft';
                                                    } else {
                                                        $label = 'Publish';
                                                    }
                                                @endphp
                                                <a href="{{ url("/admin/posts/{$post->id}/publish") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            @endif
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-success">Show</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-xs btn-info">Edit</a>
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a> -->

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $posts->links() !!}

                    </div>
                </div>
            </div>

        </div>
@endsection
