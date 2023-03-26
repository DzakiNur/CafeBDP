<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,600&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    <header>
        <a href="" class="logo"><img src="assets/images/logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#order">Order</a></li>
        </ul>
        <div class="nav-icon">
            <a href="/contact" class="btn">Contact</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    {{-- end Navbar --}}

    {{-- Hero section --}}
    <section class="home" id="home">
        <div class="home-text">
            <h4>Welcome to</h4>
            <h1>Cafe BDP <span>Wikrama</span></h1>
            <p>Fresh and delicious food every day</p>
            <div class="main-btn">
                <a href="/orders" class="btn1">Order Now</a>
                <a href="" class="btn2"><span><i class="bx bx-play"></i></span>Watch Video</a>
            </div>
            <div class="supported">
                <img class="img1" src="assets/images/kemenkes.png" class="kiri-yaw" alt="">
                <img class="img2" src="assets/images/wikrama.png" alt="">
                <img class="img3" src="assets/images/unicef.png" alt="">
            </div>
        </div>

        <div class="home-img">
            <img src="assets/images/nasi_goreng.png" alt="">
        </div>
    </section>
    {{-- end Hero --}}

    <section class="menu" id="menu">
        <h3 class="sub-heading"> Our Menu</h3>
        <h1 class="heading">Most Favourite Menu</h1>

        {{-- Menu 1 --}}
        <div class="favourite-menu">
            <div class="image">
            <img src="assets/images/bakso-menu.png" alt="">
            </div>
        
            <div class="content">
            <h3 class="title">Bakso</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="assets/images/icon-1.png" alt="">
                    <h3>quality food</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-2.png" alt="">
                    <h3>food & drinks</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-3.png" alt="">
                    <h3>expert chefs</h3>
                </div>
            </div>
            </div>
        </div>
            
        
        {{-- Menu 2 --}}
        <div class="favourite-menu">
            <div class="content">
                <h3 class="title">Coffe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                <div class="icons">
                    <img src="assets/images/icon-1.png" alt="">
                    <h3>quality food</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-2.png" alt="">
                    <h3>food & drinks</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-3.png" alt="">
                    <h3>expert chefs</h3>
                </div>
                </div>
            </div>

            <div class="image">
                <img src="assets/images/coffe-menu.png" alt="">
            </div>
        </div>

        
        {{-- Menu 3 --}}
        <div class="favourite-menu">
             <div class="image">
                <img src="assets/images/pempek-menu.png" alt="">
            </div>
        
            <div class="content">
                <h3 class="title">Pempek</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                <div class="icons">
                    <img src="assets/images/icon-1.png" alt="">
                    <h3>quality food</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-2.png" alt="">
                    <h3>food & drinks</h3>
                </div>
                <div class="icons">
                    <img src="assets/images/icon-3.png" alt="">
                    <h3>expert chefs</h3>
                </div>
                </div>
            </div>
        </div>
     
    </section>

    {{-- Order --}}
    <section class="order" id="order">
        <h3 class="sub-heading">Order Here</h3>
        <h1 class="heading">This Is The Menu</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/images/burger.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/waffle.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/fried-rice.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/pempek.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/pempek.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/pempek.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/pempek.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/images/pempek.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Delicious Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus ad veritatis nulla aperiam a sed id? 
                        Totam autem qui sequi illo necessitatibus minus harum neque reprehenderit, corrupti cum voluptatem!
                    </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div>
        </div>
    </section>
    {{-- End Order --}}


    {{-- Footer --}}
    <footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea">
                        <p class="wikbooksfoot">CAFE BDP&#169;</p>
                        <p class="wikbooksfoot2">Healthy Food<br>Healthy Body.</p>
                    </div>
                    <div class="anak2-ea">
                        
                    </div>
                </div>
                <div class="eaa">
                    <p class="judul2-ea">About Us</p>
                        <p class="desk2-ea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero cum iste doloribus architecto placeat facilis error debitis aut molestiae quam, id, quod, voluptates dolorum dicta corporis fugiat nostrum beatae officia.</p>

                </div>
            </div>
            <div class="foot1">
                <ul>
                    <p class="special-1"><b>Menus</b></p>
                    <li><a href="/books">Main Courses</a></li>
                    <li><a href="/books">Appetizers</a></li>
                    <li><a href="/books">Desserts</a></li>
                    <li><a href="/books">Drinks</a></li>
                    <li><a href="/books">Snacks</a></li>
                </ul>
            </div>
            <div class="foot2">
                <ul>
                    <p class="special-2"><b>Pages</b></p>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/order">Order</a></li>
                    <li><a href="/reviews">Review</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="foot3">
                <ul>
                    <p class="special-3"><b>Action</b></p>
                    <li><a href="/home">Home</a></li>
                </ul>
            </div>
        </div>
    </footer>
    {{-- End Footer --}}

    <script src="assets/js/landing.js"></script>
</body>
</html>