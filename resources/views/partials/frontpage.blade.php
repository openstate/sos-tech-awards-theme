<div class="frontpage">
  <div class="row">
    <div class="col-sm-12 text-center">
      <img class="frontpage-logo" src="@asset('images/logo-sos.svg')">
      <p class="frontpage-logo-text">2021 EDITIE</p>
      <br>
      <div class="title">
        <p>SETUP & OPEN STATE</p>
        <p class="title weight-600">TECH AWARDS</p>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="subtitle">
        <p class="text-grijs">4 Awards voor</p>
        <p>Transparantie <span class="text-grijs">&</span> Verantwoordelijkheid</p>
        <p class="text-grijs">in de Digitale Samenleving</p>
      </div>
      <br>
      <div class="dropdown">
        <button class="red-button btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          DINSDAG 23 MAART
          <br>
          ZET IN DE AGENDA
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
          <a class="dropdown-item" id="cal-ics" download="SETUP-Open-State-Tech-Awards-23-maart-2021" href="#">ics/ical</a>
          <a class="dropdown-item" id="cal-google" href="#" target="_blank" rel="noopener">google</a>
          <a class="dropdown-item" id="cal-outlook" download="SETUP-Open-State-Tech-Awards-23-maart-2021" href="#">outlook</a>
          <a class="dropdown-item" id="cal-yahoo" href="#" target="_blank" rel="noopener">yahoo</a>
        </div>
      </div>
      <br>
      <div class="text-center">
        Volg <a href="https://twitter.com/search?q=%23SOStech21" target="_blank" rel="noopener">#SOStech21</a> en blijf op de hoogte
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube-nocookie.com/embed/rkmivxPSV8I" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="row">
    @php query_posts('posts_per_page=2'); @endphp
    @while (have_posts()) @php the_post() @endphp
      <div class="col-md-6">
        @include('partials.content')
      </div>
    @endwhile
  </div>

  <div class="container">
  <div class="row text-right">
    <div class="col-12 text-right">
      <a href="@php bloginfo("template_url")@endphp/nieuws/">Meer Nieuws</a>
      <br>
      <br>
    </div>
  </div>
  </div>
</div>
