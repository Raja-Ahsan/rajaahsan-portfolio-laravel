<!DOCTYPE html>
<html data-wf-domain="raja ahsan" data-wf-page="@yield('wf-page-id', '656ef8b027ad4189724cf4cb')" data-wf-site="61dd9ddd76c6a058a47a4c57" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  data-wg-translated="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>@yield('title', 'Raja Ahsan - Full Stack Web Developer (Laravel, React, Node.js, WordPress) & UI/UX Designer - Karachi')</title>

  <meta name="description" content="@yield('description', 'I am Raja Ahsan, a Full Stack Web Developer and WordPress Plugin Expert skilled in Laravel, React, and Node.js. I create custom web solutions, develop powerful plugins, integrate APIs, and design modern UI/UX experiences to help businesses grow.')">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="@yield('og:title', 'Raja Ahsan - Full Stack Web Developer (Laravel, React, Node.js, WordPress) & UI/UX Designer - Karachi')">
  <meta property="og:description" content="@yield('og:description', 'Full Stack Developer specializing in Laravel, React, Node.js, and WordPress. I build scalable, fast, and visually stunning web applications with a strong focus on performance and user experience.')">
  <meta property="og:image" content="@yield('og:image', asset('website/img/raja-ahsan-fullstack-developer.png'))">
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta property="twitter:title" content="@yield('twitter:title', 'Raja Ahsan - Full Stack Web Developer (Laravel, React, Node.js, WordPress) & UI/UX Designer - Karachi')">
  <meta property="twitter:description" content="@yield('twitter:description', 'Expert in Laravel, React, Node.js, and WordPress plugin development. I deliver robust web applications and custom UI/UX designs tailored for modern businesses.')">
  <meta property="twitter:image" content="@yield('twitter:image', asset('website/img/raja-ahsan-fullstack-developer.png'))">

  <!-- General -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('website/css/style.min.css') }}" type="text/css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
  <script src="{{ asset('website/js/webfont.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: [
          "Montserrat:100,200,300,400,500,600,700,800,900",
          "Exo:100,200,300,400,500,600,700,800,900"
        ]
      }
    });
  </script>

  <!-- Webflow Compatibility Script -->
  <script type="text/javascript">
    !function (o, c) {
      var n = c.documentElement, t = " w-mod-";
      n.className += t + "js";
      ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) && (n.className += t + "touch");
    }(window, document);
  </script>

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://res.cloudinary.com/dsjmqta8w/image/upload/v1748752400/favicon_m5te4v.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="{{ asset('website/image/apple-touch-icon.png') }}">

  <!-- SEO Language -->
  <link rel="alternate" hreflang="en" href="{{ url('/') }}">

  <!-- Structured Data for Google (JSON-LD) -->
  @verbatim
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Raja Muhammad Ahsan",
      "alternateName": "Raja Ahsan",
      "jobTitle": "Full Stack Web Developer (Laravel, React, Node.js, WordPress) & UI/UX Designer",
      "image": "{{ asset('website/img/raja-ahsan-fullstack-developer.png') }}",
      "url": "https://itsons.com",
      "worksFor": {
        "@type": "Organization",
        "name": "Freelance / IT SONS"
      },
      "sameAs": [
        "https://www.linkedin.com/in/raja-ahsan-fullstack-developer/",
        "https://github.com/raja-ahsan"
      ],
      "description": "Raja Ahsan is a professional Full Stack Developer & WordPress Plugin Expert from Karachi, skilled in Laravel, React, Node.js, and UI/UX design. He develops scalable web applications, custom APIs, and interactive user experiences for businesses worldwide.",
      "knowsAbout": [
        "Full Stack Development",
        "Laravel Framework",
        "React.js",
        "Node.js",
        "WordPress Plugin Development",
        "API Integration",
        "UI/UX Design",
        "JavaScript & jQuery",
        "MySQL Database",
        "E-commerce Solutions",
        "Web Animation"
      ],
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Karachi",
        "addressCountry": "Pakistan"
      }
    }
  </script>
  @endverbatim
  
  @stack('styles')
</head>

<body class="@unless(request()->routeIs('index')) body @endif">
  @include('partials.header')

  @yield('content')

  @include('partials.footer')
</body>

</html>