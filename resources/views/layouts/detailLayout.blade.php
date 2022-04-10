{{-- seasson --}}
@include('layouts.partials.seasson')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $post  -> title }}</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light mb-2">
        <a href="/" class="btn btn-sm btn-outline-secondary ms-3" type="button">< Back</a>
    </nav>

    <div class="container">
        @yield('contentDetail')<br>
        <a href="{{ url('edit/'. $post -> id) }}" class="btn btn-sm btn-outline-warning mt-3 mb-3 ps-5 pe-5" type="button">Edit</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
