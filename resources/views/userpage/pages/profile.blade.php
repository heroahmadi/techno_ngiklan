@extends('userpage.templates.home')

@section('content')
<!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <section class="banner-area relative" id="profile"> -->
    <!-- start banner Area -->
<section class="banner-area relative" id="profile">    
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{$user->name}}
                </h1>
                <p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Profile </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->                      

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                        </div>                                  
                    </div>
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Food,</a></li>
                            <li><a href="#">Technology,</a></li>
                            <li><a href="#">Politics,</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"></a>{{$user->name}} <span class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#"></a>{{$user->email}} <span class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#"></a>{{$user->type}} <span class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#"></a> <span class="lnr lnr-bubble"></span></p>
                            <ul class="social-links col-lg-12 col-md-12 col-6">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>                                                                             
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <!-- <h3 class="mt-20 mb-20">Astronomy Binoculars A Great Alternative</h3>
                        <p class="excert">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                        <p>
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p> -->
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <div class="button-group-area mt-10">
                                <button class="genric-btn primary-border" data-toggle="modal" data-target="#addForm">Tambah Produk</button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="addForm" tabindex='-1' role="dialog" style="padding-top: 150px">
                        
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('produk.store', $user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only"><b>Tambah Produk</b></span>
                                        </button>
                                        <h4 class="modal-title" id="labelModalKu">Tutup</h4>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <p class="statusMsg"></p>
                                            <div class="form-group">
                                                <label for="masukkanNama">Nama Produk</label>
                                                <input type="text" class="form-control" id="masukkanNama" name="nama_produk" placeholder="Masukkan nama Produk"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="masukkanEmail">Kategori</label>
                                                <input type="text" class="form-control" id="masukkanKategori" name="kategori_id" placeholder="Masukkan kategori id"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="masukkanDeskripsi">Deskripsi</label>
                                                <textarea class="form-control" id="masukkanDeskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Produk"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="masukkanDeskripsi">Status</label>
                                                <textarea class="form-control" id="masukkanStatus" name="status" placeholder="Masukkan Status Produk"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Gambar Produk</label>
                                                <input type="file" name="gambar" class="form-control-file" id="masukkanFoto">
                                            </div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary submitBtn" onclick="addProdukForm()">Tambahkan</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                        </div>  
                    </div>
                    <div class="col-lg-12">
                        <div class="quotes">
                                                                  
                        </div>
                        <div class="row mt-30 mb-30">
                            <div class="col-6">
                                <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                            </div>  
                            <div class="col-lg-12 mt-30">
                                <p>
                                    <!-- MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower. -->
                                </p>
                                <p>
                                    <!-- MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower. -->
                                </p>                                            
                            </div>                                  
                        </div>
                    </div>
                </div>
                <div class="navigation-area">
                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#"><h4>Space The Final Frontier</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="#"><h4>Telescopes 101</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                            </div>                                      
                        </div>                                  
                    </div> -->
                </div>
                <div class="comments-area">
                    <h4>Ulasan dari Endorser</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c1.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Emilly Blunt</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>  
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Elsie Cunningham</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>  
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Annie Stephens</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>  
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c4.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Maria Luna</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>  
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c5.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Ina Hayes</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>                                                              
                </div>
                <div class="comment-form">
                    <h4>Leave a Comment</h4>
                    <form>
                        <div class="form-group form-inline">
                          <div class="form-group col-lg-6 col-md-12 name">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                          </div>
                          <div class="form-group col-lg-6 col-md-12 email">
                            <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                          </div>                                        
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <a href="#" class="primary-btn text-uppercase">Post Comment</a> 
                    </form>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">
                        <form class="search-form" action="#">
                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                   
                    <div class="single-sidebar-widget user-info-widget">
                        <img src="{{asset('assets/img/blog/user-info.png')}}" alt="">
                        <a href="#"><h4>{{$user->name}}</h4></a>
                        <!-- <p>
                            Senior blog writer
                        </p> -->
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <!-- <p>
                            Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
                        </p> -->
                    </div>
                    
                    <div class="single-sidebar-widget popular-post-widget">
                        <!-- <h4 class="popular-title">Popular Posts</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>                                                          
                        </div> -->
                    </div>
                    <div class="single-sidebar-widget ads-widget">
                        <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                    </div>
                    <div class="single-sidebar-widget post-category-widget">
                        <h4 class="category-title">Kategori Endorsement</h4>
                        
                        <ul class="cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Lifestyle</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Fashion</p>
                                    <p>59</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Art</p>
                                    <p>29</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Food</p>
                                    <p>15</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Architecture</p>
                                    <p>09</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Adventure</p>
                                    <p>44</p>
                                </a>
                            </li>                                                           
                        </ul>
                        
                    </div>  
                    <!-- <div class="single-sidebar-widget newsletter-widget">
                        <h4 class="newsletter-title">Newsletter</h4>
                        <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                           <div class="col-autos">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
                              </div>
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>  
                        <p class="text-bottom">
                            You can unsubscribe at any time
                        </p>                                
                    </div>
                    <div class="single-sidebar-widget tag-cloud-widget">
                        <h4 class="tagcloud-title">Tag Clouds</h4>
                        <ul>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </div>                              
                </div> -->
            </div>
        </div>
    </div>  
</section>
<!-- End post-content Area -->
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection