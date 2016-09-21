@extends('main')

@section('title', "| Blog")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
			<h2>{{$post->title}}</h2>
			<h5>Published: {{date('d.m.Y H:i',strtotime($post->created_at))}}</h5>
			<p>{{substr(strip_tags($post->body),0,250)}}{{strlen(strip_tags($post->body)) >250? '...':''}}</p>
			<a href="{{route('blog.single', $post->id)}}" class="btn btn-primary">Read more</a>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			{!! $posts->links() !!}
		</div>
	</div>

@endsection
