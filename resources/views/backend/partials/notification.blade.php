@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session()->get('success') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Error!</strong> {{ session()->get('error') }}
    </div>
@elseif (session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Info!</strong> {{ session()->get('info') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@else
@endif
