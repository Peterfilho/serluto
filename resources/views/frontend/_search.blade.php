<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}

            <div class="col-md-2 right">
                {!! Form::submit('Pesquisar', ['class' => 'raise btn blue']) !!}  
            </div>
            <div class="col-md-6 right">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Digite sua busca aqui..']) !!}
            </div>
    {!! Form::close() !!}
</div>
