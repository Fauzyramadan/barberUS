<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>US BARBER</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">
    <script src="https://kit.fontawesome.com/10c2c36ccc.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased bg-slate-100">
    <div class="w-screen ">
        <div class="relative mx-auto mt-24 mb-24 max-w-screen-lg overflow-hidden rounded-xl bg-slate-600/80 py-32 text-center shadow-xl shadow-slate-400">
            <h1 class="mt-2 px-8 text-5xl font-extrabold text-yellow-400 md:text-7xl">Book an Appointment</h1>
            <p class="mt-6 text-3xl text-white font-semibold">Semua Service bikin lo <span class="font-bold ">tampil beda !</span></p>
            <img class="absolute top-0 left-0 -z-10 h-full w-full object-cover" src="img/single.jpg" alt="" />
        </div>
        <div class="mx-auto grid max-w-screen-lg px-6 my-6">
            @csrf
            <div class="text-xl font-bold text-slate-700"> Account Information
                <div class="mt-4 grid gap-x-4 gap-y-3 lg:grid-cols-3 lg:max-w-screen sm:grid-cols-1">
                    <div class="p-1 rounded-full bg-slate-400 shadow-slate-600/60 shadow-md border-slate-400 text-center">{{ Auth::user()->name; }}</div>
                    <div class="p-1 rounded-full bg-slate-400 shadow-slate-600/60 shadow-md border-slate-400 text-center">{{ Auth::user()->nohp; }}</div>
                    <div class="p-1 rounded-full bg-slate-400 shadow-slate-600/60 shadow-md border-slate-400 text-center">{{ Auth::user()->email; }}</div>
                </div>
            </div>
        </div>
        <div class=" mx-auto grid max-w-screen-lg px-6 pb-20">
            <div class="">
                <p class="text-xl font-bold text-slate-700">Select a service</p>
                <div class="mt-4 grid max-w-3xl gap-x-4 gap-y-3 sm:grid-cols-2 md:grid-cols-3">
                    <div class="relative">
                        <input class="peer hidden" id="radio_1" value="std" type="radio" name="radio" checked />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-yellow-200 bg-white peer-checked:border-slate-400 peer-checked:bg-yellow-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-300 peer-checked:bg-yellow-500 peer-checked:text-white" for="radio_1">
                            <span class="items-center my-3 font-bold text-lg">Standard</span>
                        </label>
                    </div>
                    <div class="relative">
                        <input class="peer hidden" id="radio_2" value="full" type="radio" name="radio" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-yellow-200 bg-white peer-checked:border-slate-400 peer-checked:bg-yellow-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-300 peer-checked:bg-yellow-500 peer-checked:text-white" for="radio_2">
                            <span class="items-center my-3 font-bold text-lg">Full Package</span>
                        </label>
                    </div>
                </div>
            </div>
            <form action="booking" method="get">
                @csrf
                <div class="">
                    <p class="mt-8 text-xl font-bold text-slate-700">Select a date</p>
                    <div class="relative mt-4 w-56">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg aria-hidden="true" class="h-5 w-5 text-slate-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker="" name="tanggal" id="tanggalboking" datepicker-orientation="bottom" autofocus="autofocus" type="text" class="datepicker-input block w-full rounded-lg border border-slate-400 bg-slate-50 p-2.5 pl-10 text-slate-800 outline-none ring-opacity-30 placeholder:text-slate-800 focus:ring focus:ring-slate-400 sm:text-sm" placeholder="Select date" />
                    </div>
                </div>
                <button type="submit" class="mt-6 fa-solid fa-circle-check fa-2xl active:rotate-45"></button>
            </form>
            <form method="post" action="/confirm">
                @csrf
                <div class="">
                    <p class="mt-8 text-xl font-bold text-slate-700">Select a time</p>
                    <div class="mt-4 grid lg:grid-cols-6 sm:grid-cols-4 gap-2 lg:max-w-screen ">
                        @foreach ($tanggal as $jam)
                        <button type="button" id="bt{{ $jam->id }}" value="{{ $jam->jam }}" class="bg-slate-300 px-4 py-2 font-medium rounded-full text-slate-900 hover:bg-slate-400  focus:bg-slate-800 focus:text-white" onclick="btnClick(this)">{{$jam->jam}}</button>
                        @endforeach
                    </div>
                </div>
                <input type="text" name="confirmDate" value="{{$currentDate}}" id="tgl" class="hidden">
                <input type="text" name="confirmJam" value="" id="jamselected" class="hidden">
                <input type="text" name="confirmService" value="" id="serviceselected" class="hidden">
                <button type="submit" class="mt-8 w-56 rounded-full bg-slate-500 px-10 py-4 text-lg font-bold text-white  focus:bg-slate-700 ">Book Now</button>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    <script>
        function btnClick(btn) {
            var jam = document.getElementById("jamselected")
            var radios = document.getElementsByName("radio")
            var confirmservice = document.getElementById("serviceselected")
            jam.value = btn.value

            var selectedValue;
            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    selectedValue = radios[i].value;
                    break;
                }
            }
            console.log(selectedValue)
            confirmservice.value = selectedValue
        }
    </script>


    <!--===FOOTER===-->
    <footer class=" bg-slate-600" id="bottom">
        <div class="max-w-screen px-4 py-6 mx-auto">
            <div class="container p-6">
                <div class="grid gap-4 grid-cols-2">
                    <div class="mb-0">
                        <x-application-logo />
                        <h5 class="mt-4 font-bold text-2xl text-slate-200">BARBER & CO</h5>
                        <p class="text-slate-200 font-semibold mt-2 mb-1"><i class="fa fa-map-marker-alt"></i> Jalan Pemuda, Majalengka</p>
                        <p class="text-slate-200 font-semibold mt-2 mb-1"><i class="fab fa-whatsapp"></i> +62 881 0236 51726</p>
                        <div class="flex mt-5 space-x-6 text-gray-200">
                            <a href="https://www.instagram.com/_fauzyrmdhn/" class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Instagram </span>
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="https://wa.me/62881023651726" class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Whatsapp </span>
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-0 -mt-6">
                        <h1 class="grid grid- max-w-auto text-8xl font-bold text-yellow-400">
                            Style your Hair
                        </h1>
                        <h5 class="absolute -mt-8 mx-48 text-xl  font-medium text-white">With US Barber & Co.</h5>
                    </div>
                </div>
            </div>
            <div class="-my-4 text-center font-normal">
                © 2024 Copyright : <span class="font-semibold"> US Barber & Co. </span>
            </div>
        </div>
    </footer>
    </div>
    <script>
        var tanggalboking = document.getElementById('tanggalboking')
        var picker = new Pikaday({
            field: datepicker,
            format: 'YYYY-MM-DD', // Sesuaikan format sesuai kebutuhan
            onSelect: function(date) {
                console.log(date)
                // Fungsi ini akan dipanggil ketika tanggal dipilih
                // Anda juga bisa menambahkan kode lain di sini
            }
        });
        tanggalboking.addEventListener('click', () => {
            // console.log('ss')
            var selectedDate = tanggalboking.datepicker("getDate");
            alert(selectedDate);
        })
    </script>
</body>

</html>