@unless(request()->routeIs('index'))
<footer id="footer" class="footer is--black">
  <div class="container is--footer">
    <div class="footer__text">Raja Ahsan - Website handmade with Laravel 👋</div>
    <div class="footer__nav"><a href="{{ route('webdesign') }}" aria-current="page"
        class="nav__item text-white">Web Design</a><a href="{{ route('ui-ux-designer') }}" class="nav__item text-white">UI/UX Designer</a><a
        href="{{ route('terms-of-use') }}" class="nav__item text-white">Terms of use</a></div>
  </div>
</footer>
@endunless

<script src="{{ asset('website/js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('website/js/custom.main.js') }}" type="text/javascript"></script>

<!-- Ensure Webflow Animations Initialize and Fix Black Curtain -->
<script>
  $(document).ready(function() {
    // Initialize Webflow interactions
    if (typeof Webflow !== 'undefined') {
      try {
        Webflow.require('ix2').init();
        Webflow.ready();
      } catch(e) {
        console.log('Webflow initialization:', e);
      }
    }
    
    @unless(request()->routeIs('index'))
    // For inner pages: Ensure loader and black curtain are handled
    var $blackCurtain = $('.black_curtain');
    var $loader = $('.loader');
    
    // Fallback: Hide black curtain and loader if animations don't trigger
    setTimeout(function() {
      // Check if curtain is still visible (Webflow should hide it via animations)
      if ($blackCurtain.length && $blackCurtain.css('display') !== 'none' && !$blackCurtain.hasClass('w-hidden')) {
        $blackCurtain.css('display', 'none');
      }
      
      // Hide loader after animation completes
      setTimeout(function() {
        if ($loader.length && $loader.css('display') !== 'none') {
          $loader.css('display', 'none');
        }
      }, 2000);
    }, 1500);
    @endunless
  });
</script>

<!-- Form Popup Handler -->
<script>
  $(document).ready(function() {
    // Handle form popup opening
    $('.open-form-btn').on('click', function(e) {
      e.preventDefault();
      var $formContainer = $('.form__container');
      if ($formContainer.length) {
        // Show the form container
        $formContainer.css('display', 'block');
        $formContainer.addClass('is--open');
        // Prevent body scroll
        $('body').addClass('no-scroll');
        // Reset form to first question
        $('.q').removeClass('hide');
        $('.q.is-1').addClass('is--active').siblings('.q').not('.is-1').removeClass('is--active');
        $('.q:not(.is-1)').addClass('hide');
        // Show form, hide success/error messages
        $('#email-form').css('display', 'block');
        $('.w-form-done').css('display', 'none');
        $('.w-form-fail').css('display', 'none');
      }
    });
    
    // Handle form popup closing
    $('.close-button, .close-form-div').on('click', function(e) {
      e.preventDefault();
      var $formContainer = $('.form__container');
      if ($formContainer.length) {
        // Hide the form container
        $formContainer.css('display', 'none');
        $formContainer.removeClass('is--open');
        // Allow body scroll
        $('body').removeClass('no-scroll');
      }
    });
  });
</script>

<!-- Custom Form Handler -->
<script>
  $(document).ready(function() {
    var $form = $('#email-form');
    if ($form.length === 0) {
      return;
    }
    
    // Remove ALL existing handlers and data to prevent Webflow from handling it
    $form.off('submit');
    $form.removeData('w-form'); // Remove Webflow data
    $form.attr('data-wf-page-id', ''); // Clear Webflow attributes
    $form.attr('data-wf-element-id', '');
    
    // Add our custom handler with highest priority
    $form.on('submit', function(e) {
      console.log('=== FORM SUBMIT TRIGGERED ===');
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();
      
      var $formWrapper = $form.closest('.w-form');
      var $successDiv = $formWrapper.find('.w-form-done');
      var $failDiv = $formWrapper.find('.w-form-fail');
      var $submitBtn = $form.find('input[type="submit"]');
      var submitText = $submitBtn.data('wait') || 'Sending...';
      var originalText = $submitBtn.val();
      
      // Disable submit button
      $submitBtn.prop('disabled', true).val(submitText);
      
      // Hide any previous messages
      $successDiv.css('display', 'none');
      $failDiv.css('display', 'none');
      
      // Collect form data
      var formData = {};
      
      // Get radio button values
      $form.find('input[type="radio"]:checked').each(function() {
        var name = $(this).attr('name');
        var value = $(this).val();
        if (name) {
          formData[name] = value;
        }
      });
      
      // Get text inputs
      $form.find('input[type="text"], input[type="email"], input[type="tel"]').each(function() {
        var name = $(this).attr('name');
        var value = $(this).val();
        if (name) {
          formData[name] = value || '';
        }
      });
      
      // Get textarea
      $form.find('textarea').each(function() {
        var name = $(this).attr('name');
        var value = $(this).val();
        if (name) {
          formData[name] = value || '';
        }
      });
      
      // Send AJAX request
      $.ajax({
        url: '{{ route("contact.send-email") }}',
        type: 'POST',
        data: JSON.stringify({ fields: formData }),
        contentType: 'application/json',
        dataType: 'json',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        timeout: 30000,
        success: function(response) {
          console.log('Email response:', response);
          
          if (response && response.code === 200) {
            console.log('Email sent successfully - showing success message');
            // Hide form
            $form.css('display', 'none');
            $failDiv.css('display', 'none');
            // Show success message
            $successDiv.css('display', 'block');
            
            // Try to scroll to success message
            $('html, body').animate({
              scrollTop: $successDiv.offset().top - 100
            }, 500);
          } else {
            console.log('Failed:', response);
            // Show error message
            $form.css('display', 'none');
            $successDiv.css('display', 'none');
            $failDiv.css('display', 'block');
          }
        },
        error: function(xhr, status, error) {
          console.log('AJAX Error:', status, error, xhr.responseText);
          // Show error message
          $form.css('display', 'none');
          $successDiv.css('display', 'none');
          $failDiv.css('display', 'block');
        },
        complete: function() {
          // Re-enable submit button
          $submitBtn.prop('disabled', false).val(originalText);
        }
      });
      
      return false;
    });
    
    // Also prevent Webflow from attaching its handler
    setTimeout(function() {
      if ($form.data('w-form')) {
        console.log('Removing Webflow form handler');
        $form.removeData('w-form');
      }
    }, 100);
  });
</script>

<!-- Force each page to reload when using the browser's "back" button -->
<script>
  window.addEventListener("pageshow", function(event) {
    var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
    if (historyTraversal) {
      window.location.reload();
    }
  });
</script>

<!-- Page Transition Scripts -->
<script>
  $('.photos__single--link, .intro__link-web, .intro__link-photo, .nav__logo, .nav__item, .inner--link, .splide__link, .photos__link, .collections-link, .nav__item--wrapper, .collections-link, .is-transition').click(function(e) {
    e.preventDefault(); // prevent default anchor behavior
    var goTo = this.getAttribute("href"); // store anchor href

    setTimeout(function() {
      window.location = goTo;
    }, 1200);
  });
</script>

<!-- Splide Slider Scripts (Only for inner pages) -->
@unless(request()->routeIs('index'))
<style>
  .splide__arrow.splide__arrow--next,
  .splide__arrow.splide__arrow--prev,
  .splide__pagination {
    display: none;
  }
  .splide *:focus {
    outline: none;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
  if (document.querySelector('.splide')) {
    new Splide('.splide', {
      perPage: 3,
      perMove: 1,
      focus: 0,
      type: 'loop',
      gap: '4.44em',
      arrows: 'slider',
      pagination: 'slider',
      speed: 1200,
      dragAngleThreshold: 60,
      autoWidth: false,
      rewind: true,
      rewindSpeed: 1200,
      waitForTransition: false,
      updateOnMove: true,
      trimSpace: false,
     
      breakpoints: {
        1200: {
          perPage: 2,
        },
     
        767: {
          perPage: 1,
        }
      }
    }).mount();
     
    $('.next-splide').click(function () {
      $('.splide__arrow.splide__arrow--next').click();
    });
     
    $('.prev-splide').click(function () {
      $('.splide__arrow.splide__arrow--prev').click();
    });
  }
</script>

<!-- Splide Cursor Interactions -->
<script>
  $('.splide__list, .trigger').hover(function () {
    $('.cursor__dot1').toggleClass('is--larger');
    $('.cursor__dot2').toggleClass('is--larger');
  });
   
  $('.trigger').mouseenter(function () {
      $('.cursor__text').text('OPEN');
  });
   
  $('.trigger').mouseleave(function () {
    $('.cursor__text').text('DRAG');
  });
   
  $('.control').hover(function () {
    $('.cursor__dot1').toggleClass('opacity-0');
    $('.cursor__dot2').toggleClass('light-ring');
  });
   
  $('.trigger').click(function () {
    $('.cursor').toggleClass('hide-cursor');
  });
   
  $('.trigger').click(function () {
    $('body').toggleClass('overflow-hidden');
  });
</script>

<!-- Cursor PROJETS -->
<script>
  $('.splide__track').hover(function () {
    $('.cursor__circle').toggleClass('shadow');
    $('.cursor__circle').toggleClass('is--larger');
    $('.cursor__img').toggleClass('is--visible');
  });
</script>

<!-- Cursor FORM -->
<script>
  $('.radio__button').hover(function () {
    $('.cursor__circle').toggleClass('shadow');
    $('.cursor__circle').toggleClass('is--larger');
    $('.cursor__img').toggleClass('is--visible');
  });
</script>
@endunless

<!-- Photos Slide Interactions -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.photos-slide').forEach(trigger => {
      trigger.addEventListener('mouseover', function() {
        this.classList.add('shadow');
      });
    });

    document.querySelectorAll('.photos-slide').forEach(trigger => {
      trigger.addEventListener('mouseout', function() {
        this.classList.remove('shadow');
      });
    });
  });
</script>

<!-- Cursor for Photos Wrapper -->
<script>
  $('.photos-wrapper').hover(function() {
    $('.cursor__circle').toggleClass('shadow');
    $('.cursor__circle').toggleClass('is--larger');
    $('.cursor__img').toggleClass('is--visible');
  });
</script>

<!-- Heading Outline Cursor -->
<script>
  $('.heading-outline__wrapper').hover(function() {
    $('.cursor__circle').toggleClass('shadow');
    $('.cursor__circle').toggleClass('is--larger');
    $('.cursor__img').toggleClass('is--visible');
  });
</script>

<!-- Intro Link Photo/Web Interactions -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.intro__link-photo').forEach(trigger => {
      trigger.addEventListener('mouseover', function() {
        document.querySelectorAll('.intro__link-web').forEach(target => target.classList.add('is--outline-text'));
      });
    });

    document.querySelectorAll('.intro__link-photo').forEach(trigger => {
      trigger.addEventListener('mouseout', function() {
        document.querySelectorAll('.intro__link-web').forEach(target => target.classList.remove('is--outline-text'));
      });
    });
  });
</script>

<!-- Responsive Styles -->
<style>
  /* Responsive page Photos */
  @media only screen and (min-width: 1280px) and (max-height: 900px) {
    .is--hero {
      margin-top: 5.56em;
    }
    .is--normal {
      display: none;
    }
    .is--small-screen {
      display: flex !important;
    }
    .photos__title {
      font-size: 3.2em;
    }
    .photos__clients {
      top: 0;
    }
  }

  @media only screen and (min-width: 1280px) and (max-height: 900px) {
    .is--intro {
      transform: scale(0.9);
    }
    .intro__buttons {
      bottom: 0;
    }
    .nav {
      padding-bottom: 0;
    }
  }

  @media only screen and (max-width: 450px) and (max-height: 700px) {
    .intro__photo {
      width: 80%;
      bottom: -10%;
    }
  }
</style>