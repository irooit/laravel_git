@if(count($errors)>0)
<div class="col-xl-8 col-lg-12">
    @foreach($errors->all() as $error)
    <div class="alert bg-warning alert-icon-left alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Warning!</strong> {{$error}}
    </div>
    @endforeach
</div>
@endif
