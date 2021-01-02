 @extends('scenarios.layout')


 @section('content')

     <div class="content">

         <div class="row">
             <div class="col-md-12">
                 <div class="card ">
                     <div class="card-header">

                         <div class="pull-left">

                             <h3 class="text-primary mb-0 mt-3"> All Scenarios </h3>
                         </div>
                         <div class="pull-right">
                             {{-- <a class="btn btn-success"
                                 href="{{ route('games.create') }}"> Create New Game</a> --}}
                         </div>
                     </div>
                     <div class="card-body">
                         @include ('layouts._messages')
                         <table class="table table-striped table-responsive">
                             <thead>
                                 <tr>
                                     <td>Name</td>
                                     <td> Difficulty_rate</td>
                                     <td> Uncertainty </td>
                                     <td> K factor </td>
                                     <td> Time_limit </td>
                                     {{-- <td colspan="2">Action</td>
                                     --}}
                                 </tr>
                             </thead>
                             <tbody>

                                 @forelse ($scenarios as $scenario)

                                     <tr>
                                         <td><a
                                                 href="{{ route('scenarios.show', $scenario->id) }}"> {{ $scenario->name }}</a>
                                         </td>
                                         <td>{{ $scenario->difficulty_rate }}</td>
                                         <td>{{ $scenario->uncertainty }}</td>
                                         <td>{{ $scenario->k_factor }}</td>
                                         <td>{{ $scenario->time_limit }}</td>
                                         <td>
                                             {{-- <a
                                                 href="{{ route('scenarios.edit', $scenario->id) }}"
                                                 class="btn btn-primary">Edit</a> --}}
                                         </td>
                                         <td>
                                             {{-- <form method="post"
                                                 action="{{ route('scenarios.destroy', $scenario->id) }}">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button class="btn btn-danger" type="submit">Delete</button>
                                             </form> --}}
                                         </td>
                                     </tr>
                                 @empty
                                     <tr colspan="5">
                                         <td>
                                             <div class="alert alert-warning">
                                                 <strong> Sorry</strong> There is no scenario available.
                                             </div>
                                         </td>
                                     </tr>
                                 @endforelse
                             </tbody>
                         </table>
                         <div>
                             {{ $scenarios->links() }}
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
