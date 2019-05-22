@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @include('partials.frontpage')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
