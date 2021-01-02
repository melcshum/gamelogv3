@if ($message = Session::get('success'))
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
        </button>
        <span>{{ $message }}</span>
    </div>
@endif
