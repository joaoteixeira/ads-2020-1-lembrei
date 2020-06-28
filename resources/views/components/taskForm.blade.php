{!! Form::open(['route' => 'task.store', 'method' => 'POST'])!!}

    {{ Form::label('name', 'Nome do Lembrete', ['class' => 'control-label']) }}
    {{Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Novo Lembrete'])}}

    {{ Form::label('description', 'Descrição', ['class' => 'control-label mt-3']) }}
    {{Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição do Lembrete'])}}

    {{ Form::label('date', 'Data', ['class' => 'control-label mt-3']) }}
    {{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}

    <div class="row justify-content-center mt-3">
        <div class="col-sm-6">
            <button class="btn btn-block btn-success" type="submit">Criar Lembrete</button>
        </div>

    </div>

{!! Form::close() !!}