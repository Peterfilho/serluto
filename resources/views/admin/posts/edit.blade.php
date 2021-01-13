@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Editar o Post

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Voltar</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($post, ['method' => 'PUT', 'url' => "/admin/posts/{$post->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('admin.posts._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
@endsection
