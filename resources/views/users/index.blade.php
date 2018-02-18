@extends('layouts.app')

@section('content')
	@component('components.datatable', [
        'table_id' => 'user-datatable',
        'route_name' => 'datatable.user',
        'columns' => [
                ['data' => 'name', 'name' => 'name', 'header' => 'Name'],
                ['data' => 'email', 'name' => 'email', 'header' => 'E-mail.'],
            ]
        ])
    @endcomponent
@endsection