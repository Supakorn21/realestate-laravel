<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/styles.scss', 'resources/js/app.js'])

</head>
@yield('styles')

<body>
   @include('components.header')
    <div class="account-layout">
        <div class="listings-city">
            <img class="listings-city__img"
                src="@yield('page-bg')"
                alt="listing_image">
            <h1 class="listings-city__title">@yield('title')</h1>
        </div>
        <div class="content">
                 <div class="container" >
            <div class="row">
                <div class="col-md-3">
                    <div class="account__menu">
                        <h2>Menu</h2>
                        <a href="{{route('account.saved')}}">Saved Listings</a>
                        <a href="{{route('account.show-status')}}">Listing Request Statys</a>
                    </div>
                </div>
                <div class="col-md-8">
                     @yield('content')
                </div>
            </div>
        </div>
        </div>
  
          
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
</body>

</html>
