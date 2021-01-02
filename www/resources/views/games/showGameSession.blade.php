@extends('games.layout')



@section('content')

    <div class="content">

        <div class="d-flex align-items-center">
            <h2>Session per Game</h2>
            <div class="ml-auto align-items-right">
                <a href="{{ route('games.index') }}" class="btn btn-outline-secondary">Back to all
                    Ganes</a>
            </div>
        </div>

        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="mt-2"> <strong>Name</strong> {{ $game->name }}</div>
                    <div class="mt-2"><strong> Description</strong> {{ $game->desc }}</div>
                    <div class="mt-2"><strong> Purpose</strong> {{ $game->purpose }}</div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="card">
                <div class="card-body">
                    @include('gamesession._index', [
                    'game_sessions'=>$game_sessions,
                    'showGame'=>false,
                    'showStudent'=>true,

                    ])
                </div>
            </div>
        </div>



    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
