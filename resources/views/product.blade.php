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
        <title>Buy Diary</title>
</head>
<body class="productpage text-white">
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
            <div class="col col-6">
                <div id="carouselExampleCaptions" class="carousel slide  d-flex justify-content-center" data-bs-ride="carousel">
                    <div class="carousel-inner" >

                            <div class="carousel-item active">
                                <div class="slider-image text-center">
                                    <img src="{{  asset('/imgs/book1.png') }}" style="width: 100%; height:400px;"  class="d-inline-block text-center" alt="">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="slider-image text-center">
                                    <img src="{{  asset('/imgs/book2.png') }}" style="width: 100%; height:400px;"  class="d-inline-block text-center" alt="">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="slider-image text-center">
                                    <img src="{{  asset('/imgs/book3.png') }}" style="width: 100%; height:400px;"  class="d-inline-block text-center" alt="">
                                </div>
                            </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span><img src="{{asset('/imgs/logos/angle-left.svg')}}" alt="" style="width:1em"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span><img src="{{asset('/imgs/logos/angle-right.svg')}}" alt="" style="width:1rem"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
                
                    <div class="col col-6 d-flex flex-column justify-content-center">

                        <form class="d-flex flex-column justify-content-center">
                            @csrf
                            <h1 class="fw-light" style="font-family: 'Poiret One', cursive;">Diary</h1>
                            <hr class="w-100">
                            <select name="size" id="" class="w-25">
                                <option value="small" selected>Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                            <input type="number" name="qty" id="" class="my-3 w-25" placeholder="Quantity" required>
                            <h3 class="fw-light my-3" style="font-family: 'Poiret One', cursive;">23 $</h3>
                            <p><span class="fw-bold">Description: </span>Diary Desciption</p>
                            @if (session('empty'))
                                <div class="alert alert-danger error-message text-center" style="padding:1rem ;background: rgb(252, 161, 168); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('empty') }}</div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success success-message text-center" style="padding:1rem;background: rgb(152, 255, 183); font-size:1rem; margin-top:0.7rem; border:none; color:rgb(1, 131, 40)">{{ session('success') }}</div>
                            @endif
                            <button type="button" class="w-100 btn btn-success" style="background: #3c6450 !important;">Add to Cart</button>
                        </form>
                    </div>
                
            
        </div>
        <div class="row my-5">
            <h1 class="fw-light" style="font-family: 'Poiret One', cursive;">You May Also Like</h1>
            <div id="carouselExampleCaptions" class="carousel slide  d-flex justify-content-center" data-bs-ride="carousel">
                <div class="carousel-inner" >
                        <div class="carousel-item active ">
                            <div class="slider-image text-center">
                                <img src="{{  asset('/imgs/book3.png') }}" style="width: 18rem"  class="d-inline-block text-center" alt="">
                                <div class="mt-2 py-1">
                                    <p class="fw-bold" style="margin-block-start: 0 !important; margin-block-end:0 !important;">Diary</p>
                                    <p style="margin: 0 !important;">Diary Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="slider-image text-center">
                                <img src="{{  asset('/imgs/book2.png') }}" style="width: 18rem"  class="d-inline-block text-center" alt="">
                                <div class="mt-2 py-1">
                                    <p class="fw-bold" style="margin-block-start: 0 !important; margin-block-end:0 !important;">Diary</p>
                                    <p style="margin: 0 !important;">Diary Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="slider-image text-center">
                                <img src="{{  asset('/imgs/book1.png') }}" style="width: 18rem"  class="d-inline-block text-center" alt="">
                                <div class="mt-2 py-1">
                                    <p class="fw-bold" style="margin-block-start: 0 !important; margin-block-end:0 !important;">Diary</p>
                                    <p style="margin: 0 !important;">Diary Description</p>
                                </div>
                            </div>
                        </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span><img src="{{asset('/imgs/logos/angle-left.svg')}}" alt="" style="width:3rem"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span><img src="{{asset('/imgs/logos/angle-right.svg')}}" alt="" style="width:3rem"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>