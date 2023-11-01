<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-w-screen min-h-screen items-center">
    <div class="h-[129px] w-full bg-[#343a40] flex justify-evenly items-center">
        <div class="w-[270px] h-[87px] flex justify-center items-center">
            <img src="{{ asset('images/viber_image_2023-10-22_18-08-15-736 2.png') }}" alt=""
                class="h-full w-full">
        </div>
        <div class="flex items-center gap-[40px]">
            <button id="inspectorsBtn" type="button"
                class="w-[195px] justify-center items-center flex h-12 rounded-[5px] bg-[#79b937] text-base font-medium text-white"
                style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);">
                Инспектори
            </button>
            <button id="addUserBtn" type="button"
                class="w-[195px] justify-center items-center flex h-12 rounded-[5px] bg-[#79b937] text-base font-medium text-white"
                style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);">
                Додај Корисник
            </button>
            <button
                class="w-[195px] justify-center items-center flex h-12 rounded-[5px] bg-[#79b937] text-base font-medium text-white"
                style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);">
                Календар
            </button>
            <button
                class="w-[195px] justify-center items-center flex h-12 rounded-[5px] bg-[#79b937] text-base font-medium text-white"
                style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);">
                Мапа
            </button>
        </div>
        <div class="flex gap-[30px] items-center">
            <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none">
                <g filter="url(#filter0_i_4442_719)">
                    <path
                        d="M23.4955 18.6415C23.3918 18.5209 23.29 18.4004 23.1901 18.2841C21.8163 16.6803 20.9851 15.7124 20.9851 11.1725C20.9851 8.82201 20.4024 6.89344 19.254 5.44701C18.4073 4.37846 17.2626 3.56786 15.7539 2.96879C15.7344 2.95837 15.7171 2.9447 15.7027 2.92841C15.16 1.17462 13.675 0 12.0002 0C10.3253 0 8.84095 1.17462 8.29828 2.92661C8.2838 2.94229 8.2667 2.95553 8.2477 2.96578C4.72692 4.3646 3.01586 7.04833 3.01586 11.1706C3.01586 15.7124 2.18593 16.6803 0.810843 18.2823C0.710928 18.3986 0.609138 18.5167 0.505476 18.6396C0.237702 18.9513 0.0680456 19.3305 0.0165842 19.7323C-0.0348772 20.1341 0.0340109 20.5417 0.215096 20.9069C0.600396 21.6904 1.42158 22.1768 2.35891 22.1768H21.6483C22.5812 22.1768 23.3968 21.691 23.7833 20.9111C23.9652 20.5458 24.0348 20.1379 23.9837 19.7356C23.9327 19.3333 23.7633 18.9536 23.4955 18.6415ZM12.0002 27C12.9025 26.9993 13.7879 26.7629 14.5623 26.3159C15.3368 25.8688 15.9714 25.2279 16.3989 24.4609C16.4191 24.4242 16.429 24.383 16.4278 24.3414C16.4266 24.2999 16.4143 24.2593 16.392 24.2237C16.3698 24.1881 16.3384 24.1587 16.3008 24.1382C16.2633 24.1178 16.221 24.1071 16.1779 24.1071H7.82368C7.78054 24.107 7.7381 24.1176 7.70049 24.138C7.66288 24.1584 7.63138 24.1878 7.60906 24.2235C7.58674 24.2591 7.57435 24.2997 7.57312 24.3413C7.57188 24.3829 7.58183 24.4241 7.60199 24.4609C8.02946 25.2278 8.664 25.8687 9.43832 26.3157C10.2126 26.7627 11.0979 26.9992 12.0002 27Z"
                        fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_i_4442_719" x="0" y="0" width="24" height="28"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dy="1"></feOffset>
                        <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_4442_719"></feBlend>
                    </filter>
                </defs>
            </svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none">
                <g filter="url(#filter0_i_4442_718)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.25033 1.46903C8.25027 1.19728 8.34632 0.933566 8.52275 0.721046C8.69918 0.508526 8.94553 0.359793 9.22149 0.299192C11.0501 -0.100539 12.949 -0.099719 14.7773 0.301592C15.0534 0.361957 15.3001 0.510589 15.4768 0.723131C15.6534 0.935673 15.7497 1.19952 15.7497 1.47143V3.68754C15.7497 3.89815 15.8074 4.10505 15.9171 4.28744C16.0268 4.46984 16.1846 4.6213 16.3746 4.7266C16.5646 4.83191 16.7802 4.88734 16.9996 4.88734C17.219 4.88734 17.4345 4.8319 17.6245 4.7266L19.6256 3.61674C19.8711 3.48071 20.1574 3.42882 20.4377 3.46959C20.718 3.51036 20.9755 3.64137 21.168 3.84111C22.44 5.16237 23.3885 6.73979 23.944 8.45809C24.0279 8.71795 24.0173 8.99747 23.914 9.2508C23.8106 9.50413 23.6207 9.71623 23.3753 9.8523L21.3742 10.961C21.1842 11.0663 21.0264 11.2177 20.9167 11.4001C20.807 11.5825 20.7493 11.7894 20.7493 12C20.7493 12.2106 20.807 12.4175 20.9167 12.5999C21.0264 12.7823 21.1842 12.9338 21.3742 13.0391L23.374 14.1465C23.6192 14.2825 23.8089 14.4944 23.9122 14.7475C24.0156 15.0006 24.0263 15.2798 23.9427 15.5395C23.391 17.2602 22.4426 18.8395 21.168 20.1601C20.9753 20.3597 20.7177 20.4904 20.4375 20.531C20.1572 20.5715 19.8709 20.5195 19.6256 20.3833L17.6245 19.2734C17.4345 19.1681 17.219 19.1127 16.9996 19.1127C16.7802 19.1127 16.5646 19.1681 16.3746 19.2734C16.1846 19.3787 16.0268 19.5302 15.9171 19.7126C15.8074 19.895 15.7497 20.1019 15.7497 20.3125V22.5322C15.7494 22.8039 15.653 23.0675 15.4764 23.2798C15.2997 23.4921 15.0532 23.6405 14.7773 23.7008C12.9486 24.1005 11.0497 24.0997 9.22149 23.6984C8.94553 23.6378 8.69918 23.4891 8.52275 23.2766C8.34632 23.0641 8.25027 22.8003 8.25033 22.5286V20.3125C8.25032 20.1019 8.19256 19.895 8.08286 19.7126C7.97316 19.5302 7.81537 19.3787 7.62537 19.2734C7.43536 19.1681 7.21983 19.1127 7.00043 19.1127C6.78103 19.1127 6.56549 19.1681 6.37549 19.2734L4.37441 20.3833C4.12892 20.5193 3.84255 20.5712 3.56229 20.5304C3.28203 20.4897 3.02453 20.3587 2.83205 20.1589C2.19791 19.5005 1.64242 18.7761 1.17594 17.9992C0.708405 17.2227 0.332771 16.3985 0.0560377 15.5419C-0.0278709 15.2821 -0.0172907 15.0026 0.0860427 14.7492C0.189376 14.4959 0.379327 14.2838 0.624738 14.1477L2.62456 13.0391C2.81456 12.9338 2.97233 12.7823 3.08202 12.5999C3.19171 12.4175 3.24946 12.2106 3.24946 12C3.24946 11.7894 3.19171 11.5825 3.08202 11.4001C2.97233 11.2177 2.81456 11.0663 2.62456 10.961L0.627238 9.8535C0.381866 9.71766 0.191835 9.50585 0.088284 9.25276C-0.0152668 8.99967 -0.0261961 8.72032 0.0572875 8.46049C0.609161 6.74023 1.55755 5.16138 2.83205 3.84111C3.02446 3.64165 3.28172 3.51083 3.56171 3.47007C3.84169 3.4293 4.1278 3.48102 4.37316 3.61674L6.37549 4.7266C6.56549 4.8319 6.78103 4.88734 7.00043 4.88734C7.21983 4.88734 7.43536 4.83191 7.62537 4.7266C7.81537 4.6213 7.97316 4.46984 8.08286 4.28744C8.19256 4.10505 8.25032 3.89815 8.25033 3.68754V1.46783V1.46903ZM12 15.5995C12.9945 15.5995 13.9482 15.2203 14.6514 14.5453C15.3546 13.8702 15.7497 12.9547 15.7497 12C15.7497 11.0454 15.3546 10.1298 14.6514 9.45477C13.9482 8.77973 12.9945 8.4005 12 8.4005C11.0055 8.4005 10.0518 8.77973 9.34858 9.45477C8.64538 10.1298 8.25033 11.0454 8.25033 12C8.25033 12.9547 8.64538 13.8702 9.34858 14.5453C10.0518 15.2203 11.0055 15.5995 12 15.5995Z"
                        fill="white"></path>
                </g>
                <defs>
                    <filter id="filter0_i_4442_718" x="0" y="0" width="24" height="25"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dy="1"></feOffset>
                        <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_4442_718"></feBlend>
                    </filter>
                </defs>
            </svg>
            <div class="w-[58px] h-[58px]">
                <img class="w-full h-full" src="{{ asset('/images/Ellipse 23.png') }}" />
            </div>
        </div>
    </div>
    <div class="flex h-full">
        <form action="{{ route('createInspector') }}" method="POST" id="addInspectorBar"
            class="hidden min-h-full bg-[#343a40] pt-[20px] px-[32px] flex flex-col w-[394px] items-center justify-center">
            <p class="text-[22px] font-semibold text-white">Додај нов корисник</p>
            <div class="flex flex-col mt-[60px] gap-[16px]">
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-white">Име и презиме</p>
                    <input type="text" name="name"
                        class="w-[335px] pl-[22px] h-12 rounded-[10px] bg-[#e9e9e9]">
                </div>
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-white">Позиција</p>
                    <input type="text" value="inspector" disabled class="w-[335px] pl-[22px] h-12 rounded-[10px]">
                </div>
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-white">Е-пошта</p>
                    <input type="text" name="email"
                        class="w-[335px] pl-[22px] h-12 rounded-[10px] bg-[#e9e9e9]">
                </div>
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-left text-white">Лозинка</p>
                    <input type="password" name="password"
                        class="w-[335px] pl-[22px] h-12 rounded-[10px] bg-[#e9e9e9]">
                </div>
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-left text-white">Потврди лозинка</p>
                    <input type="password" name="password_confirmation"
                        class="w-[335px] pl-[22px] h-12 rounded-[10px] bg-[#e9e9e9]">
                </div>
                <div class="flex flex-col gap-[16px]">
                    <p class="text-xl font-medium text-left text-white">Телефонски број</p>
                    <input type="text" name="phone" placeholder="+389000000000 "
                        class="w-[335px] pl-[22px] h-12 rounded-[10px] bg-[#e9e9e9] pl-[12px]">
                </div>
            </div>
            <button
                class="my-[48px] w-[247px] h-14 rounded-[5px] bg-[#79b937] flex items-center justify-center text-base font-medium text-left text-white"
                style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);"><svg width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 relative"
                    preserveAspectRatio="none">
                    <path
                        d="M18 12.998H13V17.998C13 18.2632 12.8946 18.5176 12.7071 18.7051C12.5196 18.8926 12.2652 18.998 12 18.998C11.7348 18.998 11.4804 18.8926 11.2929 18.7051C11.1054 18.5176 11 18.2632 11 17.998V12.998H6C5.73478 12.998 5.48043 12.8926 5.29289 12.7051C5.10536 12.5176 5 12.2632 5 11.998C5 11.7328 5.10536 11.4784 5.29289 11.2909C5.48043 11.1033 5.73478 10.998 6 10.998H11V5.99799C11 5.73277 11.1054 5.47842 11.2929 5.29088C11.4804 5.10334 11.7348 4.99799 12 4.99799C12.2652 4.99799 12.5196 5.10334 12.7071 5.29088C12.8946 5.47842 13 5.73277 13 5.99799V10.998H18C18.2652 10.998 18.5196 11.1033 18.7071 11.2909C18.8946 11.4784 19 11.7328 19 11.998C19 12.2632 18.8946 12.5176 18.7071 12.7051C18.5196 12.8926 18.2652 12.998 18 12.998Z"
                        fill="white"></path>
                </svg> Додај Корисник</button>
        </form>
        <div id="inspectorsBar" class="hidden min-h-full min-w-[394px] bg-[#343a40] pt-[20px] px-[32px] flex flex-col w-[394px] items-center">
            <input class="rounded-[10px] bg-white text-lg font-medium text-[#343a40] w-full mx-[17px]" list="inspectors"
                id="inspector">
            <datalist id="inspectors">
                @foreach ($inspectors as $inspector)
                    <option data-id="{{ $inspector->id }}" value="{{ $inspector->name }}"
                        class="text-lg font-medium text-[#343a40]">
                        {{ $inspector->name }}</option>
                @endforeach
            </datalist>
            <div id="foundInspector" class="hidden mt-[65px] flex flex-col items-center justify-center">
                <img src="{{ asset('images/Ellipse 23.png') }}" />
                <div class="mt-[20px] mb-[42px]">
                    <p class="text-xl font-medium text-white">Зоран Николовски</p>
                    <p class="text-sm font-medium text-[#cccecf]">Општина: Кисела Вода</p>
                </div>
                <div id="circleSvgLoad" class="relative flex items-center justify-center">
                    <div class="absolute flex flex-col justify-center items-center">
                        <p class="text-6xl font-semibold text-white">73%</p>
                        <p class="text-xl font-medium text-white">успешност</p>
                    </div>
                    <svg width="222" height="211" viewBox="0 0 222 211" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-[218px] h-[211px]" preserveAspectRatio="none">
                        <path
                            d="M222 105.5C222 163.766 174.766 211 116.5 211C58.234 211 11 163.766 11 105.5C11 47.234 58.234 0 116.5 0C174.766 0 222 47.234 222 105.5ZM15.362 105.5C15.362 161.357 60.643 206.638 116.5 206.638C172.357 206.638 217.638 161.357 217.638 105.5C217.638 49.643 172.357 4.36198 116.5 4.36198C60.643 4.36198 15.362 49.643 15.362 105.5Z"
                            fill="#79B937" fill-opacity="0.3"></path>
                        <path
                            d="M116.5 0C136.539 2.38963e-07 156.164 5.70718 173.077 16.4537C189.991 27.2002 203.495 42.5416 212.007 60.6826C220.52 78.8236 223.69 99.0139 221.147 118.891C218.603 138.768 210.451 157.509 197.645 172.922C184.838 188.335 167.907 199.782 148.832 205.923C129.758 212.065 109.328 212.647 89.9348 207.601C70.5415 202.555 52.9863 192.09 39.3235 177.431C25.6607 162.772 16.4554 144.524 12.7849 124.824L17.0731 124.025C20.5919 142.911 29.4165 160.404 42.5144 174.457C55.6123 188.51 72.4416 198.542 91.0332 203.379C109.625 208.216 129.209 207.659 147.496 201.771C165.782 195.884 182.013 184.91 194.29 170.135C206.567 155.359 214.382 137.392 216.82 118.337C219.258 99.2821 216.219 79.9266 208.059 62.5356C199.898 45.1447 186.953 30.4376 170.738 20.1354C154.524 9.8332 135.711 4.36198 116.5 4.36198V0Z"
                            fill="#79B937"></path>
                        <g filter="url(#filter0_f_5916_542)">
                            <circle cx="14.5" cy="123.5" r="10.5" fill="#79B937" fill-opacity="0.7">
                            </circle>
                        </g>
                        <circle cx="14.5" cy="123.5" r="8.5" fill="#79B937"></circle>
                        <defs>
                            <filter id="filter0_f_5916_542" x="0" y="109" width="29" height="29"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                </feBlend>
                                <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_5916_542">
                                </feGaussianBlur>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="mt-[50px] flex flex-col gap-[22px]">
                    <div class="flex gap-[20px] justify-between">
                        <p class="text-base font-medium text-white">Комплетирани</p>
                        <p class="text-lg font-semibold text-white">120</p>
                    </div>
                    <div class="flex gap-[20px] justify-between">
                        <p class="text-base font-medium text-white">Во процес</p>
                        <p class="text-lg font-semibold text-white">23</p>
                    </div>
                    <div class="flex gap-[20px] justify-between">
                        <p class="text-base font-medium text-white">Одбиени</p>
                        <p class="text-lg font-semibold text-white">19</p>
                    </div>
                </div>
                <button class="mt-[50px] text-base font-medium text-white w-[235px] h-12 rounded-[5px] bg-[#79b937]"
                    style="box-shadow: 0px 4px 10px 0 rgba(0,0,0,0.15);">Генерирај Извештај</button>

            </div>
        </div>
        <div id="panel" class="mt-[39px] mx-[200px] mb-[200px]">
            {{-- if success --}}
            @if (session('success'))
                <p class="text-base font-bold text-left text-green-500 mb-[24px]">{{ session('success') }}</p>
            @endif
            <p class="text-[22px] font-bold text-[#343a40] mb-[24px]">Здраво, Aдмин</p>
            <div class="flex flex-col gap-[60px]">
                <div class="w-full rounded-[15px] border border-[#343a40]">
                    <div
                        class="grid grid-cols-6 h-12 rounded-tl-[15px] rounded-tr-[15px] bg-[#f1f6f5] border-b border-[#343a40] items-center justify-center">
                        <p class="text-base font-bold text-center text-[#343a40]">Види пријава</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Пријава Број</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Приоритет на пријава</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Пријава во општина</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Инспектор</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Датум</p>
                    </div>
                    <div class="max-h-[328px] overflow-y-scroll">
                        @foreach ($notAssignedInspectors ?? [] as $report)
                            <div class="grid grid-cols-6 justify-center items-center pt-[20px] pb-[14px]">
                                <p class="text-base text-center text-[#343a40]">Види пријава</p>
                                <p class="text-base font-semibold text-center text-[#343a40]">{{ $report->id }}</p>
                                <p class="text-base font-semibold text-center text-[#343a40]">{{ $report->priority }}
                                </p>
                                <p class="text-base font-medium text-center text-black">{{ $report->address }}</p>
                                <form action="{{ route('assignInspector') }}" method="POST" class="grid">
                                    @csrf
                                    <input type="hidden" name="report_id" value="{{ $report->id }}">
                                    <select name="inspector_id"
                                        class="w-[209px] h-[32px] rounded-[5px] border border-[#79b937] text-base font-medium text-[#343a40] flex items-center justify-center"
                                        style="filter: drop-shadow(0px 4px 10px rgba(0,0,0,0.15));">
                                        @if ($inspectors)
                                            @foreach ($inspectors as $inspector)
                                                <option value="{{ $inspector->id }}">{{ $inspector->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <button style="grid-column: 6"
                                        class="w-[112px] h-[32px] rounded-[5px] bg-[#79b937] text-base font-medium text-white flex justify-center items-center justify-self-center">
                                        Назначи
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full rounded-[15px] border border-[#343a40]">
                    <div
                        class="grid grid-cols-6 h-12 rounded-tl-[15px] rounded-tr-[15px] bg-[#f1f6f5] border-b border-[#343a40] items-center justify-center">
                        <p class="text-base font-bold text-center text-[#343a40]">Пријава Број</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Инспектор</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Статус на пријава</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Доделена на</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Завршена на</p>
                        <p class="text-base font-bold text-center text-[#343a40]">Извештај</p>
                    </div>
                    <div class="max-h-[328px] overflow-y-scroll">
                        @foreach ($assignedInspectors ?? [] as $report)
                            <div class="grid grid-cols-6 justify-items-center items-center pt-[20px] pb-[14px]">
                                <p class="text-base font-semibold text-center text-[#343a40]">{{ $report->id }}</p>
                                <p class="text-base font-medium text-center text-[#343a40]">
                                    {{ $report->inspector->name }}</p>
                                @php
                                    switch ($report->status) {
                                        case 'in progress':
                                            echo '<p class="flex items-center justify-center w-[111px] h-8 rounded-[15px] bg-[#ead410]/[0.15] border border-[#ead410]/70 text-base font-medium text-center text-[#d0be13]">Во процес</p>';
                                            break;
                                        case 'completed':
                                            echo '<p class="flex items-center justify-center w-[111px] h-8 rounded-[15px] bg-[#79B937]/[0.15] border border-[#79B937]/70 text-base font-medium text-center text-[#79B937]">Комплетирана</p>';
                                            break;
                                        case 'cancelled':
                                            echo '<p class="flex items-center justify-center w-[111px] h-8 rounded-[15px] bg-[#CC1212]/[0.15] border border-[#CC1212]/70 text-base font-medium text-center text-[#CC1212]">Одбиена</p>';
                                            break;
                                        case 'awaiting':
                                            echo '<p class="flex items-center justify-center w-[111px] h-8 rounded-[15px] bg-[#343a40]/[0.15] border border-[#343a40]/70 text-base font-medium text-center text-[#343a40]">Чекање</p>';
                                            break;
                                        case 'approval':
                                            echo '<p class="flex items-center justify-center w-[111px] h-8 rounded-[15px] bg-[#79B937]/[0.15] border border-[#79B937]/70 text-base font-medium text-center text-[#79B937]">Одобрена</p>';
                                            break;
                                        default:
                                            echo '<p class="text-base font-medium text-center text-[#343a40]">Непознато</p>';
                                            break;
                                    }
                                @endphp
                                {{-- <p class="text-base font-medium text-center text-[#d0be13] rounded-[15px] bg-[#ead410]/[0.15] border border-[#ead410]/70 px-[12px] py-[4px] w-fit flex-self-center">во процес</p> --}}
                                <p class="text-base font-medium text-center text-[#343a40]">
                                    {{ $report->day_appended ?? '/' }}</p>
                                <p class="text-base font-medium text-center text-[#343a40]">
                                    {{ $report->day_closed ?? '/' }}</p>
                                <button data-id="{{ $report->id }}"
                                    class="w-[209px] h-[32px] left-[1461.5px] top-[737.5px] rounded-[5px] bg-[#79b937] text-base font-medium text-white">Генерирај
                                    Извештај</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const addInspectorBar = document.querySelector('#addInspectorBar');
        const addUserBtn = document.querySelector('#addUserBtn');

        addUserBtn.addEventListener('click', () => {
            addInspectorBar.classList.remove('hidden');
        });
        document.addEventListener('click', (e) => {
            if (e.target !== addUserBtn && !addInspectorBar.contains(e.target)) {
                addInspectorBar.classList.add('hidden');
            }
        });
        const inspectorsBar = document.querySelector('#inspectorsBar');
        const inspectorsBtn = document.querySelector('#inspectorsBtn');

        inspectorsBtn.addEventListener('click', () => {
            inspectorsBar.classList.remove('hidden');
        });
        document.addEventListener('click', (e) => {
            if (e.target !== inspectorsBtn && !inspectorsBar.contains(e.target)) {
                inspectorsBar.classList.add('hidden');
            }
        });


        const inspector = document.getElementById('inspector');

        inspector.addEventListener('input', function() {
            document.getElementById('foundInspector').classList.remove('hidden');
            const selectedValue = this.value;
            const datalistOptions = document.getElementById('inspectors').getElementsByTagName('option');
            let selectedOption;

            for (const option of datalistOptions) {
                if (option.value === selectedValue) {
                    selectedOption = option;
                    break;
                }
            }

            if (selectedOption) {
                const dataId = selectedOption.getAttribute('data-id');
                console.log('Selected Data ID:', dataId);
            } else {
                console.log('No option selected.');
            }
        });
    </script>
</body>

</html>
