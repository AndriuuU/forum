@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1 class="text-center text-muted">
{{ __("Posts del foro :name", ['name' => $forum->name]) }}
</h1>

<a href="/forum/public" class="btn btn-info pull-right">
{{ __("Volver al listado de los foros") }}
</a>

<div class="clearfix"></div>

<br/>

    	@forelse($replies as $reply)

	        <div class="panel panel-default panel-heading-reply">
	            <div class="panel-heading">
	            	<p>{{ __("Respuesta de") }}: {{ $reply->autor->name }}</p>
	            </div>
                <h4>{{ __("Autor del debate") }}: {{ $post->owner->name }}</h4>
	
    
	            <div class="panel-body">
	                {{ $reply->reply }}
	            </div>
	        </div>

    	@empty

			<div class="alert alert-danger">
				{{ __("No hay ninguna respuesta en este momento") }}
			</div>

    	@endforelse
	
		@if($replies->count())
			{{ $replies->links() }}
		@endif

    </div>
</div>

@endsection
