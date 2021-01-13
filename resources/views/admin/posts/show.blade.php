@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            {{ $post->title }} <small>Por {{ $post->user->name }}</small>

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Voltar</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>

                        <p><strong>Categoria: </strong>{{ $post->category->name }}</p>
                        <p><strong>Tags: </strong>{{ $post->tags->implode('name', ', ') }}</p>
                    </div>
                </div>
            </div>

        </div>
@endsection
