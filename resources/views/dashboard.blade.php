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

<body class="antialiased">
    <!-- === NAVBAR === -->
    <div class="fixed w-full bg-slate-600 shadow-lg">
        <div class="container mx-auto px-4 ">
            <div class="flex items-center justify-between py-4">
                <div>
                    <a href="/dashboard">
                        <x-application-logo />
                    </a>
                </div>

                <div class="hidden sm:flex sm:items-center">
                    <a href="#top" class="text-gray-300 text-sm font-semibold hover:text-white mr-4">Home</a>
                    <a href="#service" class="text-gray-300 text-sm font-semibold hover:text-white mr-4">Service</a>
                </div>

                <div class="hidden sm:flex sm:items-center">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/profile') }}" class="font-semibold text-gray-300 hover:text-white ">{{ Auth::user()->name }}</a>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-300 text-sm font-semibold hover:text-white mr-4">Sign in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-300 text-sm font-semibold hover:text-white">Sign up</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- === HERO === -->
    <div class="bg-slate-700 text-white py-20 h-full w-full" id="top">
        <div id="parent">
            @if (session('success'))
            <div x-data="{ show: true }" id="child" x-show="show" class="mx-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-3" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <button type="button" @click="show = false" onclick="removeElement()">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                        </svg>
                    </button>
                </span>
            </div>
            @endif
        </div>
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-16">
            <div class="flex flex-col w-full justify-center items-center p-20">
                <h1 class="text-3xl md:text-5xl text-yellow-400 tracking-loose font-bold">US Barber & Co.</h1>
                <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Good Place for Men's Haircut</h2>
                <p class="text-sm md:text-base text-gray-50 mb-12 ">Ekspresikan kegantengan lo dan jadilah bagian dari pria percaya diri 100%</p>
            </div>
        </div>
    </div>

    <!-- === SERVICE ===  -->
    <service id="service" class="flex flex-col mt-10 w-full justify-center items-center ">
        <h1 class="text-3xl md:text-5xl text-slate-700 text-center tracking-loose font-bold">Semua service bikin lo <span class=" text-yellow-600 italic">tampil beda !</span></h1>
        <div class="flex my-px items-start max-w-screen-xl">
            <div class=" m-10 bg-yellow-400 rounded-lg shadow-xl cursor-pointer hover:bg-gradient-to-bl from-yellow-300 to-yellow-600  hover:shadow-slate-400 hover:shadow-lg ">
                <h2 class="text-2xl p-2 font-bold text-center"> Standard</h2>
                <h1 class="text-6xl pb-2 font-extrabold text-center rounded-xl shadow-xl bg-slate-700 text-slate-200"> 25 K</h1>
                <h3 class="text-lg p-2 font-medium text-center">Hair Cut <br> Free Hair Shaving <br> Free Hair Styling <br> Free Pomade / Hair Tonic / Hair Powder <br><br><br><br></h3>
            </div>
            <div class=" m-10 bg-yellow-400 rounded-lg shadow-xl cursor-pointer transition duration-500 hover:bg-gradient-to-br from-yellow-300 to-yellow-600 hover:shadow-slate-400 hover:shadow-lg">
                <h2 class=" text-xl p-2 font-bold text-center"> Full Package</h2>
                <h1 class="text-6xl pb-2 font-extrabold text-center rounded-xl shadow-xl bg-slate-700 text-slate-200"> 30 K</h1>
                <h3 class="text-lg p-2 font-medium text-center ">Hair Cut <br> Hair Wash <br> Hot Towel <br> Reflexology <br> Free Hair Shaving <br> Free Hair Styling <br> Free Pomade / Hair Tonic / Hair Powder</h3>
            </div>
        </div>
        <a class="items-start flex text-4xl font-extrabold mb-12 px-5 py-2 text-center rounded-full bg-slate-600 text-slate-200 shadow-xl hover:bg-gradient-to-br from-slate-400 to-slate-700 hover:shadow-slate-700 hover:shadow-lg " href="booking">Booking <span class="text-lg italic font-semibold ml-1">for now</span></a>
    </service>
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
        function removeElement() {
            var parent = document.getElementById("parent");
            var child = document.getElementById("child");
            if (child) {
                parent.removeChild(child);
            }
        }
    </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>