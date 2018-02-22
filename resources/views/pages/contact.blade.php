@extends('layouts.index')

@section('header')
    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
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
            <div class="post-heading">
                <h1>{{ $page->title }}</h1>
                <h2 class="subheading">{{ $page->excerpt }}</h2>

                <span class="meta">Posted by
                <a href="#">{{ $page->user->name }}</a>
                on {{ $page->created_at->format('F d, Y') }}</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div>
                    {{ $page->body }}
                </div>
            </div>
        </div>
    </div>
@stop
