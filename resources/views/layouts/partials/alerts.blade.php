@if(Session::has('info'))
    <div class='alert alert-info'>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('info') }}
    </div>
@endif
