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
                <div class="shadow-lg mt-2 bg-gray-300 h-0.5 rounded-full"></div>
            </div>
            <!-- <img class="object-cover object-center h-56 rounded-xl" src="img/about.jpg" alt="innsbruck" /> -->
            <div class="space-y-2">
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
                <p class="flex items-center text-sm text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="mr-1 text-red-700" viewBox="0 0 737.509 740.824" id="whatsapp">
                        <path fill-rule="evenodd" d="M630.056 107.658C560.727 38.271 468.525.039 370.294 0 167.891 0 3.16 164.668 3.079 367.072c-.027 64.699 16.883 127.855 49.016 183.523L0 740.824l194.666-51.047c53.634 29.244 114.022 44.656 175.481 44.682h.151c202.382 0 367.128-164.689 367.21-367.094.039-98.088-38.121-190.32-107.452-259.707m-259.758 564.8h-.125c-54.766-.021-108.483-14.729-155.343-42.529l-11.146-6.613-115.516 30.293 30.834-112.592-7.258-11.543c-30.552-48.58-46.689-104.729-46.665-162.379C65.146 198.865 202.065 62 370.419 62c81.521.031 158.154 31.81 215.779 89.482s89.342 134.332 89.311 215.859c-.07 168.242-136.987 305.117-305.211 305.117m167.415-228.514c-9.176-4.591-54.286-26.782-62.697-29.843-8.41-3.061-14.526-4.591-20.644 4.592-6.116 9.182-23.7 29.843-29.054 35.964-5.351 6.122-10.703 6.888-19.879 2.296-9.175-4.591-38.739-14.276-73.786-45.526-27.275-24.32-45.691-54.36-51.043-63.542-5.352-9.183-.569-14.148 4.024-18.72 4.127-4.11 9.175-10.713 13.763-16.07 4.587-5.356 6.116-9.182 9.174-15.303 3.059-6.122 1.53-11.479-.764-16.07-2.294-4.591-20.643-49.739-28.29-68.104-7.447-17.886-15.012-15.466-20.644-15.746-5.346-.266-11.469-.323-17.585-.323-6.117 0-16.057 2.296-24.468 11.478-8.41 9.183-32.112 31.374-32.112 76.521s32.877 88.763 37.465 94.885c4.587 6.122 64.699 98.771 156.741 138.502 21.891 9.45 38.982 15.093 52.307 19.323 21.981 6.979 41.983 5.994 57.793 3.633 17.628-2.633 54.285-22.19 61.932-43.616 7.646-21.426 7.646-39.791 5.352-43.617-2.293-3.826-8.41-6.122-17.585-10.714" clip-rule="evenodd"></path>
                    </svg>
                    {{ Auth::user()->nohp; }}
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
            <form method="post" action="/order">
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