<div class="row">
  <div class="col-12 col-lg-8 offset-lg-2">
    <article @php post_class() @endphp>
      <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @include('partials/entry-meta')
      </header>
      <div class="entry-content">
        @php the_content() @endphp
      </div>
    </article>
  </div>
</div>
