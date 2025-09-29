<x-app-layout>
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <header id="wn__header" class="header__area header__absolute">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="https://book-shop.local">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item">
                                    <a href="https://book-shop.local">Home</a>
                                </li>
                                <li class="drop">
                                    <a href="https://book-shop.local/books">Shop</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://book-shop.local/contacts">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shopcart">
                                <a class="cartbox_active" href="#">
                                    <span class="product_qun"></span>
                                </a>
                                <!-- Start Shopping Cart -->
                                <div class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>close</span>
                                        </div>
                                        <div class="content">
                                            <h6>Yuor cart is empty</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Shopping Cart -->
                            </li>
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <a href="https://book-shop.local/login">Log in</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start Mobile Menu -->

                <!-- End Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                </div>
                <!-- Mobile Menu -->
            </div>
        </header>
        <!-- //Header -->
        <!-- Start Search Popup -->
{{--        <div class="box-search-content search_active block-bg close__top">--}}
{{--            <form id="search_mini_form" class="minisearch" action="#">--}}
{{--                <div class="field__search">--}}
{{--                    <input type="text" placeholder="Search entire store here...">--}}
{{--                    <div class="action">--}}
{{--                        <a href="#"><i class="zmdi zmdi-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="close__wrap">--}}
{{--                <span>close</span>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <!--<div class="ht__bradcaump__area bg-image--4">  Banner 1920x1080 -->
    </div>
    <!-- End Bradcaump area -->
    <!-- Start main Content -->
    <div class="maincontent bg--white pt--80 pb--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="wn__fotorama__wrapper">
                                    <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                        <a href="1.jpg"><img src="{{ asset('assets/.' $book->cover )}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1>{{ $book->name }}</h1>
                                    <div class="price-box">
                                        <span>&#x20bd; {{ $book->price }}</span>
                                    </div>
                                    <div class="product-info-stock-sku d-flex">
                                        <p>Availability:<span>{{ $book->quantity }}</span></p>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <input id="qty" class="input-text qty" name="qty" min="1" value="1"
                                               title="Qty" type="number">
                                        <div class="addtocart__actions">
                                            <button class="tocart" type="submit" title="Add to Cart">Add to
                                                Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__overview">
                                        <p>{{ $author->getFullName() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info__detailed">
                        <div class="pro_details_nav nav justify-content-start" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details"
                               role="tab">Details</a>
                        </div>
                        <div class="tab__container">
                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                <div class="description__attribute">
                                    <p>{{ $author->biography }}</p>
                                </div>
                            </div>
                            <!-- End Single Tab Content -->

                            <!-- Start Single Tab Content -->

                            <!-- End Single Tab Content -->
                        </div>
                    </div>
                    <div class="wn__related__product pt--80 pb--50">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Related Products</h2>
                        </div>
                        <div class="row mt--60">
                            <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                                <!-- Start Single Product -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/1.jpg') }} alt="product image"></a>
                                            <a class="second__img animation1" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/2.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; 300</li>
                                                <li class="old_prize">&#x20bd; {{ $book->price }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->

                                <!-- Start Single Product -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/2.jpg') }}" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="{{ asset('assets/images/product/4.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; 200</li>
                                                <li class="old_prize">&#x20bd; {{ $book->price }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product --> <!--сделать через  @foreach() ?-->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/3.jpg') }}" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="{{ asset('assets/images/product/6.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; 100</li>
                                                <li class="old_prize">&#x20bd; {{ $book->price }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/4.jpg') }}" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="{{ asset('assets/images/product/8.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; 100</li>
                                                <li class="old_prize">&#x20bd; {{ $book->price }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/9.jpg')  }}" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="{{ asset('assets/images/product/2.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; {{ $book->price }}</li>
                                                <li class="old_prize">&#x20bd; 1100</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{ route('books.show', $book->id ) }}"><img
                                                    src="{{ asset('assets/images/product/9.jpg') }}" alt="product image"></a>
                                            <a class="second__img animation1" href="single-product.html"><img
                                                    src="{{ asset('assets/images/product/8.jpg') }}" alt="product image"></a>
                                            <div class="new__box">
                                                <span class="new-label">New</span>
                                            </div>
                                            <ul class="prize position__right__bottom d-flex">
                                                <li>&#x20bd; 200</li>
                                                <li class="old_prize">&#x20bd; {{ $book->price }}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li><a class="cart" href="{{ route('cart.store', $book) }}"></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"></a></li>
                                                        <li><a class="compare" href="compare.html"></a></li>
                                                        <li><a data-toggle="modal" title="Quick View"
                                                               class="quickview modal-view detail-link"
                                                               href="#productmodal"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Single Product -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                    <div class="shop__sidebar">
                        <aside class="wedget__categories poroduct--cat">
                            <h3 class="wedget__title">Product Categories</h3>
                            <ul>
                                <li><a href="#">Biography <span>(2)</span></a></li>
                                <li><a href="#">History <span>(2)</span></a></li>
                                <li><a href="#">Romance <span>(2)</span></a></li>
                                <li><a href="#">Fiction/Fantasy <span>(2)</span></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main Content -->
    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form id="search_mini_form--2" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search entire store here...">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->
    <!-- Footer Area -->
    <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
        <div class="footer-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__widget footer__menu">
                            <div class="ft__logo">
                                <a href="{{  route('index') }}">
                                    <img src="{{ asset('assets/images/logo/3.png') }}" alt="logo">
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered duskam alteration variations of passages</p>
                            </div>
                            <div class="footer__content">
                                <ul class="social__net social__net--2 d-flex justify-content-center">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-google"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <ul class="mainmenu d-flex justify-content-center">
                                    <li><a href="index.html">Trending</a></li>
                                    <li><a href="index.html">Best Seller</a></li>
                                    <li><a href="index.html">All Product</a></li>
                                    <li><a href="index.html">Wishlist</a></li>
                                    <li><a href="index.html">Blog</a></li>
                                    <li><a href="index.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">
                            <div class="copy__right__inner text-left">
                                <p>Copyright <i class="fa fa-copyright"></i> <a href="#">Boighor.</a> All Rights
                                    Reserved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="payment text-right">
                            <img src="{{ asset('assets/images/icons/payment.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="{{ asset('assets/images/product/big-img/1.jpg') }}">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">&#x20bd; 200</span>
                                        <span class="old-price">&#x20bd; {{ $book->price }}</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry
                                    and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social__net social__net--2 d-flex justify-content-start">
                                            <li class="facebook"><a href="#" class="rss social-icon"><i
                                                        class="zmdi zmdi-rss"></i></a></li>
                                            <li class="linkedin"><a href="#" class="linkedin social-icon"><i
                                                        class="zmdi zmdi-linkedin"></i></a></li>
                                            <li class="pinterest"><a href="#" class="pinterest social-icon"><i
                                                        class="zmdi zmdi-pinterest"></i></a></li>
                                            <li class="tumblr"><a href="#" class="tumblr social-icon"><i
                                                        class="zmdi zmdi-tumblr"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

    </div>
</x-app-layout>
