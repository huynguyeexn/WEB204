<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
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
    <header class="header container ">
        <div class="row">
            <nav class="header-navbar col-1 hidden-md">
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
                    <li><a href=""><i class="fas fa-exclamation-circle"></i>About</a></li>
                </ul>
            </nav>
            <div class="header-slider game-item col-3 col-md-4">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="responsive-image swiper-slide">
                        <img class="lazy"src="./assets/images/Rainbow-Six-Siege.jpg" alt="">
                    </div>
                    <div class="responsive-image swiper-slide">
                        <img class="lazy"src="./assets/images/Fall-Guys.jpg" alt="">
                    </div>
                    <div class="responsive-image swiper-slide">
                        <img class="lazy"src="./assets/images/the-witcher3.jpg" alt="">
                    </div>
                    <div class="responsive-image swiper-slide">
                        <img class="lazy"src="./assets/images/dead-by-daylight-switch-hero.jpg" alt="">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="row">
            <div class="header-items  game-item  col-sm-4 col-md-2 col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/cyberpunk.jpg" alt="">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>cyberpunk 2077</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="header-items  game-item  col-sm-4 col-md-2 col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/gta5.png" alt="">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Grand theft auto V</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="header-items  game-item  col-sm-4 col-md-2 col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/those-who-remain.jpg" alt="">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>those who remain</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="header-items  game-item  col-sm-4 col-md-2 col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/beat-saber.jpg" alt="">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Beat Saber</a>
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
    </header>
    <div class="container">
        <section class="platforms row-1 col-sm-4 ">
            <div class="col-1 col-md-2 col-sm-4">
                <a href=""><img class="lazy"src="./assets/images/ps4.png" alt=""></a>
            </div>
            <div class="col-1 col-md-2 col-sm-4">
                <a href=""><img class="lazy"src="./assets/images/xboxone.png" alt=""></a>
            </div>
            <div class="col-1 col-md-2 col-sm-4 center-center">
                <a href=""><img class="lazy"src="./assets/images/pcgamer.png" alt=""></a>
            </div>
            <div class="col-1 col-md-2 col-sm-4 center-center">
                <a href=""><img class="lazy"src="./assets/images/wii.png" alt=""></a>
            </div>
        </section>
    </div>
    <main class="container">
        <div class="top-games-list row-4">
            <div class="top-game col-1 dimgray-color">
                <img class="lazy"src="./assets/images/topgame-icon.png" alt="">
            </div>
            <div class="top-games-item game-item col-2">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/borderlands3.png" alt="arma">
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
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/dayz.jpg" alt="dayz">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Day Z</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-2">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/arma.jpg" alt="borderlands3">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Arma</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/horizon.jpg" alt="horizon">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Horizon</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/detroit.jpg" alt="detroit">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Detroit</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/hitman.jpg" alt="hitman">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Hitman</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/Far-Cry-4-Cover-2.png" alt="Far-Cry-4">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Far Cry 4</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-2 row-span-2">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/mavels.jpg" alt="mavels">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Mavel's Avengers</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/assassin.jpg" alt="assassin">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>assassin's creed</a>
                        <button class="outline-btn">
                            Details
                        </button>
                        <button class="btn">
                            In cart $19.99
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-games-item game-item col-1">
                <div class="responsive-image blur">
                    <img class="lazy"src="./assets/images/batman.jpg" alt="batman">
                </div>
                <div class="game-info">
                    <div class="game-name">
                        <a>Batman</a>
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
    </main>
    <div class="container">
    <section class="follow-links row">
        <div class="col-1 col-md-2">
            <div class="follow-icon facebook-bg">
                <div class="follow-bg"></div>
                <i class="fab fa-facebook-f"></i>
            </div>
        </div>
        <div class="col-1 col-md-2">
            <div class="follow-icon twitter-bg">
                <div class="follow-bg "></div>
                <i class="fab fa-twitter    "></i>
            </div>
        </div>
        <div class="col-1 col-md-2">
            <div class="follow-icon twitch-bg">
                <div class="follow-bg "></div>
                <i class="fab fa-twitch" aria-hidden="true"></i>
            </div>
        </div>
        <div class="col-1 col-md-2">
            <div class="follow-icon youtube-bg">
                <div class="follow-bg"></div>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </section>
    </div>
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
                        <img class="lazy"class=""src="./assets/images/logo.png" alt="">
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
</script>