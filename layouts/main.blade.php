<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- The header part -->
    <header>
      <h1>@yield('name')'s Books Store - @yield('title')</h1>
      <nav>
        <ul>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{ route('categories') }}">Categories</a></li>
        </ul>
      </nav>
    </header>
    
    <!-- The content part -->
    <main>
      @yield('content')
    </main>

    <!-- The footer part -->
    <footer>
      &#xA9; Copyright Week-03, 2020 @yield('name')'s Books Store.
    </footer>
  </body>
</html>