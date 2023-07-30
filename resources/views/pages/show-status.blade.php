@extends('layouts.account')

@section('page-title', 'Listings Request Status - Tommy Realty')

@section('page-bg',
    'https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')



@section('content')
    <div class="request-list">
        <h2 class="mb-3 all-requests">All Requests</h2>
        @for ($i = 0; $i < 5; $i++)
            <div class="request-list__wrapper">

            <div >
                <h3 class="request-list__title mb-1">2134 Grand Ave </h3>
                <span class="request-list__details"><i class="fa-solid fa-bed mr-5"></i> BD 4
                    <i class="fa-solid fa-bath mr-5"></i> BA 3
                    <i class="fa-solid fa-ruler-combined"></i> 2000 SQFT</span>
            </div>

            <div class="request-list__info">
                <span class="request-list__info-title">
                    Status
                </span>
                <div
                    class="request-list__info-status request-list__info-status--success request-list__info-status--cancel request-list__info-status--sold">
                    Pending
                </div>
            </div>
        </div>
            
        @endfor
      
    </div>
@endsection

@section('scripts')
@endsection
