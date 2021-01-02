@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="d-flex align-items-center">
        <h2> Secnarios </h2>
        <div class="ml-auto align-items-right">
            <a href="{{ route('scenarios.index') }}" class="btn btn-outline-secondary">Back to all Secnarios</a>
        </div>
    </div>


@stop

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">




                        <div class="mt-2"><strong>Name</strong> {{ $scenario->name }}</div>

                        <div class="mt-2">Difficulty_rate {{ $scenario->difficulty_rate }}</div>
                        <div class="mt-2">Uncertainty {{ $scenario->uncertainty }}</div>
                        <div class="mt-2">K factor {{ $scenario->k_factor }}</div>
                        <div class="mt-2">Time_limit {{ $scenario->time_limit }}</div>

                        <div class="mt-4">
                            <strong> Prefabs</strong>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td> card_prefab_name</td>
                                        <td> boss_can_use </td>
                                        <td> is_enabled </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scenario->prefabs as $prefab)
                                        <tr>
                                            <td> {{ $prefab->name }}</td>
                                            <td> {{ $prefab->boss_can_use }} </td>
                                            <td> {{ $prefab->is_enabled }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop
