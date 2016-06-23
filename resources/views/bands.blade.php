{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('stage_id', 'Stage_id:') !!}
			{!! Form::text('stage_id') !!}
		</li>
		<li>
			{!! Form::label('festival_id', 'Festival_id:') !!}
			{!! Form::text('festival_id') !!}
		</li>
		<li>
			{!! Form::label('event_day_id', 'Event_day_id:') !!}
			{!! Form::text('event_day_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}