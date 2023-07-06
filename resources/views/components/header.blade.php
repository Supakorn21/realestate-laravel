 <header class="header">
        <div class="container">
            <a href="{{route('home')}}" class="header__logo" style="text-decoration: none; color:black">
                Tommy Realty
            </a>
            <div class="header__menu">
                <a href="{{route('home')}}" class="header__menu-link header__menu-link--active">Home</a>
                <a href="/asdasd/asd/asd" class="header__menu-link">Listing</a>
                <a href="#" class="header__menu-link">Property</a>
                <a href="#" class="header__menu-link">Pages</a>
            </div>
            <div class="header__account">
                <a href="/account/saved" class="header__account-link">
                    <i class="fa-solid fa-heart"></i>
                </a>
                <a href="{{route('account.show-status')}}" class="header__account-link">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>

        </div>

    </header>