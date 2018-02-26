<section class="cd-hero" style="margin-bottom: 50px;">
    <ul class="cd-hero-slider autoplay">

        @foreach($slides as $slide)

        <li @if ($loop->first)
            class="selected"
            @endif
        >

            @if(! $slide->full_width && $slide->image_first)
                <div class="cd-half-width cd-img-container">
                    <img src="{{url ('storage/'.$slide->non_background_image) }}" alt="tech 1">
                </div>
            @endif

            <div class="{{ $slide->full_width ? 'cd-full-width' : 'cd-half-width' }}">
                <h2>{{ $slide->headline }}</h2>
                <p>{{ $slide->call_to_action }}</p>
                <a href="{{ $slide->button_one_link }}" class="cd-btn">{{ $slide->button_one_text }}</a>

                @isset($slide->button_two_link)
                    <a href="{{ $slide->button_two_link }}" class="cd-btn secondary">{{ $slide->button_two_text }}</a>
                @endisset
            </div> <!-- .cd-full-width -->

            @if(! $slide->full_width && ! $slide->image_first)
                <div class="cd-half-width cd-img-container">
                    <img src="{{url ('storage/'.$slide->non_background_image) }}" alt="tech 1">
                </div>
            @endif
        </li>

        @endforeach

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

        {{--<li>--}}
        {{--<div class="cd-full-width">--}}
        {{--<h2>Slide title here</h2>--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>--}}
        {{--<a href="#0" class="cd-btn">Start</a>--}}
        {{--<a href="#0" class="cd-btn secondary">Learn More</a>--}}
        {{--</div> <!-- .cd-full-width -->--}}
        {{--</li>--}}
    </ul> <!-- .cd-hero-slider -->

    <div class="cd-slider-nav">
        <nav>
            <span class="cd-marker item-1"></span>

            <ul>
                @foreach($slides as $slide)

                    <li @if ($loop->first)
                        class="selected"
                        @endif()
                    ><a href="#0" >{{$slide->navigation_text}}</a></li>

                @endforeach

                {{--<li class="selected"><a href="#0">Intro</a></li>--}}
                {{--<li><a href="#0">Tech 1</a></li>--}}
                {{--<li><a href="#0">Tech 2</a></li>--}}
                <li><a href="#0">Video</a></li>
                {{--<li><a href="#0">Image</a></li>--}}
            </ul>
        </nav>
    </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->