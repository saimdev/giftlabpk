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
    <title>Cart | GIFTLAB.PK</title>
</head>
<body class="text-white cart">
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
            <h1 class="text-center mb-5" style="font-family: 'Poiret One', cursive;">Shopping Cart</h1>
            <div class="col col-8">

                    <div class="d-flex justify-content-around align-items-center my-3">
                        <img src="{{asset('/imgs/book1.png')}}" style="width: 9rem; height:9rem; border-radius:0.7rem" alt="">
                        <p>Diary 1</p>
                        <p>23 $</p>
                        <input type="number" name="quantity" value="2" id="" style="width: 50px !important;" readonly>
                        <p>46 $</p>
                        <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                    </div>
                    <div class="d-flex justify-content-around align-items-center my-3">
                        <img src="{{asset('/imgs/book2.png')}}" style="width: 9rem; height:9rem; border-radius:0.7rem" alt="">
                        <p>Diary 2</p>
                        <p>23 $</p>
                        <input type="number" name="quantity" value="2" id="" style="width: 50px !important;" readonly>
                        <p>46 $</p>
                        <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                    </div>
                    <div class="d-flex justify-content-around align-items-center my-3">
                        <img src="{{asset('/imgs/book3.png')}}" style="width: 9rem; height:9rem; border-radius:0.7rem" alt="">
                        <p>Diary 3</p>
                        <p>23 $</p>
                        <input type="number" name="quantity" value="3" id="" style="width: 50px !important;" readonly>
                        <p>69 $</p>
                        <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                    </div>
                    

            </div>
            <div class="col col-4">
                <h3 class="fw-light text-center" style="font-family: 'Poiret One', cursive;">Order Amount</h3>
                <div class="p-3 my-3" style="border: 1px solid lightgray">
                    <p class="fw-bold">Delivery:</p>
                    <div class="d-flex">
                        <input type="checkbox" class="mx-2" name="delivery" id="">
                        <label for="">Home Delivery</label>
                    </div>
                    <div class="d-flex">
                        <input type="checkbox" name="pickup" class="mx-2" id="">
                        <label for="">Pick up</label>
                    </div>
                </div>
                <div class="p-3 my-3" style="border: 1px solid lightgray">
                    <div class="d-flex">
                        <p class="fw-bold mx-2">Sub-total:</p>

                        <p>161 $</p>
                    </div>
                    <div class="d-flex">
                        <p class="fw-bold mx-2">Delivery Charges:</p>
                        <p>5 $</p>
                    </div>
                </div>
                <div class="p-3 my-3" style="border: 1px solid lightgray">
                    <input type="text" name="" placeholder="Promo Code" id="" style="outline: none; border:none; background:none" disabled>
                </div>
                <div class="p-3 my-3" style="border: 1px solid lightgray">
                    <div class="d-flex">
                        <p class="fw-bold mx-2" style="margin-block-start: 0; margin-block-end:0;">Total:</p>
                        <p class="fw-bold" style="margin-block-start: 0; margin-block-end:0;">166 $</p>
                    </div>
                </div>

                    <a href=""><button type="button" class="btn fw-bold w-100" style="background: #fff77d; color:#1a134d">Checkout</button></a>    

            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>