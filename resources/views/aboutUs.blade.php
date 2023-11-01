@extends('layouts.guestUser')
@section('content')
    <div class="min-w-screen min-h-screen">
        <x-navbar :back="true" :logo="true" :notification="false" />
        <p class="text-2xl font-bold mt-[73px] text-center uppercase text-[#343a40]">About us</p>
        <div class="w-full h-[620px]">
            <img src="{{ asset('/images/Rectangle 232.png') }}" class="w-full h-full" />
        </div>
        <div class="relative">
            <div class="w-full h-[237px] absolute top-[268px] -z-10">
                <img src="{{ asset('/images/Group 242.png') }}" class="w-full h-full" />
            </div>
            <div class="w-full h-[237px] absolute bottom-[236.45px] -z-10">
                <img src="{{ asset('/images/Cloud.png') }}" class="w-full h-full" />
            </div>
            <div class="px-[16px] flex flex-col mb-[183px] pt-[107px]">
                <p class="text-lg font-bold text-right text-[#343a40] mb-[37px]">The Mission</p>
                <p class="text-base font-medium text-right text-[#343a40]">
                    At Breathe.mk, our mission is to tirelessly work towards a cleaner and healthier Skopje by
                    addressing the critical issue of air quality.
                </p>
                <svg class="self-end mt-[30px]" width="189" height="1" viewBox="0 0 189 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                    <line x1="3.08678e-8" y1="0.646913" x2="189" y2="0.64693" stroke="#343A40"
                        stroke-width="0.706173"></line>
                </svg>
            </div>
            <div class="px-[16px] flex flex-col mb-[183px]">
                <p class="text-lg font-bold text-left text-[#343a40] mb-[26px]">The Dedication</p>
                <p class="text-base font-medium text-left text-[#343a40]">
                    We are dedicated to implementing
                    innovative solutions, raising awareness, and collaborating
                    with stakeholders to reduce air pollution, ensuring that every citizen can breathe fresh, clean
                    air and enjoy a better quality of life.
                </p>
                <svg class="mt-[36px]" width="189" height="1" viewBox="0 0 189 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                    <line x1="3.08678e-8" y1="0.646913" x2="189" y2="0.64693" stroke="#343A40"
                        stroke-width="0.706173"></line>
                </svg>
            </div>
            <div class="px-[16px] flex flex-col mb-[60px] pt-[107px]">
                <p class="text-lg font-bold text-right text-[#343a40] mb-[37px]">The Commitment</p>
                <p class="text-base font-medium text-right text-[#343a40]">
                    Our commitment is rooted in the belief that cleaner air is not just a goal but a fundamental right, and
                    we strive to make Skopje a shining example of environmental stewardship for generations to come.
                </p>
                <svg class="self-end mt-[32px]" width="189" height="1" viewBox="0 0 189 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                    <line x1="3.08678e-8" y1="0.646913" x2="189" y2="0.64693" stroke="#343A40"
                        stroke-width="0.706173"></line>
                </svg>
            </div>
        </div>
        <div class="bg-[#CCCECF] px-[16px] pt-[24px] pb-[171px]">
            <p class="text-lg font-bold text-[#343a40]">
                Our heros
            </p>
            <div class="w-[110px] h-[48.69px] mt-[56px] mb-[18px]">
                <img src="{{ asset('/images/Logo-Frontwisegroup_CMYK_vDEF 2.png') }}" alt=""
                    class="w-full h-full object-cover">
            </div>
            <p class="text-base font-medium text-[#343a40] mb-[74px]">
                <span class="text-base font-semibold text-[#343a40]">Frontwise Group</span>
                <br>
                <br>
                Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.
            </p>
            <div class="w-[44.32px] h-[46.83px] mb-[18px]">
                <img src="{{ asset('/images/image 2.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <p class="text-[13.427135467529297px] font-medium text-left text-[#343a40]">
                <span class="text-[13.427135467529297px] font-semibold text-left text-[#343a40]">Skopje
                    City</span><br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut
                labore et dolore magna aliqua.
                <br>
            </p>
            <div class="w-[205px] h-12 mt-[74px] mb-[18px]">
                <img src="{{ asset('/images/ss_logo 1.png') }}" class="w-full h-full object-cover" />
            </div>
            <p class="text-[13.427135467529297px] font-medium text-left text-[#343a40]">
                <span class="text-[13.427135467529297px] font-semibold text-left text-[#343a40]">Sample
                    Solutions</span><br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor
                incididunt ut
                labore et dolore magna aliqua.
                <br>
            </p>
        </div>
        <x-footer :roundFooter='true' :noBack='false' />
    </div>
@endsection
