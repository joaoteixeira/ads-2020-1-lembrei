@extends ('layouts.teste')

@section('title', 'Página Inicial')

@section('title-content', 'Início!')

@section('content')

    @foreach($tasks as $task)
    <div class="row">
        <div class="col-sm-12">
            <h3>
                {{ $task->name}}
                <small>{{ $task->created_at }}</small>
            </h3>
            <hr>
            <p>{{ $task->description}}</p>
            <h4>{{ $task->date}}</h4>
        </div>
    </div>
    <hr>

    @endforeach
    


@endsection