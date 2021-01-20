@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Categorias

                            <a href="{{ url('admin/categories/create') }}" class="raise green btn right"><i class="fas fa-plus left"></i> Criar</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Posts</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->posts_count }}</td>
                                        <td>
                                            <a href="{{ url("/admin/categories/{$category->id}/edit") }}" class="btn-floating yellow darken-1 btn-small"><i class="material-icons">edit</i></a>
                                            <form action="{{ url("/admin/categories/{$category->id}") }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" name="" class="btn-floating red btn-small">
                                                <i class="material-icons red">delete</i>
                                              </button>
                                            </form>
                                            <!-- <a href="{{ url("/admin/categories/{$category->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn-floating red btn-small"><i class="material-icons">delete</i></a> -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No category available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $categories->links() !!}

                    </div>
                </div>
            </div>

        </div>
@endsection
