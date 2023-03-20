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
            <a href="" class="btn">Contact</a>
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
        </div>

        <div class="home-img">
            <img src="assets/images/nasi_goreng.png" alt="">
        </div>
    </section>
    {{-- end Hero --}}

    {{-- Menu --}}
    <section class="menu" id="menu">
        <h3 class="sub-heading"> Our Menu</h3>
        <h1 class="heading"> Today's Speciality</h1>

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
    {{-- End Menu --}}

    {{-- Order --}}
    <section class="order" id="order">
        <h3 class="sub-heading"> Order Here</h3>
        <h1 class="heading">This Is The Menu</h1>

        
    </section>
    {{-- End Order --}}

    <script src="assets/js/landing.js"></script>
</body>
</html>