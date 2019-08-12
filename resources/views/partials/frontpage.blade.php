<div class="frontpage">
  <div class="row bg-white">
    <p class="col-sm-12 text-center frontpage-tk-top"><img src="@asset('images/ACC-HACK-Challenge-2-1.svg')"><i><b>Tweede Kamer</b></i></p>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row call-to-action bg-lichtblauw">
        <div class="col-sm-4">
          <i class="far fa-calendar-plus fa-2x"></i> &nbsp;<h1 class="d-inline">04 OKT</h1>
        </div>
        <div class="col-sm-4 text-center">
          <h1>Hackathon</h1>
        </div>
        <div class="col-sm-4 text-right">
          <a href="https://www.eventbrite.nl/e/tickets-accountability-hack-62302967854" class="red-button btn btn-primary" target="_blank" rel="noopener">
            <h3 class="d-inline">meld je aan</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i>
          </a>
        </div>
        <div class="col-12">
          Inschrijven kan tot 20 september
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row call-to-action bg-lichtblauw">
        <div class="col-sm-4">
          <i class="far fa-calendar-plus fa-2x"></i> &nbsp;<h1 class="d-inline">04 OKT</h1>
        </div>
        <div class="col-sm-4 text-center">
          <h1>Side-events</h1>
        </div>
        <div class="col-sm-4 text-right">
          <a href="https://www.eventbrite.nl/e/tickets-side-events-accountability-hack-64720296148" class="red-button btn btn-primary" target="_blank" rel="noopener">
            <h3 class="d-inline">meld je aan</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row bg-white">
    <div class="col-sm-8">
      <br>
      <p>
        Welkom bij de derde editie van Accountability Hack. Tijdens dit evenement dagen wij jou uit om met behulp van open data een toepassing te creëren die de Tweede Kamerleden gaat helpen bij hun werk.
<br>
<br>
Schrijf je in voor een challenge, maak gebruik van open data en creëer de winnende app waarvoor je €20.000 ontwikkelbudget krijgt om er een volwaardige tool van te bouwen.
      </p>
    </div>
    <div class="col-sm-4">
      <br>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/222332071" allowfullscreen></iframe>
      </div> 
    </div>
  </div>

  <div class="row bg-white frontpage-down-arrow-spacer">
    <div class="col-sm-12 text-center">
      <i class="fas fa-long-arrow-alt-down"></i>
    </div>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row challenge bg-lichtblauw">
        <div class="col-sm-6 challenge-left">
          <img src="@asset('images/ACC-HACK-Challenge-1.svg')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="d-inline">Challenge 1: lumpsumbekostiging in het onderwijs</h1>
          <br>
          <p>
            De lumpsumbekostiging in het onderwijs creëert flexibiliteit, maar zorgt er ook voor dat de Tweede Kamer de bestedingen moeilijker kan volgen. Wat voor toepassingen kunnen er gecreëerd worden met open data om de Tweede Kamer te helpen?
          </p>
        </div>
        <div class="col-sm-6 challenge1-right text-right">
          <br> 
          <br> 
          <br> 
          <br> 
          <br> 
          <a href="@php bloginfo("template_url")@endphp/challenge-1-lumpsumbekostiging-in-het-onderwijs/" class="red-button btn btn-primary">
            <h3 class="d-inline">meer info</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row challenge bg-donkerblauw text-white">
        <div class="col-sm-6 challenge-left">
          <img src="@asset('images/ACC-HACK-Challenge-2.svg')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="d-inline">Challenge 2: geneesmiddelenprijzen</h1>
          <br>
          <p>
            Het is belangrijk ervoor te zorgen dat patiënten nu en in de toekomst toegang hebben tot betaalbare medicatie. Verschillende fracties <a href="https://www.tweedekamer.nl/debat_en_vergadering/uitgelicht/farmaceutische-industrie" target="_blank" rel="noopener">hebben aangedrongen</a> op het openbaar maken van medicijnprijzen, maar de minister voor Medische Zorg stelt dat er dan geen bedrijf meer bereid zou zijn om deel te nemen aan prijsonderhandelingen. Hij zet nu <a href="https://www.rijksoverheid.nl/onderwerpen/geneesmiddelen/betaalbaar-houden-van-geneesmiddelen" target="_blank" rel="noopener">onder meer</a> in op het aanpassen van referentielanden bij de vaststelling van maximumprijzen voor geneesmiddelen. Kan open data ons meer inzichten bieden?
          </p>
        </div>
        <div class="col-sm-6 challenge2-right text-right">
          <br> 
          <br> 
          <br> 
          <br> 
          <br> 
          <a href="@php bloginfo("template_url")@endphp/challenge-2-geneesmiddelenprijzen/" class="red-button btn btn-primary">
            <h3 class="d-inline">meer info</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    @php query_posts('posts_per_page=3'); @endphp
    @while (have_posts()) @php the_post() @endphp
      <div class="col-md-4">
        @include('partials.content')
      </div>
    @endwhile
  </div>

  <div class="row bg-white text-right">
    <div class="col-12 text-right">
      <a href="@php bloginfo("template_url")@endphp/nieuws-datablogs/">Meer Nieuws & Datablogs</a>
      <br>
      <br>
    </div>
  </div>
</div>
