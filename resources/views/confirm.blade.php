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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
    <script src="https://kit.fontawesome.com/10c2c36ccc.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased bg-slate-300">
    <div class="flex flex-col justify-center w-full items-center text-[#090B2E] py-10 px-4">
        <card class="flex flex-col w-full p-8 mx-auto space-y-8 text-gray-900 bg-white border-2 border-gray-300 shadow-xl sm:max-w-xl rounded-2xl">
            <div>
                <h1 class="text-3xl font-bold">Booking Detail</h1>
                <div class="shadow-lg mt-6 bg-gray-300 h-0.5 rounded-full"></div>
            </div>
            <img class="object-cover object-center h-56 rounded-xl" src="img/about.jpg" alt="innsbruck" />
            <div class="space-y-2">
                <h2 class="text-2xl font-bold">Account Information</h2>
                <p class="flex items-center text-sm text-gray-500">
                    <svg id="SvgjsSvg1086" class="mr-1" width="25" height="25" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                        <defs id="SvgjsDefs1087"></defs>
                        <g id="SvgjsG1088"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="25" height="25">
                                <rect width="256" height="256" fill="none"></rect>
                                <circle cx="128" cy="96" r="64" fill="none" stroke="#666666" stroke-miterlimit="10" stroke-width="16" class="colorStroke000 svgStroke"></circle>
                                <path fill="none" stroke="#666666" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M30.989,215.99064a112.03731,112.03731,0,0,1,194.02311.002" class="colorStroke000 svgStroke"></path>
                            </svg></g>
                    </svg>
                    {{ Auth::user()->name; }}
                </p>
                <div class="flex items-center text-sm text-gray-500">
                    <p class="flex items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        {{ $tgl }}
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $jam }}
                    </p>
                </div>
            </div>
            <div class="text-lg font-semibold text-gray-500">
                <div class="flex items-center justify-between">
                    <span>{{$service}}</span>
                    <span>
                        {{ $price }}
                    </span>
                </div>
            </div>
            <!-- <div class="flex items-center text-sm font-medium text-gray-600">
                <a href="#" class="flex items-center px-2 py-1 mr-4 border border-gray-300 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                </a>
                <a href="#" class="flex items-center px-2 py-1 border border-gray-300 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Remove
                </a>
            </div> -->
            <hr class="my-4 bg-gray-300">
            <div class="space-y-1">
                <h5 class="flex items-center justify-between text-lg font-semibold text-gray-700">
                    <span>Fee</span>
                    <span>-</span>
                </h5>
                <h4 class="flex items-start justify-between text-xl font-bold text-gray-900">
                    <span>Total</span>
                    <span class="flex flex-col">
                        {{$price}}
                    </span>
                </h4>
            </div>
            <form action="/order" method="POST">
                @csrf
                <input type="text" name="confirmDate" value="{{$tgl}}" id="tgl" class="hidden">
                <input type="text" name="confirmJam" value="{{$jam}}" id="jamselected" class="hidden">
                <input type="text" name="confirmService" value="{{$service}}" id="serviceselected" class="hidden">
                <input type="text" name="confirmPrice" value="{{$price}}" id="priceselected" class="hidden">
                <button type="submit" class="mt-8 mx-32 w-56 rounded-full bg-slate-500 px-10 py-4 text-lg font-bold text-white  focus:bg-slate-700 ">Confirm</button>
            </form>
        </card>
    </div>
</body>


</html>