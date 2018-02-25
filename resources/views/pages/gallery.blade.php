@extends('layouts.index')

@section('title', ' - '.'gallery')


@section('header')

    <section class="cd-hero" style="margin-bottom: 50px;">
        <ul class="cd-hero-slider autoplay">
            <li class="selected">
                <div class="cd-full-width">
                    <h2>Hero slider</h2>
                    <p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
                    <a href="http://codyhouse.co/?p=675" class="cd-btn">Article &amp; Download</a>
                </div> <!-- .cd-full-width -->
            </li>

            <li>
                <div class="cd-half-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="#0" class="cd-btn secondary">Learn More</a>
                </div> <!-- .cd-half-width -->

                <div class="cd-half-width cd-img-container">
                    <img src="assets/tech-1.jpg" alt="tech 1">
                </div> <!-- .cd-half-width.cd-img-container -->
            </li>

            <li>
                <div class="cd-half-width cd-img-container">
                    <img src="assets/tech-2.jpg" alt="tech 2">
                </div> <!-- .cd-half-width.cd-img-container -->

                <div class="cd-half-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="#0" class="cd-btn secondary">Learn More</a>
                </div> <!-- .cd-half-width -->

            </li>

            <li class="cd-bg-video">
                <div class="cd-full-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                    <a href="#0" class="cd-btn">Learn more</a>
                </div> <!-- .cd-full-width -->

                <div class="cd-bg-video-wrapper" data-video="assets/video/video">
                    <!-- video element will be loaded using jQuery -->
                </div> <!-- .cd-bg-video-wrapper -->
            </li>

            <li>
                <div class="cd-full-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="#0" class="cd-btn secondary">Learn More</a>
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <li class="selected"><a href="#0">Intro</a></li>
                    <li><a href="#0">Tech 1</a></li>
                    <li><a href="#0">Tech 2</a></li>
                    <li><a href="#0">Video</a></li>
                    <li><a href="#0">Image</a></li>
                </ul>
            </nav>
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->

@stop


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="subheading">Consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                {{--<h2 class="subheading">{{ $page->excerpt }}</h2>--}}
                {{--{!! $page->body !!}--}}
            </div>
        </div>
    </div>
@stop
