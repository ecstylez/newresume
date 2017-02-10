{{-- get template to be used --}}
@extends('template.page')

{{-- populate page title --}}
@section('page_title', $data['page_name'] )

{{-- populate page content --}}
@section('page_content')

	{{-- include static page based on passed parameters --}}
	@include('content.' . $data['slug'])

@endsection