@if(request()->has('type'))
    <div class="container">
        <div class="alert {{ request()->get('type') }} alert-dismissible fade show" role="alert">
            {{ request()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif




