<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>US BARBER - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">
    <script src="https://kit.fontawesome.com/10c2c36ccc.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased" class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <a href="/">
                            <x-application-logo />
                        </a>
                        <span class="mx-2 mt-px text-3xl font-semibold text-white">Barber</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 active:bg-gray-500" href="/admin">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="appointment">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>

                        <span class="mx-3">Appointment</span>
                    </a>

                    <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 active:bg-gray-500" href="customer">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)">
                                <path d="M16 18v-2a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8" cy="4" r="4"></circle>
                                <path d="M22 18v-2a4 4 0 0 0-3-3.87M15 .13a4 4 0 0 1 0 7.75"></path>
                            </g>
                        </svg>

                        <span class="mx-3">Customer </span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-slate-100">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-700 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                    </div>

                    <div class="flex items-center">
                        <div x-data="{ notificationOpen: false }" class="relative">
                            <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </button>

                            <div x-show="notificationOpen" @click="notificationOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="notificationOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80" style="width: 20rem; display: none;">
                                <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                                    <!-- <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="avatar"> -->
                                    <p class="mx-2 text-sm">
                                        <span class="font-bold" href="#">Coming Soon hehe
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative h-8 font-medium"> {{ Auth::user()->name }}
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m1683 808-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path>
                                </svg>
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-600 hover:text-white">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-600 hover:text-white">Logout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
                <form method="post" action="{{route('appointment.store')}}">
                    @csrf
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        <div class="container px-6 py-8 mx-auto">
                            <h3 class="text-3xl font-medium text-gray-700">Pilih Tanggal</h3>
                            <div class="relative my-4 max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-buttons datepicker-autoselect-today name="tanggal" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="container px-6 mx-auto">
                            <h3 class="text-3xl font-medium text-gray-700 mb-2">Pilih Jam</h3>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-08" type="checkbox" name="jam[]" value="08.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-08" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">08.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-09" type="checkbox" name="jam[]" value="09.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-09" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">09.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-10" type="checkbox" name="jam[]" value="10.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-10" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">10.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-11" type="checkbox" name="jam[]" value="11.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-11" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">11.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-13" type="checkbox" name="jam[]" value="13.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-13" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">13.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-14" type="checkbox" name="jam[]" value="14.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-14" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">14.00 </label>
                                    </div>
                                </li>
                            </ul>

                            <ul class="mt-6 items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-15" type="checkbox" name="jam[]" value="15.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-15" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">15.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-16" type="checkbox" name="jam[]" value="16.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-16" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">16.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-17" type="checkbox" name="jam[]" value="17.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-17" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">17.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-19" type="checkbox" name="jam[]" value="19.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-19" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">19.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-20" type="checkbox" name="jam[]" value="20.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-20" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">20.00 </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="CB-21" type="checkbox" name="jam[]" value="21.00" class="w-7 h-7 text-slate-700 bg-gray-100 border-gray-300 rounded dark:bg-gray-600 dark:border-gray-500">
                                        <label for="CB-21" class="w-full py-3 text-lg font-medium text-center text-gray-900 dark:text-gray-300">21.00 </label>
                                    </div>
                                </li>
                            </ul>
                            <button class="mt-8 py-2 px-5 rounded-xl bg-slate-700 text-lg font-bold text-white  focus:bg-slate-800" type="submit">Submit</button>
                        </div>
                    </main>
                </form>
            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>