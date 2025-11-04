@extends('layouts.master')

@section('title', 'UI/UX Designer - ' . config('app.name'))

@section('wf-page-id', '656ef8b027ad4189724cf4de')

@section('description', 'Professional UI/UX design services by Raja Ahsan. Figma designs, creative logos, branding, stationery, and book design. Expert in creating beautiful experiences that tell your brand\'s story.')

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "UI/UX Design",
  "name": "UI/UX Design Services - Raja Ahsan",
  "description": "Professional UI/UX design services including Figma designs, creative logos, branding, stationery, and book design. Creating beautiful experiences that tell your brand's story.",
  "provider": {
    "@type": "Person",
    "name": "Raja Ahsan",
    "email": "hellorajaahsan@gmail.com",
    "telephone": "+92-333-128-7496",
    "url": "{{ url('/') }}"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Worldwide"
  },
  "offers": {
    "@type": "Offer",
    "description": "UI/UX design and branding services"
  },
  "url": "{{ route('ui-ux-designer') }}"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "UI/UX Design Services - Raja Ahsan",
  "description": "Professional UI/UX design services by Raja Ahsan. Figma designs, creative logos, branding, stationery, and book design.",
  "url": "{{ route('ui-ux-designer') }}",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ url('/') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "UI/UX Designer",
        "item": "{{ route('ui-ux-designer') }}"
      }
    ]
  }
}
</script>
@endverbatim
@endsection

@section('content')
<main class="main">
    <div class="overflow-hidden">
        <section class="section is--hero">
            <div data-w-id="115ebf87-c90b-0ab8-7fc3-7a22e9694b35" class="hero__container">
                <div class="hero__text">
                    <h5 class="hero__subtitle">UI/UX Designer & Creative Brand Identity Specialist</h5>
                    <h1 class="hero__title">Designing beautiful experiences <br /> that tell your brand's story.</h1>
                    <a href="#" data-w-id="f4cc1f5a-89c1-af4f-876c-4758e2b68f5b" style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="cta is--ghost w-button">Let's start a project together</a>
                </div>
                <div class="clients__wrapper">
                    <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="clients__loop"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f28d9cce707e7605f2bfdc_Audible.webp" width="116" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="a13db041-5da7-2020-e35c-bb7e66259938" alt="Logo - Audible" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f2ba65aa262c2ee916df80_OP.webp" width="116" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="d1c1da47-d80b-1aa1-9633-3397c37c6210" alt="Logo - Olympia Production" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f28d9c2ac9c24bddc048a0_Ballantines.webp" width="116" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="906d5213-967a-103e-5440-6b1bcf5b8dcb" alt="Logo - Ballantines" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb63c6228f1b593b10bf8_Jamel.webp" width="116" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="b92c173d-5611-b281-13a9-9f4c37e2a74a" alt="Logo - Jamel Debbouze" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d80446ec420cedc7_MHD.webp" width="116" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.1, 0.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" data-w-id="a9aee1ea-e9e3-a921-1124-164be8dd4c70" alt="Logo - MHD" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651603a6c2d7c52c6f9_Supermood.webp" width="116" alt="Logo - Supermood" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6514df11f2e6b081671_RES.webp" width="116" alt="Logo - Rock en Seine" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6a3d559c0cd8fab3be5_Krug.webp" width="116" alt="Logo - Krug" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black.webp" width="116" sizes="69.4375px" srcset="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black-p-500.webp 500w, https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black-p-800.webp 800w, https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black.webp 1785w" alt="Logo - Swile" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6a31432f497bfb447ca_Cokau.webp" width="116" alt="Logo - Cokau lab" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651fa6ce94c14bb8895_Timsit.webp" width="116" alt="Logo - Patrick Timsit" class="marquee-logo"></div>
                    <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="clients__loop"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f28d9cce707e7605f2bfdc_Audible.webp" width="116" alt="Logo - Audible" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f2ba65aa262c2ee916df80_OP.webp" width="116" alt="Logo - Olympia Production" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f28d9c2ac9c24bddc048a0_Ballantines.webp" width="116" alt="Logo - Ballantines" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb63c6228f1b593b10bf8_Jamel.webp" width="116" alt="Logo - Jamel Debbouze" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d80446ec420cedc7_MHD.webp" width="116" alt="Logo - MHD" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651603a6c2d7c52c6f9_Supermood.webp" width="116" alt="Logo - Supermood" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6514df11f2e6b081671_RES.webp" width="116" alt="Logo - Rock en Seine" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6a3d559c0cd8fab3be5_Krug.webp" width="116" alt="Logo - Krug" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black.webp" width="116" sizes="69.4375px" srcset="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black-p-500.webp 500w, https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black-p-800.webp 800w, https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651d3ac4de0721dc62c_Swile_black.webp 1785w" alt="Logo - Swile" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb6a31432f497bfb447ca_Cokau.webp" width="116" alt="Logo - Cokau lab" class="marquee-logo"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/645bb651fa6ce94c14bb8895_Timsit.webp" width="116" alt="Logo - Patrick Timsit" class="marquee-logo"></div>
                </div>
            </div>
            <div class="hero__webpages">
                <div data-w-id="7e286e84-b54f-0442-122c-714371a9939f" style="opacity:0" class="webpages__wrapper">
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--1"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo1.jpg') }}" loading="eager" alt="Depeacock Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "example_img",
                                        "origFileName": "Depeacock - Depeacock Logo",
                                        "fileName": "Depeacock - Depeacock Logo",
                                        "fileSize": 72404,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo1.jpg') }}",
                                        "width": 1080,
                                        "caption": "Depeacock Logo - Depeacock Logo",
                                        "type": "image",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--2"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo2.jpg') }}" loading="eager" alt="Green Gragons" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "example_img",
                                        "origFileName": "Green Gragons - Logo",
                                        "fileName": "Green Gragons - Logo",
                                        "fileSize": 133792,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo2.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Green Gragons - Logo",
                                        "link": "#"

                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--3"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo3.jpg') }}" loading="eager" alt="Flobble Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "example_img",
                                        "origFileName": "Flobble - Logo",
                                        "fileName": "Flobble - Logo",
                                        "fileSize": 140983,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo3.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Flobble - Logo",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--4"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo4.jpg') }}" loading="eager" alt="Vapor Zoo Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "65d36262180a8e89af86fe02",
                                        "origFileName": "Vapor Zoo - Logo",
                                        "fileName": "Vapor Zoo - Logo",
                                        "fileSize": 76764,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo4.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Vapor Zoo - Logo",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--3"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo5.jpg') }}" loading="eager" alt="Goat Glitch Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "65d36262f0ba71bf5f1e3e51",
                                        "origFileName": "Goat Glitch - Logo",
                                        "fileName": "Goat Glitch - Logo",
                                        "fileSize": 87028,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo5.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Goat Glitch - Logo",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--2"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo6.jpg') }}" loading="eager" alt="Trainy Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "65d362629c2f08c97d12bdef",
                                        "origFileName": "Trainy - Logo",
                                        "fileName": "Trainy - Logo",
                                        "fileSize": 42590,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo6.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Trainy - Logo",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                    <div style="-webkit-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="webpages__container is--1"><a href="#" class="webpages__lightbox w-inline-block w-lightbox"><img src="{{ asset('website/img/designs/logo/logo7.jpg') }}" loading="eager" alt="Click Bee Logo" class="webpages__img">
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "_id": "65d3626613d41be1713a0c59",
                                        "origFileName": "Click Bee - Logo",
                                        "fileName": "Click Bee - Logo",
                                        "fileSize": 70196,
                                        "height": 720,
                                        "url": "{{ asset('website/img/designs/logo/logo7.jpg') }}",
                                        "width": 1080,
                                        "type": "image",
                                        "caption": "Click Bee - Logo",
                                        "link": "#"
                                    }],
                                    "group": "Maquettes"
                                }
                            </script>
                        </a></div>
                </div>
            </div>
        </section>

        <!-- Figma Designs Section -->
        <section class="section" style="padding-top: 12em; padding-bottom: 4em;">
            <div class="container" style="margin: 0 auto; padding: 0 2em;">
                <div style="text-align: center; margin-bottom: 4em;">
                    <h2 class="project__title" style="color: #000; font-size: 2.5em; margin-bottom: 1em;">Figma Website Designs</h2>
                    <p style="color: #666; font-size: 1.2em; max-width: 700px; margin: 0 auto; margin-bottom: 4em;">Crafting pixel-perfect interfaces and user experiences with Figma. From wireframes to high-fidelity prototypes.</p>
                </div>
                <div class="hero__webpages">
                    <div class="webpages__wrapper" style="width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2em;">
                        <!-- Figma Design Item 1 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/1.png') }}" loading="lazy" alt="Figma UI Design - Winter 21" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_1",
                                            "origFileName": "Winter 21 - Figma UI Design",
                                            "fileName": "Winter 21 - Figma UI Design",
                                            "url": "{{ asset('website/img/designs/figma/1-1.jpg') }}",
                                            "type": "image",
                                            "fileSize": 72404,
                                            "width": 1080,
                                            "caption": "Winter 21 - Figma UI Design created in Figma with clean aesthetics and intuitive navigation."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 2 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/2.png') }}" loading="lazy" alt="Junak - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_2",
                                            "origFileName": "Junak - Figma UI Design",
                                            "fileName": "Junak - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/2-2.jpg') }}",
                                            "type": "image",
                                            "caption": "Junak - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 3 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/3.png') }}" loading="lazy" alt="K-Orsi - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_3",
                                            "origFileName": "K-Orsi - Figma UI Design",
                                            "fileName": "K-Orsi - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/3-3.jpg') }}",
                                            "type": "image",
                                            "caption": "K-Orsi - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 4 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/4.png') }}" loading="lazy" alt="Four - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_4",
                                            "origFileName": "Foursquare - Figma UI Design",
                                            "fileName": "Foursquare - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/4-4.jpg') }}",
                                            "type": "image",
                                            "caption": "Foursquare - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hero__webpages" style="padding-top: 20em;">
                    <div class="webpages__wrapper" style="width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2em;">
                        <!-- Figma Design Item 1 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/5.png') }}" loading="lazy" alt="Lumix - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_5",
                                            "origFileName": "Lumix - Figma UI Design",
                                            "fileName": "Lumix - Figma UI Design",
                                            "url": "{{ asset('website/img/designs/figma/5-5.jpg') }}",
                                            "type": "image",
                                            "fileSize": 72404,
                                            "width": 1080,
                                            "caption": "Lumix - Figma UI Design created in Figma with clean aesthetics and intuitive navigation."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 2 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/6.png') }}" loading="lazy" alt="Brand - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_6",
                                            "origFileName": "Brand - Figma UI Design",
                                            "fileName": "Brand - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/6-6.jpg') }}",
                                            "type": "image",
                                            "caption": "Brand - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 3 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/7.png') }}" loading="lazy" alt="Foodco - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_7",
                                            "origFileName": "Foodco - Figma UI Design",
                                            "fileName": "Foodco - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/7-7.jpg') }}",
                                            "type": "image",
                                            "caption": "Foodco - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Figma Design Item 4 -->
                        <div class="webpages__container" style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; background: #fff;">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox" style="display: block; position: relative; overflow: hidden;">
                                <img src="{{ asset('website/img/designs/figma/8.png') }}" loading="lazy" alt="Momi - Figma UI Design" class="webpages__img" style="width: 100%; height: auto; display: block; transition: transform 0.3s ease; object-fit: cover;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "figma_design_8",
                                            "origFileName": "Momi - Figma UI Design",
                                            "fileName": "Momi - Figma UI Design",
                                            "fileSize": 72404,
                                            "height": 720,
                                            "width": 1080,
                                            "url": "{{ asset('website/img/designs/figma/8-8.jpg') }}",
                                            "type": "image",
                                            "caption": "Momi - Figma UI Design created in Figma with modern UI patterns and user-centered design principles."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Figma Section Hover Effects */
            .webpages__wrapper .webpages__container {
                cursor: pointer;
            }

            .webpages__wrapper .webpages__container:hover {
                transform: translateY(-8px);
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12) !important;
            }

            .webpages__wrapper .webpages__container:hover .webpages__img {
                transform: scale(1.05);
            }

            @media (max-width: 768px) {
                .webpages__wrapper {
                    grid-template-columns: 1fr !important;
                    gap: 2em !important;
                }
            }
        </style>

        <!-- Creative Logos Section -->
        <section class="section" style="padding-top: 4em; margin-bottom: 4em; background-color: #f8f8f8;">
            <div class="container" style="max-width: 1200px;">
                <div style="text-align: center; margin-bottom: 4em;">
                    <h2 class="project__title" style="color: #000; font-size: 2.5em; margin-bottom: 1em;">Creative Logos</h2>
                    <p style="color: #666; font-size: 1.2em; max-width: 700px; margin: 0 auto;">Memorable brand identities that capture the essence of your business and make a lasting impression.</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3em; align-items: center;">
                    <!-- Logo Item 1 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/1.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Modern Brand Identity</h3>
                        <p style="color: #666; font-size: 0.9em;">Clean, contemporary logo design</p>

                    </div>

                    <!-- Logo Item 3 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/3.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Bold Typography</h3>
                        <p style="color: #666; font-size: 0.9em;">Typography-focused logo design</p>
                    </div>

                    <!-- Logo Item 4 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/4.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbol</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                    <!-- Logo Item 5 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/5.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Minimalist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Simple yet impactful branding</p>
                    </div>
                    <!-- Logo Item 6 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/6.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbolist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                    <!-- Logo Item 7 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/7.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbolist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                    <!-- Logo Item 8 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/8.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbolist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                    <!-- Logo Item 9 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/9.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbolist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                    <!-- Logo Item 10 -->
                    <div style="text-align: center; padding: 2em; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5em;">
                            <video src="{{ asset('website/img/designs/logo/10.mp4') }}" autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                            </video>
                        </div>
                        <h3 style="color: #000; font-size: 1.2em; margin-bottom: 0.5em;">Iconic Symbolist Design</h3>
                        <p style="color: #666; font-size: 0.9em;">Symbol-based brand mark design</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Branding Section -->
        <section class="section" style="margin-top: 4em; margin-bottom: 4em;">
            <div class="container" style="max-width: 1200px;">
                <div style="text-align: center; margin-bottom: 4em;">
                    <h2 class="project__title" style="color: #000; font-size: 2.5em; margin-bottom: 1em;">Branding</h2>
                    <p style="color: #666; font-size: 1.2em; max-width: 700px; margin: 0 auto;">Complete brand identity systems that create cohesive and memorable experiences across all touchpoints.</p>
                </div>

                <div class="hero__webpages">
                    <div class="webpages__wrapper" style="width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2em;">
                        <!-- Branding Item 1 -->
                        <div class="webpages__container">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/branding/1.jpg') }}" loading="lazy" alt="Brand Identity Guide" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "branding_1",
                                            "origFileName": "Complete Brand Identity",
                                            "fileName": "Complete Brand Identity",
                                            "url": "{{ asset('website/img/designs/branding/1.jpg') }}",
                                            "type": "image",
                                            "caption": "Comprehensive brand identity guide including color palette, typography, and usage guidelines."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Branding Item 2 -->
                        <div class="webpages__container">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/branding/2.jpg') }}" loading="lazy" alt="Brand Identity Guide" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "branding_2",
                                            "origFileName": "Complete Brand Identity",
                                            "fileName": "Complete Brand Identity",
                                            "url": "{{ asset('website/img/designs/branding/2.jpg') }}",
                                            "type": "image",
                                            "caption": "Comprehensive brand identity guide including color palette, typography, and usage guidelines."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Branding Item 3 -->
                        <div class="webpages__container">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/branding/3.jpg') }}" loading="lazy" alt="Brand Identity Guide" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "branding_3",
                                            "origFileName": "Complete Brand Identity",
                                            "fileName": "Complete Brand Identity",
                                            "url": "{{ asset('website/img/designs/branding/3.jpg') }}",
                                            "type": "image",
                                            "caption": "Comprehensive brand identity guide including color palette, typography, and usage guidelines."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>

                        <!-- Branding Item 5 -->
                        <div class="webpages__container">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/branding/4.jpg') }}" loading="lazy" alt="Brand Identity Guide" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "branding_4",
                                            "origFileName": "Complete Brand Identity",
                                            "fileName": "Complete Brand Identity",
                                            "url": "{{ asset('website/img/designs/branding/4.jpg') }}",
                                            "type": "image",
                                            "caption": "Comprehensive brand identity guide including color palette, typography, and usage guidelines."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Branding Item 6 -->
                        <div class="webpages__container">
                            <a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/branding/5.jpg') }}" loading="lazy" alt="Brand Identity Guide" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "branding_5",
                                            "origFileName": "Complete Brand Identity",
                                            "fileName": "Complete Brand Identity",
                                            "url": "{{ asset('website/img/designs/branding/5.jpg') }}",
                                            "type": "image",
                                            "caption": "Comprehensive brand identity guide including color palette, typography, and usage guidelines."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stationery Design Section -->
        <section class="section" style="padding-top: 4em; margin-bottom: 4em; background-color: #f8f8f8;">
            <div class="container" style="max-width: 1200px;">
                <div style="text-align: center; margin-bottom: 4em;">
                    <h2 class="project__title" style="color: #000; font-size: 2.5em; margin-bottom: 1em;">Stationery Design</h2>
                    <p style="color: #666; font-size: 1.2em; max-width: 700px; margin: 0 auto;">Professional business stationery that leaves a lasting impression. Business cards, letterheads, envelopes, and more.</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2.5em;">
                    <!-- Stationery Item 1 - Business Card -->
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/1.jpg') }}" alt="Business Card Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Business Cards</h3>
                            <p style="color: #666; font-size: 0.95em;">Premium business card designs that make connections memorable.</p>
                        </div>
                    </div>

                    <!-- Stationery Item 2 - Letterhead -->
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/2.jpg') }}" alt="Letterhead Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Letterheads</h3>
                            <p style="color: #666; font-size: 0.95em;">Professional letterhead designs that reflect your brand identity.</p>
                        </div>
                    </div>

                    <!-- Stationery Item 3 - Envelope -->
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/3.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/4.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/5.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/6.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/7.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/8.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                    <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                        <img src="{{ asset('website/img/designs/stationery/9.jpg') }}" alt="Envelope Design" style="width: 100%; height: auto;">
                        <div style="padding: 1.5em;">
                            <h3 style="color: #000; font-size: 1.3em; margin-bottom: 0.5em;">Envelopes</h3>
                            <p style="color: #666; font-size: 0.95em;">Custom envelope designs that complement your brand stationery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Book Design Pages Section -->
        <section class="section" style="margin-top: 1em; padding-bottom: 6em;">
            <div class="container" style="max-width: 1200px;">
                <div style="text-align: center; margin-bottom: 4em;">
                    <h2 class="project__title" style="color: #000; font-size: 2.5em; margin-bottom: 1em;">Book Design Pages</h2>
                    <p style="color: #666; font-size: 1.2em; max-width: 700px; margin: 0 auto;">Beautiful book layouts and page designs that enhance readability and create engaging reading experiences.</p>
                </div>

                <div class="hero__webpages" style="padding-top: 12em;">
                    <div class="webpages__wrapper" style="width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2em;">
                        <!-- Book Design Item 1 -->
                        <div class="webpages__container"><a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/book-cover/1.webp') }}" loading="lazy" alt="Book Layout Design 1" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "book_design_1",
                                            "origFileName": "Book Layout Design",
                                            "fileName": "Book Layout Design",
                                            "url": "{{ asset('website/img/designs/book-cover/1.webp') }}",
                                            "type": "image",
                                            "caption": "Elegant book page layout with typography and imagery that enhances the reading experience."
                                        }]
                                    }
                                </script>
                            </a></div>

                        <!-- Book Design Item 2 -->
                        <div class="webpages__container"><a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/book-cover/2.webp') }}" loading="lazy" alt="Book Layout Design 2" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "book_design_2",
                                            "origFileName": "Modern Book Design",
                                            "fileName": "Modern Book Design",
                                            "url": "{{ asset('website/img/designs/book-cover/2.webp') }}",
                                            "type": "image",
                                            "caption": "Modern book design with clean layouts and visual hierarchy that guides readers."
                                        }]
                                    }
                                </script>
                            </a></div>

                        <!-- Book Design Item 3 -->
                        <div class="webpages__container"><a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/book-cover/3.webp') }}" loading="lazy" alt="Book Cover Design" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "book_design_3",
                                            "origFileName": "Book Cover Design",
                                            "fileName": "Book Cover Design",
                                            "url": "{{ asset('website/img/designs/book-cover/3.webp') }}",
                                            "type": "image",
                                            "caption": "Eye-catching book cover design that captures the essence of the content."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Book Design Item 4 -->
                        <div class="webpages__container"><a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/book-cover/4.webp') }}" loading="lazy" alt="Book Cover Design" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "book_design_4",
                                            "origFileName": "Book Cover Design",
                                            "fileName": "Book Cover Design",
                                            "url": "{{ asset('website/img/designs/book-cover/4.webp') }}",
                                            "type": "image",
                                            "caption": "Eye-catching book cover design that captures the essence of the content."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                        <!-- Book Design Item 5 -->
                        <div class="webpages__container"><a href="#" class="webpages__lightbox w-inline-block w-lightbox">
                                <img src="{{ asset('website/img/designs/book-cover/5.webp') }}" loading="lazy" alt="Book Cover Design" class="webpages__img" style="width: 100%; max-width: 250px; height: auto; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
                                <script type="application/json" class="w-json">
                                    {
                                        "items": [{
                                            "_id": "book_design_5",
                                            "origFileName": "Book Cover Design",
                                            "fileName": "Book Cover Design",
                                            "url": "{{ asset('website/img/designs/book-cover/5.webp') }}",
                                            "type": "image",
                                            "caption": "Eye-catching book cover design that captures the essence of the content."
                                        }]
                                    }
                                </script>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="section" style="padding-top: 6em; padding-bottom: 6em; margin-top: 0em; margin-bottom: 0em; background-color: #0B0B0B;">
            <div class="container" style="text-align: center; max-width: 800px;">
                <h2 style="color: #fff; font-size: 2.5em; margin-bottom: 1em;">Ready to Bring Your Brand to Life?</h2>
                <p style="color: #ccc; font-size: 1.2em; margin-bottom: 2em; line-height: 1.8;">Let's collaborate to create a design solution that perfectly represents your brand and resonates with your audience.</p>
                <a href="#" data-w-id="f4cc1f5a-89c1-af4f-876c-4758e2b68f5b" class="cta is--white w-button" style="width: 300px;
    margin: 0 auto;">Let's start a project together</a>
            </div>
        </section>
    </div>
</main>
@endsection