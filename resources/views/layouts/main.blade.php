<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Css --}}
    <link rel="stylesheet" href="{{url('/style.css')}}" />

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    {{-- AOS Js --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- google Font --}}
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Poppins:wght@400;500&family=Ubuntu:wght@300;700&display=swap");
  </style>

    <title>ITDRI | {{ $title }}</title>
  </head>
  <body id="home">

    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.about2')
    @include('partials.produk')
    @include('partials.faq')
    @include('partials.footer')

    {{-- <div class="container mt-4">
        @yield('container')
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const galleryImage = document.querySelectorAll(".gallery-img");

        galleryImage.forEach((img, i) => {
            img.dataset.aos = "fade-down";
            img.dataset.aosDelay = i * 100;
            img.dataset.aosDuration = 1000;
        });

        AOS.init({
            once: true,
            duration: 1500,
        });
    </script>
  </body>
</html>