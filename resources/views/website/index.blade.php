@extends('layouts.website')

@section('content')

<!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(assets/website/images/original-2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h4 class="stroke"><strong>With You Wherever</strong>You Are</h4>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html"><strong>Download Now ></strong></strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide"
                        style="background-image:url(assets/website/images/1120-460-tt.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>Progress & Success<br><strong>Currency</strong></h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide"
                        style="background-image:url(assets/website/images/banner_03.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h4>Enjoy Your Digital Experience<br><h4><strong>With Albaraka Mobile</h4></strong></h4>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

   
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters card-horizontal">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">Financing for All Businesses</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi unde esse inventore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit reiciendis illum!</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters card-horizontal">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">Financing for All Businesses</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi unde esse inventore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit reiciendis illum!</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
<div class="section layout_padding padding_top_0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span class="theme_color"></span>News</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="full news_blog">
                    <img class="img-responsive news-image" src="{{ url('/assets/images/1920-x-480_4.jpg') }}" alt="Bitcoin News" />
                    <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                    <div class="blog_details">
                        <h3>Distinguish Account</h3>
                        <p>Al Baraka Distinguish Account is a savings account characterized by a profit return that is compatible with the provisions</p>
                        <button type="button" class="btn btn-secondary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="full news_blog">
                    <img class="img-responsive news-image" src="{{ url('/assets/images/1120X460_1.jpg') }}" alt="Bitcoin News" />
                    <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                    <div class="blog_details">
                        <h3>Golden Deposit</h3>
                        <p>It is a special investment deposit that combines the features of the current account and the properties of the Mudaraba</p>
                        <button type="button" class="btn btn-secondary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="full news_blog">
                    <img class="img-responsive news-image" src="{{ url('/assets/images/1120X460-e.jpg') }}" alt="Bitcoin News" />
                    <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                    <div class="blog_details">
                        <h3>Albaraka Mobile App</h3>
                        <p>Enjoy our banking services through the Al Baraka Mobile application and distinguish with a different digital experience.</p>
                        <button type="button" class="btn btn-secondary">Read More</button>
                    </div>
                </div>
            </div>
            <!-- New card -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="full news_blog">
                    <img class="img-responsive news-image" src="{{ url('/assets/images/1920x480-hero-home-1.jpg') }}" alt="New Card Image" />
                    <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                    <div class="blog_details">
                        <h3>Internet Banking</h3>
                        <p>Al-Baraka Net is one of the additional banking channels that the bank provides to its customers to enable them to.</p>
                        <button type="button" class="btn btn-secondary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button>SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->


@endsection
