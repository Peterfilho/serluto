@extends('layouts.app')

@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Criar categoria

                            <a href="{{ url('admin/categories') }}" class="raise btn orange right"><i class="fas fa-arrow-left left"></i> Voltar</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/categories', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('admin.categories._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="raise btn green">
                                        <i class="fas fa-plus left"></i> Criar Categoria
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
@endsection
