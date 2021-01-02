@extends('games.layout')



@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h2>Player Session </h2>
                        <div class="ml-auto align-items-right">
                            {{-- <a href="{{ route('games.index') }}"
                                class="btn btn-outline-secondary">Back to all
                                Ganes</a> --}}
                        </div>
                    </div>


                    <div class="card-body">

                        <p class="card-title">
                        <div> <strong>Session</strong> {{ $game_session->session }}</div>
                        </p>

                        @foreach ($xapi_statements as $statement)
                            @php
                            $s=json_decode ($statement, true);
                            @endphp

                            <div class="statement" id="{{ $s['_id'] }}">

                                <div> {{ $s['_id'] }}</div>
                                <div> {{ $s['actor']['objectType'] }}</div>
                                <div> {{ $s['actor']['account']['homePage'] }}</div>
                                <div> {{ $s['verb']['id'] }}</div>
                                <div> {{ $s['object']['id'] }}</div>

                                <div> {{ $s['object']['definition']['name']['en-US'] }}</div>

                                <div> {{ $s['object']['objectType'] }}</div>
                                {{-- <div> {{ $s['object']['description'] }}</div>
                                --}}

                                {{-- <div> {{ $s['actor'] }}</div>
                                --}}
                                <textarea  id="detail_{{ $s['_id'] }}" class="bg-danger"
                                    style="display: none;
                                        width: 100%;
                                        min-height: 30rem;
                                        font-family: "Lucida Console", Monaco, monospace;
                                        font-size: 0.8rem;
                                        line-height: 1.2;
                                      "
                                    >{{ $statement }}</textarea>
                            </div>


                        @endforeach


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            $("div.statement").click(function() {
                var detail = "#detail_" + this.id;

                $(detail).text(
                    JSON.stringify(JSON.parse($(detail).html()), undefined, 4)
                ); 
                $("textarea#detail_" + this.id).toggle();
            });

        });

    </script>
@endpush
