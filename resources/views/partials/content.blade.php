<div class="col-md-4">
  <div class="entry-padding bg-lichtblauw">
    <article {{ post_class() }}>
      <header>
        @php
          if (in_category('news')) {
            echo '<span class="post-type">[Nieuws]</span>';
          }
          elseif (in_category('datablog')) {
            echo '<span class="post-type">[Datablog]</span>';
          }
        @endphp
        @include('partials/entry-meta')
        <h2 class="entry-title"><a href="{{ get_permalink($post['ID']) }}">{!! get_the_title($post['ID']) !!}</a></h2>
      </header>
      <div class="entry-summary">
        {!! get_the_excerpt($post['ID']) !!}
      </div>
    </article>
  </div>
</div>
