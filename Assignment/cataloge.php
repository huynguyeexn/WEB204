<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg"
        style="display: none;">
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
        <div class="cataloge-filter">
            <div class="search-box d-inline text-right">
                <i class="fas fa-search"></i>
                <input type="text" name="" id="" placeholder="Search here">
            </div>

            <div class="game-genre">
                <input type="checkbox" name="action-game" id="action-game">
                <label for="action-game">Action</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Action-Adventure-game" id="Action-Adventure-game">
                <label for="Action-Adventure-game">Action-Adventure</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Adventure-game" id="Adventure-game">
                <label for="Adventure-game">Adventure</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Role-Playing-game" id="Role-Playing-game">
                <label for="Role-Playing-game">Role-Playing</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Simulation-game" id="Simulation-game">
                <label for="Simulation-game">Simulation</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Strategy-game" id="Strategy-game">
                <label for="Strategy-game">Strategy</label>
            </div>
            <div class="game-genre">
                <input type="checkbox" name="Sport-game" id="Sport-game">
                <label for="Sport-game">Sport</label>
            </div>
        </div>
        <div class="cataloge row">
            <div class="col-4 cataloge-game">
                <div class="row">
                    <div class="cataloge-game-images col-1">
                        <div class="responsive-image">
                            <img src="./assets/images/arma.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2 cataloge-game-info">
                        <a href=""><h2 class="game-title">Arma</h2></a>
                        <div class="rate">
                            <span>4.5</span>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star-half    "></i>
                        </div>
                        <div class="game-tag">
                            <a><a><span>Action</span></a></a><a><span>Action-adventure</span></a>
                        </div>
                        <h3 class="destination">Destination</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio et perspiciatis ullam
                            sequi eius numquam delectus, dicta dolorum iste mollitia nihil nobis magnam cumque excepturi
                            sed quisquam, officiis corrupti.
                        </p>
                    </div>
                    <div class="col-1 cataloge-game-button">
                        <button class="btn">Add to cart $19.99</button>
                        <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
                    </div>
                </div>
            </div>
            <div class="col-4 cataloge-game">
                <div class="row">
                    <div class="cataloge-game-images col-1">
                        <div class="responsive-image">
                            <img src="./assets/images/arma.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2 cataloge-game-info">
                        <a href=""><h2 class="game-title">Arma</h2></a>
                        <div class="rate">
                            <span>4.5</span>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star-half    "></i>
                        </div>
                        <div class="game-tag">
                            <a><span>Action</span></a><a><span>Action-adventure</span></a>
                        </div>
                        <h3 class="destination">Destination</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio et perspiciatis ullam
                            sequi eius numquam delectus, dicta dolorum iste mollitia nihil nobis magnam cumque excepturi
                            sed quisquam, officiis corrupti.
                        </p>
                    </div>
                    <div class="col-1 cataloge-game-button">
                        <button class="btn">Add to cart $19.99</button>
                        <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
                    </div>
                </div>
            </div>
            <div class="col-4 cataloge-game">
                <div class="row">
                    <div class="cataloge-game-images col-1">
                        <div class="responsive-image">
                            <img src="./assets/images/arma.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2 cataloge-game-info">
                        <a href=""><h2 class="game-title">Arma</h2></a>
                        <div class="rate">
                            <span>4.5</span>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star-half    "></i>
                        </div>
                        <div class="game-tag">
                            <a><span>Action</span></a><a><span>Action-adventure</span></a>
                        </div>
                        <h3 class="destination">Destination</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio et perspiciatis ullam
                            sequi eius numquam delectus, dicta dolorum iste mollitia nihil nobis magnam cumque excepturi
                            sed quisquam, officiis corrupti.
                        </p>
                    </div>
                    <div class="col-1 cataloge-game-button">
                        <button class="btn">Add to cart $19.99</button>
                        <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
                    </div>
                </div>
            </div>
            <div class="col-4 cataloge-game">
                <div class="row">
                    <div class="cataloge-game-images col-1">
                        <div class="responsive-image">
                            <img src="./assets/images/arma.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2 cataloge-game-info">
                        <a href=""><h2 class="game-title">Arma</h2></a>
                        <div class="rate">
                            <span>4.5</span>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star-half    "></i>
                        </div>
                        <div class="game-tag">
                            <a><span>Action</span></a><a><span>Action-adventure</span></a>
                        </div>
                        <h3 class="destination">Destination</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio et perspiciatis ullam
                            sequi eius numquam delectus, dicta dolorum iste mollitia nihil nobis magnam cumque excepturi
                            sed quisquam, officiis corrupti.
                        </p>
                    </div>
                    <div class="col-1 cataloge-game-button">
                        <button class="btn">Add to cart $19.99</button>
                        <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
                    </div>
                </div>
            </div>
            <div class="col-4 cataloge-game">
                <div class="row">
                    <div class="cataloge-game-images col-1">
                        <div class="responsive-image">
                            <img src="./assets/images/arma.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2 cataloge-game-info">
                        <a href=""><h2 class="game-title">Arma</h2></a>
                        <div class="rate">
                            <span>4.5</span>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star    "></i>
                            <i class="fas fa-star-half    "></i>
                        </div>
                        <div class="game-tag">
                            <a><span>Action</span></a><a><span>Action-adventure</span></a>
                        </div>
                        <h3 class="destination">Destination</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero odio et perspiciatis ullam
                            sequi eius numquam delectus, dicta dolorum iste mollitia nihil nobis magnam cumque excepturi
                            sed quisquam, officiis corrupti.
                        </p>
                    </div>
                    <div class="col-1 cataloge-game-button">
                        <button class="btn">Add to cart $19.99</button>
                        <a class=""><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</a>
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
</script>