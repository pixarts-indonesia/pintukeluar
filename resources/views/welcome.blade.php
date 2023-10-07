<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </head>
    <body class="bg-white dark:bg-gray-900">
        <header>
            <nav class="z-10 w-full absolute">
                <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                    <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                        <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                        <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                            <a href="#home" aria-label="logo" class="flex space-x-2 items-center">
                                <div aria-hidden="true" class="flex space-x-1">
                                    <div class="h-4 w-4 rounded-full bg-gray-900 dark:bg-white"></div>
                                    <div class="h-6 w-2 bg-primary"></div>
                                </div>
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">Astrolus</span>
                            </a>
                            
                            <div class="relative flex items-center lg:hidden max-h-10">
                                <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
                                    <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                                    <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                                </label>
                            </div>
                        </div>
                        <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70"></div>
                        <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                                    lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                                    peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                                    dark:shadow-none dark:bg-gray-800 dark:border-gray-700">
                        
                            <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
                                <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
                                    <li>
                                        <a href="#features" class="block md:px-4 transition hover:text-primary">
                                            <span>Features</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#solution" class="block md:px-4 transition hover:text-primary">
                                            <span>Solution</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#testimonials" class="block md:px-4 transition hover:text-primary">
                                            <span>Testimonials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#blog" class="block md:px-4 transition hover:text-primary">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-12 lg:mt-0">
                                <a
                                    href="#"
                                    class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                                    >
                                    <span class="relative text-sm font-semibold text-white"
                                        >Get Started</span
                                    >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="relative" id="home">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
            </div>
            <div>
                <div class="relative pt-36 ml-auto">
                    <div class="lg:w-2/3 text-center mx-auto">
                        <h1 class="text-gray-900 dark:text-white font-bold text-5xl md:text-6xl xl:text-7xl">Shaping a world with <span class="text-primary dark:text-white">reimagination.</span></h1>
                        <p class="mt-8 text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt nam itaque sed eius modi error totam sit illum. Voluptas doloribus asperiores quaerat aperiam. Quidem harum omnis beatae ipsum soluta!</p>
                        <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                            <a
                            href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                            >
                            <span class="relative text-base font-semibold text-white"
                                >Get started</span
                            >
                            </a>
                            <a
                            href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max"
                            >
                            <span
                                class="relative text-base font-semibold text-primary dark:text-white"
                                >Learn more</span
                            >
                            </a>
                        </div>
                        <div class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                            <div class="text-left">
                                <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The lowest price</h6>
                                <p class="mt-2 text-gray-500">Some text here</p>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The fastest on the market</h6>
                                <p class="mt-2 text-gray-500">Some text here</p>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The most loved</h6>
                                <p class="mt-2 text-gray-500">Some text here</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6">
                        <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('assets/images/clients/microsoft.svg') }}" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                        <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                        <img src="{{ asset('assets/images/clients/airbnb.svg') }}" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                        <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
                        <img src="{{ asset('assets/images/clients/google.svg') }}" class="h-9 w-auto m-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                        <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('assets/images/clients/ge.svg') }}" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                        <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('assets/images/clients/netflix.svg') }}" class="h-8 w-auto m-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                        <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('assets/images/clients/google-cloud.svg') }}" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
