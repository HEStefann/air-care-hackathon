@extends('layouts.guestUser')
@section('content')
    <div class="min-w-screen min-h-screen pb-[120px] bg-[#525659]">
        <div class="fixed top-0 w-full z-10">
            <x-navbar :back="false" :logo="true" :notification="false" />
        </div>
        <style>
            .leaflet-control-container {
                display: none !important;
            }
        </style>
        <div id="map" class="h-[100vh] w-full z-0"></div>
        <div class="bg-[#525659]">
            <div class="flex">
                <div class="flex flex-col gap-[13px] px-[14px]">
                    <p class="text-sm font-medium text-white">За Нас</p>
                    <p class="text-sm font-medium text-white">Блог</p>
                    <p class="w-[87px] text-sm font-medium text-white">Полиса на приватност</p>
                    <p class="w-[87px] text-sm font-medium text-white">Легални аспекти</p>
                    <p class="text-sm font-medium text-white">Контакт</p>
                </div>
                <svg width="2" height="244" viewBox="0 0 2 244" fill="none" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid meet">
                    <path d="M1 243L0.999989 0.999995" stroke="#CCCCCC" stroke-width="0.829156" stroke-linecap="round">
                    </path>
                </svg>
                <div class="flex flex-col flex-grow px-[12px] items-center mt-[8px] mb-[25px]">
                    <p class="w-40 text-sm font-bold text-center text-white">
                        ТИ ВЕЛАТ ДЕКА НЕ МОЖЕШ НИШТО? ТЕ ЛАЖАТ. ДИШИ СЛОБОДНО.
                    </p>
                    <a href="{{ route('registerUser') }}"
                        class="w-[164px] h-[49px] flex items-center justify-center mb-[38px] rounded-[15px] bg-[#79b937] text-sm font-semibold text-center text-white mt-[25px]"
                        style="filter: drop-shadow(0px 4px 20px rgba(0,0,0,0.15));">
                        Регистрирај се
                    </a>
                    <div class="flex justify-between w-full items-center">
                        <div class="w-[24px] h-[26.12px]">
                            <img src="{{ asset('/images/logo 2.png') }}" class="w-full h-full object-cover" />
                        </div>
                        <svg width="89" height="32" viewBox="0 0 89 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-[81px] h-6" preserveAspectRatio="none">
                            <g clip-path="url(#clip0_5716_316)" filter="url(#filter0_d_5716_316)">
                                <path
                                    d="M47.3676 12.7972H43.7179L43.0216 14.4983H41.1575L44.6612 6.55928H46.458L49.9731 14.4983H48.0639L47.3676 12.7972ZM46.7949 11.4021L45.5484 8.36239L44.3018 11.4021H46.7949ZM50.5349 6.55928C50.5349 6.0036 50.9729 5.57264 51.6241 5.57264C52.2753 5.57264 52.7134 5.98087 52.7134 6.52533C52.7134 7.1151 52.2754 7.54606 51.6241 7.54606C50.9727 7.54606 50.5349 7.1151 50.5349 6.55928ZM50.7483 8.39663H52.5001V14.4983H50.7483V8.39663ZM57.8054 8.30586V9.93937C57.6594 9.92801 57.5471 9.91665 57.4116 9.91665C56.4458 9.91665 55.8058 10.4497 55.8058 11.6179V14.4986H54.054V8.39691H55.7277V9.20216C56.1546 8.61211 56.8733 8.30586 57.8054 8.30586ZM59.1136 10.5289C59.1136 8.13583 60.9329 6.42377 63.3809 6.42377C64.7398 6.42377 65.8741 6.92277 66.6158 7.83001L65.4484 8.91878C65.2086 8.62468 64.9066 8.38852 64.5646 8.2276C64.2226 8.06669 63.8493 7.9851 63.472 7.98882C62.001 7.98882 60.9565 9.03213 60.9565 10.5293C60.9565 12.0264 62.001 13.0698 63.472 13.0698C63.8505 13.0738 64.2249 12.9912 64.5672 12.8282C64.9095 12.6652 65.2108 12.4259 65.4484 12.1284L66.6158 13.2172C65.8746 14.1358 64.7404 14.6348 63.3703 14.6348C60.9329 14.6344 59.1136 12.9219 59.1136 10.5289ZM73.0566 11.0165V14.4983H71.4171V13.7385C71.0913 14.2942 70.4625 14.5891 69.5753 14.5891C68.1603 14.5891 67.3181 13.7952 67.3181 12.7404C67.3181 11.6629 68.0704 10.9144 69.9121 10.9144H71.3046C71.3046 10.1546 70.8553 9.71224 69.9121 9.71224C69.2866 9.70709 68.6762 9.90596 68.1716 10.2793L67.5427 9.0435C68.2053 8.56722 69.1823 8.30629 70.1481 8.30629C71.9898 8.30586 73.0566 9.16793 73.0566 11.0165ZM71.3048 12.5703V11.9459H70.1031C69.2833 11.9459 69.025 12.2521 69.025 12.6604C69.025 13.1027 69.3956 13.3976 70.0132 13.3976C70.5972 13.3982 71.1026 13.126 71.3048 12.5709V12.5703ZM78.233 8.30586V9.93937C78.0871 9.92801 77.9748 9.91665 77.84 9.91665C76.8743 9.91665 76.2341 10.4497 76.2341 11.6179V14.4986H74.4823V8.39691H76.156V9.20216C76.5823 8.61211 77.3006 8.30586 78.233 8.30586ZM84.966 11.9459H80.3949C80.5637 12.7058 81.2035 13.1707 82.1249 13.1707C82.4041 13.1821 82.6826 13.1356 82.9433 13.0342C83.204 12.9328 83.4415 12.7786 83.641 12.5811L84.5731 13.6019C84.0116 14.2483 83.1694 14.5885 82.08 14.5885C79.9911 14.5885 78.6323 13.2615 78.6323 11.4469C78.6323 9.62091 80.0136 8.30529 81.8554 8.30529C83.6297 8.30529 84.9998 9.50756 84.9998 11.4696C84.9999 11.6063 84.9774 11.799 84.966 11.9459ZM80.373 10.9138H83.3486C83.3042 10.5529 83.1272 10.222 82.8526 9.98677C82.578 9.75151 82.2259 9.62904 81.8661 9.64364C81.07 9.64477 80.4966 10.1318 80.3731 10.9144L80.373 10.9138ZM29.2661 6.64834C28.8723 5.09618 28.0686 3.68115 26.9407 2.55433C25.8128 1.42752 24.403 0.631229 22.8619 0.25049C21.3208 -0.130249 19.7062 -0.0811424 18.1906 0.392567C16.675 0.866276 15.3152 1.7468 14.2564 2.94012C13.3906 2.75175 12.4947 2.75398 11.6298 2.94666C10.7649 3.13933 9.95125 3.51793 9.24422 4.05669C8.5372 4.59544 7.9534 5.28171 7.53257 6.06878C7.11174 6.85585 6.86376 7.72524 6.80549 8.61779C5.74937 9.21018 4.91793 10.14 4.44166 11.2612C3.9654 12.3824 3.87128 13.6317 4.17407 14.8128C4.47687 15.9939 5.15944 17.04 6.11464 17.787C7.06985 18.5339 8.24361 18.9394 9.45168 18.9397C9.6725 18.9397 10.058 18.9397 10.5704 18.9389C10.3934 18.2989 10.2932 17.6398 10.2721 16.9757H9.45168C8.57495 16.9758 7.72997 16.6443 7.08325 16.0465C6.43653 15.4486 6.03496 14.6279 5.95768 13.7459C5.8804 12.8639 6.13301 11.9847 6.66573 11.2815C7.19845 10.5782 7.97265 10.102 8.83578 9.94662C8.66195 9.15009 8.71791 8.31994 8.99704 7.55456C9.27616 6.78918 9.76673 6.12068 10.4106 5.6283C11.0545 5.13592 11.8246 4.84031 12.6298 4.77652C13.4349 4.71273 14.2413 4.88342 14.9534 5.26838C15.7081 4.01612 16.8389 3.03982 18.1811 2.48159C19.5234 1.92335 21.007 1.81232 22.4161 2.16465C23.8251 2.51698 25.0861 3.31428 26.0153 4.4405C26.9446 5.56672 27.4937 6.96308 27.5828 8.42631C27.639 8.42404 27.6965 8.42205 27.7539 8.42205C28.8739 8.42205 29.9479 8.87136 30.7399 9.67113C31.5318 10.4709 31.9767 11.5556 31.9767 12.6867C31.9767 13.8177 31.5318 14.9024 30.7399 15.7022C29.9479 16.502 28.8739 16.9513 27.7539 16.9513H27.6497C27.6304 17.6153 27.5321 18.2746 27.357 18.915H27.7539C29.2577 18.9151 30.7097 18.3603 31.8368 17.3549C32.9639 16.3496 33.6885 14.963 33.8743 13.456C34.06 11.9489 33.6942 10.4252 32.8456 9.1715C31.9969 7.91776 30.7239 7.02036 29.2661 6.64806V6.64834Z"
                                    fill="white"></path>
                                <path
                                    d="M18.9604 9.40335C14.8643 9.40335 11.532 12.6775 11.532 16.702C11.532 20.7266 14.8643 24.0006 18.9604 24.0006C23.0566 24.0006 26.3889 20.7264 26.3889 16.702C26.3889 12.6776 23.0564 9.40335 18.9604 9.40335ZM18.9604 22.1193C15.8926 22.1193 13.3967 19.6891 13.3967 16.702C13.3967 13.715 15.8926 11.2847 18.9604 11.2847C22.0283 11.2847 24.5241 13.7148 24.5241 16.702C24.5241 19.6892 22.0283 22.1188 18.9604 22.1188V22.1193Z"
                                    fill="white"></path>
                                <path
                                    d="M18.3604 18.1358L19.5747 18.1333L19.8769 12.906L18.0438 12.9035L18.3604 18.1358ZM18.9605 18.836C18.7638 18.8385 18.5722 18.8998 18.4098 19.0121C18.2475 19.1244 18.1216 19.2826 18.0481 19.4669C17.9746 19.6512 17.9567 19.8534 17.9966 20.048C18.0366 20.2426 18.1326 20.4209 18.2726 20.5605C18.4127 20.7 18.5905 20.7947 18.7836 20.8325C18.9768 20.8703 19.1767 20.8496 19.3583 20.773C19.5398 20.6963 19.6948 20.5672 19.8039 20.4018C19.9129 20.2363 19.9711 20.0421 19.9711 19.8433C19.969 19.5745 19.8615 19.3175 19.672 19.1287C19.4826 18.9398 19.2267 18.8346 18.9605 18.836Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <filter id="filter0_d_5716_316" x="0" y="0" width="89" height="32"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                    </feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                                    </feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5716_316">
                                    </feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5716_316"
                                        result="shape">
                                    </feBlend>
                                </filter>
                                <clipPath id="clip0_5716_316">
                                    <rect width="81" height="24" fill="white" transform="translate(4)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="w-[106px] h-[21px]">
                            <img src="{{ asset('/images/logo-svg-white 2EarthCare.png') }}"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center mt-[13px] items-center">
                <svg width="354" height="2" viewBox="0 0 354 2" fill="none" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid meet">
                    <path d="M1 1H353" stroke="#CCCCCC" stroke-linecap="round"></path>
                </svg>
                <p class="text-lg font-semibold text-center text-white mt-[19px]">Следи не на социјални мрежи</p>
                <div class="flex mt-[25px] justify-evenly w-full">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-9 h-9 relative" preserveAspectRatio="xMidYMid meet">
                        <g clip-path="url(#clip0_1297_1973)">
                            <path
                                d="M36 18.11C36 27.1489 29.4187 34.6424 20.8133 36V23.3445H25.008L25.8053 18.11H20.8133V14.7134C20.8133 13.2807 21.5093 11.8855 23.7467 11.8855H26.016V7.42913C26.016 7.42913 23.9573 7.07497 21.9867 7.07497C17.8747 7.07497 15.1867 9.58086 15.1867 14.1204V18.11H10.6187V23.3445H15.1867V36C6.584 34.6424 0 27.1489 0 18.11C0 8.10792 8.05867 0 18 0C27.9413 0 36 8.10792 36 18.11Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1297_1973">
                                <rect width="36" height="36" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 relative" preserveAspectRatio="xMidYMid meet">
                        <g clip-path="url(#clip0_1297_1975)">
                            <path
                                d="M21.7761 18C21.7761 20.0853 20.0854 21.776 18.0001 21.776C15.9148 21.776 14.2214 20.0853 14.2214 18C14.2214 15.9146 15.9121 14.2213 18.0001 14.2213C20.0881 14.2213 21.7761 15.912 21.7761 18Z"
                                fill="white"></path>
                            <path
                                d="M27.2241 13.4187C27.1735 12.3147 26.9895 11.7147 26.8348 11.3147C26.6295 10.7867 26.3841 10.408 25.9868 10.0134C25.5895 9.61602 25.2135 9.37068 24.6828 9.16535C24.2828 9.00802 23.6828 8.82402 22.5788 8.77335C21.3841 8.72002 21.0241 8.70935 18.0001 8.70935C14.9761 8.70935 14.6135 8.72002 13.4188 8.77335C12.3148 8.82402 11.7148 9.00802 11.3148 9.16535C10.7868 9.37068 10.4081 9.61602 10.0108 10.0134C9.61612 10.408 9.37079 10.7867 9.16545 11.3147C9.00812 11.7147 8.82412 12.3147 8.77345 13.4187C8.72012 14.616 8.70679 14.9734 8.70679 18C8.70679 21.0267 8.72012 21.384 8.77345 22.5787C8.82412 23.6853 9.00812 24.2853 9.16545 24.6827C9.37079 25.2133 9.61612 25.5893 10.0108 25.9867C10.4081 26.384 10.7868 26.6294 11.3148 26.8347C11.7148 26.9893 12.3148 27.1733 13.4188 27.224C14.6135 27.28 14.9735 27.2907 18.0001 27.2907C21.0268 27.2907 21.3841 27.28 22.5788 27.224C23.6828 27.1733 24.2828 26.9893 24.6828 26.8347C25.2135 26.6294 25.5895 26.384 25.9868 25.9867C26.3841 25.5893 26.6295 25.2133 26.8348 24.6827C26.9895 24.2853 27.1735 23.6853 27.2241 22.5787C27.2801 21.384 27.2908 21.0267 27.2908 18C27.2908 14.9734 27.2801 14.616 27.2241 13.4187ZM18.0001 23.8187C14.7841 23.8187 12.1788 21.2134 12.1788 18C12.1788 14.7867 14.7841 12.1787 18.0001 12.1787C21.2161 12.1787 23.8188 14.784 23.8188 18C23.8188 21.216 21.2135 23.8187 18.0001 23.8187ZM24.0481 13.3094C23.2988 13.3094 22.6881 12.7014 22.6881 11.9494C22.6881 11.1974 23.2988 10.5894 24.0481 10.5894C24.7975 10.5894 25.4081 11.1974 25.4081 11.9494C25.4081 12.7014 24.8001 13.3094 24.0481 13.3094Z"
                                fill="white"></path>
                            <path
                                d="M18 0C8.05867 0 0 8.05867 0 18C0 27.9413 8.05867 36 18 36C27.9413 36 36 27.9413 36 18C36 8.05867 27.9413 0 18 0ZM29.264 22.672C29.208 23.8773 29.0187 24.7013 28.7387 25.424C28.448 26.168 28.0613 26.8 27.4293 27.4293C26.8 28.0613 26.168 28.448 25.424 28.7387C24.7013 29.0187 23.8773 29.2107 22.672 29.264C21.464 29.32 21.0773 29.3333 18 29.3333C14.9227 29.3333 14.536 29.32 13.3253 29.264C12.12 29.2107 11.296 29.0187 10.576 28.7387C9.82933 28.448 9.19733 28.0613 8.568 27.4293C7.93867 26.8 7.54933 26.168 7.26133 25.424C6.98133 24.7013 6.78933 23.8773 6.73333 22.672C6.68 21.464 6.66667 21.0773 6.66667 18C6.66667 14.9227 6.68 14.536 6.73333 13.328C6.78933 12.12 6.98133 11.296 7.26133 10.576C7.54933 9.82933 7.93867 9.19733 8.568 8.568C9.19733 7.93867 9.82933 7.552 10.576 7.26133C11.296 6.98133 12.12 6.78933 13.3253 6.73333C14.536 6.68 14.92 6.66667 18 6.66667C21.08 6.66667 21.464 6.68 22.672 6.73333C23.8773 6.78933 24.7013 6.98133 25.424 7.26133C26.168 7.552 26.8 7.93867 27.4293 8.568C28.0613 9.19733 28.448 9.82933 28.7387 10.576C29.0187 11.296 29.208 12.12 29.264 13.328C29.32 14.536 29.3333 14.9227 29.3333 18C29.3333 21.0773 29.32 21.464 29.264 22.672Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1297_1975">
                                <rect width="36" height="36" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 relative" preserveAspectRatio="xMidYMid meet">
                        <g clip-path="url(#clip0_1297_1979)">
                            <path
                                d="M18 0C8.05867 0 0 8.05867 0 18C0 27.9413 8.05867 36 18 36C27.9413 36 36 27.9413 36 18C36 8.05867 27.9413 0 18 0ZM12.0587 27.8347C10.7787 27.8213 9.49867 27.824 8.21867 27.8347C8.01333 27.8347 7.952 27.784 7.952 27.5707C7.95733 23.008 7.95733 18.4453 7.952 13.8827C7.952 13.6933 7.99733 13.6267 8.2 13.6267C9.49867 13.6347 10.7973 13.6373 12.096 13.6267C12.3467 13.624 12.3787 13.72 12.3787 13.9333C12.3733 16.2053 12.376 18.4773 12.376 20.7493C12.376 23.0213 12.3707 25.2587 12.3813 27.512C12.3813 27.7627 12.32 27.8373 12.0587 27.8347ZM10.1707 11.672C8.776 11.6747 7.61867 10.52 7.61333 9.128C7.608 7.71733 8.76533 6.56 10.176 6.56C11.5733 6.56 12.728 7.712 12.728 9.104C12.728 10.52 11.5813 11.672 10.1707 11.672ZM28.944 27.5413C28.944 27.776 28.88 27.8347 28.6507 27.8347C27.368 27.824 26.088 27.824 24.8053 27.8347C24.5813 27.8373 24.5333 27.7653 24.5333 27.5547C24.5413 25.1867 24.5413 22.8213 24.5333 20.456C24.5333 19.8613 24.496 19.2693 24.328 18.6933C24.0213 17.632 23.2613 17.0907 22.1493 17.1493C20.6293 17.2293 19.84 17.9813 19.648 19.5253C19.6 19.896 19.5787 20.264 19.5787 20.6373C19.5787 22.936 19.576 25.2373 19.584 27.5387C19.5867 27.768 19.528 27.8373 19.2933 27.8347C18.0027 27.824 16.7147 27.824 15.424 27.8347C15.216 27.8347 15.1573 27.7787 15.1573 27.5707C15.1627 23.0133 15.1627 18.4587 15.1573 13.904C15.1573 13.6773 15.2293 13.624 15.4427 13.6267C16.6693 13.6347 17.8933 13.6373 19.12 13.6267C19.344 13.624 19.4027 13.696 19.3973 13.9093C19.3867 14.456 19.3973 15 19.3973 15.544C19.6933 15.2133 19.936 14.8747 20.24 14.5893C21.1733 13.7093 22.2773 13.264 23.5653 13.2773C24.2747 13.2827 24.976 13.3333 25.6587 13.5307C27.2213 13.9813 28.128 15.0587 28.56 16.584C28.8853 17.728 28.9467 18.904 28.9467 20.0827C28.952 22.568 28.9413 25.056 28.9467 27.5413H28.944Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1297_1979">
                                <rect width="36" height="36" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 relative" preserveAspectRatio="xMidYMid meet">
                        <g clip-path="url(#clip0_1297_1981)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18 0C8.05867 0 0 8.06133 0 18C0 27.9387 8.05867 36 18 36C27.9413 36 36 27.9413 36 18C36 8.05867 27.9413 0 18 0ZM27.9493 14.152C27.9573 14.3547 27.9627 14.5627 27.9627 14.768C27.9627 21.0853 23.1547 28.368 14.3627 28.368C11.664 28.368 9.152 27.576 7.03733 26.2213C7.41067 26.264 7.792 26.288 8.176 26.288C10.416 26.288 12.4773 25.5227 14.1147 24.24C12.0213 24.2027 10.256 22.8213 9.648 20.9227C9.93867 20.976 10.24 21.008 10.5467 21.008C10.984 21.008 11.4053 20.9493 11.808 20.84C9.61867 20.4027 7.97333 18.4693 7.97333 16.1547V16.0933C8.61867 16.4507 9.35467 16.6667 10.1387 16.6907C8.856 15.8347 8.01067 14.3707 8.01067 12.712C8.01067 11.8373 8.248 11.016 8.65867 10.3093C11.016 13.2027 14.5387 15.104 18.5093 15.304C18.4293 14.9547 18.3867 14.5893 18.3867 14.2133C18.3867 11.576 20.528 9.43467 23.1653 9.43467C24.5413 9.43467 25.784 10.016 26.656 10.944C27.744 10.7307 28.7653 10.3333 29.6907 9.784C29.3333 10.9013 28.576 11.8373 27.5893 12.4293C28.5547 12.312 29.4773 12.056 30.3333 11.6773C29.6933 12.6347 28.8827 13.4773 27.9493 14.152Z"
                                fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1297_1981">
                                <rect width="36" height="36" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <x-footer :roundFooter='true' :noBack='false' />
    </div>
@endsection
@section('scripts')
    <script>
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var map = L.map('map').setView([latitude, longitude],
                15); // Set the map's view to the current coordinates with a higher zoom level

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        });
    </script>
@endsection
