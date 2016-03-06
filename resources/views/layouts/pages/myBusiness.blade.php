@extends ('layouts.backend')

@section('header_title', 'my Profile')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">Business Information</div>

      <div class="panel-body">
            <form action="{{  url('myBusiness')}}" method='post'>
              <fieldset class="form-group">
                <label for="name">Business Name</label>
                <input type="text" class="form-control" id="name" placeholder="Commercial register business name">
              </fieldset>

              <fieldset class="form-group">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" placeholder="Address">
              </fieldset>

              <fieldset class="form-group">
                  <div class='row'>
                      <div class='col-xs-2'>
                          <label for="plz">Postcal Code</label>
                          <input type="text" class="form-control text-center" maxlength=5 id="plz" placeholder="postal code">
                      </div>
                      <div class='col-xs-10'>
                          <label for="city">City</label>
                          <input type="text" class="form-control" id="city" placeholder="City">
                      </div>
                  </div>
              </fieldset>

              <hr>

              <fieldset class="form-group">
                  <div class='row'>
                      <div class='col-xs-4'>
                          <label for="tel">Telefon</label>
                          <input type="text" class="form-control" id="tel" placeholder="tel">
                      </div>
                      <div class='col-xs-4'>
                          <label for="fax">Fax</label>
                          <input type="text" class="form-control" id="fax" placeholder="Fax">
                      </div>
                      <div class='col-xs-4'>
                          <label for="mobil">Mobile</label>
                          <input type="text" class="form-control" id="mobil" placeholder="Mobile Number">
                      </div>
                  </div>
              </fieldset>

              <hr>

              <fieldset class="form-group">
                  <div class='row'>
                      <div class='col-xs-6'>
                          <label for="email">Business Contact Email</label>
                          <input type="email" class="form-control" id="email" placeholder="E-mail">
                      </div>
                      <div class='col-xs-6'>
                          <label for="info">Termin Register Email</label>
                          <input type="email" class="form-control" id="info" placeholder="Info E-mail">
                      </div>
                  </div>
              </fieldset>


              <pre>
  >> Actually for development phase, only one Business is allowed.
  [x] Only one Business Information and Stuff...
              </pre>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
              <input type='submit' class='btn btn-primary' value='Save Settings'>
            </form>
      </div>
  </div>


@stop
