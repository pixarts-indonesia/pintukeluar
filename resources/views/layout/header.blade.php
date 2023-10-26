<header>
    <!-- Header Section Start -->
    <nav class="section header-section">

        <!-- Header top Start -->
        <div class="header-top d-none d-lg-block">
            <div class="container">

                <!-- Header top Wrapper Start -->
                <div class="header-top-wrapper">

                    <!-- Header top Wrapper Start -->
                    <div class="header-top-info"></div>
                    <!-- Header top Wrapper End -->

                    <!-- Header top Wrapper Start -->
                    <div class="header-top-btn">
                        <a href="login.html">Login</a>
                        <a href="register.html">Register</a>
                    </div>
                    <!-- Header top Wrapper End -->

                </div>
                <!-- Header top Wrapper End -->

            </div>
        </div>
        <!-- Header top End -->

        <!-- Header Main Start -->
        <div class="header-main">
            <div class="container">

                <!-- Header Main Start -->
                <div class="header-main-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="index.html">
                            <h3 class="text-white">Pintukeluar.</h3>
                        </a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="primary-menu d-none d-lg-block">
                        <ul class="nav-menu">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Layanan</a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Motor</a></li>
                                    <li><a href="service-details.html">Mobil</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Produk</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.html">Oli</a></li>
                                    <li><a href="shop-left-sidebar.html">Ban</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Blog</a></li>
                            <li><a href="contact.html">Tentang</a></li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Meta Start -->
                    <div class="header-meta">

                        <div class="meta-dropdown dropdown">
                            <button class="toggle" data-bs-toggle="dropdown">
                                <i class="icofont-shopping-cart"></i>
                                <span class="count">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-cart">
                                <!-- Cart Content Start -->
                                <div class="cart-content">
                                    <ul>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('assets/images/cart-1.png') }}" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">Madden by Steve Madden Cale 6</a></h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('assets/images/cart-2.png') }}" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">New Balance Fresh Foam LAZR v1 Sport</a> </h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('assets/images/cart-3.png') }}" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name"><a href="product-details-left-sidebar.html">Water and Wind Resistant Insulated Jacket</a></h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <button class="cart-remove"><i class="icofont-close-line"></i></button>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- Cart Content End -->

                                <!-- Cart Price Start -->
                                <div class="cart-price">
                                    <div class="cart-subtotals">
                                        <div class="price-inline">
                                            <span class="label">Subtotal</span>
                                            <span class="value">$42.70</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Shipping</span>
                                            <span class="value">$7.00</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Taxes</span>
                                            <span class="value">$0.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div class="price-inline">
                                            <span class="label">Total</span>
                                            <span class="value">$49.70</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Price Start -->

                                <div class="checkout-btn">
                                    <a href="checkout.html" class="btn btn-outline-dark btn-hover-primary d-block">Checkout</a>
                                </div>
                            </div>
                        </div>

                        <div class="header-search d-none d-lg-block">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="header-toggle d-lg-none">
                            <button class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                    <!-- Header Meta End -->

                </div>
                <!-- Header Main End -->

            </div>
        </div>
        <!-- Header Main End -->

    </nav>
    <!-- Header Section End -->

    <!-- Mobile Menu Start -->
    <nav class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">

        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

            <!-- Header top Info Start -->
            <div class="header-top-info"></div>
            <!-- Header top Info End -->

            <!-- Header top Button Start -->
            <div class="header-top-btn">
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
            <!-- Header top Button End -->

            <!-- Header Search Start -->
            <div class="header-search">
                <form action="#">
                    <input type="text" placeholder="Search">
                    <button><i class="icofont-search-2"></i></button>
                </form>
            </div>
            <!-- Header Search End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Layanan</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Motor</a></li>
                            <li><a href="service-details.html">Mobil</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Produk</a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid.html">Oli</a></li>
                            <li><a href="shop-left-sidebar.html">Ban</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Blog</a></li>
                    <li><a href="contact.html">Tentang</a></li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
    </nav>
    <!-- Mobile Menu End -->
</header>