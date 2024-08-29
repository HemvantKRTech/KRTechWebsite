<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'AR Technology' }}</title>
    <!-- include libraries(jQuery, bootstrap) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.27.0/tagify.min.js" integrity="sha512-RZnh1b5EBFnw6IaiqEhT0dQy+dCbeC6ZybZY/CkMlk2OW8Eyj20/t8Js3Ka1Ot/sQIVL20N81p7FRQvloTZgtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.27.0/tagify.css" integrity="sha512-fg4mbaXioGkhZsVQlBUD7MmEA5zQY4I3aiawILa2nHXUk0e5gBZjlwGoJCeRIAVHqYOdaddDQA7HUXwqx3vVAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preview.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    @stack('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body class="relative" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Header with Navigation -->
    {{-- <main>
        <div class="font-sans text-gray-900 antialiased"> --}}
            {{ $slot }}
        {{-- </div>
    </main> --}}
    <canvas class="w-full h-full hidden lg:block max-w-[100vw] max-h-screen fixed z-[9999999999999] top-0 bg-opacity-0 pointer-events-none" width="1536" height="382"></canvas>
    @stack('scripts')
   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
       
        // custom-slider
    //    $('.custom-sliderhome').slick();

      
      </script>
       <script src="{{ asset('js/app.js') }}"></script>
       <script src="{{ asset('js/custom.js') }}"></script>
       <script src="{{ asset('js/main.js') }}"></script>
       <script src="{{ asset('js/aos.js') }}"></script>
       <script src="{{ asset('js/swiper.js') }}"></script>
       <script src="{{ asset('js/plugin.js') }}"></script>
       <script src="{{ asset('js/mouse.js') }}"></script>
       
</body>
</html>
