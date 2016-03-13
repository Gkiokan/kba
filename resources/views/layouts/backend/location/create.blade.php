@extends ('layouts.backend')

@section('header_title', 'my Locations')

@section('content')
  <div class="panel panel-default">
      <div class="panel-heading">Create Location Information</div>

      <div class="panel-body">
            {!! Form::open(array('route'=>'location.store')) !!}

                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class'=>'form-control']) }}
                <br>
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, ['class'=>'form-control']) }}

                {{ Form::label('adress', 'Adresse') }}
                {{ Form::text('adress', null, ['class'=>'form-control']) }}

                {{ Form::label('plz', 'PLZ') }}
                {{ Form::text('plz', null, ['class'=>'form-control']) }}

                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, ['class'=>'form-control']) }}
                <br><br>

                {{ Form::label('tel', 'Telefon') }}
                {{ Form::text('tel', null, ['class'=>'form-control']) }}

                {{ Form::label('fax', 'Fax') }}
                {{ Form::text('fax', null, ['class'=>'form-control']) }}

                {{ Form::label('email', 'E-Mail') }}
                {{ Form::text('email', null, ['class'=>'form-control']) }}

                <br><br>
                {{ Form::label('times', 'Open Times') }}
                {{ Form::textarea('times', null, ['class'=>'form-control']) }}

                {{ Form::label('map', 'Map Information') }}
                {{ Form::textarea('map', null, ['class'=>'form-control']) }}

                <br><br>
                {{ Form::submit('Create new Location', ['class'=>'btn btn-info']) }}

            {!! Form::close() !!}
      </div>
  </div>


@stop
