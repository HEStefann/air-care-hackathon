@extends('layouts.guestUser')
@section('content')
{{-- if error or success --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @elseif(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="min-w-screen min-h-screen pb-[206px] pt-[56px]">
        <div class="fixed top-0 w-full z-10">
            <x-navbar :back="true" :logo="true" :notification="false" />
        </div>
        <div class="px-[16px] mt-[56px] flex flex-col">
            <p class="w-[164px] text-base font-bold text-center self-center uppercase text-[#343a40]">Креирај профил</p>
            <form id="registerForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data"
                class="mt-[41px] flex flex-col gap-[7px]">
                @csrf
                <p class="text-sm font-medium text-[#343a40]">Внеси име и презиме</p>
                <input name="name" type="text" placeholder="someone"
                    class="text-xs font-medium pl-[18px] text-[#9c9c9c] w-full h-[51px] rounded-[15px] bg-[#f4f4f4]">
                <p class="text-sm font-medium text-[#343a40]">Внеси е-маил адреса</p>
                <input name="email" type="text" placeholder="someone@email.com"
                    class="text-xs font-medium pl-[18px] text-[#9c9c9c] w-full h-[51px] rounded-[15px] bg-[#f4f4f4]">
                <p class="text-sm font-medium text-[#343a40] flex gap-[20px] items-center">Внеси телефонски број <span
                        class="text-xs font-medium text-[#525659]"> (*опционално) </span></p>
                <input name="phone" type="text" placeholder="+389000000000"
                    class="text-xs font-medium pl-[18px] text-[#9c9c9c] w-full h-[51px] rounded-[15px] bg-[#f4f4f4]">
                <p class="text-sm font-medium text-[#343a40]">Внеси лозинка</p>
                <input name="password" type="password" placeholder="*************"
                    class="text-xs font-medium pl-[18px] text-[#9c9c9c] w-full h-[51px] rounded-[15px] bg-[#f4f4f4]">
                <p class="text-sm font-medium text-[#343a40]">Потврди лозинка</p>
                <input name="password_confirmation" type="password" placeholder="*************"
                    class="text-xs font-medium pl-[18px] text-[#9c9c9c] w-full h-[51px] rounded-[15px] bg-[#f4f4f4]">
            </form>
            <div class="mt-[27px] flex gap-[14px] pl-[20px]">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6" preserveAspectRatio="none">
                    <rect width="24" height="24" rx="5" fill="#79B937"></rect>
                    <path
                        d="M19.5971 5.32644L9.47382 19.1669L4.83398 12.8233L6.02347 11.1971L9.47382 15.9028L18.4076 3.7002L19.5971 5.32644Z"
                        fill="white"></path>
                </svg>
                <p class="text-sm font-medium text-[#343a40]">Запомни ме</p>
            </div>
            <div class="mt-[30px] flex gap-[14px] pl-[20px]">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6" preserveAspectRatio="none">
                    <rect width="24" height="24" rx="5" fill="#79B937"></rect>
                    <path
                        d="M19.5971 5.32644L9.47382 19.1669L4.83398 12.8233L6.02347 11.1971L9.47382 15.9028L18.4076 3.7002L19.5971 5.32644Z"
                        fill="white"></path>
                </svg>
                <p class="w-[283px] text-sm font-medium text-[#343a40]">
                    Се согласувам со условите и полисата за користење на апликацијата.
                </p>
            </div>
            <div class="w-full flex items-center gap-[26px] justify-center mt-[41px] mb-[56px]">
                <svg width="100" height="1" viewBox="0 0 100 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg"preserveAspectRatio="none">
                    <line y1="0.5" x2="100" y2="0.5" stroke="#777777"></line>
                </svg>
                <p class="text-sm font-medium text-[#777]">
                    или преку
                </p>
                <svg width="100" height="1" viewBox="0 0 100 1" fill="none" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none">
                    <line y1="0.5" x2="100" y2="0.5" stroke="#777777"></line>
                </svg>
            </div>
            <div class="flex gap-[42px] justify-center mb-[52px]">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-[60px] h-[60px]" preserveAspectRatio="none">
                    <g filter="url(#filter0_d_1297_1758)">
                        <rect x="6" y="6" width="60" height="60" rx="10" fill="#F9FBFD"></rect>
                    </g>
                    <g filter="url(#filter1_i_1297_1758)">
                        <path
                            d="M59 36.6375C59 47.9361 50.5905 57.303 39.5948 59V43.1806H44.9547L45.9735 36.6375H39.5948V32.3917C39.5948 30.6008 40.4841 28.8569 43.343 28.8569H46.2427V23.2864C46.2427 23.2864 43.6121 22.8437 41.0941 22.8437C35.8399 22.8437 32.4052 25.9761 32.4052 31.6505V36.6375H26.5683V43.1806H32.4052V59C21.4129 57.303 13 47.9361 13 36.6375C13 24.1349 23.2972 14 36 14C48.7028 14 59 24.1349 59 36.6375Z"
                            fill="#343A40"></path>
                    </g>
                    <defs>
                        <filter id="filter0_d_1297_1758" x="0" y="0" width="80" height="80"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dx="4" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1297_1758">
                            </feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1297_1758"
                                result="shape">
                            </feBlend>
                        </filter>
                        <filter id="filter1_i_1297_1758" x="13" y="13" width="46" height="50"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                            </feBlend>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                            </feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1297_1758"></feBlend>
                        </filter>
                    </defs>
                </svg>
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]" preserveAspectRatio="none">
                    <g filter="url(#filter0_d_1297_1749)">
                        <rect x="6" y="6" width="60" height="60" rx="10" fill="#F9FBFD"
                            shape-rendering="crispEdges"></rect>
                        <g clip-path="url(#clip0_1297_1749)">
                            <g filter="url(#filter1_i_1297_1749)">
                                <path
                                    d="M52.2634 19.7366C48.1004 15.5735 42.35 13 35.9988 13C23.2963 13 13 23.2963 13 35.9988C13 48.7037 23.2963 59 35.9988 59C42.35 59 48.1004 56.4265 52.2634 52.2634C56.4241 48.1028 59 42.35 59 35.9988C59 29.6475 56.4241 23.8972 52.2634 19.7366ZM31.3511 45.3185C26.3301 45.3185 22.2688 41.2572 22.2688 36.2338C22.2688 31.2105 26.3301 27.1516 31.3511 27.1516C33.8034 27.1516 35.8558 28.0458 37.4382 29.5264L34.9713 31.9011C34.2977 31.2517 33.1176 30.4981 31.3511 30.4981C28.2493 30.4981 25.7195 33.0691 25.7195 36.2338C25.7195 39.3986 28.2493 41.9696 31.3511 41.9696C34.9471 41.9696 36.2968 39.3889 36.5028 38.0513H31.3511V34.9374H39.9293C40.0068 35.3906 40.0722 35.8461 40.0722 36.4422C40.0722 41.6328 36.5949 45.3185 31.3511 45.3185ZM50.8168 37.5327H48.2215V40.128H45.6262V37.5327H43.031V34.9374H45.6262V32.3421H48.2215V34.9374H50.8168V37.5327Z"
                                    fill="#32383E"></path>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <filter id="filter0_d_1297_1749" x="0" y="0" width="80" height="80"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dx="4" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1297_1749">
                            </feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1297_1749"
                                result="shape">
                            </feBlend>
                        </filter>
                        <filter id="filter1_i_1297_1749" x="13" y="13" width="46" height="50"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                            </feBlend>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                            </feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1297_1749"></feBlend>
                        </filter>
                        <clipPath id="clip0_1297_1749">
                            <rect width="46" height="46" fill="white" transform="translate(13 13)"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]" preserveAspectRatio="none">
                    <g filter="url(#filter0_d_1297_1753)">
                        <rect x="6" y="6" width="60" height="60" rx="10" fill="#F9FBFD"
                            shape-rendering="crispEdges"></rect>
                        <g clip-path="url(#clip0_1297_1753)" filter="url(#filter1_i_1297_1753)">
                            <path
                                d="M52.2638 19.7362C48.1009 15.5733 42.3509 13 36 13C29.6491 13 23.8991 15.5733 19.7362 19.7362C15.5733 23.8991 13 29.6491 13 36C13 48.7019 23.2981 59 36 59C42.3509 59 48.1009 56.4267 52.2638 52.2638C56.4267 48.1009 59 42.3509 59 36C59 29.6491 56.4267 23.8991 52.2638 19.7362ZM43.7442 44.2821C42.7895 45.7069 41.7985 47.1196 40.238 47.1487C38.7017 47.1777 38.2099 46.223 36.4531 46.223C34.6964 46.223 34.1512 47.1196 32.6973 47.1777C31.1902 47.2359 30.044 45.6439 29.0796 44.2264C27.4126 41.7767 26.0823 37.6138 26.9328 34.2287C27.0879 33.6108 27.3156 33.0196 27.6258 32.4696C28.629 30.6958 30.422 29.574 32.3678 29.5449C33.8483 29.5158 35.2464 30.5602 36.1527 30.5602C37.0589 30.5602 38.7526 29.3074 40.5385 29.4916C41.2848 29.5206 43.3832 29.7969 44.7328 31.8008C44.6577 31.8517 43.514 32.5301 42.8089 33.8992C42.4818 34.5316 42.2467 35.3118 42.2564 36.2472C42.2879 39.7752 45.2974 40.948 45.3313 40.9649C45.3047 41.0449 44.8491 42.6393 43.7442 44.2821Z"
                                fill="#32383E"></path>
                            <path
                                d="M39.371 27.5749C40.1706 26.5863 40.7109 25.2148 40.5631 23.8506C39.4122 23.8966 38.014 24.6308 37.1878 25.6146C36.4463 26.4918 35.7993 27.8826 35.9714 29.225C37.258 29.3268 38.5713 28.5587 39.371 27.5749Z"
                                fill="white"></path>
                        </g>
                    </g>
                    <defs>
                        <filter id="filter0_d_1297_1753" x="0" y="0" width="80" height="80"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dx="4" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1297_1753">
                            </feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1297_1753"
                                result="shape">
                            </feBlend>
                        </filter>
                        <filter id="filter1_i_1297_1753" x="13" y="13" width="46" height="50"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                            </feBlend>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                            </feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                            </feColorMatrix>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1297_1753"></feBlend>
                        </filter>
                        <clipPath id="clip0_1297_1753">
                            <rect width="46" height="46" fill="white" transform="translate(13 13)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="flex justify-center">
                <button id="registerButton" class="flex justify-center items-center w-[313px] h-16 rounded-[15px] bg-[#79b937] text-lg font-semibold text-center text-white">Регистрирај
                    се</button>
            </div>
            <div class="mt-[48px] flex gap-[13px] justify-center">
                <p class="text-sm font-semibold text-[#343a40]">Немаш профил?</p>
                <a href="{{ route('signIn') }}">
                    <p class="text-sm font-semibold text-[#79b937]">Најави се!</p>
                </a>
            </div>

        </div>
        <x-footer :roundFooter='false' :noBack='false' />
    </div>
@endsection
@section('scripts')
<script>
    const registerButton = document.getElementById('registerButton');
    const registerForm = document.getElementById('registerForm');
    registerButton.addEventListener('click', () => {
        registerForm.submit();
    });
</script>
@endsection
