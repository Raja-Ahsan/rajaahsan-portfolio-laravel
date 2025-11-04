  <!-- Header Content Starts (Preloader, Navigation, Cursor, Form, Loader) -->
  @if(request()->routeIs('index'))
  <!-- Home Page Preloader -->
  <div data-w-id="b3d63899-ce32-f543-37fb-da61f1cf9c77" style="display:flex" class="preloader">
    <div class="panel__wrapper"><img src="{{ asset('website/img/loader.png') }}" loading="lazy"
        style="-webkit-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        alt="Raja Ahsan logo - white" class="preloader__img">
      <div
        style="-webkit-transform:translate3d(null, 0vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);-moz-transform:translate3d(null, 0vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);-ms-transform:translate3d(null, 0vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);transform:translate3d(null, 0vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg)"
        class="panel-left"></div>
      <div
        style="-webkit-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);-moz-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);-ms-transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg);transform:translate3d(null, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, -45deg)"
        class="panel-right">      </div>
    </div>
  </div>
  @endif
  <div class="global">
    <div class="custom-code w-embed">
      <style>
        body {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          overflow-y: scroll;
          overflow-x: hidden;
        }

        .weglot_switcher {
          display: none;
        }

        ::-webkit-scrollbar {
          width: 0px;
        }

        ::selection {
          background: #fda228;
          /* WebKit/Blink Browsers */
        }

        ::-moz-selection {
          background: #fda228;
          /* Gecko Browsers */
        }

        .no-scroll {
          overflow: hidden;
        }

        .no-margin {
          margin: 0 !important;
        }

        .cursor,
        .intro__photo,
        .heading-outline {
          pointer-events: none;
        }

        .is--outline-text {
          /* Valeurs de largeur et de couleur */
          -webkit-text-stroke: 1px #0B0B0B !important;
        }

        .intro__link,
        .about__heading-outline {
          /* Valeurs de largeur et de couleur */
          -webkit-text-stroke: 2px #ffffff !important;
        }

        .photo__cover {
          cursor: none !important;
        }

        .photos-slide:nth-child(2n) {
          /* Valeurs de largeur et de couleur */
          /*margin-top: -8em;*/
        }

        /* Responsive Wizardry */
        @media only screen and (min-width: 1600px) {
          body {
            font-size: 16px;
          }
        }

        @media only screen and (max-width: 1440px) and (max-height: 740px) {
          body {
            font-size: 12px;
          }

          .intro__text.is--first {
            display: none;
          }
        }

        /*BOUTONS SLIDER*/
        .w-slider-dot.w-active {
          background-color: #FDA228 !important;
        }

        .w-slider-dot {
          background-color: #E9E9E9 !important;
          margin-left: 6px !important;
          margin-right: 6px !important;
        }
      </style>
    </div>
    <div class="black-curtain_transition">
      <div class="panel__wrapper">
        <div class="colorpanel-left"></div>
        <div class="colorpanel-right"></div>
      </div>
    </div>
    <nav class="nav flex-split is--white">
      <div class="container-xl is--menu"><a href="{{ route('index') }}" aria-current="page"
          class="nav__logo w-inline-block w--current"><img src="https://res.cloudinary.com/dsjmqta8w/image/upload/v1748751198/ahsan-logo_jsrirs.png" loading="lazy"
            alt="Logo Raja Ahsan" class="nav__logo-img"></a>
        <div data-w-id="adf3bcec-a7b9-7ee6-968c-bdba5e2c8a0c" class="menu__button">
          <div data-w-id="adf3bcec-a7b9-7ee6-968c-bdba5e2c8a0d" class="line"></div>
          <div data-w-id="adf3bcec-a7b9-7ee6-968c-bdba5e2c8a0e" class="line"></div>
          <div data-w-id="adf3bcec-a7b9-7ee6-968c-bdba5e2c8a0f" class="line"></div>
          <div data-w-id="adf3bcec-a7b9-7ee6-968c-bdba5e2c8a10" class="close">
            <div class="cross is--reverse"></div>
            <div class="cross"></div>
          </div>
        </div>
        <div class="nav__menu hide">
          @unless(request()->routeIs('index'))
          <a href="{{ route('index') }}" class="nav__item is-transition{{ request()->routeIs('index') ? ' is-active' : '' }}">Home</a>
          <a href="{{ route('webdesign') }}" class="nav__item is-transition{{ request()->routeIs('webdesign') ? ' is-active' : '' }}">Web Design</a>
          <a href="{{ route('ui-ux-designer') }}" class="nav__item is-transition{{ request()->routeIs('ui-ux-designer') ? ' is-active' : '' }}">UI/UX Designer</a>
          @endunless
          <a href="#" data-w-id="f4cc1f5a-89c1-af4f-876c-4758e2b68f5b" class="cta menu w-button" style="margin-right: 15px;">Let's start a project together</a>
          <a href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan"
            class="cta menu w-button">hellorajaahsan@gmail.com</a>
        </div>
        <div data-w-id="22d603c1-d2b5-51e3-3f78-2d24261fd7c3" class="nav__mobile">
          <div data-w-id="81234079-ad2a-f5ed-dca0-ab59bec89053" class="menu__line is--top"></div>
          @unless(request()->routeIs('index'))
          <a data-w-id="0cffded4-35c1-2041-d91f-e93f08b0affe" href="{{ route('webdesign') }}"
            class="nav__item--wrapper w-inline-block{{ request()->routeIs('webdesign') ? ' is-active' : '' }}">
            <div data-w-id="bd3125ab-c5db-fe45-1e48-bc5bc69386fe" class="nav__item--title">Web Design</div>
            <div data-w-id="b7fd9354-c75a-bd8c-da38-4cec0ab90d4e" class="faq__arrow is--mobile"><img
                src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/6204e4cefa407d267ed35bbc_Arrow_white.svg"
                loading="lazy" alt="White arrow" class="faq__arrow--image"></div>
            <div data-w-id="ad9d207c-7112-d300-f77a-c02c32993b89" class="menu__line"></div>
          </a>
          <a data-w-id="0cffded4-35c1-2041-d91f-e93f08b0affe" href="{{ route('ui-ux-designer') }}"
            class="nav__item--wrapper w-inline-block{{ request()->routeIs('ui-ux-designer') ? ' is-active' : '' }}">
            <div data-w-id="bd3125ab-c5db-fe45-1e48-bc5bc69386fe" class="nav__item--title">UI/UX Designer</div>
            <div data-w-id="b7fd9354-c75a-bd8c-da38-4cec0ab90d4e" class="faq__arrow is--mobile"><img
                src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/6204e4cefa407d267ed35bbc_Arrow_white.svg"
                loading="lazy" alt="White arrow" class="faq__arrow--image"></div>
            <div data-w-id="ad9d207c-7112-d300-f77a-c02c32993b89" class="menu__line"></div>
          </a>
          @endunless
          <div class="nav__contact-wrapper"><img
              src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/622231122ac5bbd33df08f0c_Cercles-jaunes.svg"
              loading="lazy" alt="" class="logo__mobile"><a
              href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan"
              class="nav__contact">hellorajaahsan@gmail.com</a><a href="tel:+923331287496" class="nav__contact">+92 (333)128-7496 </a>
          </div><a data-w-id="f4cc1f5a-89c1-af4f-876c-4758e2b68f5b" href="#" class="cta is--p-less w-button open-form-btn">Let's start
            a project !</a>

          <div class="nav__rs--wrapper"><a href="https://www.instagram.com/rajaa33333/" target="_blank"
              class="rs__link w-inline-block"><img
                src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61dd9ddd76c6a041987a4ccb_RS_insta.webp"
                loading="lazy" data-w-id="1d6fa60f-f97c-465c-15bf-13fbd59aa990" alt="Logo - Instagram"
                class="rs-img"></a>
              <a href="https://www.linkedin.com/in/raja-ahsan-fullstack-developer/" target="_blank"
                class="rs__link w-inline-block"><img
                  src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61dd9ddd76c6a0d11b7a4ccc_RS_Linkedin.webp"
                  loading="lazy" data-w-id="6e5e2d49-82f6-5a57-6d38-3e8a98ec032d" alt="Logo - Linkedin"
                  class="rs-img is--smaller"></a>
            </div>
        </div>
      </div>
    </nav>
    <div class="cursor">
      <div class="cursor__circle"><img
          src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp"
          loading="lazy" alt="Back arrow" class="cursor__img"></div>
    </div>
    
    <!-- Form Container -->
    <div class="form__container">
      <div class="form__wrap w-form">
        <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form">
          <div class="question-wrap"><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f09a" href="#" class="close-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/6231cae972a11c9142078d7c_close-x.svg" loading="lazy" alt="" class="close-icon"></a>
            <div class="q is-1">
              <div class="project-num is-form">
                <div class="num-txt">1</div>
                <div class="num-txt">/</div>
                <div class="num-txt">5</div>
              </div>
              <div class="form__intro">It only takes 2 minutes to complete.</div>
              <div class="question__title"><strong>What do you need?<br></strong></div>
              <div class="radio__buttons--wrapper"><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0ab" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Besoin" id="Site-internet" data-name="Besoin" style="opacity:0;position:absolute;z-index:-1" value="Site internet"><span for="Site-internet" class="radio-txt w-form-label">Website</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0b3" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Besoin" id="Branding-Design-Site" data-name="Besoin" style="opacity:0;position:absolute;z-index:-1" value="Branding + Design + Site"><span for="Branding-Design-Site" class="radio-txt w-form-label">Branding, design &amp; site</span>
                </label></div>
              <div class="q__photos">
                <div class="question__title text-white"><strong>Need photos? Contact me directly by mail : <br></strong></div><a href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan" class="cta is--reverse w-button">hellorajaahsan@gmail.com</a>
              </div>
            </div>
            <div class="q is-22">
              <div class="project-num is-form">
                <div class="num-txt">2</div>
                <div class="num-txt">/</div>
                <div class="num-txt">5</div>
              </div>
              <div class="question__title">When do you need it?<strong><br></strong></div>
              <div class="radio__buttons--wrapper"><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f102" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Deadline" id="Au-plus-vite" data-name="Deadline" style="opacity:0;position:absolute;z-index:-1" value="Au plus vite"><span for="Au-plus-vite" class="radio-txt w-form-label">As soon as possible</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f106" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" data-name="When" id="Dans-les-2-prochains-mois" name="When" style="opacity:0;position:absolute;z-index:-1" value="Dans les 2 prochains mois"><span for="Dans-les-2-prochains-mois" class="radio-txt w-form-label">In the next 2 months</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f10a" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" data-name="When" name="When" id="Dans-les-6-mois" style="opacity:0;position:absolute;z-index:-1" value="Dans les 6 mois"><span for="Dans-les-6-mois" class="radio-txt w-form-label">Within 6 months</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f10e" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" data-name="When" id="Peu-importe" name="When" style="opacity:0;position:absolute;z-index:-1" value="Peu importe"><span for="Peu-importe" class="radio-txt w-form-label">There's no rush</span>
                </label></div><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f112" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
            <div class="q is-3">
              <div class="project-num is-form">
                <div class="num-txt">3</div>
                <div class="num-txt">/</div>
                <div class="num-txt">5</div>
              </div>
              <div class="question__title">What is your budget to achieve these objectives?<strong><br></strong></div>
              <div class="radio__buttons--wrapper"><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0e3" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Budget" id="4000---8000" data-name="Budget" style="opacity:0;position:absolute;z-index:-1" value="4000 - 8000 $"><span for="4000---8000" class="radio-txt w-form-label">4000 - 8000 $</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0e7" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Budget" id="8000---12000" data-name="Budget" style="opacity:0;position:absolute;z-index:-1" value="8000 - 12000 $"><span for="8000---12000" class="radio-txt w-form-label">8000 - 12000 $</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0eb" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Budget" id="12000---20000" data-name="Budget" style="opacity:0;position:absolute;z-index:-1" value="12000 - 20000$"><span for="12000---20000" class="radio-txt w-form-label">12000 - 20000$</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0ef" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="Budget" id="20000" data-name="Budget" style="opacity:0;position:absolute;z-index:-1" value="+ 20000$"><span for="20000" class="radio-txt w-form-label">+ 20000 $</span>
                </label></div><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0f3" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
            <div class="q is-44">
              <div class="project-num is-form">
                <div class="num-txt">4</div>
                <div class="num-txt">/</div>
                <div class="num-txt">5</div>
              </div>
              <div class="question__title">How did you learn about my work?<strong><br></strong></div>
              <div class="radio__buttons--wrapper"><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f121" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="D-couvert-par" id="Google" data-name="Découvert par" style="opacity:0;position:absolute;z-index:-1" value="Google"><span for="Google" class="radio-txt w-form-label">Google search</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f125" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="D-couvert-par" id="Bouche-oreille" data-name="Découvert par" style="opacity:0;position:absolute;z-index:-1" value="Bouche à oreille"><span for="Bouche-oreille" class="radio-txt w-form-label">Word of mouth</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f129" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="D-couvert-par" id="Ancien-projet" data-name="Découvert par" style="opacity:0;position:absolute;z-index:-1" value="Ancien projet"><span for="Ancien-projet" class="radio-txt w-form-label">One of my old projects</span>
                </label><label data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f12d" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="D-couvert-par" id="Reseaux-sociaux" data-name="Découvert par" style="opacity:0;position:absolute;z-index:-1" value="Réseaux sociaux"><span for="Reseaux-sociaux" class="radio-txt w-form-label">Social Networks</span>
                </label><label data-w-id="35923eb1-77bd-94fc-5d9d-05fc867ae38c" class="radio__button w-radio">
                  <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio w-radio-input"></div><input type="radio" name="D-couvert-par" id="R-seaux-sociaux" data-name="Découvert par" style="opacity:0;position:absolute;z-index:-1" value="Réseaux sociaux"><span for="R-seaux-sociaux" class="radio-txt w-form-label">Other</span>
                </label></div><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f131" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
            <div class="q is-55">
              <div class="project-num is-form">
                <div class="num-txt">5</div>
                <div class="num-txt">/</div>
                <div class="num-txt">5</div>
              </div>
              <div class="question__title"><strong>Finally, please fill in your details so that I can get back to you as soon as possible.<br></strong></div>
              <div class="radio__buttons--wrapper">
                <div class="form-row"><input class="txt-field is-half w-input" autofocus="true" maxlength="256" name="Nom-3" data-name="Nom 3" placeholder="Name" type="text" id="Nom-3" required=""><input class="txt-field is-half w-input" maxlength="256" name="Entreprise-2" data-name="Entreprise 2" placeholder="Name of your company" type="text" id="Entreprise-2"></div>
                <div class="form-row"><input class="txt-field is-half w-input" maxlength="256" name="Email-2" data-name="Email 2" placeholder="E-mail" type="email" id="Email-2" required=""><input class="txt-field is-half w-input" maxlength="256" name="T-l-phone-2" data-name="T L Phone 2" placeholder="Phone number" type="tel" id="T-l-phone-2" required=""></div><textarea placeholder="Message" maxlength="5000" id="Message-2" name="Message-2" data-name="Message 2" class="txt-field is-msg w-input"></textarea><input type="submit" data-wait="Sending..." class="radio__button w-button" value="Send">
              </div><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f148" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
            <div class="q is-photos">
              <div class="question__title">For all your services needs, <br>contact me directly by e-mail:<strong><br></strong></div><a href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan" class="cta is--photos w-button">hellorajaahsan@gmail.com</a><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f153" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
            <div class="q is-2 hide">
              <div class="project-num is-form">
                <div class="num-txt">2</div>
                <div class="num-txt">/</div>
                <div class="num-txt">6</div>
              </div>
              <div class="question__title">What kind of issues are you facing?<br>What are the goals you aspire to acheive?<strong><br></strong></div>
              <div class="radio__buttons--wrapper"><textarea placeholder="Tell me everything..." maxlength="5000" id="Reason-2" name="Reason-2" data-name="Reason 2" class="txt-field is-msg w-input"></textarea><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0d2" href="#" class="radio__button w-button">Next</a></div><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f0d4" href="#" class="back-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/61fa5ae131de253e0d866d9b_Arrow.webp" loading="lazy" alt="" class="back-icon"></a>
            </div>
          </div>
        </form>
        <div class="success w-form-done" style="display: none;"><a data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f156" href="#" class="close-button w-inline-block"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/6231cae972a11c9142078d7c_close-x.svg" loading="lazy" alt="" class="close-icon"></a>
          <div class="success__text"><span class="success-heading">Thank you!<br></span>I will get back to you as soon as possible 👋</div>
        </div>
        <div class="error w-form-fail" style="display: none;">
          <div class="error__txt no--mobile">Oops, the form encountered an error. Please try again or contact me by email: <a href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan" class="error__txt">hellorajaahsan@gmail.com</a></div>
          <div class="error__txt is--mobile">Oops, the form encountered an error... Please try again.<a href="mailto:hellorajaahsan@gmail.com?subject=Contact%20Request%20-%20Raja%20Ahsan" class="error__txt"></a></div>
        </div>
      </div>
      <div data-w-id="29ee1b45-56ce-d078-234d-c9b91de1f166" class="close-form-div"></div>
    </div>
    
    <!-- Inner Page Loader (only for non-home pages) -->
    @unless(request()->routeIs('index'))
    <div class="loader">
      <div class="nav-bg"><img src="https://cdn.prod.website-files.com/61dd9ddd76c6a058a47a4c57/62223071a8da772acdf6f8d8_Logo-B.svg" loading="lazy" alt="" class="loader-img"></div>
      <div class="loader-bottom-img"></div>
    </div>
    <div class="black_curtain" style="display: block;"></div>
    @endunless
  </div>
  <!-- Header Content Ends -->