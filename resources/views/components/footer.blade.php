@if ($roundFooter)
    <div class="fixed bottom-0 flex justify-center items-center w-full z-10">
        <script>
            if (window.location.pathname != '/map') {
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Get the latitude and longitude
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    document.getElementById('gotoMap').onclick = function() {
                        window.location.href = '/map?lat=' + latitude + '&lng=' + longitude;
                    };
                });
            }
        </script>
        <div id="gotoMap" class="absolute bottom-[44px] cursor-pointer">
            <svg width="132" height="132" viewBox="0 0 132 132" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-[92px] h-[92px]" preserveAspectRatio="none">
                <g filter="url(#filter0_d_1297_4982)">
                    <circle cx="66" cy="62" r="46" fill="#79B937"></circle>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M66.4378 45.1836C67.0914 45.1836 67.7183 45.4433 68.1805 45.9055C68.6427 46.3677 68.9024 46.9945 68.9024 47.6482V59.9712H81.2254C81.879 59.9712 82.5059 60.2309 82.9681 60.6931C83.4303 61.1553 83.69 61.7822 83.69 62.4358C83.69 63.0895 83.4303 63.7163 82.9681 64.1785C82.5059 64.6407 81.879 64.9004 81.2254 64.9004H68.9024V77.2234C68.9024 77.8771 68.6427 78.504 68.1805 78.9662C67.7183 79.4284 67.0914 79.688 66.4378 79.688C65.7841 79.688 65.1572 79.4284 64.695 78.9662C64.2328 78.504 63.9732 77.8771 63.9732 77.2234V64.9004H51.6501C50.9965 64.9004 50.3696 64.6407 49.9074 64.1785C49.4452 63.7163 49.1855 63.0895 49.1855 62.4358C49.1855 61.7822 49.4452 61.1553 49.9074 60.6931C50.3696 60.2309 50.9965 59.9712 51.6501 59.9712H63.9732V47.6482C63.9732 46.9945 64.2328 46.3677 64.695 45.9055C65.1572 45.4433 65.7841 45.1836 66.4378 45.1836Z"
                    fill="white"></path>
                <defs>
                    <filter id="filter0_d_1297_4982" x="0" y="0" width="132" height="132"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dy="4"></feOffset>
                        <feGaussianBlur stdDeviation="10"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1297_4982">
                        </feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1297_4982" result="shape">
                        </feBlend>
                    </filter>
                </defs>
            </svg>
        </div>
        @if (!$noBack)
            <div class="w-full h-[95px]">
                <img class="w-full h-full" src="{{ asset('/images/SubtractblackBg.png') }}" alt="">
            </div>
            <div class="absolute flex w-full px-[64px] justify-between">
                <a href="{{ route('homePage') }}">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]"
                        preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M13.7119 2.36628C14.06 2.03715 14.5209 1.85376 15 1.85376C15.4791 1.85376 15.94 2.03715 16.2881 2.36628L25.3706 10.9519C25.9331 11.4825 26.25 12.2232 26.25 12.9957V23.4394C26.25 24.1853 25.9537 24.9007 25.4262 25.4281C24.8988 25.9556 24.1834 26.2519 23.4375 26.2519H19.6875C19.318 26.2519 18.9521 26.1791 18.6108 26.0376C18.2694 25.8962 17.9593 25.6888 17.6981 25.4275C17.4369 25.1661 17.2298 24.8558 17.0886 24.5144C16.9473 24.173 16.8748 23.807 16.875 23.4375V18.75C16.875 18.5014 16.7762 18.2629 16.6004 18.0871C16.4246 17.9113 16.1861 17.8125 15.9375 17.8125H14.0625C13.8139 17.8125 13.5754 17.9113 13.3996 18.0871C13.2238 18.2629 13.125 18.5014 13.125 18.75V23.4375C13.125 24.1834 12.8287 24.8988 12.3012 25.4263C11.7738 25.9537 11.0584 26.25 10.3125 26.25H6.5625C5.81658 26.25 5.10121 25.9537 4.57376 25.4263C4.04632 24.8988 3.75 24.1834 3.75 23.4375V12.9938C3.75 12.2213 4.06875 11.4807 4.63125 10.95L13.7119 2.36253V2.36628ZM15 3.72753L5.9175 12.315C5.8253 12.4024 5.75182 12.5077 5.70154 12.6244C5.65126 12.741 5.62522 12.8667 5.625 12.9938V23.4375C5.625 23.6862 5.72377 23.9246 5.89959 24.1004C6.0754 24.2763 6.31386 24.375 6.5625 24.375H10.3125C10.5611 24.375 10.7996 24.2763 10.9754 24.1004C11.1512 23.9246 11.25 23.6862 11.25 23.4375V18.75C11.25 18.0041 11.5463 17.2887 12.0738 16.7613C12.6012 16.2338 13.3166 15.9375 14.0625 15.9375H15.9375C16.6834 15.9375 17.3988 16.2338 17.9262 16.7613C18.4537 17.2887 18.75 18.0041 18.75 18.75V23.4375C18.75 23.6862 18.8488 23.9246 19.0246 24.1004C19.2004 24.2763 19.4389 24.375 19.6875 24.375H23.4375C23.6861 24.375 23.9246 24.2763 24.1004 24.1004C24.2762 23.9246 24.375 23.6862 24.375 23.4375V12.9938C24.375 12.8664 24.3491 12.7404 24.2988 12.6233C24.2485 12.5063 24.1749 12.4008 24.0825 12.3132L15 3.72753Z"
                            fill="white"></path>
                    </svg>
                </a>

                @if (Auth::check())
                    <a href="{{ route('profilePage') }}">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]"
                            preserveAspectRatio="xMidYMid meet">
                            <path
                                d="M15 16.25C18.4518 16.25 21.25 13.4518 21.25 10C21.25 6.54822 18.4518 3.75 15 3.75C11.5482 3.75 8.75 6.54822 8.75 10C8.75 13.4518 11.5482 16.25 15 16.25Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M25 26.25C25 23.5978 23.9464 21.0543 22.0711 19.1789C20.1957 17.3036 17.6522 16.25 15 16.25C12.3478 16.25 9.8043 17.3036 7.92893 19.1789C6.05357 21.0543 5 23.5978 5 26.25"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                @else
                    <a href="{{ route('signIn') }}">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]"
                            preserveAspectRatio="xMidYMid meet">
                            <path
                                d="M15 16.25C18.4518 16.25 21.25 13.4518 21.25 10C21.25 6.54822 18.4518 3.75 15 3.75C11.5482 3.75 8.75 6.54822 8.75 10C8.75 13.4518 11.5482 16.25 15 16.25Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M25 26.25C25 23.5978 23.9464 21.0543 22.0711 19.1789C20.1957 17.3036 17.6522 16.25 15 16.25C12.3478 16.25 9.8043 17.3036 7.92893 19.1789C6.05357 21.0543 5 23.5978 5 26.25"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                @endif
            </div>
        @endif
    </div>
@else
    <div class="flex fixed bottom-0 w-full h-[95px]">
        <svg width="100%" height="100%" viewBox="0 0 428 95" fill="none" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none">
            <path d="M-2 0H428V95H-2V0Z" fill="#343A40"></path>
        </svg>
        <div class="flex absolute px-[63px] justify-between w-full h-full items-center">
            <a href="{{ route('homePage') }}">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]" preserveAspectRatio="xMidYMid meet">
                    <path
                        d="M13.7119 2.36625C14.06 2.03712 14.5209 1.85373 15 1.85373C15.4791 1.85373 15.94 2.03712 16.2881 2.36625L25.3706 10.9519C25.9331 11.4825 26.25 12.2231 26.25 12.9956V23.4394C26.25 24.1853 25.9537 24.9007 25.4262 25.4281C24.8988 25.9556 24.1834 26.2519 23.4375 26.2519H19.6875C19.318 26.2519 18.9521 26.1791 18.6108 26.0376C18.2694 25.8961 17.9593 25.6888 17.6981 25.4274C17.4369 25.1661 17.2298 24.8558 17.0886 24.5144C16.9473 24.1729 16.8748 23.807 16.875 23.4375V18.75C16.875 18.5014 16.7762 18.2629 16.6004 18.0871C16.4246 17.9113 16.1861 17.8125 15.9375 17.8125H14.0625C13.8139 17.8125 13.5754 17.9113 13.3996 18.0871C13.2238 18.2629 13.125 18.5014 13.125 18.75V23.4375C13.125 24.1834 12.8287 24.8988 12.3012 25.4262C11.7738 25.9537 11.0584 26.25 10.3125 26.25H6.5625C5.81658 26.25 5.10121 25.9537 4.57376 25.4262C4.04632 24.8988 3.75 24.1834 3.75 23.4375V12.9937C3.75 12.2212 4.06875 11.4806 4.63125 10.95L13.7119 2.3625V2.36625ZM15 3.7275L5.9175 12.315C5.8253 12.4024 5.75182 12.5077 5.70154 12.6243C5.65126 12.741 5.62522 12.8667 5.625 12.9937V23.4375C5.625 23.6861 5.72377 23.9246 5.89959 24.1004C6.0754 24.2762 6.31386 24.375 6.5625 24.375H10.3125C10.5611 24.375 10.7996 24.2762 10.9754 24.1004C11.1512 23.9246 11.25 23.6861 11.25 23.4375V18.75C11.25 18.0041 11.5463 17.2887 12.0738 16.7613C12.6012 16.2338 13.3166 15.9375 14.0625 15.9375H15.9375C16.6834 15.9375 17.3988 16.2338 17.9262 16.7613C18.4537 17.2887 18.75 18.0041 18.75 18.75V23.4375C18.75 23.6861 18.8488 23.9246 19.0246 24.1004C19.2004 24.2762 19.4389 24.375 19.6875 24.375H23.4375C23.6861 24.375 23.9246 24.2762 24.1004 24.1004C24.2762 23.9246 24.375 23.6861 24.375 23.4375V12.9937C24.375 12.8664 24.3491 12.7403 24.2988 12.6233C24.2485 12.5063 24.1749 12.4008 24.0825 12.3131L15 3.7275Z"
                        fill="white"></path>
                </svg>
            </a>
            @if (Auth::check())
                <a href="{{ route('profilePage') }}">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]"
                        preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M15 16.25C18.4518 16.25 21.25 13.4518 21.25 10C21.25 6.54822 18.4518 3.75 15 3.75C11.5482 3.75 8.75 6.54822 8.75 10C8.75 13.4518 11.5482 16.25 15 16.25Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M25 26.25C25 23.5978 23.9464 21.0543 22.0711 19.1789C20.1957 17.3036 17.6522 16.25 15 16.25C12.3478 16.25 9.8043 17.3036 7.92893 19.1789C6.05357 21.0543 5 23.5978 5 26.25"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            @else
                <a href="{{ route('signIn') }}">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px]"
                        preserveAspectRatio="xMidYMid meet">
                        <path
                            d="M15 16.25C18.4518 16.25 21.25 13.4518 21.25 10C21.25 6.54822 18.4518 3.75 15 3.75C11.5482 3.75 8.75 6.54822 8.75 10C8.75 13.4518 11.5482 16.25 15 16.25Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M25 26.25C25 23.5978 23.9464 21.0543 22.0711 19.1789C20.1957 17.3036 17.6522 16.25 15 16.25C12.3478 16.25 9.8043 17.3036 7.92893 19.1789C6.05357 21.0543 5 23.5978 5 26.25"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            @endif
        </div>
    </div>
@endif
