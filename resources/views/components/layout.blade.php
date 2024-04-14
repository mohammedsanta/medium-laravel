<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <header class="h-16 flex justify-between items-center">

        <div class="flex justify-between items-center">

            <div class="mr-4 ml-4">
                <svg viewBox="0 0 1043.63 592.71" class="w-10"><g data-name="Layer 2"><g data-name="Layer 1">
                    <path d="M588.67 296.36c0 163.67-131.78 296.35-294.33 296.35S0 460 0 296.36 131.78 0 294.34 0s294.33 132.69 294.33 296.36M911.56 296.36c0 154.06-65.89 279-147.17 279s-147.17-124.94-147.17-279 65.88-279 147.16-279 147.17 124.9 147.17 279M1043.63 296.36c0 138-23.17 249.94-51.76 249.94s-51.75-111.91-51.75-249.94 23.17-249.94 51.75-249.94 51.76 111.9 51.76 249.94"></path></g></g>
                </svg>
            </div>

            <div class="w-50 h-10 flex items-center outline-none border-solid border-2 bg-stone-100	rounded-full">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="ml-2">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.1 11.06a6.95 6.95 0 1 1 13.9 0 6.95 6.95 0 0 1-13.9 0zm6.94-8.05a8.05 8.05 0 1 0 5.13 14.26l3.75 3.75a.56.56 0 1 0 .8-.79l-3.74-3.73A8.05 8.05 0 0 0 11.04 3v.01z" fill="currentColor"></path>
                </svg>

                <input type="search" name="" class="w-48 bg-transparent focus:outline-none ml-1">

            </div>

        </div>

        <div class="flex items-center">

            <div class="flex gap-10 mr-6">

                <!-- Write a Story -->

                <a href="" class="flex items-center gap-3 text-gray42 hover:text-black">

                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Write">
                            <path d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z" fill="currentColor"></path><path d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.1-.1.26-.1.36 0l1.64 1.64c.1.1.1.26 0 .36L19.5 6.5m-2-2l2 2" stroke="currentColor"></path>
                        </svg>
                    </div>
    
                    <p>Wright</p>

                </a>

                <!-- notifcation -->
                
                <div class="flex items-center text-gray42 hover:text-black">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Notifications">
                        <path d="M15 18.5a3 3 0 1 1-6 0" stroke="currentColor" stroke-linecap="round"></path><path d="M5.5 10.53V9a6.5 6.5 0 0 1 13 0v1.53c0 1.42.56 2.78 1.57 3.79l.03.03c.26.26.4.6.4.97v2.93c0 .14-.11.25-.25.25H3.75a.25.25 0 0 1-.25-.25v-2.93c0-.37.14-.71.4-.97l.03-.03c1-1 1.57-2.37 1.57-3.79z" stroke="currentColor" stroke-linejoin="round"></path>
                    </svg>

                </div>

                <!-- Profile Logo -->

                <div class="relative overflow-hidden border rounded-full">
                    <div class="hover:bg-gray1 w-full h-full absolute"></div>
                    <img alt="Mohammed Samy" class="" src="https://miro.medium.com/v2/resize:fill:32:32/1*dmbNkD5D-u45r44go_cf0g.png" width="32" height="32" loading="lazy">
                </div>



            </div>

        </div>

    </header>

    <p class="h-10 flex items-center justify-center gap-2 bg-gray-100 text-sm">
        
        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" role="presentation" aria-hidden="true" focusable="false" class="w-4">
            <path d="M39.64 40.83L33.87 56.7a1.99 1.99 0 0 1-3.74 0l-5.77-15.87a2.02 2.02 0 0 0-1.2-1.2L7.3 33.88a1.99 1.99 0 0 1 0-3.74l15.87-5.77a2.02 2.02 0 0 0 1.2-1.2L30.12 7.3a1.99 1.99 0 0 1 3.74 0l5.77 15.87a2.02 2.02 0 0 0 1.2 1.2l15.86 5.76a1.99 1.99 0 0 1 0 3.74l-15.87 5.77a2.02 2.02 0 0 0-1.2 1.2z" fill="#FFC017"></path>
        </svg>

        Get unlimited access to the best of Medium for less than $1/week. <a class="underline" href="">Become a member</a>
    
    </p>
    

    <div class="main">
        @yield('content')
    </div>

</body>
</html>