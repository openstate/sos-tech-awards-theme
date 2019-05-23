{{--
  Template Name: Overview Page
--}}

@extends('layouts.app')

@section('content')
  <div class="row post-overview bg-white">
    <div class="col-12">
      <h1><u>Accountability Hack 2019</u></h1>
    </div>
    <div class="col-sm-6">
      <h1>Nieuws</h1>
        @php query_posts('cat=3&posts_per_page=100&year=2019'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>
    
    <div class="col-sm-6">
      <h1>Datablogs</h1>
        @php query_posts('cat=4&posts_per_page=100&year=2019'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>

    <div class="col-12">
      <h1><u>Accountability Hack 2017</u></h1>
    </div>
    <div class="col-sm-6">
      <h1>Nieuws</h1>
        @php query_posts('cat=3&posts_per_page=100&year=2017'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>
    
    <div class="col-sm-6">
      <h1>Datablogs</h1>
        @php query_posts('cat=4&posts_per_page=100&year=2017'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>

    <div class="col-12">
      <h1><u>Accountability Hack 2016</u></h1>
    </div>
    <div class="col-sm-6">
      <h1>Nieuws</h1>
        @php query_posts('cat=3&posts_per_page=100&year=2016'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>
    
    <div class="col-sm-6">
      <h1>Datablogs</h1>
        @php query_posts('cat=4&posts_per_page=100&year=2016'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>
  </div>
@endsection
