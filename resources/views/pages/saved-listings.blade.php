@extends('layouts.account')

@section('page-title', 'User Saved Listings - Tommy Realty')

@section('page-bg', 'https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')



@section('content')
    <div class="listings-properties ">
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
@endsection

@section('scripts')
    <script>
        $('.listings-properties__saved').on('click', function() {
            $(this).toggleClass('listings-properties__saved--active');
        });
    </script>
@endsection
