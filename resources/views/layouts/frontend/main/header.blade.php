    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="/">fh
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    {!! Form::open(array('data-toggle' => 'validator', 'method' => 'post', 'class' => 'nav-search form-inline my-0 form-control' )) !!}
                        {!! Form::text('search', null, array('id' => 'search_id', 'class' => 'form-control input-lg')) !!}
                        {{ Form::submit('Search', array('id'=>'cariItem', 'class'=>'btn btn-outline-secondary  ml-3 my-sm-0')) }}
                    {!! Form::close()!!}
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men">T-Shirts</a>
                                            <a class="dropdown-item" href="men">Coats</a>
                                            <a class="dropdown-item" href="men">Shirts</a>
                                            <a class="dropdown-item" href="men">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men">Jackets</a>
                                            <a class="dropdown-item" href="men">Trousers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">shop's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="shop">Dresses</a>
                                            <a class="dropdown-item" href="shop">T-shirts</a>
                                            <a class="dropdown-item" href="shop">Skirts</a>
                                            <a class="dropdown-item" href="shop">Jeans</a>
                                            <a class="dropdown-item" href="shop">Tunics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kids Clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3 ">
                                            <span class="bg-light">Boy's Clothing</span>
                                            <a class="dropdown-item" href="boys">T-Shirts</a>
                                            <a class="dropdown-item" href="boys">Coats</a>
                                            <a class="dropdown-item" href="boys">Shirts</a>
                                            <a class="dropdown-item" href="boys">Suits & Blazers</a>
                                            <a class="dropdown-item" href="boys">Jackets</a>
                                            <a class="dropdown-item" href="boys">Trousers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>