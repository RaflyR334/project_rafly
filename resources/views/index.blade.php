@extends('layouts.front')
@section('content')


    <!-- slider-area-start -->
    <section class="slider-area slider-bg slider-bg-height">
       <div class="slider-pagination-2 p-relative">
          <div class="swiper-containers slidertwo-active">
             <div class="swiper-wrapper">
                <div class="swiper-slide slider-bg">
                   <div class="container">
                      <div class="slider-top-padding pt-55">
                         <div class="row p-relative align-items-end">
                            <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                               <div class="tpslidertwo__item">
                                  <div class="tpslidertwo__content">
                                     <h4 class="tpslidertwo__sub-title"></h4>
                                     <h3 class="tpslidertwo__title mb-10">Exclusive <br> Kerajinan</h3>
                                     <div class="tpslidertwo__slide-btn">
                                        <a class="tp-btn banner-animation" href="shop.html">Belanja Sekarang <i
                                           class="fal fa-long-arrow-right"></i>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                               <div class="tpslidertwo__img p-relative text-end">
                                  <img src="{{asset('front/assets/img/slider-01.png')}}" alt="">
                                  <div class="tpslidertwo__img-shape">
                                     <img src="" alt="">
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide slider-bg">
                   <div class="container">
                      <div class="slider-top-padding pt-55">
                         <div class="row p-relative align-items-end">
                            <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                               <div class="tpslidertwo__item">
                                  <div class="tpslidertwo__content">
                                     <h4 class="tpslidertwo__sub-title"></h4>
                                     <h3 class="tpslidertwo__title mb-10">Exclusive <br> Kerajinan</h3>
                                     <div class="tpslidertwo__slide-btn">
                                        <a class="tp-btn banner-animation" href="">Belanja Sekarang <i
                                           class="fal fa-long-arrow-right"></i>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                               <div class="tpslidertwo__img p-relative text-end">
                                  <img src="{{asset('front/assets/img/slider-02.png')}}" alt="">
                                  <div class="tpslidertwo__img-shape">
                                     <img src="" alt="">
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide slider-bg">
                   <div class="container">
                      <div class="slider-top-padding pt-55">
                         <div class="row p-relative align-items-end">
                            <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                               <div class="tpslidertwo__item">
                                  <div class="tpslidertwo__content">
                                     <h4 class="tpslidertwo__sub-title"></h4>
                                     <h3 class="tpslidertwo__title mb-10">Exclusive <br> Kerajinan</h3>
                                     <div class="tpslidertwo__slide-btn">
                                        <a class="tp-btn banner-animation" href="shop.html">Belanja Sekarang <i
                                           class="fal fa-long-arrow-right"></i>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                               <div class="tpslidertwo__img p-relative text-end">
                                  <img src="{{asset('front/assets/img/slider-03.png')}}" alt="">
                                  <div class="tpslidertwo__img-shape">
                                     <img src="" alt="">
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slider-two-pagination">
             <div class="container">
                <div class="slider-two-pagination-item p-relative">
                   <div class="slidertwo_pagination"></div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- slider-area-end -->
 <br>
<br>
    <!-- product-area-start -->
    <section class="product-area pb-65">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-4">
                <div class="tpsection mb-40">
                   <h4 class="tpsection__title">Beberapa Produk</h4>
                </div>
             </div>
             <div class="col-lg-4 col-md-2">
             </div>
          </div>
          <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                <div
                   class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                   <div class="col">
                      <div class="tpproduct tpproductitem mb-15 p-relative">
                         <div class="tpproduct__thumb">
                            <div class="tpproduct__thumbitem p-relative">
                               <a href="shop-details-2.html">
                                  <img src="assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                  <img class="thumbitem-secondary" src="assets/img/product/home-two/product-22.jpg" alt="product-thumb">
                               </a>
                               <div class="tpproduct__thumb-bg">
                                  <div class="tpproductactionbg">
                                     <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                     <a href="#"><i class="fal fa-exchange"></i></a>
                                     <a href="#"><i class="fal fa-eye"></i></a>
                                     <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="tpproduct__content-area">
                            <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Purab Enormous Miranda Bottle</a></h3>
                            <div class="tpproduct__priceinfo p-relative">
                               <div class="tpproduct__ammount">
                                  <span>$31.00</span>
                               </div>
                            </div>
                         </div>
                         <div class="tpproduct__ratingarea">
                            <div class="d-flex align-items-center justify-content-between">
                               <div class="tpproductdot">
                                  <a class="tpproductdot__variationitem" href="shop-details.html">
                                     <div class="tpproductdot__termshape">
                                        <span class="tpproductdot__termshape-bg"></span>
                                        <span class="tpproductdot__termshape-border"></span>
                                     </div>
                                  </a>
                                  <a class="tpproductdot__variationitem" href="shop-details.html">
                                     <div class="tpproductdot__termshape">
                                        <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                        <span class="tpproductdot__termshape-border red-product-border"></span>
                                     </div>
                                  </a>
                                  <a class="tpproductdot__variationitem" href="shop-details.html">
                                     <div class="tpproductdot__termshape">
                                        <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                        <span class="tpproductdot__termshape-border orange-product-border"></span>
                                     </div>
                                  </a>
                                  <a class="tpproductdot__variationitem" href="shop-details.html">
                                     <div class="tpproductdot__termshape">
                                        <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                        <span class="tpproductdot__termshape-border purple-product-border"></span>
                                     </div>
                                  </a>
                               </div>
                               <div class="tpproduct__rating">
                                  <ul>
                                     <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="far fa-star"></i></a>
                                     </li>
                                     <li>
                                        <span>(81)</span>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- product-area-end -->


 </main>
@endsection
