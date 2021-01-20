@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Tags

                            <a href="{{ url('admin/tags/create') }}" class="raise btn green right"><i class="fas fa-plus left"></i>Criar TAG</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                          <!-- <button class="btn-floating red btn-small" data-id="{{ $tag->id }}" data-action="{{ url("/admin/tags/{$tag->id}") }}" onclick="deleteConfirmation({{$tag->id}})">
                                            <i class="material-icons red">delete</i>
                                          </button> -->
                                            <a href="{{ url("/admin/tags/{$tag->id}/edit") }}" class="btn-floating yellow darken-1 btn-small"><i class="material-icons">edit</i></a>
                                            <form action="{{ url("/admin/tags/{$tag->id}") }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" name="" class="btn-floating red btn-small">
                                                <i class="material-icons red">delete</i>
                                              </button>
                                            </form>
                                            <!-- <a href="{{ url("/admin/tags/{$tag->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn-floating red btn-small"><i class="material-icons">delete</i></a> -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Sem TAG's cadastradas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="center">
                          {!! $tags->links() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
