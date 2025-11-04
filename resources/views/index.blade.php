@extends('layouts.master')

@section('title', 'Home - ' . config('app.name'))

@section('description', 'Raja Ahsan - Full Stack Web Developer & UI/UX Designer from Karachi, Pakistan. Specializing in Laravel, React, Node.js, WordPress, and custom web solutions. Professional portfolio showcasing web development and design projects.')

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Raja Ahsan - Full Stack Web Developer & UI/UX Designer",
  "description": "Professional portfolio of Raja Ahsan, a Full Stack Web Developer and UI/UX Designer from Karachi, Pakistan. Specializing in Laravel, React, Node.js, WordPress, and custom web solutions.",
  "url": "{{ url('/') }}",
  "mainEntity": {
    "@type": "Person",
    "name": "Raja Muhammad Ahsan",
    "alternateName": "Raja Ahsan",
    "jobTitle": "Full Stack Web Developer (Laravel, React, Node.js, WordPress) & UI/UX Designer",
    "image": "{{ asset('website/img/raja-ahsan-fullstack-developer.png') }}",
    "url": "{{ url('/') }}",
    "email": "hellorajaahsan@gmail.com",
    "telephone": "+92-333-128-7496",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Karachi",
      "addressRegion": "Sindh",
      "addressCountry": "Pakistan"
    }
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    }]
  }
}
</script>
@endverbatim
@endsection

@section('content')
<div style="-webkit-transform:translate3d(null, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1"
  class="main">
  <section class="section is--intro">
    <div class="container-xl is--intro">
      <div class="intro__content-wrapper">
        <div data-w-id="918f980a-0561-03d6-d64a-8d6a25ce224e"
          style="-webkit-transform:translate3d(null, -2.2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, -2.2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, -2.2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, -2.2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
          class="intro__text is--first">👋, My name is Raja Ahsan and I am a freelance</div>
        <div class="heading-outline__wrapper">
          <h1 data-w-id="8d57ad6c-62ec-f861-a23d-abc80ad9be26" style="opacity:0" class="heading-outline is--first"><a
              href="{{ route('webdesign') }}" style="opacity:1" class="intro__link is--first">Webdeveloper</a></h1>
          <div data-w-id="5dd49879-bb6d-9761-6b9f-99ef10e8ed50"
            style="-webkit-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="intro__title"><a href="{{ route('webdesign') }}" data-w-id="5257ce5e-755a-d725-a011-eb866b05f304"
              class="intro__link-web">Webdeveloper</a></div>
        </div>
        <div class="heading-outline__wrapper">
          <div class="heading-outline"><a href="{{ route('ui-ux-designer') }}" style="opacity:0" class="intro__link is--second">&amp;
              UI/UX designer</a></div>
          <div data-w-id="8eac85f7-1afe-c8e0-48bc-0a52a4b25563"
            style="-webkit-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-120%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
            class="heading-xl"><a href="{{ route('ui-ux-designer') }}" data-w-id="756ec37e-6306-f5c6-6e9b-77e2ff85246b"
              style="color:rgba(0,0,0,0)" class="intro__link-photo is--outline-text">&amp; UI/UX designer</a></div>
        </div>
        <div class="intro__bottom-text">
          <div data-w-id="918f980a-0561-03d6-d64a-8d6a25ce2256"
            style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="intro__text is--left">based in Karachi, Pakistan.</div>
          <div class="intro__clients"><img
              src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f28d9cce707e7605f2bfdc_Audible.webp"
              loading="lazy"
              style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              data-w-id="918f980a-0561-03d6-d64a-8d6a25ce225b" alt="Logo - Audible" class="client__logo"><img
              src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/65cbab5c94c74c892e74b831_Tissot.webp"
              loading="lazy"
              style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              data-w-id="918f980a-0561-03d6-d64a-8d6a25ce225c" alt="" class="client__logo"><img
              src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f2ba65aa262c2ee916df80_OP.webp"
              loading="lazy"
              style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              data-w-id="918f980a-0561-03d6-d64a-8d6a25ce225d" alt="Logo - Olympia Production"
              class="client__logo"><img
              src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61f2ba63c16a7a01bb75d746_Veuve Cliquot.webp"
              loading="lazy"
              style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.2, 0.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
              data-w-id="918f980a-0561-03d6-d64a-8d6a25ce225a" alt="Logo - Veuve Clicquot" class="client__logo"></div>
        </div>
      </div><img
        src="https://res.cloudinary.com/dsjmqta8w/image/upload/v1748751201/raja-ahsan_t02apt.png"
        loading="lazy" data-w-id="1ab57201-c476-c2b0-7aa9-86f41b75eb30"
        sizes="(max-width: 479px) 90vw, (max-width: 767px) 80vw, 40vw"
        alt="Photo portrait of Raja Ahsan, Webdeveloper and UI UX Designer"
        srcset="https://res.cloudinary.com/dsjmqta8w/image/upload/v1748751201/raja-ahsan_t02apt.png 947w"
        class="intro__photo">
      <div class="intro__buttons"><a data-w-id="834dc21c-d0d4-4d70-58cb-b9f497c3da30" href="{{ route('webdesign') }}"
          class="cta__mobile inner--link w-button">See my creations</a><a
          data-w-id="24eb596e-c75f-710a-88cc-c0867ddddfc4" href="{{ route('ui-ux-designer') }}"
          class="cta__mobile is--ghost inner--link w-button">Discover my Designs</a><a
          data-w-id="dcd55a3d-d607-333d-57a0-046353cdf060"
          style="-webkit-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          href="{{ route('webdesign') }}" class="cta padding--right inner-link no--mobile is-transition w-button">You need a
          Developer</a><a data-w-id="5d5055c2-e474-3228-4701-1f081e6fbf37"
          style="-webkit-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 1em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          href="{{ route('ui-ux-designer') }}" class="cta is--ghost no--mobile is-transition w-button">You need a UI UX Dsigner</a>
      </div>
    </div>
  </section>
</div>
@endsection
