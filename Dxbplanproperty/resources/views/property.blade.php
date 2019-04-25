@extends('settings.main')

@section('head')
    @include('settings.head')
@endsection

@section('title', $propertyDetails->name)

@section('header_navbar')
    @include('settings.header-navbar')
@endsection


@section('main')
    <!-- Sub banner start -->
    <div class="sub-banner overview-bgi">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Our Properties</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('property.properties')}}">Property</a></li>
                    <li class="active">{{$propertyDetails->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Properties details page start -->
    <div class="properties-details-page content-area-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                        <div class="heading-properties">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>{{$propertyDetails->name}}</h3>
                                        <p><i class="fa fa-map-marker"></i> 20/F Green Road, Dhanmondi, Dhaka</p>
                                    </div>
                                    <div class="p-r">
                                        <h3>{{$propertyDetails->convertPrice()}}</h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            @foreach($properties as $images)
                            <div class="{{$count == 0 ? 'active' : ''}} item carousel-item" data-slide-number="{{$count++}}">
                                <img src="{{asset('app/public/'.$images->image)}}" class="img-fluid" alt="properties-photo" style="width: 1110px; height: 587px">
                            </div>
                            @endforeach
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified ">
                            @foreach($properties as $images)
                            <li class="list-inline-item">
                                <a id="carousel-selector-{{$count1++}}" data-slide-to="{{$count1sub++}}" data-target="#propertiesDetailsSlider">
                                    <img src="{{asset('app/public/'.$images->image)}}" class="img-fluid" alt="properties-photo-smale" style="width: 222px; height: 117px">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 slider">
                    <!-- Search area start -->

                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-60">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <h3 class="heading">Property Description</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum.
                                    Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                                <p>Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris
                                    nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                                <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at
                                    tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.</p>
                                <p>Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                            </div>


                            <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                                <div class="property-video">
                                    <h3 class="heading">Property Vedio</h3>
                                    <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                                <div class="section location">
                                    <h3 class="heading">Property Location</h3>
                                    <div class="map">
                                        <div id="contactMap" class="contact-map"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Features opions start -->
                    <div class="features-opions mb-60">
                        <h3 class="heading">Features</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wifi
                                    </li>
                                    <li>
                                        <i class="flaticon-swimmer"></i>
                                        Swimming Pool
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-balcony-and-door"></i>
                                        Balcony
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-old-typical-phone"></i>
                                        Telephone
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i>
                                        Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-theatre-masks"></i>
                                        Home Theater
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        Alarm
                                    </li>
                                    <li>
                                        <i class="flaticon-padlock"></i>
                                        Security
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        Gym
                                    </li>
                                    <li>
                                        <i class="flaticon-idea"></i>
                                        Electric Range
                                    </li>
                                    <li>
                                        <i class="flaticon-green-park-city-space"></i>
                                        Private space
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contact 1 start -->
                    <div class="contact-3 mb-60">
                        <h3 class="heading">Leave a Comment</h3>
                        <div class="container">
                            <div class="row">
                                <form action="#" method="GET" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group name">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group email">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group subject">
                                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group number">
                                                <input type="text" name="phone" class="form-control" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group message">
                                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="send-btn">
                                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Properties details page start -->

    {{--Consent forms goes here--}}
    @include('cookieConsent::index')
@endsection

@section('footer')
    @include('settings.footer')
@endsection


@section('script')
    @include('settings.js')
@endsection
