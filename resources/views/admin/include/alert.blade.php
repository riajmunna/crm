<div class="row">
    @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(Session::get('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session::get('warning')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{Session::get('failed')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

</div>
