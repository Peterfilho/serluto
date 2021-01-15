@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Usuários
                        </h4>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Admin?</th>
                                    <th>Posts</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ ($user->is_admin)?'Sim':'Não' }}</td>
                                        <td>{{ $user->posts_count }}</td>
                                        <td>
                                            <a href="{{ url("/admin/users/{$user->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No user available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="center">
                          {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
