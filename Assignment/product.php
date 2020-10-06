<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset200802.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg" style="display: none;">
        <defs>
            <filter id="blur-filter">
                <feGaussianBlur stdDeviation="5"></feGaussianBlur>
            </filter>
        </defs>
    </svg>
    <div class="container-fluid darkgray-color">
        <nav class="top-navbar container row center-align">
            <div class="logo-box col-1 col-md-2  col-sm-1">
                <a href="./index.html">
                    <img class="lazy" src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="menu-box col-2 hidden-md">
                <ul>
                    <li><a href="">Community</a></li>
                    <li><a href="">Forum</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </div>
            <div class="action-box col-1 hidden-md">
                <div class="icon-box">
                    <a href=""><i class="far fa-heart"></i></a>
                    <a href=""><i class="fa fa-shopping-basket"></i></a>
                </div>
                <div class="link-box">
                    <a href="">Login</a>
                    <span>|</span>
                    <a href="">Registration</a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 hidden show-md mobile-menu-icon">
                <a href=""><i class="far fa-heart"></i></a>
                <a href=""><i class="fa fa-shopping-basket"></i></a>
                <label for="mobileMenu"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </div>
    <input type="checkbox" class="mobileMenu" name="mobileMenu" id="mobileMenu">
    <div class="mobile-menu">
        <nav class="header-navbar">
            <label for="mobileMenu" class="mobile-close-icon"><i class="fas fa-times"></i></label>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" name="" id="" placeholder="Search here">
            </div>
            <ul>
                <li><a href=""><i class="fas fa-chart-line"></i>Best Sellers</a></li>
                <li><a href=""><i class="fas fa-calendar-plus"></i>New Games</a></li>
                <li><a href=""><i class="fas fa-tags"></i>Tag</a></li>
                <li><a href=""><i class="fas fa-globe"></i>News</a></li>
                <li><a href=""><i class="fa fa-gamepad" aria-hidden="true"></i>Games</a></li>
                <li><a href=""><i class="fas fa-video"></i>Video</a></li>
                <li><a href=""><i class="fas fa-desktop"></i>Screenshots</a></li>
                <li><a href=""><i class="fa fa-headphones" aria-hidden="true"></i>Support</a></li>
            </ul>
            <div class="link-box">
                <a href="">Login</a>
                <span>|</span>
                <a href="">Registration</a>
            </div>
        </nav>
    </div>
    <main class="container">
        <div class="row">
            <div class="col-4">
                <div class="breadcrumb">
                    <a href="">Home</a>
                    >
                    <a href="">Top games</a>
                    >
                    <a href="">Mafia III Digital Deluxe Preorder</a>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2 images-review">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/1.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/2.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/3.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/4.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/5.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/7.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/8.jpg)"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/1.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/2.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/3.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/4.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/5.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/7.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(./assets/images/game/1/8.jpg)"></div>
                    </div>
                </div>
            </div>
            <div class="col-2 product-tab-content">
                <h2 class="game-title">Mafia III Digital Deluxe Preorder</h2>
                <div class="rate">
                    <span>4.5</span>
                    <i class="fas fa-star    "></i>
                    <i class="fas fa-star    "></i>
                    <i class="fas fa-star    "></i>
                    <i class="fas fa-star    "></i>
                    <i class="fas fa-star-half    "></i>
                </div>

                <div class="">
                    <button class="btn">Add to cart $19.99</button>
                    <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
                </div>

                <div class="description">
                    <span>Description</span>
                    <p>The characters are well acted, too. This is partly down to dialogue that actually sounds natural, and also down to the individual actors’ performances. The quality of the motion capture does a huge amount to further the script. I’ve never seen game cinematics this good.</p>

                    <p>There are some incredible flashback sequences and some deeply unnerving moments, and that’s just in the first coupleof hours. I dread to think how dark things get later on in the game.</p>

                    <p>Unusually, Mafia’s story is told through a mix of documentary-style interviews after the fact and archive. footage from a CIA inquest, as well as the right-here-right-now scenes. The effect of the interview footage is a rather unsubtle way of ratcheting up the tension.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-5">

            <div class="col-2">
                <div class="square-row">
                    <div class="relative">
                        <div class="responsive-image blur">
                            <img class="lazy" src="./assets/images/borderlands3.png" alt="arma">
                        </div>
                        <div class="game-info">
                            <div class="game-name">
                                <a>BORDERLANDS 3</a>
                                <button class="outline-btn">
                                    Details
                                </button>
                                <button class="btn">
                                    In cart $19.99
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="responsive-image blur">
                            <img class="lazy" src="./assets/images/arma.jpg" alt="arma">
                        </div>
                        <div class="game-info">
                            <div class="game-name">
                                <a>BORDERLANDS 3</a>
                                <button class="outline-btn">
                                    Details
                                </button>
                                <button class="btn">
                                    In cart $19.99
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="responsive-image blur">
                            <img class="lazy" src="./assets/images/batman.jpg" alt="arma">
                        </div>
                        <div class="game-info">
                            <div class="game-name">
                                <a>BORDERLANDS 3</a>
                                <button class="outline-btn">
                                    Details
                                </button>
                                <button class="btn">
                                    In cart $19.99
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="responsive-image blur">
                            <img class="lazy" src="./assets/images/assassin.jpg" alt="arma">
                        </div>
                        <div class="game-info">
                            <div class="game-name">
                                <a>BORDERLANDS 3</a>
                                <button class="outline-btn">
                                    Details
                                </button>
                                <button class="btn">
                                    In cart $19.99
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="review-tab">
                    <div class="title">Review</div>
                    <div class="review-box">
                        <div class="review-avatar">
                            <div class="avatar-small">
                                <img src="assets/images/among-us.jpg" alt="">
                            </div>
                        </div>
                        <div class="review-wrapper">
                            <div class="username mb-1">
                                Daniel Mastro
                            </div>
                            <div class="review-date mb-2">
                                12 oct 2020
                            </div>
                            <div class="review-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum necessitatibus maxime placeat cumque, dolor ea non magnam doloribus mollitia dolorum, officiis tenetur quaerat. Dicta debitis quia vel ducimus nulla doloribus.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum necessitatibus maxime placeat cumque, dolor ea non magnam doloribus mollitia dolorum, officiis tenetur quaerat. Dicta debitis quia vel ducimus nulla doloribus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="review-box">
                        <div class="review-avatar">
                            <div class="avatar-small">
                                <img src="assets/images/among-us.jpg" alt="">
                            </div>
                        </div>
                        <div class="review-wrapper">
                            <div class="username mb-1">
                                Daniel Mastro
                            </div>
                            <div class="review-date mb-2">
                                12 oct 2020
                            </div>
                            <div class="review-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum necessitatibus maxime placeat cumque, dolor ea non magnam doloribus mollitia dolorum, officiis tenetur quaerat. Dicta debitis quia vel ducimus nulla doloribus.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum necessitatibus maxime placeat cumque, dolor ea non magnam doloribus mollitia dolorum, officiis tenetur quaerat. Dicta debitis quia vel ducimus nulla doloribus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container-fluid">
        <div class="container">
            <div class="footer-wrapper row">
                <div class="footer-widget col-1 col-md-2 col-sm-2">
                    <ul>
                        <li><a href="">News</a></li>
                        <li><a href="">Games</a></li>
                        <li><a href="">Video</a></li>
                        <li><a href="">Screenshot</a></li>
                    </ul>
                </div>
                <div class="footer-widget col-1 col-md-2 col-sm-2">
                    <ul>
                        <li><a href="">Commnunity</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
                <div class="footer-widget col-1 col-md-2 col-sm-2">
                    <ul>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Store</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-widget col-1 col-md-2 col-sm-2">
                    <div class="footer-logo">
                        <img class="lazy" class="" src="./assets/images/logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-bottom row">
                <div class="col-md-3 col-sm-4 footer-bottom-links ">
                    <a href="">Facebook</a>
                    <a href="">Twitter</a>
                    <a href="">Twitch</a>
                    <a href="">Youtube</a>
                </div>
                <div class="col-md-1 col-sm-4 footer-bottom-credit">
                    <p>Website by Hui with <i class="fas fa-heart"></i></p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'
    var swiper = new Swiper('.header-slider', {
        speed: 500,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        direction: 'vertical',
        loop: true,
        autoplay: {
            delay: 5000,
        },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 4, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop: true,
      loopedSlides: 4, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
</script>