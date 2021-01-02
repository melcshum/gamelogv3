@extends('xapiprofiles.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <div class="pull-left">
                        <h2> </strong> {{ $profile->name }}'s Profile </h2>


                    </div>
                    <div class="pull-right">
                        <a href="{{ route('xapiprofiles.index') }}" class="btn btn-outline-secondary">Back to all
                            Profiles</a>
                    </div>
                </div>

                <div class="card-body">
                    <h1> LRS
                    </h1>
                     @include('gamesession._index', [
                    'game_sessions'=>$game_sessions,
                    'showGame'=>true,
                    'showStudent'=>false,
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
