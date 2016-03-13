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

                <br><br>
                {{ Form::submit('Create new Location', ['class'=>'btn btn-info']) }}

            {!! Form::close() !!}
      </div>
  </div>


@stop
