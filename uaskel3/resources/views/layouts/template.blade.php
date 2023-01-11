<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>E-shop kelompok 3</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="/"><img src="{{asset('template/images/logoo.png')}}"></a>
               <div class="search_section">
                  <ul>
                  <li class="nav-item"><a class= "nav-link" href="{{ URL::to('login') }}">Log In</a></li>
                     <li><a href="#"><img src="{{asset('template/images/shopping-bag.png')}}"></a></li>
                     <li><a href="#"><img src="{{asset('template/images/search-icon.png')}}"></a></li>
                  </ul>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('category') }}">Category</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('produk') }}">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('client') }}">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">E-Shop</span> Solusi Terbaik Situs Belanja Online</h4>
                                 <p class="banner_text">Belanja dengan mudah dan hemat tanpa harus keluar rumah</p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="{{asset('template/images/img-1.png')}}" class="image_1"></div>
                           </div>
                        </div>
                        <div class="button_main"><button class="all_text">All</button><input type="text" class="Enter_text" placeholder="Enter keywords" name=""><button class="search_text">Search</button></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">45%</span> Diskon Untuk Pembelian Pertama</h4>
                                 <p class="banner_text">Temukan Berbagai Pelayanan Menarik Lainnya Hanya di E-Shop</p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="{{asset('template/images/img-1.png')}}" class="image_1"></div>
                           </div>
                        </div>
                        <div class="button_main"><button class="all_text">All</button><input type="text" class="Enter_text" placeholder="Enter keywords" name=""><button class="search_text">Search</button></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">50%</span> Diskon Untuk Pelanggan Setia E-Shop</h4>
                                 <p class="banner_text">Belanja Produk-produk Original Di E-Shop Official Store</p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="{{asset('template/images/img-1.png')}}" class="image_1"></div>
                           </div>
                        </div>
                        <div class="button_main"><button class="all_text">All</button><input type="text" class="Enter_text" placeholder="Enter keywords" name=""><button class="search_text">Search</button></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class=""><img src="{{asset('template/images/left-icon.png')}}"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class=""><img src="{{asset('template/images/right-icon.png')}}"></i>
               </a>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--category section start -->
      <div class="container">
         <div class="category_section">
            <div class="row">
               <div class="col-lg-2 col-sm-12">
                  <h1 class="category_text">Category</h1>
               </div>
               <div class="col-lg-10 col-sm-12 main">
                  <div class="col">
                     <div class="box_main">
                        <div class="icon_1"></div>
                        <h4 class="fashion_text active">New Fashion</h4>
                     </div>
                  </div>
                  <div class="col">
                     <div class="box_main">
                        <div class="icon_2"></div>
                        <h4 class="fashion_text">Clothing</h4>
                     </div>
                  </div>
                  <div class="col">
                     <div class="box_main">
                        <div class="icon_5"></div>
                        <h4 class="fashion_text">Sweaters & Jackets</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="category_section_2">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="beds_section active">
                     <h1 class="bed_text">Pakaian set anak</h1>
                     <div><img src="{{asset('template/images/1.jpeg')}}" class="image_2"></div>
                     
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="beds_section">
                     <h1 class="bed_text">Kaos anak</h1>
                     <div><img src="{{asset('template/images/2.jpeg')}}" class="image_2"></div>
                     
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="beds_section">
                     <h1 class="bed_text">Kemeja</h1>
                     <div><img src="{{asset('template/images/3.jpeg')}}" class="image_2"></div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- category section end -->
      
    
      <!-- product section start -->
      <div class="product_section layout_padding">
         <div class="container">
            <h1 class="feature_taital">PRODUK UNGGULAN</h1>
            <p class="feature_text">Jaminan barang 100% ori</p>
            <div class="product_section_2">
               <div class="row">
                  <div class="col-sm-5">
                     <div class="feature_box">
                        <h1 class="readable_text">Kemeja anak</h1>
                        <div><img src="{{asset('template/images/img-7.png')}}" class="image_7"></div>
                     </div>
                     <div class="feature_box_1">
                        <h1 class="readable_text">Kaos anak</h1>
                        <div><img src="{{asset('template/images/4.jpeg')}}" class="image_7"></div>
                     </div>
                  </div>
                  <div class="col-sm-7">
                     <div class="feature_box_2">
                        <h1 class="readable_text">Baju anak </h1>
                        <div><img src="{{asset('template/images/img-8.png')}}" class="image_8"></div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="feature_taital">Apa kata pelanggan kami?</h1>
                     <p class="feature_text">Semua ulasan berasal dari hati mungil pembeli yang telah meluangkan waktu untuk memberikan ulasan. Tidak ada paksaan dari pihak manapun. </p>
                     <div class="client_section_2">
                        <div class="image_9"><img src="{{asset('template/images/img-9.png')}}"></div>
                        <h3 class="nolmal_text">Romadhona Mustofa</h3>
                        <p class="ipsum_text">"Bismillahirohmanirohim Assalamualaikum warrohmatullahi wa barokatuh terima kasih untuk seller yang baik hati, perkenankan saya menyampaikan sedikit review bagaimana saya telah mencoba, memeriksa, meneliti, hingga menimbang dengan berbagai aspek-aspek kehidupan hingga jatuhlah pilihan saya untuk berbelanja di toko ini. Tidak ada kekurangan di barangnya. Ori dan apa ya, bagus ajalah pokoknya"</p>
                        <div class="image_9"><img src="{{asset('template/images/icon-10.png')}}"></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                  <h1 class="feature_taital">Apa kata pelanggan kami?</h1>
                     <p class="feature_text">Semua ulasan berasal dari hati mungil pembeli yang telah meluangkan waktu untuk memberikan ulasan. Tidak ada paksaan dari pihak manapun. </p>
                     <div class="client_section_2">
                        <div class="image_9"><img src="{{asset('template/images/img-9.png')}}"></div>
                        <h3 class="nolmal_text">Romadhona Mustofa</h3>
                        <p class="ipsum_text">"Bismillahirohmanirohim Assalamualaikum warrohmatullahi wa barokatuh terima kasih untuk seller yang baik hati, perkenankan saya menyampaikan sedikit review bagaimana saya telah mencoba, memeriksa, meneliti, hingga menimbang dengan berbagai aspek-aspek kehidupan hingga jatuhlah pilihan saya untuk berbelanja di toko ini. Tidak ada kekurangan di barangnya. Ori dan apa ya, bagus ajalah pokoknya"</p>
                        <div class="image_9"><img src="{{asset('template/images/icon-10.png')}}"></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                  <h1 class="feature_taital">Apa kata pelanggan kami?</h1>
                     <p class="feature_text">Semua ulasan berasal dari hati mungil pembeli yang telah meluangkan waktu untuk memberikan ulasan. Tidak ada paksaan dari pihak manapun. </p>
                     <div class="client_section_2">
                        <div class="image_9"><img src="{{asset('template/images/img-9.png')}}"></div>
                        <h3 class="nolmal_text">Romadhona Mustofa</h3>
                        <p class="ipsum_text">"Bismillahirohmanirohim Assalamualaikum warrohmatullahi wa barokatuh terima kasih untuk seller yang baik hati, perkenankan saya menyampaikan sedikit review bagaimana saya telah mencoba, memeriksa, meneliti, hingga menimbang dengan berbagai aspek-aspek kehidupan hingga jatuhlah pilihan saya untuk berbelanja di toko ini. Tidak ada kekurangan di barangnya. Ori dan apa ya, bagus ajalah pokoknya"</p>
                        <div class="image_9"><img src="{{asset('template/images/icon-10.png')}}"></div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class=""><img src="{{asset('template/images/left-icon.png')}}"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class=""><img src="{{asset('template/images/right-icon.png')}}"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <h6 class="conect_text">Mari belangganan e-newsletter</h6>
            <h1 class="newsletter_taital">Dapatkan info terbaru dan eksklusif hanya dengan berlangganan e-newsletter</h1>
            <p class="newsletter_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Subscribe</span>
               </div>
            </div>
         </div>
      </div>
      <!-- newsletter section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <h4 class="information_text">Apa Itu E-Shop?</h4>
                  <p class="dummy_text">E-Shop merupakan Toko online yang menjual berbagai macam kebutuhan sehari-hari seperti baju pria, baju wanita, dan pakaian anak-anak.</p>
               </div>
               <div class="col-lg-3 col-sm-15">
                  <div class="information_main">
                     <h4 class="information_text">Kelompok 3</h4>
                     <p class="many_text">Arya, Dimas, Madhon, Mas Nanang, Meizika, Mba Vica Larissa</p>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="information_main">
                     <h4 class="information_text">Contact Us</h4>
                     <p class="call_text"><a href="#">+01 1234567890</a></p>
                     <p class="call_text"><a href="#">+01 9876543210</a></p>
                     <p class="call_text"><a href="#">Kelompok3@gmail.com</a></p>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{asset('template/images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('template/images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('template/images/instagram-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('template/images/linkedin-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright_section">
               <h1 class="copyright_text">
               Copyright 2023 E-Commerce <a href="https://html.design"></a>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="{{asset('template/js/jquery.min.js')}}"></script>
      <script src="{{asset('template/js/popper.min.js')}}"></script>
      <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('template/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('template/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('template/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>

