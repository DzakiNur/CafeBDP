<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link rel="stylesheet" href="assets/css/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,600&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="{{route('cart')}}">
        <div class="eaw">
            <button class="button-30" role="button"><i class="apahayoo fa-solid fa-cart-shopping"></i>Check Out <p class="jikakalau">{{ count((array) session('cart')) }}</p></button>
        </div>
    </form>


    <section class="menu" id="menu">
        <h3 class="sub-heading"> Our Menu</h3>
        <h1 class="heading"> Today's Speciality</h1>

        <div class="search">
            <div class="search-box">
                <div class="search-icon">
                    <i class='bx bx-search'></i>
                </div>

                <div class="search-input">
                    <input type="text" id="input-search" value="{{request()->search}}" placeholder="Search Menu....">
                </div>
            </div>
        </div>


        <div class="box-container">
        @foreach ($products as $product)
            <div class="box">
                <div class="image">
                    <img src="{{$product->image}}" alt="">
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
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->description}}</p>
                    <a href="{{route('add_to_cart', $product->id)}}" class="btn">Add to Cart</a>
                    <span class="price">Rp {{$product->price}}</span>
                </div>
            </div>
        @endforeach


        <!--<div class="box">
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
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
                    <a href="" class="btn">Add to Cart</a>
                    <span class="price">Rp.5000</span>
                </div>
            </div> -->
        </div>
    </section>


    <script>
        var searchInput = document.getElementById('input-search');
        searchInput.addEventListener('keypress', function(e) {
            if(e.keyCode == 13) {
                window.location.href = '/orders?search='+e.target.value
            }
        })
    </script>

</body>
</html>
