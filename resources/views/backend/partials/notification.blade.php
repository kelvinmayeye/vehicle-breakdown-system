<div class="m-3">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
role="alert">
<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    
</button>
<strong>Success - </strong> {{ session()->get('success') }}!
</div>
@elseif (session()->has('error'))
<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
role="alert">
<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    
</button>
<strong>Sorry - </strong> {{ session()->get('error') }}!
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
</div>
