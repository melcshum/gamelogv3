@extends('games.layout')



@section('content')

    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">

                        <div class="pull-left">

                            <h3 class="text-primary mb-0 mt-3">Games</h3>
                        </div>
                        <div class="pull-right">
                            {{-- <a class="btn btn-success"
                                href="{{ route('games.create') }}"> Create New Game</a> --}}
                        </div>
                    </div>
                    <div class="card-body">

                        @include ('layouts._messages')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Desc</td>
                                    <td>Purpose</td>
                                    <td>Session</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($games as $game)
                                    <tr>
                                        <td> {{ $game->id }}</td>
                                        <td><a href="{{ $game->url }}"> {{ $game->name }}</a></td>
                                        <td>{{ $game->desc }}</td>
                                        <td>{{ $game->purpose }}</td>
                                        <td><a href="{{ route('games.gamesessions', $game->slug) }}"> Session</a></td>

                                    </tr>
                                @empty
                                    <tr colspan="5">
                                        <td>
                                            <div class="alert alert-warning">
                                                <strong> Sorry</strong> There is no game available.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $games->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            //    demo.checkFullPageBackgroundImage();
        });

    </script>
@endpush
