@include('layouts.partials._header')
  <div class="container">

    <main>
      @yield('content')
    </main>

    <footer>
      @yield('footer')
    </footer>

  </div>

@include('layouts.partials._footer')

