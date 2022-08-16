<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MEV</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="{{ asset('assets/images/home-menu/logo-up.png') }}" alt="Logo">
                </div>
                <nav class="nav">
                    <a class="nav__link active" href="#">Anunturi și Știri</a>
                    <a class="nav__link" href="#">Acte normative</a>
                    <a class="nav__link" href="#">Intrebari si Instructii </a>
                    <a class="nav__link" href="#">Lista AE </a>
                    <a class="nav__link" href="#">Verificarea</a>
                    <a class="nav__link" href="#">Certificare si acreditare </a>
                    <a class="nav__link" href="#">Contacte</a>
                    <a class="nav__serch" href="#">
                        <i class="fas fa-search"><img src="{{ asset('assets/images/home-menu/serch.png') }}"
                                alt="serch"></i>
                    </a>
                    <a class="nav__menu" href="#">
                        <i class="fas fa-menu-cart"><img src="{{ asset('assets/images/home-menu/person.png') }}"
                                alt="person"></i>
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <div class="hero-section w-100">
        <div class="bg-home">
            <img src="{{ asset('assets/images/home-menu/bg-home.jpg') }}" alt="">
        </div>
        <div class="hero-section-text">
            <div class="big__title">Some really big title</div>
            <div class="smoll__title">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse
                pariatur duis deserunt mollit.
            </div>
            <a class="button" href="#">BUTTON</a>

        </div>
    </div>

    <div class="section__container">
        <div class="up__title">
            <span class="up__text">Anunturi și Știri</span>
            <div class="up__menu">
                <a class="accordion__menu" href="#">
                    <span class="material-symbols-outlined">
                        south
                    </span>
                    New First
                </a>
                <a class="accordion__menu" href="#">
                    <span class="material-symbols-outlined">
                        filter_alt
                    </span>
                    Filter
                </a>
            </div>
        </div>
        <div class="news__blocks">
            <div class="news__block">
                <div class="news__block__headers">
                    <img src="{{ asset('assets/images/header-menu/item1.jpg') }}" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="news__block__bodys">
                    <div class="news__block__header__infos">
                        <span class="badges">Category</span>
                        <span class="dates">March 15 2020</span>
                    </div>
                    <h2 class="news__block__titles">Starting your traveling blog with Vasco</h2>
                </div>
            </div>
            <div class="news__block">
                <div class="news__block__header">
                    <img src="{{ asset('assets/images/header-menu/item2.jpg') }}" alt="">
                    <div class="news__block__header__info">
                        <span class="badge">Category</span>
                        <span class="date">March 15 2020</span>
                    </div>
                </div>
                <div class="news__block__body">
                    <h2 class="news__block__title">Starting your traveling blog with Vasco</h2>
                    <p class="news__block__text">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                        cupidatat incididunt sint deserunt ut voluptate aute.</p>
                    <a href="">Read more</a>
                </div>
            </div>
            <div class="news__block">
                <div class="news__block__header">
                    <img src="{{ asset('assets/images/header-menu/item4.jpg') }}" alt="">
                    <div class="news__block__header__info">
                        <span class="badge">Category</span>
                        <span class="date">March 15 2020</span>
                    </div>
                </div>
                <div class="news__block__body">
                    <h2 class="news__block__title">How does writing influence your personal brand?</h2>
                    <p class="news__block__text">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.
                        Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                        Elit aute irure.</p>
                    <a href="">Read more</a>
                </div>
            </div>
            <div class="news__block">
                <div class="news__block__header">
                    <img src="{{ asset('assets/images/header-menu/item4.jpg') }}" alt="">
                    <div class="news__block__header__info">
                        <span class="badge">Category</span>
                        <span class="date">March 15 2020</span>
                    </div>
                </div>
                <div class="news__block__body">
                    <h2 class="news__block__title">Start a blog to reach your creative peak</h2>
                    <p class="news__block__text">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                        cupidatat incididunt sint deserunt ut voluptate aute.</p>
                    <a href="">Read more</a>
                </div>
            </div>
        </div>
    </div>


    <div class="section__container">
        <div class="table__section">
            <div class="table__container">
                <div class="up__panel">
                    <span class="up__panel__title">Acte normative</span>
                    <form>
                        <input type="text" name=text class="search" placeholder="Search here">
                    </form>
                    <div class="nav__block">
                        <a class="up__panel__filter" href="#">
                            <span class="material-symbols-outlined">
                                south
                            </span>
                            Nev first
                        </a>
                        <a class="up__panel__filter" href="#">
                            <span class="material-symbols-outlined">
                                filter_alt
                            </span>
                            Filter
                        </a>
                    </div>
                </div>
                <div class="table__wrapper">
                    <table style="width:100%">
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Hotărârea Guvernului</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Ordine ale SFS</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Hotărârea Guvernului</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Ordine ale SFS</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Hotărârea Guvernului Nr. 55 din 05-02-2020 cu privire la aprobareaConceptului tehnic
                                    al Sistemului informațional automatizat „Monitorizarea electronică a
                                    vânzărilor”</span>
                                </div>
                            </td>
                            <td class="td__two">Hotărârea Guvernului</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Ordine ale SFS </td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Hotărârea Guvernului</td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5" src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                    esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                    Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                    nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Ordine ale SFS </td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="table__section__banner">
                <img src="{{ asset('assets/images/header-menu/item5.jpg') }}" alt="">
                <div class="table__section__body">
                    <h2 class="table__section__title">Get our latest news first</h2>
                    <h3 class="table__section__title2">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et.
                        Sunt qui esse pariatur duis deserunt mollit.</h3>
                    <span class="button__banner">Subscribe</span>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <div class="body__list">
            <div class="section__container">
                 <div class="grid-container">
                        <div class="grid-item">
                            Sapiente a sit, perferendis tempora cum ab iure omnis atque.
                        </div>
                        <div class="grid-item">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Accordion Item #1
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                     It's also worth noting that just about any HTML can go within the  though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Accordion Item #2
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                     though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Accordion Item #3
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       though the transition does limit overflow.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThor">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThor" aria-expanded="false" aria-controls="collapseThor">
                                        Accordion Item #4
                                      </button>
                                    </h2>
                                    <div id="collapseThor" class="accordion-collapse collapse" aria-labelledby="headingThor" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfive">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Accordion Item #5
                                      </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                       though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingsix">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Accordion Item #6
                                      </button>
                                    </h2>
                                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingseven">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        Accordion Item #7
                                      </button>
                                    </h2>
                                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingeight">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                        Accordion Item #8
                                      </button>
                                    </h2>
                                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                         though the transition does limit overflow.
                                      </div>
                                    </div>
                                  </div>

                              </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
