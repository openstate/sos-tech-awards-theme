{{--
  Template Name: Overview Page
--}}

@extends('layouts.app')

@section('content')
  <div class="row post-overview">
    <div class="col-12">
      <h1>Nieuws</h1>
        @php query_posts('cat=1&posts_per_page=100'); @endphp
        @while (have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile
        @php
          wp_reset_postdata();
        @endphp
    </div>
  </div>
@endsection
