@extends('layouts.online.frontlayout')
@section('content')
   
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                 <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                                <div><img src="{{ asset('ecom/images/img-1.png') }}" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                 <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="{{ asset('online/img/featured/feature-1.png') }}" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                 <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                 <div class="book_bt"><a href="#">Shop Now</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="{{ asset('online/img/featured/feature-2.png') }}" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class=""><img src="{{ asset('ecom/images/left-icon.png') }}"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class=""><img src="{{ asset('ecom/images/right-icon.png') }}"></i>
               </a>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->

      <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="hero__categories">
                      <div class="hero__categories__all">
                          <i class="fa fa-bars"></i>
                          <span>All departments</span>
                      </div>
                      <ul>
                          <li><a href="#">Fresh Meat</a></li>
                          <li><a href="#">Vegetables</a></li>
                          <li><a href="#">Fruit & Nut Gifts</a></li>
                          <li><a href="#">Fresh Berries</a></li>
                          <li><a href="#">Ocean Foods</a></li>
                          <li><a href="#">Butter & Eggs</a></li>
                          <li><a href="#">Fastfood</a></li>
                          <li><a href="#">Fresh Onion</a></li>
                          <li><a href="#">Papayaya & Crisps</a></li>
                          <li><a href="#">Oatmeal</a></li>
                          <li><a href="#">Fresh Bananas</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="hero__search">
                      <div class="hero__search__form">
                          <form action="#">
                              <div class="hero__search__categories">
                                  All Categories
                                  <span class="arrow_carrot-down"></span>
                              </div>
                              <input type="text" placeholder="What do yo u need?">
                              <button type="submit" class="site-btn">SEARCH</button>
                          </form>
                      </div>
                      <div class="hero__search__phone">
                          <div class="hero__search__phone__icon">
                              <i class="fa fa-phone"></i>
                          </div>
                          <div class="hero__search__phone__text">
                              <h5>+65 11.188.888</h5>
                              <span>support 24/7 time</span>
                          </div>
                      </div>
                  </div>
                  <div class="hero__item set-bg" data-setbg="{{ asset('online/img/hero/banner.jpg') }}">
                      <div class="hero__text">
                          <span>FRUIT FRESH</span>
                          <h2>Vegetable <br />100% Organic</h2>
                          <p>Free Pickup and Delivery Available</p>
                          <a href="#" class="primary-btn">SHOP NOW</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Hero Section End -->

  <!-- Categories Section Begin -->
  <section class="categories">
      <div class="container">
          <div class="row">
              <div class="categories__slider owl-carousel">
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('online/img/categories/cat-1.jpg') }}">
                          <h5><a href="#">Fresh Fruit</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('online/img/categories/cat-2.jpg') }}">
                          <h5><a href="#">Dried Fruit</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('online/img/categories/cat-3.jpg') }}">
                          <h5><a href="#">Vegetables</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('online/img/categories/cat-4.jpg') }}">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="{{ asset('online/img/categories/cat-5.jpg') }}">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Categories Section End -->

  <!-- Featured Section Begin -->
  <section class="featured spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                      <h2>Featured Product</h2>
                  </div>
                  <div class="featured__controls">
                      <ul>
                          <li class="active" data-filter="*">All</li>
                          <li data-filter=".oranges">Oranges</li>
                          <li data-filter=".fresh-meat">Fresh Meat</li>
                          <li data-filter=".vegetables">Vegetables</li>
                          <li data-filter=".fastfood">Fastfood</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row featured__filter">
              <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-1.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-2.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-3.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-4.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-5.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-6.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-7.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                  <div class="featured__item">
                      <div class="featured__item__pic set-bg" data-setbg="{{ asset('online/img/featured/feature-8.jpg') }}">
                          <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="featured__item__text">
                          <h6><a href="#">Crab Pool Security</a></h6>
                          <h5>$30.00</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Featured Section End -->

  <!-- Banner Begin -->
  <div class="banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <img src="{{ asset('online/img/banner/banner-1.jpg') }}" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <img src="{{ asset('online/img/banner/banner-2.jpg') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Banner End -->

  <!-- Latest Product Section Begin -->
  <section class="latest-product spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Latest Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Top Rated Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="latest-product__text">
                      <h4>Review Products</h4>
                      <div class="latest-product__slider owl-carousel">
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                          <div class="latest-prdouct__slider__item">
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-1.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-2.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                              <a href="#" class="latest-product__item">
                                  <div class="latest-product__item__pic">
                                      <img src="{{ asset('online/img/latest-product/lp-3.jpg') }}" alt="">
                                  </div>
                                  <div class="latest-product__item__text">
                                      <h6>Crab Pool Security</h6>
                                      <span>$30.00</span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Latest Product Section End -->

  <!-- Blog Section Begin -->
  <section class="from-blog spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title from-blog__title">
                      <h2>From The Blog</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="blog__item">
                      <div class="blog__item__pic">
                          <img src="img/blog/blog-1.jpg" alt="">
                      </div>
                      <div class="blog__item__text">
                          <ul>
                              <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                              <li><i class="fa fa-comment-o"></i> 5</li>
                          </ul>
                          <h5><a href="#">Cooking tips make cooking simple</a></h5>
                          <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="blog__item">
                      <div class="blog__item__pic">
                          <img src="img/blog/blog-2.jpg" alt="">
                      </div>
                      <div class="blog__item__text">
                          <ul>
                              <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                              <li><i class="fa fa-comment-o"></i> 5</li>
                          </ul>
                          <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                          <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="blog__item">
                      <div class="blog__item__pic">
                          <img src="img/blog/blog-3.jpg" alt="">
                      </div>
                      <div class="blog__item__text">
                          <ul>
                              <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                              <li><i class="fa fa-comment-o"></i> 5</li>
                          </ul>
                          <h5><a href="#">Visit the clean farm in the US</a></h5>
                          <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Blog Section End -->

  <!-- Footer Section Begin -->
  <footer class="footer spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer__about">
                      <div class="footer__about__logo">
                          <a href="./index.html"><img src="img/logo.png" alt=""></a>
                      </div>
                      <ul>
                          <li>Address: 60-49 Road 11378 New York</li>
                          <li>Phone: +65 11.188.888</li>
                          <li>Email: hello@colorlib.com</li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                  <div class="footer__widget">
                      <h6>Useful Links</h6>
                      <ul>
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">About Our Shop</a></li>
                          <li><a href="#">Secure Shopping</a></li>
                          <li><a href="#">Delivery infomation</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Our Sitemap</a></li>
                      </ul>
                      <ul>
                          <li><a href="#">Who We Are</a></li>
                          <li><a href="#">Our Services</a></li>
                          <li><a href="#">Projects</a></li>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Innovation</a></li>
                          <li><a href="#">Testimonials</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="footer__widget">
                      <h6>Join Our Newsletter Now</h6>
                      <p>Get E-mail updates about our latest shop and special offers.</p>
                      <form action="#">
                          <input type="text" placeholder="Enter your mail">
                          <button type="submit" class="site-btn">Subscribe</button>
                      </form>
                      <div class="footer__widget__social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="footer__copyright">
                      <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                      <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
@endsection
      
   
