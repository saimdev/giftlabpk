<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Buy | GIFTLAB.PK</title>
</head>
<body class="shop text-white">
    <div class="container-fluid py-3 px-5">
    <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="/user"><h4 class="h4">GIFTLAB.PK</h4></a>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <a href="/about" class="mx-3">About Us</a>
                <a href="/shop" class="mx-3">Gifts</a>
                <a href="/custom" class="mx-3">Custom Gifts</a>
                <a href="/cart" class="mx-3">Cart</a>

                    <a href="/logout" class="mx-3">Logout</a>

            </div>
        </div>
        <div class="row my-5">
            <div class="col col-6 d-flex justify-content-end">
                <img src="{{asset('/imgs/gifts.jpg')}}" style="width: 100%; border-radius:0.5rem;" alt="">
            </div>
            <div class="col col-6 d-flex flex-column justify-content-center">
                <h2 class="fw-bold">Gifts</h2>
                <p>Discover the perfect gift at our store. Thoughtfully curated and beautifully crafted, our collection offers something special for every occasion. Make moments memorable with our handpicked treasures.</p>
                <a href="" class="btn w-25 fw-bold" style="background:#fff77d; color:#1a134d ">More Details</a>
            </div>
        </div>
        <div class="row my-5">
            <h1 class="fw-light text-center mt-5" style="font-family: 'Poiret One', cursive;">Our Products</h1>
            <div class="col col-12 d-flex justify-content-around flex-wrap mt-4">


                    <a href="/product">
                        <div class="products my-3 mx-2">
                            <img src="{{ asset('/imgs/book3.png') }}" style="width:15rem; height:15rem; border-radius:0.5rem;" alt="" class="post-image">
                            <div class="edit">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center mx-1">
                                        <img src="{{asset('/imgs/logos/shopping-cart-add.svg')}}" alt="" class="hover-icon">
                                    </div>
                                    <div class="d-flex flex-column align-items-center mx-5">
                                        <img src="{{asset('/imgs/logos/heart.svg')}}" alt="" class="hover-icon">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2" style="margin-block-start: 0; margin-block-end:0;">Book</p>
                            <p style="margin-block-start: 0; margin-block-end:0;">23 $</p>
                        </div>
                    </a>
                    <a href="/product">
                        <div class="products my-3 mx-2">
                            <img src="{{ asset('/imgs/book1.png') }}" style="width:15rem; height:15rem; border-radius:0.5rem;" alt="" class="post-image">
                            <div class="edit">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center mx-1">
                                        <img src="{{asset('/imgs/logos/shopping-cart-add.svg')}}" alt="" class="hover-icon">
                                    </div>
                                    <div class="d-flex flex-column align-items-center mx-5">
                                        <img src="{{asset('/imgs/logos/heart.svg')}}" alt="" class="hover-icon">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2" style="margin-block-start: 0; margin-block-end:0;">Book</p>
                            <p style="margin-block-start: 0; margin-block-end:0;">23 $</p>
                        </div>
                    </a>
                    <a href="/product">
                        <div class="products my-3 mx-2">
                            <img src="{{ asset('/imgs/book2.png') }}" style="width:15rem; height:15rem; border-radius:0.5rem;" alt="" class="post-image">
                            <div class="edit">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center mx-1">
                                        <img src="{{asset('/imgs/logos/shopping-cart-add.svg')}}" alt="" class="hover-icon">
                                    </div>
                                    <div class="d-flex flex-column align-items-center mx-5">
                                        <img src="{{asset('/imgs/logos/heart.svg')}}" alt="" class="hover-icon">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2" style="margin-block-start: 0; margin-block-end:0;">Book</p>
                            <p style="margin-block-start: 0; margin-block-end:0;">23 $</p>
                        </div>
                    </a>


            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>