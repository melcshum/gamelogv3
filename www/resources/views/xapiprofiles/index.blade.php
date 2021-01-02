@extends('xapiprofiles.layout')


@section('content')

<div class="content">

    <div class="content">


        <div class="d-flex align-items-center">
            <h2>Player Profiles</h2>
            <div class="ml-auto">
                {{-- <a href="{{ route('profiles.create') }}"
                    class="btn btn-outline-secondary">Create profile</a> --}}
            </div>
        </div>


        <div class="card">

            <div class="card-body">
                @include ('layouts._messages')
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td> User ID</td>
                            <td> User Name</td>

                            <td> Email</td>
                            <td> Player Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($xapi_profiles as $profile)
                            <tr>

                                <td>{{ $profile->user->id }}</td>
                                <td>{{ $profile->user->name }}</td>
                                <td>{{ $profile->user->email }}</td>
                                <td><a href="{{ $profile->url }}"> {{ $profile->name }}</a></td>

                            </tr>
                        @empty
                            <tr colspan="5">
                                <td>
                                    <div class="alert alert-warning">
                                        <strong> Sorry</strong> There is no profile available.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $xapi_profiles->links() }}
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
