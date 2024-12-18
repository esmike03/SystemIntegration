<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BISU Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v3.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }
</style>

<body  style="background: url('/images/bgdot2.png') center/cover no-repeat;" class="bg-[url('/images/bgdot2.jpg')]  bg-cover bg-center  h-full md:h-screen">

    <header>
        <nav
            class="shadow border-b-2 bg-gray-950 backdrop-filter backdrop-blur-lg bg-opacity-30 w-full fixed  z-20 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                    aria-controls="default-sidebar" type="button"
                    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/images/BISU-LOGO.png" class="h-8 mt-2" alt="BISU Logo">
                    <img src="/images/bishub2.png" class="h-8" alt="bisuhub Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">


                </div>
            </div>
        </nav>

    </header>

    <aside id="default-sidebar"
    class="mt-16 fixed left-0 z-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-[4px_0_15px_rgba(135, 206, 235, 0.9)]"
    aria-label="Sidebar">
        <div class="h-full px-3 py-7 overflow-y-auto shadow bg-purple-950 backdrop-filter backdrop-blur-xl bg-opacity-30"
            style="
        background: linear-gradient(rgba(81, 1, 92, 0), rgba(70, 1, 104, 0)),
                    url('/images/bg2trans.png') no-repeat bottom center;
        background-size: cover;
    ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/about"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-width="2" />
                            <line x1="12" y1="16" x2="12" y2="12" stroke-width="2"
                                stroke-linecap="round" />
                            <circle cx="12" cy="8" r="1" fill="currentColor" />
                        </svg>


                        <span class="flex-1 ms-3 whitespace-nowrap">About</span>

                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 ">
        <div class="p-4 mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                <a href="http://bisuclfis.test"
                    class="-z-0 backdrop-filter backdrop-blur-sm bg-opacity-30 bg-gray-800 flex flex-col items-center    rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-800 ">
                    <div class="w-full md:w-48 h-fit ">
                        <img class=" h-32 w-full object-cover rounded-t-lg md:rounded-none md:rounded-s-lg"
                            src="/images/find.jpg"
                            alt="Image">
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Lost & Found
                        </h5>
                        <p class="text-gray-300">A digital platform designed to help individuals report and recover lost or found items.</p>
                    </div>
                </a>



                <a href="http://bisuappregistrar.test"
                    class="-z-0 backdrop-filter backdrop-blur-sm bg-opacity-30 flex flex-col items-center  bg-gray-800 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-800">
                    <div class="w-full md:w-48 h-fit ">
                        <img class="h-32 w-full object-cover rounded-t-lg md:rounded-none md:rounded-s-lg"
                            src="/images/app.jpg"
                            alt="Image">
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Registrar Appointment
                        </h5>
                        <p class="text-gray-300">Web-based platform designed to streamline scheduling and managing appointments with the registrar's office.</p>

                    </div>
                </a>
                <a href="http://internship.test"
                    class="-z-0 backdrop-filter backdrop-blur-sm bg-opacity-30 flex flex-col items-center  bg-gray-800 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-800 ">
                    <div class="w-full md:w-48 h-fit ">
                        <img class="h-32 w-full object-cover rounded-t-lg md:rounded-none md:rounded-s-lg"
                            src="/images/mon.jpg"
                            alt="Image">
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Internship Monitoring
                        </h5>
                        <p class="text-gray-300">A digital platform designed to track and manage the progress of interns during their internship period.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <img src="/images/bg4.png" class="absolute bottom-0 object-cover h-full -z-20 opacity-50 " />
</body>

</html>
