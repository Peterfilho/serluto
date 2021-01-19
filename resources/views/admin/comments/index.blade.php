@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Commetários

                            <a href="{{ url('admin/comments/create') }}" class="btn btn-default pull-right">Create New</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Commetário</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->post->title }}</td>
                                        <td>{{ $comment->body }}</td>
                                        <td>
                                          <form action="{{ url("/admin/comments/{$comment->id}") }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="" class="btn-floating red btn-small">
                                              <i class="material-icons red">delete</i>
                                            </button>
                                          </form>
                                            <!-- <a href="{{ url("/admin/comments/{$comment->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn-floating red btn-small"><i class="material-icons">delete</i></a> -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No comment available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="center">
                          {!! $comments->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
