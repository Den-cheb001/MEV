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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>MEV</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-white p-0">
            <div class="container">
                <a class="navbar-brand " href="#"><img src="{{ asset('assets/images/home-menu/logo-up.png') }}"
                        alt="Logo"></a>
                <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                    <span class=""></span>
                    <span class=""></span>
                </button>
                <div class="collapse navbar-collapse px-3" id="navbarScroll">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">
                            Anunturi și Știri
                        </a>
                        <a class="nav-item nav-link" href="#">
                            Acte normative
                        </a>
                        <a class="nav-item nav-link" href="#">
                            Intrebari si Instructii

                        </a>
                        <a class="nav-item nav-link" href="#">
                            Lista AE

                        </a>
                        <a class="nav-item nav-link" href="#">
                            Verificarea

                        </a>
                        <a class="nav-item nav-link" href="#">
                            Certificare si acreditare

                        </a>
                        <a class="nav-item nav-link" href="#">
                            Contacte

                        </a>
                        <a class="nav-item nav-link" href="#">
                            <div class="nav__serch">
                                <div class="language">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenu2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="material-symbols-outlined">
                                                south
                                            </span>
                                            RU
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><button class="dropdown-item" type="button">RU</button></li>
                                            <li><button class="dropdown-item" type="button">RO</button></li>
                                            <li><button class="dropdown-item" type="button">EN</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <i class="fas fa-search">
                            <img src="{{ asset('assets/images/home-menu/serch.png') }}"alt="serch">
                        </i>

                        <i class="fas fa-menu-cart">
                            <img src="{{ asset('assets/images/home-menu/person.png') }}"alt="person">
                        </i>

                    </div>
                </div>
            </div>
        </nav>
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
                <div class="accordion__menu">
                    <div class="dropdown">
                        <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="material-symbols-outlined">
                                south
                            </span>
                            New first
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="button">Toate</button></li>
                            <li><button class="dropdown-item" type="button">Ordine ale SFS </button></li>
                            <li><button class="dropdown-item" type="button">Cerințele tehnice ale ECC</button></li>
                            <li><button class="dropdown-item" type="button">Hotărârea Guvernului</button></li>
                            <li><button class="dropdown-item" type="button">Category</button></li>
                        </ul>
                    </div>
                </div>
                <div class="accordion__menu">
                    <div class="dropdown">
                        <button class=" dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="material-symbols-outlined">
                                south
                            </span>
                            New first
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="button">Toate</button></li>
                            <li><button class="dropdown-item" type="button">Ordine ale SFS </button></li>
                            <li><button class="dropdown-item" type="button">Cerințele tehnice ale ECC</button></li>
                            <li><button class="dropdown-item" type="button">Hotărârea Guvernului</button></li>
                            <li><button class="dropdown-item" type="button">Category</button></li>
                        </ul>
                    </div>
                </div>
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
                    <div class="up__input">

                        <img src="{{ asset('assets/images/header-menu/String-icon.png') }}" alt="">
                        <input type="text" name=text class="search" placeholder="Search here">

                    </div>
                    <div class="nav__block d-flex">
                        <div class="up__panel__filter">
                            <div class="dropdown">
                                <button class=" dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-symbols-outlined">
                                        south
                                    </span>
                                    New first
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button class="dropdown-item" type="button">Toate</button></li>
                                    <li><button class="dropdown-item" type="button">Ordine ale SFS </button></li>
                                    <li><button class="dropdown-item" type="button">Cerințele tehnice ale
                                            ECC</button></li>
                                    <li><button class="dropdown-item" type="button">Hotărârea Guvernului</button>
                                    </li>
                                    <li><button class="dropdown-item" type="button">Category</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="up__panel__filter">
                            <div class="dropdown">
                                <button class=" dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-symbols-outlined">
                                        filter_alt
                                    </span>
                                    Filter
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button class="dropdown-item" type="button">Toate</button></li>
                                    <li><button class="dropdown-item" type="button">Ordine ale SFS </button></li>
                                    <li><button class="dropdown-item" type="button">Cerințele tehnice ale
                                            ECC</button></li>
                                    <li><button class="dropdown-item" type="button">Hotărârea Guvernului</button>
                                    </li>
                                    <li><button class="dropdown-item" type="button">Category</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__wrapper">
                    <table style="width:100%">
                        <tr>
                            <td class="td__one">
                                <div class="d-flex align-items-center">
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Hotărârea Guvernului Nr. 55 din 05-02-2020 cu privire la aprobareaConceptului
                                        tehnic
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
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
                                    <img class="img__word mr-5"
                                        src="{{ asset('assets/images/header-menu/word.png') }}"alt="">
                                    <span> Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui
                                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim.
                                        Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id
                                        deserunt
                                        nisi.</span>
                                </div>
                            </td>
                            <td class="td__two">Ordine ale SFS </td>
                            <td class="td__three">Acte legislative</td>
                            <td class="td__three">27.07.2020</td>
                        </tr>
                    </table>
                    <ul class="list__li">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
                        </li>
                    </ul>
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
                <div class="grid-item"
                    style="display: flex;flex-wrap: nowrap;justify-content: space-between;padding: 115px 25px ;">
                    <div class="title__grid">Liste</div>
                    <div class="button__grid">
                        <label class="switch"><input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="search__grid">
                        <img src="{{ asset('assets/images/header-menu/String-icon.png') }}" alt="">
                        <input type="text" name=text class="search" placeholder="Search here">

                    </div>
                    <div class="nav__block">
                        <div class="up__panel__filter">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Filter
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button class="dropdown-item" type="button">Action</button></li>
                                    <li><button class="dropdown-item" type="button">Another action</button></li>
                                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="grid-item"
                    style="display: flex; flex-wrap:nowrap; justify-content: space-between; padding:115px 20px ;">
                    <div class="grid__right__title">Cele mai frecvente întrebări</div>
                    <a class="grid__right__button" href="#">Read more</a>
                </div>

                {{-- <div class="title__grid">Liste</div> --}}
                {{-- <div class="button__grid"><label class="switch"> --}}
                {{-- <input type="checkbox"> --}}
                {{-- <span class="slider round"></span> --}}
                {{-- </label></div> --}}
                {{-- <div class="search__grid"> <form> --}}
                {{-- <input type="text" name=text class="search" placeholder="Search here"> --}}
                {{-- </form></div> --}}
                {{-- <div class="nav__block"> --}}
                {{-- <a class="up__panel__filter" href="#"> --}}
                {{-- <span class="material-symbols-outlined"> --}}
                {{-- south --}}
                {{-- </span> --}}
                {{-- Nev first --}}
                {{-- </a> --}}
                {{-- </div> --}}

            </div>
            <div class="grid-container">
                <div class="grid-item">
                    <div class="grid__one__title">
                        <p>Producator ECC</p>
                        <p>Cod fiscal</p>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>
                    <div class="col-sm-15 bg-light p-4 border">
                        <span>Finance Leasing Company SRL</span><span>6859662</span>
                    </div>

                    <ul class="list__li">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="material-symbols-outlined">arrow_forward_ios</span></a>
                        </li>
                    </ul>
                </div>
                <div class="grid-item">
                    <div class="grid__one__title2">
                        <p>Producator ECC</p>
                        <p>Cod fiscal</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What documents i need for my business?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to fix a problem?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThor">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThor" aria-expanded="false"
                                    aria-controls="collapseThor">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapseThor" class="accordion-collapse collapse" aria-labelledby="headingThor"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi..
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false"
                                    aria-controls="collapsefive">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseseven" aria-expanded="false"
                                    aria-controls="collapseseven">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapseseven" class="accordion-collapse collapse"
                                aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseeight" aria-expanded="false"
                                    aria-controls="collapseeight">
                                    Placeholder
                                </button>
                            </h2>
                            <div id="collapseeight" class="accordion-collapse collapse"
                                aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor
                                    cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="verify__section">
        <img class="item__bg" src="{{ asset('assets/images/footer-items/item-bg.jpg') }}" alt="">
        <div class="verify__title">
            <span class="item__bg__title">Verifica bunul fiscal sau ECC in registru dupa serie si numar</span>
            <a class="item__bg__button" href="#">Verificarea</a>
        </div>
        <div class="overlay"></div>
    </div>

    <footer>
        <img class="foot__bg" src="{{ asset('assets/images/footer-items/foot-bg.jpg') }}" alt="">
        <div class="section__container">
            <div class="block__foot">
                <div class="block__one">
                    <div class="block__one__title">
                        <img class="foot__logo" src="{{ asset('assets/images/footer-items/foot-logo.png') }}"
                            alt="">
                        <span class="span__mev">Monitorizarea
                            Electronica
                            a Vânzărilor</span>

                    </div>
                    <div class="block__one__content">
                        Transferul în timp real al datelor fiscale de la echipamentele de casă și control (ECC) către
                        serverul Serviciului Fiscal de Stat,
                        analiza datelor financiare, automatizarea proceselor de evidență, administrare și monitorizare a
                        vânzărilor, precum și verificare
                        on-line de către consumatorii finali a veridicității și integrității bonurilor fiscale primite
                        vor fi posibile prin intermediul Sistemului Informațional Automatizat „Monitorizarea electronică
                        a vânzărilor” (SIA MEV)
                    </div>
                    <div class="block__one__fut">
                        2020 © Serviciul Fiscal de Stat de pe lîngă Ministerul Finanțelor al RM
                    </div>
                </div>

                <div class="block__two">
                    <div class="block__two__title">
                        <img src="{{ asset('assets/images/footer-items/compas.png') }}" alt="">
                        <h3 class="navigation">Navigation</h3>
                    </div>
                    <div class="block__two__navigation">
                        <a href="#">Anunturi și Știri</a>
                        <a href="#">Acte normative</a>
                        <a href="#">Intrebari si Instructii </a>
                        <a href="#">Liste ECC/AE</a>
                        <a href="#">Verificarea</a>
                        <a href="#">Certificare si acreditare </a>
                        <a href="#">Contacte</a>
                    </div>
                </div>

                <div class="block__three">
                    <div class="block__three__title">
                        <img src="{{ asset('assets/images/footer-items/!ltem.png') }}" alt="">
                        <h4 class="contacte">Contacte</h4>
                    </div>
                    <div class="block__three__contacte">
                        <div class="block__three__one">
                            <p class="sfs">SFS</p>
                            <p>Tel Anticamera: 022 822-000</p>
                            <p>Tel Centrul de Apel: 022 822-000</p>
                            <p>Fax: 022 211-202</p>
                            <p>Email: ctif@ctif.gov.md</p>

                        </div>
                        <div class="block__three__two">
                            <p class="sfs">Сomisia interdepartamentala</p>
                            <p>Tel Anticamera: 022 822-000</p>
                            <p>Tel Centrul de Apel: 022 822-000</p>
                            <p>Fax: 022 211-202</p>
                            <p>Email: ctif@ctif.gov.md</p>
                        </div>
                        <div class="adress">Republica Moldova mun. Chișinău, MD-2005 str. Constantin Tănase, 7</div>
                    </div>

                </div>

                <div class="block__thor">
                    <img src="{{ asset('assets/images/footer-items/right-bg.jpg') }}" alt="">
                    <div class="overlay"></div>
                    <div class="block__thor__content">
                        <p>Questions?</p>
                        <a class="button__see" href="#">See FAQ</a>
                        <p>Get our latest news</p>
                        <a class="button__sub" href="#">Subscribe</a>
                    </div>

                </div>

            </div>
        </div>
    </footer>

</body>

</html>
