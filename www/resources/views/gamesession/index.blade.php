@extends('layouts.app', [
'class' => '',
'elementActive' => 'xapiprofile'
])

@section('content')

    <div class="d-flex align-items-center">

        <h3> Player Session <span class="text-muted"> ( {{ $game_session->session }} ) </span>at
            {{ $game_session->created_at }}
        </h3>
        <div class="ml-auto align-items-right">
            <a href="{{ route('profiles.show', $game_session->profile->id) }}" class="btn btn-outline-secondary">Back to
                Player</a>
        </div>
    </div>


    <div class="row">
        <div class="card">

            <div class="card-body">
                <div>
{{--
                    @include('gamedata._index', [
                    'interactions'=>$interactions,
                    'show_player' =>false,
                    'caption' => $game_session->profile->name
                    ]) --}}

                </div>


                <div>
                    {{-- {{ $interactions->links() }} --}}
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        {{-- <game-object-history-count title="{{ 'Card Per Session' }}"
            :sid="{{ $game_session->id }}" url="{{ '/api/playerdata/session/' . $game_session->id . '/defintionCount' }}">
        </game-object-history-count>

        <session-difficulty :sid="{{ $game_session->id }}"
            url="{{ '/api/playerdata/session/' . $game_session->id . '/difficultyTrace' }}"></session-difficulty>

        <scenario-average :sid="{{ $game_session->id }}" title="{{ 'Average Time Per Scenarios for a PLayer' }}"
            url="{{ '/api/playerdata/session/' . $game_session->id . '/average' }}"></scenario-average>
        --}}


    </div>


@endsection
