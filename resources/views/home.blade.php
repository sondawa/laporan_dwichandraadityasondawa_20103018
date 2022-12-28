@extends('layouts.app')

@section('content')
    <!--Carousel -->
    <div id="carousel" class="carousel slide adit" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border" src="{{asset('asset/image/sendal1.jpg')}}" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Sendal Shop</b> eCommerce</h1>
                                <h3 class="h2">Sendal Shope adalah mesin eCommerce yang menyediaka sendal</h3>
                                <p>Disini menyediakan berbagai sendal untuk ukuran anak-anak sampai orang tua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border" src="{{asset('asset/image/sendal2.jpg')}}" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Sendal Shop</h1>
                                <h3 class="h2">Melayani </h3>
                                <p> Sendal Shope ini bisa disingkat dengan 2S yang mana melayani pelanggan dengan sesuai keiinginan dari pelanggan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border" src="{{asset('asset/image/sendal3.jpg')}}" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Sendal Shop</h1>
                                <h3 class="h2">Promo</h3>
                                <p>Sendal Shope juga menyediakan promo yang mana promo ini bisa dalam bentuk kupon pembelian
                                    atau pun bisa kupon diskon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#carousel" role="button"
            data-bs-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#tcarousel" role="button"
            data-bs-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </div>
    <!-- Carousel end -->

    <!-- Start Best Seller -->
    <section class="containerBS py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>Categories of the month pada bubu's cake menyediakan kue tradisional nusantara yang lezat dan sangat
                    diminati</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('asset/image/sendal3.jpg')}}" class="rounded-circle img-fluid border" /></a>
                <h5 class="text-center mt-3 mb-3">Sandal jepit Flip Flop Declan</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('asset/image/sendal2.jpg')}}" class="rounded-circle img-fluid border" /></a>
                <h2 class="h5 text-center mt-3 mb-3">Sandal jepit Flip Flop Declan</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('asset/image/sendal1.jpg')}}" class="rounded-circle img-fluid border" /></a>
                <h2 class="h5 text-center mt-3 mb-3">EIGER KINKAJOU PINCH 2.0</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Best Seller -->

    <!--Start Feature Product-->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="{{asset('asset/image/sendal4.jpg')}}" class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.14.000</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark"> Sandal jepit Flip Flop Declan</a>
                            <p class="card-text">Merk: Declan collabs
                                <br> Kali ini Declan collabs dengan brand sandal jepit yang sudah sangat dikenal di Indonesia, yaitu merk Swallow.
                                Sandal ini terbuat dari material EVA rubber yang super empuk, sangat lentur dan tidak licin. Ditambah dengan jepitnya yang kuat dan juga lentur, sehingga awet dan nyaman dipakai, tidak membuat kaki sakit
                                Kualitasnya tidak kalah dengan sandal jepit mahal. Silahkan buktikan sendiri!
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="{{asset('asset/image/sendal5.jpg')}}" class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp. 10.000</li>
                            </ul>
                            <a href="cutter.png" class="h2 text-decoration-none text-dark">Sandal jepit Flip Flop Declan</a>
                            <p class="card-text">Kali ini Declan collabs dengan brand sandal jepit yang sudah sangat dikenal di Indonesia, yaitu merk Swallow.
                                Sandal ini terbuat dari material EVA rubber yang super empuk, sangat lentur dan tidak licin. Ditambah dengan jepitnya yang kuat dan juga lentur, 
                                sehingga awet dan nyaman dipakai, tidak membuat kaki sakit
                                Kualitasnya tidak kalah dengan sandal jepit mahal. Silahkan buktikan sendiri!</p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="{{asset('asset/image/sendal6.jpg')}}" class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.188.100</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark">EIGER KINKAJOU PINCH 2.0</a>
                            <p class="card-text">Kinjaou Pinch 2.0 adalah sandal jepit serbaguna untuk keseharian dan berkegiatan di 
                               sekitar base camp. Footbed sandal didesain secaraergonomis atau mengikuti anatomi kaki.
                                Outsole berbahan rubber mencengkram dengan lebih baik untuk pemakaian di permukaan
                                 di alamTerbuka.</p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Sendal Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jl. Menuju Kemenangan No.99
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">(021) 326 917</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">Copyright &copy; 2022 Dream</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
@endsection