<div class="frontpage">
  <div class="row bg-white">
    <p class="col-sm-12 text-center frontpage-tk-top"><img src="@asset('images/ACC-HACK-Challenge-2-1.svg')"><i><b>Tweede Kamer</b></i></p>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row call-to-action">
        <div class="col-sm-4">
          <i class="far fa-calendar-plus fa-2x"></i> &nbsp;<h1 class="d-inline">09 JUN</h1>
        </div>
        <div class="col-sm-4 text-center">
          <h1>Meetup</h1>
        </div>
        <div class="col-sm-4 text-right">
          <button type="button" class="red-button btn btn-primary"><h3 class="d-inline">meld je aan</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row call-to-action bg-lichtblauw">
        <div class="col-sm-4">
          <i class="far fa-calendar-plus fa-2x"></i> &nbsp;<h1 class="d-inline">14 AUG</h1>
        </div>
        <div class="col-sm-4 text-center">
          <h1>Hackathon</h1>
        </div>
        <div class="col-sm-4 text-right">
          <button type="button" class="red-button btn btn-primary"><h3 class="d-inline">meld je aan</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row bg-white">
    <div class="col-sm-8">
      <p>
        Welkom bij de derde editie van Accountability Hack.
        De hackathon waar met open data de prestaties van de
        overheid in kaart worden gebracht. Maak gebruik van
        open data, help de democratie en maak de winnende
        app die de overheid op innoverende wijze controleert.
      </p>
    </div>
    <div class="col-sm-4">
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
          <img src="@asset('images/ACC-HACK-Challenge-1.svg')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="d-inline">Challenge 1</h1>
          <br>
          <p>
            Info challenge p 9 juni vond de tweede editie
van     Accountability Hack plaats in het Tweede
Kame    rgebouw in Den Haag.
          </p>
        </div>
        <div class="col-sm-6 challenge1-right text-right">
          <br> 
          <br> 
          <br> 
          <br> 
          <br> 
          <button type="button" class="red-button btn btn-primary"><h3 class="d-inline">meer info</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    <div class="col-12">
      <div class="row challenge bg-donkerblauw text-white">
        <div class="col-sm-6 challenge-left">
          <img src="@asset('images/ACC-HACK-Challenge-2.svg')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class="d-inline">Challenge 2</h1>
          <br>
          <p>
            Info challenge p 9 juni vond de tweede editie
van     Accountability Hack plaats in het Tweede
Kame    rgebouw in Den Haag.
          </p>
        </div>
        <div class="col-sm-6 challenge2-right text-right">
          <br> 
          <br> 
          <br> 
          <br> 
          <br> 
          <button type="button" class="red-button btn btn-primary"><h3 class="d-inline">meer info</h3> &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="row bg-white">
    @php
      $recent_posts = wp_get_recent_posts(array(
          'numberposts' => 3,
          'post_status' => 'publish'
      ));
      foreach($recent_posts as $post) :
    @endphp
      @include('partials.content-thumbnail')
    @php
      endforeach;
      wp_reset_query();
    @endphp

    @php
      $recent_posts = wp_get_recent_posts(array(
          'numberposts' => 3,
          'post_status' => 'publish'
      ));
      foreach($recent_posts as $post) :
    @endphp
      @include('partials.content')
    @php
      endforeach;
      wp_reset_query();
    @endphp

    LINKS NAAR NEWS/DATABLOG ARCHIEF
  </div>
</div>
