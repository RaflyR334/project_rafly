@extends('layouts.front')
@section('content')
<!-- product-area-start -->
<section class="product-area pt-80 pb-25">
    <div class="container">
       <div class="row">
          <div class="col-lg-5 col-md-12">
             <div class="tpproduct-details__nab pr-50 mb-40">
                <div class="d-flex align-items-start">
                   <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                         <img src="assets/img/product/home-one/product-1.jpg" alt="">
                      </button>
                     <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                         <img src="assets/img/product/home-one/product-2.jpg" alt="">
                      </button>
                     <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                      <img src="assets/img/product/home-one/product-3.jpg" alt="">
                      </button>
                   </div>
                   <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <img src="assets/img/product/home-one/product-1.jpg" alt="">
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <img src="assets/img/product/home-one/product-2.jpg" alt="">
                     </div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <img src="assets/img/product/home-one/product-3.jpg" alt="">
                     </div>
                   </div>
                 </div>
             </div>
          </div>
          <div class="col-lg-5 col-md-7">
             <div class="tpproduct-details__content">
                <div class="tpproduct-details__tag-area d-flex align-items-center mb-5">
                   <span class="tpproduct-details__tag">Dress</span>
                   <div class="tpproduct-details__rating">
                      <a href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                   </div>
                   <a class="tpproduct-details__reviewers">10 Reviews</a>
                </div>
                <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                   <h3 class="tpproduct-details__title">Wide Cotton Tunic Dress</h3>
                   <span class="tpproduct-details__stock">In Stock</span>
                </div>
                <div class="tpproduct-details__price mb-30">
                   <del>$9.35</del>
                   <span>$7.25</span>
                </div>
                <div class="tpproduct-details__pera">
                   <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a <br>completely modern design and you feel comfortable to put on this hijab. <br>Buy it at the best price.</p>
                </div>
                <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
                   <div class="tpproduct-details__quantity">
                      <span class="cart-minus"><i class="far fa-minus"></i></span>
                      <input class="tp-cart-input" type="text" value="1">
                      <span class="cart-plus"><i class="far fa-plus"></i></span>
                   </div>
                   <div class="tpproduct-details__cart ml-20">
                      <button><i class="fal fa-shopping-cart"></i> Add To Cart</button>
                   </div>
                   <div class="tpproduct-details__wishlist ml-20">
                      <a href="#"><i class="fal fa-heart"></i></a>
                   </div>
                </div>
                <div class="tpproductdot mb-30">
                   <a class="tpproductdot__variationitem" href="#">
                      <div class="tpproductdot__termshape">
                         <span class="tpproductdot__termshape-bg"></span>
                         <span class="tpproductdot__termshape-border"></span>
                      </div>
                   </a>
                   <a class="tpproductdot__variationitem" href="#">
                      <div class="tpproductdot__termshape">
                         <span class="tpproductdot__termshape-bg red-product-bg"></span>
                         <span class="tpproductdot__termshape-border red-product-border"></span>
                      </div>
                   </a>
                   <a class="tpproductdot__variationitem" href="#">
                      <div class="tpproductdot__termshape">
                         <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                         <span class="tpproductdot__termshape-border orange-product-border"></span>
                      </div>
                   </a>
                   <a class="tpproductdot__variationitem" href="#">
                      <div class="tpproductdot__termshape">
                         <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                         <span class="tpproductdot__termshape-border purple-product-border"></span>
                      </div>
                   </a>
                </div>
                <div class="tpproduct-details__information tpproduct-details__code">
                   <p>SKU:</p><span>BO1D0MX8SJ</span>
                </div>
                <div class="tpproduct-details__information tpproduct-details__categories">
                   <p>Categories:</p>
                   <span><a href="#">T-Shirts,</a></span>
                   <span><a href="#">Tops,</a></span>
                   <span><a href="#">Womens</a></span>
                </div>
                <div class="tpproduct-details__information tpproduct-details__tags">
                   <p>Tags:</p>
                   <span><a href="#">fashion,</a></span>
                   <span><a href="#">t-shirts,</a></span>
                   <span><a href="#">women</a></span>
                </div>
                <div class="tpproduct-details__information tpproduct-details__social">
                   <p>Share:</p>
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-behance"></i></a>
                   <a href="#"><i class="fab fa-youtube"></i></a>
                   <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-5">
             <div class="tpproduct-details__condation">
                <ul>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="assets/img/icon/product-det-1.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Free Shipping apply to all<br>orders over $100</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="assets/img/icon/product-det-2.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Guranteed 100% Organic<br>from natural farmas</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="assets/img/icon/product-det-3.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>1 Day Returns if you change<br>your mind</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="assets/img/icon/product-det-4.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Covid-19 Info: We keep<br>delivering.</p>
                         </div>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- product-area-end -->
@endsection
