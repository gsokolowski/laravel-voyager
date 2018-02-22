@extends('layouts.index')

@section('header')
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ setting('site.title') }}</h1>
                        <span class="subheading">{{ setting('site.description') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

        @foreach ($posts as $post)
            @include('partials.post', ['post' => $post])
        @endforeach

        <!-- Paginate -->
        {{ $posts->links('vendor.pagination.bootstrap-4')}}
    </div>
</div>
@stop