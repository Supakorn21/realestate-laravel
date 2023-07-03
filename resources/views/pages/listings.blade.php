@extends('layouts.main')

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
    </div>
@endsection
