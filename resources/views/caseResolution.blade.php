@extends('layouts.guestUser')
@section('content')
    <div class="min-w-screen min-h-screen pt-[56px]">
        <div class="fixed top-0 w-full z-10">
            <x-navbar :back="true" :logo="true" :notification="false" />
        </div>
        <div class="px-[16px] flex flex-col">
            <p class="text-lg font-bold text-center uppercase text-[#343a40] mt-[74px] mb-[64px]">Пријава бр.
                {{ $report->id }}
            </p>
            <div class="flex gap-[16px] flex-col">
                <p class="w-[294px] text-lg font-semibold text-[#343a40]">Состојба</p>
                <div class="flex justify-between">
                    <button onclick="document.querySelector('input[name=case_status]').value = 'on field';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        На терен
                    </button>
                    <button onclick="document.querySelector('input[name=case_status]').value = 'case closed';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        Затворен случај
                    </button>
                </div>
            </div>
            <div class="flex gap-[16px] mb-[84px] mt-[40px] flex-col">
                <p class="w-[294px] text-lg font-semibold text-[#343a40]">Извештај</p>
                <div class="flex justify-between">
                    <button onclick="document.querySelector('input[name=perpetrator]').value = 'located';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        Лоциран Сторител
                    </button>
                    <button onclick="document.querySelector('input[name=perpetrator]').value = 'unknown';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        Непознат сторител
                    </button>
                </div>
                <div class="flex justify-between">
                    <button onclick="document.querySelector('input[name=perpetrator]').value = 'fine';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        Изречена е казна
                    </button>
                    <button onclick="document.querySelector('input[name=perpetrator]').value = 'warning';"
                        class="flex justify-center items-center w-[189px] h-[48px] rounded-[15px] bg-white text-base font-medium text-[#343a40]"
                        style="box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.25);">
                        Издадена е опомена
                    </button>
                </div>
            </div>
            <textarea onchange="document.querySelector('input[name=inspector_description]').value = this.value;" name="message"
                placeholder="Извештај за сработеното..."
                class="w-full h-36 rounded-[10px] border border-[#343a40] text-sm font-semibold text-[#343a40]/[0.58] pt-[16px] pl-[16px]"></textarea>
            <button id="submit"
                class="place-self-center mt-[40px] w-[278.44px] h-[57.14px] rounded-[15px] bg-[#79b937] text-xl font-semibold text-center text-white"
                style="box-shadow: 0px 2px 20px 0 rgba(0,0,0,0.2)">Потврди измени</button>
        </div>
    </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="case_status">
        <input type="hidden" name="report_id" value="{{ $report->id }}">
        <input type="hidden" name="perpetrator">
        <input type="hidden" name="inspector_description">
    <div id="mdoal"
        class="hidden z-10 fixed bottom-0 left-0 w-full h-full bg-[#aeaeae]/[0.68] flex justify-center items-center">
        <div class="flex flex-col  justify-center items-center py-[25px] mx-[17px] px-[52px] rounded-[20px] bg-white"
            style="box-shadow: 0px 4px 15px 0 rgba(0,0,0,0.15);">
            <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-[69px] h-[69px] relative" preserveAspectRatio="xMidYMid meet">
                <path
                    d="M23 14.375H17.25C15.725 14.375 14.2625 14.9808 13.1841 16.0591C12.1058 17.1375 11.5 18.6 11.5 20.125V54.625C11.5 56.15 12.1058 57.6125 13.1841 58.6909C14.2625 59.7692 15.725 60.375 17.25 60.375H33.6289M47.4375 51.75L51.75 54.625L60.375 44.5625M51.75 31.625V20.125C51.75 18.6 51.1442 17.1375 50.0659 16.0591C48.9875 14.9808 47.525 14.375 46 14.375H40.25"
                    stroke="#79B937" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                    d="M23 31.625H34.5M23 43.125H31.625M23 14.375C23 12.85 23.6058 11.3875 24.6841 10.3091C25.7625 9.2308 27.225 8.625 28.75 8.625H34.5C36.025 8.625 37.4875 9.2308 38.5659 10.3091C39.6442 11.3875 40.25 12.85 40.25 14.375C40.25 15.9 39.6442 17.3625 38.5659 18.4409C37.4875 19.5192 36.025 20.125 34.5 20.125H28.75C27.225 20.125 25.7625 19.5192 24.6841 18.4409C23.6058 17.3625 23 15.9 23 14.375ZM40.25 51.75C40.25 54.8 41.4616 57.7251 43.6183 59.8817C45.7749 62.0384 48.7 63.25 51.75 63.25C54.8 63.25 57.7251 62.0384 59.8817 59.8817C62.0384 57.7251 63.25 54.8 63.25 51.75C63.25 48.7 62.0384 45.7749 59.8817 43.6183C57.7251 41.4616 54.8 40.25 51.75 40.25C48.7 40.25 45.7749 41.4616 43.6183 43.6183C41.4616 45.7749 40.25 48.7 40.25 51.75Z"
                    stroke="#79B937" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p class="mt-[21px] mb-[35px] text-lg font-bold text-[#79b937]">
                Вашата рецензија е успешно внесена!
            </p>
            <p class="text-base font-medium text-[#343a40]">
                Вратете се на почетната страна за да погледнете повеќе пријави.
            </p>
            <button id="showReports"
                class="mt-[100px] w-[165px] h-[45px] rounded-[10px] bg-[#79b937] text-lg font-semibold text-center text-white">Види
                пријави</button>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const mdoal = document.getElementById('mdoal');
        document.getElementById('submit').addEventListener('click', () => {
            url = "{{ route('updateReport') }}"
            fetch(url, {
                method: 'POST',
                body: JSON.stringify({
                    case_status: document.querySelector('input[name=case_status]').value,
                    report_id: document.querySelector('input[name=report_id]').value,
                    perpetrator: document.querySelector('input[name=perpetrator]').value,
                    inspector_description: document.querySelector('input[name=inspector_description]').value,
                }),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                }
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status == 'success') {
                        mdoal.classList.remove('hidden');
                    }
                })
        })
        const showReports = document.getElementById('showReports');
        window.addEventListener('click', (e) => {
            if (e.target == mdoal || e.target == showReports) {
                window.location.href = '/inspectorDashboard';
            }
        });
    </script>
@endsection
