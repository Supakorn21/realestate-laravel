@extends('layouts.main')
@section('page-title', 'All Properties - Tommy Realty')
@section('content')
    <div class="listings-page">
        <div class="listings-city">
            <img class="listings-city__img"
                src="https://buildingrva.com/wp-content/uploads/2022/05/46f4cd1f96bb040f2b2f814f8cd10caa.jpg"
                alt="listing_image">
            <h1 class="listings-city__title">South beach</h1>
        </div>
        <div class="listings-filter">
            <div class="listings-filter__wrapper">
                <div class="listings-filter__option">
                    Any Price <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    All Bed <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    Hometype <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    More <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__button">
                    Search
                </div>
            </div>
        </div>
        <div class="listings-properties">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="listings-properties__item">
                            <img src="https://buildingrva.com/wp-content/uploads/2022/05/46f4cd1f96bb040f2b2f814f8cd10caa.jpg"
                                alt="listing_image" class="listings-properties__img">
                                <div class="listings-properties__saved ">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            <div class="listings-properties__item-info">
                                <span class="listings-properties__item-price">
                                    $250,000
                                </span>
                                <span class="listings-properties__item-details">
                                    <i class="fa-solid fa-bed mr-5"></i> BD 4
                                    <i class="fa-solid fa-bath mr-5"></i> BA 3
                                    <i class="fa-solid fa-ruler-combined"></i> 2000 SQFT
                                </span>
                                <span class="listings-properties__item-address">
                                    1234 Main Street, South Beach, CA
                                </span>
                                <hr>
                                <div class="listings-properties__item-line">
                                    <span class="listings-properties__item-agent">
                                        <i class="fa-solid fa-user"></i> John Doe
                                    </span>
                                    <span class="listings-properties__item-date">
                                        <i class="fa-solid fa-calendar"></i> 5 days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
 $('.listings-properties__saved').on('click',function() {
        $(this).toggleClass('listings-properties__saved--active');
    });
</script>
   
@endsection