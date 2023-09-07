@extends('frontend.master_dashboard')
@section('content')


    @include('frontend.home.home_slider')
    <!--End home slider-->

    @include('frontend.home.featuer_category')
    <!--End category slider-->

    @include('frontend.home.banners')
    <!--End banners-->

    @include('frontend.home.products_tabs')
    <!--Products Tabs-->

    @include('frontend.home.best_sales')
    <!--End Best Sales-->
    <!-- TV Category -->

    @include('frontend.home.tv_category')
    <!--End TV Category -->
    <!-- Tshirt Category -->

    @include('frontend.home.tshirt_actegory')
    <!--End Tshirt Category -->
    <!-- Computer Category -->

    @include('frontend.home.computer_category')
    <!--End Computer Category -->

    @include('frontend.home.columns')
    <!--End 4 columns-->
    <!--Vendor List -->

    @include('frontend.home.vendor_list')
    <!--End Vendor List -->
    
@endsection
