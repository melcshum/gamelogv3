<div>
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <td>ID</td>
                @if ($showGame)
                    <td>Game</td>
                @endif
                @if ($showStudent)
                    <td>Student</td>
                @endif

                <td>Session</td>
                <td>Play Time</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($game_sessions as $session)
                <tr>

                    <td> {{ $session->id }}</td>
                    @if ($showGame)
                        <td><a href="{{ $session->game->url }}"> {{ $session->game->name }}</a></td>
                    @endif
                    @if ($showStudent)
                        <td><a href="{{ route('profiles.show', $session->profile->id) }}"> {{ $session->profile->name }}</a>
                        </td>
                    @endif

                    <td>
                        <a href="{{ route('games.gamesessions.playersession', [$session->game->slug, $session->id]) }}">
                            {{ $session->session }}
                        </a>
                    </td>
                    <td> {{ $session->created_at }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="alert alert-warning">
                            <strong> Sorry</strong> There is no session available.
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div>
        {{ $game_sessions->links() }}
    </div>
</div>
