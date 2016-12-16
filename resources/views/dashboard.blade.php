@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
   @include('includes.messageblock')

   <section class="row new-post">
   	<div class="col-md-6 col-md-offset-3">
   		<header><h3>What do you have to say?</h3></header>
   		<form action="{{ route('post.create') }}" method="post">
         {{ csrf_field() }}
   			<div class="form-group">
   				<textarea name="body" id="new-post" rows="5" placeholder="Your Post" class="form-control"></textarea>
   			</div>
   			<button type="submit" class="btn btn-primary">Post</button>
   		</form>
   	</div>
   </section>

   <section class="row posts">
   		<div class="col-md-6 col-md-offset-3">
   			<header><h3>Whatever people say...</h3></header>
   			<article class="post">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, neque. Aperiam possimus, ab vel explicabo distinctio ipsam perferendis non similique vitae id laborum mollitia repudiandae dolorum dolorem, pariatur, commodi libero.</p>
   				<div class="info">
   					Posted by: Gidi on 12 Feb 2016
   				</div>
   				<div class="interaction">
   					<a href="#">Like</a> | 
   					<a href="#">Dislike</a> | 
   					<a href="#">Edit</a> |
   					<a href="#">Delete</a>
   				</div>
   			</article>
   			<article class="post">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, neque. Aperiam possimus, ab vel explicabo distinctio ipsam perferendis non similique vitae id laborum mollitia repudiandae dolorum dolorem, pariatur, commodi libero.</p>
   				<div class="info">
   					Posted by: Gidi on 12 Feb 2016
   				</div>
   				<div class="interaction">
   					<a href="#">Like</a> | 
   					<a href="#">Dislike</a> | 
   					<a href="#">Edit</a> |
   					<a href="#">Delete</a>
   				</div>
   			</article>
   		</div>
   </section>
@endsection