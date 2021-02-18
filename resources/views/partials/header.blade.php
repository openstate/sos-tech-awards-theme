<header class="banner">
  <div class="container">
    <nav class="bg-grijs nav-primary navbar navbar-light fixed-top text-right">
      <a class="brand" href="{{ home_url('/') }}">
        <img class="navbar-brand-img img-fluid" src="@asset('images/logo-sos.svg')">
      </a>

      <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <h1 class="menu ml-auto">menu</h1>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container' => 'div', 'container_id' => 'navbarSupportedContent', 'container_class' => 'collapse navbar-collapse', 'walker' => new App\wp_bootstrap4_navwalker()]) !!}
      @endif
    </nav>
  </div>
</header>
