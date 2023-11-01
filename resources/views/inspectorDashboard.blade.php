<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body class="min-w-screen min-h-screen mb-[95px]">
    <div class="flex justify-between mt-[6px] items-center px-[17px] mb-[74px]">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 relative" preserveAspectRatio="xMidYMid meet">
            <path
                d="M12.0002 20.635C16.7692 20.635 20.6352 16.769 20.6352 12C20.6352 7.23101 16.7692 3.36499 12.0002 3.36499C7.23126 3.36499 3.36523 7.23101 3.36523 12C3.36523 16.769 7.23126 20.635 12.0002 20.635Z"
                stroke="#343A40" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path
                d="M14.232 3.656C14.0604 3.60803 13.9009 3.52447 13.7637 3.41075C13.6266 3.29704 13.5149 3.15572 13.436 2.996L12.93 2H11.07L10.565 2.996C10.4861 3.15572 10.3744 3.29704 10.2373 3.41075C10.1001 3.52447 9.94058 3.60803 9.769 3.656M9.768 20.344C9.93958 20.392 10.0991 20.4755 10.2363 20.5892C10.3734 20.703 10.4851 20.8443 10.564 21.004L11.069 22H12.931L13.436 21.004C13.5149 20.8443 13.6266 20.703 13.7637 20.5892C13.9009 20.4755 14.0604 20.392 14.232 20.344M3.656 9.768C3.60803 9.93958 3.52447 10.0991 3.41075 10.2363C3.29704 10.3734 3.15572 10.4851 2.996 10.564L2 11.07V12.932L2.996 13.437C3.15572 13.5159 3.29704 13.6276 3.41075 13.7647C3.52447 13.9019 3.60803 14.0614 3.656 14.233M20.344 14.232C20.392 14.0604 20.4755 13.9009 20.5892 13.7637C20.703 13.6266 20.8443 13.5149 21.004 13.436L22 12.93V11.07L21.004 10.565C20.8443 10.4861 20.703 10.3744 20.5892 10.2373C20.4755 10.1001 20.392 9.94058 20.344 9.769M7.678 4.522C7.52269 4.60944 7.35069 4.66318 7.17323 4.67972C6.99576 4.69626 6.8168 4.67523 6.648 4.618L5.588 4.27L4.27 5.587L4.618 6.649C4.67523 6.8178 4.69626 6.99676 4.67972 7.17423C4.66318 7.35169 4.60944 7.52369 4.522 7.679M16.322 19.478C16.4773 19.3906 16.6493 19.3368 16.8268 19.3203C17.0042 19.3037 17.1832 19.3248 17.352 19.382L18.412 19.73L19.73 18.413L19.382 17.351C19.3248 17.1822 19.3037 17.0032 19.3203 16.8258C19.3368 16.6483 19.3906 16.4763 19.478 16.321M4.522 16.322C4.60944 16.4773 4.66318 16.6493 4.67972 16.8268C4.69626 17.0042 4.67523 17.1832 4.618 17.352L4.27 18.412L5.587 19.73L6.649 19.382C6.8178 19.3248 6.99676 19.3037 7.17423 19.3203C7.35169 19.3368 7.52369 19.3906 7.679 19.478M19.478 7.678C19.3906 7.52269 19.3368 7.35069 19.3203 7.17323C19.3037 6.99576 19.3248 6.8168 19.382 6.648L19.73 5.588L18.413 4.27L17.351 4.618C17.1822 4.67523 17.0032 4.69626 16.8258 4.67972C16.6483 4.66318 16.4763 4.60944 16.321 4.522"
                stroke="#343A40" stroke-width="1.2" stroke-linejoin="round"></path>
        </svg>
        <img src="{{ asset('/images/viber_image_2023-10-22_18-08-15-736 2.png') }}" alt="">
        <div class="flex justify-end">
            <svg width="37" height="42" viewBox="0 0 37 42" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-[37px] h-[42px] relative" preserveAspectRatio="none">
                <path
                    d="M22.2901 22.5705C19.7663 20.2022 19.9992 16.2615 22.7821 14.1709C22.0028 13.4829 21.0301 12.9965 19.9992 12.74C19.7814 12.6852 19.5598 12.6374 19.3344 12.6162C19.2969 12.6109 19.2612 12.6073 19.2237 12.602C19.2105 12.602 19.2086 12.602 19.2049 12.595C19.203 12.5277 19.2049 12.457 19.2049 12.3898C19.2049 12.2288 19.2049 12.0679 19.2049 11.9069C19.2049 11.8981 19.203 11.8857 19.2049 11.8786C19.2049 11.8751 19.2105 11.8698 19.2143 11.8663C19.5579 11.4046 19.5992 10.7661 19.2781 10.2833C18.8143 9.55455 17.7439 9.3653 17.036 9.89768C16.482 10.2974 16.2924 11.058 16.6041 11.6487C16.6454 11.7301 16.698 11.8079 16.7543 11.8786C16.7543 12.1192 16.7543 12.3615 16.7543 12.6003C16.6116 12.618 16.4633 12.6286 16.3224 12.6569C16.1929 12.6816 16.0633 12.7117 15.9337 12.7435C13.4944 13.3537 11.9058 15.057 11.1716 17.2856C10.9218 18.0196 10.8185 18.7872 10.7547 19.5548C10.6721 20.4339 10.612 21.3165 10.4693 22.1902C10.2927 23.1541 10.0937 24.1464 9.58293 25.0095C9.32567 25.4234 8.98954 25.8267 8.51445 26.0265C8.28911 26.1185 8.07692 26.2317 7.88913 26.3838C7.49479 26.6933 7.26007 27.1603 7.23565 27.6414C7.21124 28.1136 7.32016 28.6973 7.73328 29.005C7.95674 29.1642 8.24216 29.1854 8.51257 29.1925C9.14915 29.2084 9.78761 29.219 10.4242 29.2261C11.7049 29.2332 12.9855 29.2261 14.2662 29.2261C18.0162 29.2226 21.7681 29.2314 25.5181 29.2261C26.1547 29.219 26.7931 29.2067 27.4297 29.1907C28.0513 29.1907 28.4212 28.9873 28.609 28.4037C28.7649 27.9173 28.7423 27.369 28.4982 26.9126C28.3311 26.6067 28.0626 26.3573 27.7508 26.1822C27.6457 26.122 27.5349 26.0725 27.4222 26.0265C26.9246 25.816 26.5791 25.3845 26.3181 24.9476C26.181 24.7106 26.0683 24.4612 25.9744 24.2083C25.9688 24.1995 25.9744 24.2048 25.965 24.2012C25.9087 24.1941 25.8505 24.1924 25.7941 24.1835C24.4778 24.0367 23.2215 23.4584 22.2864 22.5722C21.7362 22.054 22.8366 23.0905 22.2864 22.5722L22.2901 22.5705Z"
                    fill="#343A40"></path>
                <path
                    d="M14.9023 30.1086C14.9023 31.4016 16.2768 32.4628 17.9706 32.4628C19.6644 32.4628 21.039 31.4016 21.039 30.1086H14.9004H14.9023Z"
                    fill="#343A40"></path>
                <path
                    d="M30.7323 20.5585C31.8929 18.3726 30.9525 15.7143 28.6317 14.6211C26.3109 13.5279 23.4887 14.4138 22.3281 16.5997C21.1674 18.7856 22.1079 21.4438 24.4287 22.537C26.7494 23.6302 29.5717 22.7444 30.7323 20.5585Z"
                    fill="#ED4B50"></path>
                <path
                    d="M27.4947 16.4189V20.7381H26.3511V18.4229C26.3511 18.0886 26.3417 17.887 26.3248 17.8198C26.3079 17.7526 26.261 17.7013 26.184 17.6659C26.107 17.6305 25.938 17.6146 25.6732 17.6146H25.5605V17.1105C26.1145 16.9991 26.5333 16.7674 26.8206 16.4189H27.4947Z"
                    fill="white"></path>
            </svg>
        </div>
    </div>
    <div class="px-[18px]">
        <p class="mt-[34px] text-[#343a40] text-lg font-medium">
            <span class="text-lg font-bold text-[#343a40]">{{ Auth::user()->name }}</span>
        </p>
        <p class="text-lg font-medium text-[#343a40]">{{ \Carbon\Carbon::now()->format('l') }},</p>
        <div class="flex gap-[4px] items-center">
            <p class="text-lg font-semibold text-[#343a40]">{{ \Carbon\Carbon::now()->format('d F Y') }}</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 relative" preserveAspectRatio="xMidYMid meet">
                <path
                    d="M2.49158 6.15C2.39457 6.24676 2.3176 6.36171 2.26509 6.48826C2.21258 6.61481 2.18555 6.75048 2.18555 6.8875C2.18555 7.02451 2.21258 7.16018 2.26509 7.28673C2.3176 7.41329 2.39457 7.52823 2.49158 7.625L9.41658 14.55C9.49367 14.6273 9.58524 14.6885 9.68606 14.7304C9.78687 14.7722 9.89494 14.7937 10.0041 14.7937C10.1132 14.7937 10.2213 14.7722 10.3221 14.7304C10.4229 14.6885 10.5145 14.6273 10.5916 14.55L17.5166 7.625C17.9249 7.21666 17.9249 6.55833 17.5166 6.15C17.1082 5.74166 16.4499 5.74166 16.0416 6.15L9.99991 12.1833L3.95824 6.14166C3.55824 5.74166 2.89158 5.74166 2.49158 6.15Z"
                    fill="#343A40"></path>
            </svg>
        </div>
        <button
            class="w-full mt-[24px] mb-[24px] h-12 rounded-[10px] bg-[#79b937] text-sm font-semibold text-center text-white">
            СТАРТ НА РАБОТНО ВРЕМЕ
        </button>
        <div class="flex justify-between">
            <p class="text-lg font-bold text-[#343a40]">Доделени пријави</p>
            <div class="flex gap-[7px]">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-[22px] h-[22px] relative" preserveAspectRatio="xMidYMid meet">
                    <path
                        d="M19.381 6.28573H7.85724M5.762 6.28573H2.61914M19.381 16.7619H7.85724M5.762 16.7619H2.61914M14.143 11.5238H2.61914M19.381 11.5238H16.2382M6.80962 4.19049C7.08746 4.19049 7.35393 4.30086 7.5504 4.49733C7.74686 4.6938 7.85724 4.96026 7.85724 5.23811V7.33335C7.85724 7.61119 7.74686 7.87766 7.5504 8.07413C7.35393 8.27059 7.08746 8.38097 6.80962 8.38097C6.53177 8.38097 6.26531 8.27059 6.06884 8.07413C5.87237 7.87766 5.762 7.61119 5.762 7.33335V5.23811C5.762 4.96026 5.87237 4.6938 6.06884 4.49733C6.26531 4.30086 6.53177 4.19049 6.80962 4.19049ZM6.80962 14.6667C7.08746 14.6667 7.35393 14.7771 7.5504 14.9735C7.74686 15.17 7.85724 15.4365 7.85724 15.7143V17.8095C7.85724 18.0874 7.74686 18.3539 7.5504 18.5503C7.35393 18.7468 7.08746 18.8572 6.80962 18.8572C6.53177 18.8572 6.26531 18.7468 6.06884 18.5503C5.87237 18.3539 5.762 18.0874 5.762 17.8095V15.7143C5.762 15.4365 5.87237 15.17 6.06884 14.9735C6.26531 14.7771 6.53177 14.6667 6.80962 14.6667ZM15.1906 9.42859C15.4684 9.42859 15.7349 9.53896 15.9313 9.73543C16.1278 9.93189 16.2382 10.1984 16.2382 10.4762V12.5714C16.2382 12.8493 16.1278 13.1158 15.9313 13.3122C15.7349 13.5087 15.4684 13.6191 15.1906 13.6191C14.9127 13.6191 14.6463 13.5087 14.4498 13.3122C14.2533 13.1158 14.143 12.8493 14.143 12.5714V10.4762C14.143 10.1984 14.2533 9.93189 14.4498 9.73543C14.6463 9.53896 14.9127 9.42859 15.1906 9.42859Z"
                        stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <p class="text-sm font-medium text-black/70">Филтрирај</p>
            </div>
        </div>
        <div class="pt-[14px] mb-[59px]">
            <div class="flex gap-[14px] mb-[48px]">
                <div
                    class="w-[85px] h-16 rounded-[15px] bg-[#79b937]/[0.15] border border-[#79b937] text-lg font-medium text-[#468900] flex flex-col text-center items-center justify-center">
                    Вто
                    <br>
                    24 окт
                </div>
                <div
                    class="w-[85px] h-16 rounded-[15px] bg-[#f1f1f1] text-lg font-medium text-[#343a40] flex flex-col text-center items-center justify-center">
                    Сре
                    <br>
                    25 окт
                </div>
                <div
                    class="w-[85px] h-16 rounded-[15px] bg-[#f1f1f1] text-lg font-medium text-[#343a40] flex flex-col text-center items-center justify-center">
                    Сре
                    <br>
                    25 окт
                </div>
                <div
                    class="w-[85px] h-16 rounded-[15px] bg-[#f1f1f1] text-lg font-medium text-[#343a40] flex flex-col text-center items-center justify-center">
                    Сре
                    <br>
                    25 окт
                </div>
                <div
                    class="w-[85px] h-16 rounded-[15px] bg-[#f1f1f1] text-lg font-medium text-[#343a40] flex flex-col text-center items-center justify-center">
                    Сре
                    <br>
                    25 окт
                </div>
            </div>
            @foreach ($reports as $report)
                <div class="rounded-[20px] mb-[32px] bg-white border-[3px] border-[#f8f8f8] p-[22px] flex flex-col">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-base font-semibold text-[#343a40]">
                                {{ $report->address }}
                            </p>
                            <p class="text-sm text-[#343a40] mt-[4px]">{{ $report->date }} бр. {{ $report->id }}</p>
                            <div class="flex gap-[6px] mt-[20px] mb-[10px]">
                                <div class="flex justify-center items-center">
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                                        <path
                                            d="M39.5 20.2381C39.5 31.1447 30.764 39.9762 20 39.9762C9.23601 39.9762 0.5 31.1447 0.5 20.2381C0.5 9.33145 9.23601 0.5 20 0.5C30.764 0.5 39.5 9.33145 39.5 20.2381Z"
                                            stroke="#DB4D4D"></path>
                                    </svg>
                                    <p class="absolute text-base text-[#db4d4d]">168</p>
                                </div>
                                <div>
                                    <p class="text-xs text-[#808080]">μg/m3</p>
                                    <p class="text-sm text-black">PM10</p>
                                </div>
                            </div>
                            <p class="text-base font-semibold text-[#343a40]">{{ $report->pollutionLevel }}</p>
                        </div>
                        <div class="flex flex-col gap-[11px]">
                            <div class="w-[117px] h-28">
                                <img src="{{ asset('/images/' . $report->image) }}"
                                    class="w-full h-full rounded-[10px] object-cover" />
                            </div>
                        </div>
                    </div>
                    <button data-id="{{ $report->id }}"
                        class="report mt-[27px] text-base font-semibold text-[#79b937] place-self-center">
                        Види пријава
                    </button>
                </div>
            @endforeach
        </div>
        <p class="text-lg font-bold text-[#343a40]">Статистика на инспекторот</p>
        <div class="mt-[44px] flex items-center w-full">
            <div class="flex items-center justify-center">
                <svg width="222" height="211" viewBox="0 0 222 211" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-[218px] h-[211px]" preserveAspectRatio="none">
                    <path
                        d="M222 105.5C222 163.766 174.766 211 116.5 211C58.234 211 11 163.766 11 105.5C11 47.234 58.234 0 116.5 0C174.766 0 222 47.234 222 105.5ZM15.362 105.5C15.362 161.357 60.643 206.638 116.5 206.638C172.357 206.638 217.638 161.357 217.638 105.5C217.638 49.643 172.357 4.36198 116.5 4.36198C60.643 4.36198 15.362 49.643 15.362 105.5Z"
                        fill="#79B937" fill-opacity="0.3"></path>
                    <path
                        d="M116.5 0C136.539 2.38963e-07 156.164 5.70718 173.077 16.4537C189.991 27.2002 203.495 42.5416 212.007 60.6826C220.52 78.8236 223.69 99.0139 221.147 118.891C218.603 138.768 210.451 157.509 197.645 172.922C184.838 188.335 167.907 199.782 148.832 205.923C129.758 212.065 109.328 212.647 89.9348 207.601C70.5415 202.555 52.9863 192.09 39.3235 177.431C25.6607 162.772 16.4554 144.524 12.7849 124.824L17.0731 124.025C20.5919 142.911 29.4165 160.404 42.5144 174.457C55.6123 188.51 72.4416 198.542 91.0332 203.379C109.625 208.216 129.209 207.659 147.496 201.771C165.782 195.884 182.013 184.91 194.29 170.135C206.567 155.359 214.382 137.392 216.82 118.337C219.258 99.2821 216.219 79.9266 208.059 62.5356C199.898 45.1447 186.953 30.4376 170.738 20.1354C154.524 9.8332 135.711 4.36198 116.5 4.36198V0Z"
                        fill="#79B937"></path>
                    <g filter="url(#filter0_f_5053_534)">
                        <circle cx="14.5" cy="123.5" r="10.5" fill="#79B937" fill-opacity="0.7"></circle>
                    </g>
                    <circle cx="14.5" cy="123.5" r="8.5" fill="#79B937"></circle>
                    <defs>
                        <filter id="filter0_f_5053_534" x="0" y="109" width="29" height="29"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                            </feBlend>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_5053_534">
                            </feGaussianBlur>
                        </filter>
                    </defs>
                </svg>
                <div class="flex flex-col absolute ml-[25px]">
                    <div class="flex">
                        <p class="text-6xl font-semibold text-[#343a40]">73</p>
                        <p class="text-5xl font-semibold text-[#343a40]/50">%</p>
                    </div>
                    <p class="text-xl font-medium text-[#343a40]/50">успешност</p>
                </div>
            </div>
            <div class="flex flex-col gap-[25px] pl-[14px] flex-grow">
                <div class="flex justify-between">
                    <p class="text-base font-medium text-[#343a40]">Комплетирани</p>
                    <span class="text-lg font-semibold text-[#343a40]">120</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-base font-medium text-[#343a40]">Во процес</p>
                    <span class="text-lg font-semibold text-[#343a40]">23</span>
                </div>
                <div class="flex justify-between">
                    <p class="text-base font-medium text-[#343a40]">Одбиени</p>
                    <span class="text-lg font-semibold text-[#343a40]">19</span>
                </div>
            </div>
        </div>
    </div>
    <div id="reportModal" class="hidden flex fixed top-0 left-0 w-full h-full bg-[rgba(0,0,0,0.25)]"
        style="backdrop-filter: blur(2px);">
        <div
            class="w-full h-[608px] flex flex-col rounded-tl-[50px] rounded-tr-[50px] bg-[#343a40] fixed bottom-0 px-[16px]">
            <div id="minimize" class="flex justify-center">
                <div class="w-[70%] h-[5.61px] rounded-[15px] bg-[#d9d9d9] mt-[13px] place-self-center mb-[38px]"></div>
            </div>
            <p class="text-xl font-semibold text-center text-white">Пријава Број: <span id="reportNumber"></span>
            </p>
            <div class="mt-[41px] flex flex-col">
                <div class="flex justify-between">
                    <p class="text-base font-medium text-white/80">
                        Локација на пријава:
                    </p>
                    <div class="flex">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-6 h-[24.16px]"
                            preserveAspectRatio="xMidYMid meet">
                            <path
                                d="M12 2.30469C9.81276 2.30728 7.71584 3.18307 6.16923 4.73993C4.62261 6.29679 3.75259 8.4076 3.75001 10.6093C3.74739 12.4086 4.33124 14.159 5.41201 15.5921C5.41201 15.5921 5.63701 15.8903 5.67376 15.9334L12 23.4438L18.3293 15.9296C18.3623 15.8896 18.588 15.5921 18.588 15.5921L18.5888 15.5898C19.669 14.1574 20.2526 12.4078 20.25 10.6093C20.2474 8.4076 19.3774 6.29679 17.8308 4.73993C16.2842 3.18307 14.1873 2.30728 12 2.30469ZM12 13.6292C11.4067 13.6292 10.8266 13.4521 10.3333 13.1203C9.83995 12.7884 9.45543 12.3168 9.22837 11.765C9.00131 11.2132 8.9419 10.606 9.05765 10.0202C9.17341 9.43438 9.45913 8.89629 9.87869 8.47396C10.2982 8.05162 10.8328 7.764 11.4147 7.64748C11.9967 7.53096 12.5999 7.59076 13.1481 7.81933C13.6962 8.0479 14.1648 8.43496 14.4944 8.93158C14.8241 9.42819 15 10.0121 15 10.6093C14.999 11.4099 14.6826 12.1775 14.1202 12.7436C13.5578 13.3097 12.7954 13.6282 12 13.6292Z"
                                fill="#79B937"></path>
                        </svg>
                        <div class="flex flex-col gap-[1px]">
                            <p class="text-base font-medium text-white" id="reportAddress">
                                Ул. Васил Ѓоргов бр. 19
                            </p>
                            <p class="text-sm font-medium text-white">Капиштец, Скопје 1000
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mt-[29px]">
                    <p class="text-base font-medium text-white/80">
                        Ниво на загаденост:
                    </p>
                    <p id="pollutionLevel" class="text-base font-semibold text-[#db4d4d]">
                        Многу Високо ниво
                    </p>
                </div>
                <div class="flex mt-[29px] items-center justify-between">
                    <div class="flex gap-[5px] w-[50%]">
                        <div class="relative flex justify-center items-center ">
                            <svg width="44" height="45" viewBox="0 0 44 45" fill="none"
                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                                <path
                                    d="M43 22.8137C43 34.4983 33.5918 43.9594 22 43.9594C10.4082 43.9594 1 34.4983 1 22.8137C1 11.129 10.4082 1.66797 22 1.66797C33.5918 1.66797 43 11.129 43 22.8137Z"
                                    stroke="#DB4D4D" stroke-width="2"></path>
                            </svg>
                            <p class="text-base font-medium absolute text-[#db4d4d]">168</p>
                        </div>
                        <div class="flex flex-col gap-">
                            <p class="text-sm text-white">PM10</p>
                            <p class="text-xs text-white/70">μg/m3</p>
                        </div>
                    </div>
                    <div class="w-[50%]">
                        <p class="text-sm font-medium text-white">Фабрика; Чад; Миризба;</p>
                        <p class="mt-[8px] text-sm font-medium text-white">
                            Коментар: Загадувањето се чувствува 10 дена.
                        </p>
                    </div>
                </div>
                <div class="w-[200px] h-[137.91px] mb-[32px] mt-[23px] place-self-center">
                    <img src="rectangle-148.jpeg" class="w-full h-full rounded-[10px] object-cover" />
                </div>
                <div class="flex gap-[20px] justify-between">
                    <svg id="closeReportModal" width="64" height="65" viewBox="0 0 64 65" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-16 h-[64.42px]" preserveAspectRatio="none">
                        <rect x="1" y="1.39062" width="62" height="62.4238" rx="14" stroke="white"
                            stroke-width="2"></rect>
                        <path
                            d="M40.4722 40.4411C40.5533 40.5209 40.6176 40.6156 40.6615 40.7199C40.7054 40.8242 40.728 40.9359 40.728 41.0488C40.728 41.1616 40.7054 41.2734 40.6615 41.3777C40.6176 41.4819 40.5533 41.5767 40.4722 41.6565C40.3912 41.7363 40.2949 41.7996 40.189 41.8428C40.083 41.886 39.9695 41.9082 39.8548 41.9082C39.7402 41.9082 39.6266 41.886 39.5207 41.8428C39.4147 41.7996 39.3185 41.7363 39.2374 41.6565L32.0007 34.5327L24.764 41.6565C24.6003 41.8177 24.3782 41.9082 24.1466 41.9082C23.915 41.9082 23.6929 41.8177 23.5292 41.6565C23.3654 41.4953 23.2734 41.2767 23.2734 41.0488C23.2734 40.8209 23.3654 40.6023 23.5292 40.4411L30.767 33.3184L23.5292 26.1956C23.3654 26.0345 23.2734 25.8159 23.2734 25.5879C23.2734 25.36 23.3654 25.1414 23.5292 24.9802C23.6929 24.8191 23.915 24.7285 24.1466 24.7285C24.3782 24.7285 24.6003 24.8191 24.764 24.9802L32.0007 32.104L39.2374 24.9802C39.4011 24.8191 39.6232 24.7285 39.8548 24.7285C40.0864 24.7285 40.3085 24.8191 40.4722 24.9802C40.636 25.1414 40.728 25.36 40.728 25.5879C40.728 25.8159 40.636 26.0345 40.4722 26.1956L33.2345 33.3184L40.4722 40.4411Z"
                            fill="white"></path>
                    </svg>
                    <button type="button" id="caseResolution" class="w-[314px] text-xl font-semibold text-center text-white rounded-[15px] bg-[#79b937]"
                        style="filter: drop-shadow(0px 4px 20px rgba(0,0,0,0.15));">
                        Разреши случај
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // get all reports they have same class report and have data-id
        const reports = document.querySelectorAll('.report');
        const reportModal = document.getElementById('reportModal');
        const closeReportModal = document.getElementById('closeReportModal');
        const minimize = document.getElementById('minimize');
        for (const report of reports) {
            report.addEventListener('click', (e) => {
                const id = e.target.dataset.id;
                caseResolution = document.getElementById('caseResolution');
                caseResolution.addEventListener('click', () => {
                    window.location.href = `/caseResolution/${id}`;
                });

                reportModal.classList.remove('hidden');
            });
        }
        // if it is clicked outside of reportModal then close it
        window.addEventListener('click', (e) => {
            if (e.target == reportModal || e.target == minimize || e.target == closeReportModal) {
                reportModal.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
