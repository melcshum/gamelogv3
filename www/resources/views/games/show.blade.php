@extends('games.layout')


@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="pull-left">
                            <h2> Game</h2>


                        </div>
                        <div class="pull-right">
                            <a href="{{ route('games.index') }}" class="btn btn-outline-secondary">Back </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $game->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">


                                    <strong>Description</strong> {{ $game->desc }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">

                                    <strong> Purpose</strong> {{ $game->purpose }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
