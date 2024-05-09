@extends('components.layout')

@section('content')

    <section class="size-full flex justify-center mt-10">

        <div class="posts bg-gray-5000 w-2/5">

            @if(request()->has('search'))

            <!-- Start Search -->

                <div>

                    <h1 class="mb-4 font-semibold text-gray42" style="font-size: 3rem;">Results for <span class="text-black">{{request()->search}}</span></h1>

                    <!-- Start Words -->

                    <a href="" class="w-16" style="border-bottom: 1px solid rgb(36, 36, 36);">For You</a>

                    @foreach(['Stories','People','Publication','Topics','Lists'] as $item)

                        <a href="" class="text-gray42">{{$item}}</a>

                    @endforeach

                    <!-- End Words -->


                </div>

            <!-- End Search -->

            @else

            <!-- Topics -->

            <div class="flex item-center gap-6 border-b w-11/12 h-10 overflow-hidden relative">

                <!-- + -->

                <div class="">
                    <a href="">
                        <svg width="19" height="19" class="jn jo jp">
                            <path d="M9 9H3v1h6v6h1v-6h6V9h-6V3H9v6z" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

                <!-- Start Words -->

                <a href="" class="w-16" style="border-bottom: 1px solid rgb(36, 36, 36);">For You</a>

                @foreach(['Following','Music','Photography','Docker','Sports','Gaming','Language'] as $item)

                    <a href="" class="text-gray42">{{$item}}</a>

                @endforeach

                <!-- End Words -->

                <!-- Arrow -->

                <div class="absolute right-1">
                    <svg class="arrow-left-19px_svg__svgIcon-use" width="26px" height="26px" viewBox="0 0 19 19" aria-hidden="true" style="transform: rotate(180deg);">
                        <path d="M11.47 13.97L6.99 9.48 11.47 5l.55.5-3.99 3.98 4 4z" fill-rule="evenodd"></path>
                    </svg>
                </div>

            </div>
            
            <!-- End Topics -->
            
            @endif

            @foreach(['','','','','','','','','',''] as $item)

            <div class="post w-full p-4 border-b-2 border-inherit">

                <div class="w-full flex items-center gap-2 mb-2">

                    <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=tFx_GYNj_5sQ7kNvgGd-Ueo&_nc_ht=scontent.fcai22-2.fna&oh=00_AfDUDeUYHX6wggcfVZWIZKZm0IvTvgnLvYca2asI2kqMfA&oe=66414C2F" alt="">

                    <p>Username</p>

                    <p>Mar 1, 2024</p>

                </div>

                <a href="http://127.0.0.1:8000/post">
                    <div class="flex gap-20">
    
                        <div>
    
                            <h3 class="font-bold">What’s New in PHP Frameworks in 2024? — New Features and Trends</h3>
        
                            <p class="truncate" style="width: 400px;">The PHP programming language, a cornerstone in the realm of web development for over 25 years,
                             continues to meet the needs of developers worldwide. Far from just a language, PHP stands as a resilient and ever-adaptable force that has significantly
                              shaped the digital landscape for over two decades. While newer</p>
                            
                        </div>
    
                        <img src="https://miro.medium.com/v2/resize:fill:112:112/1*ksByC-RsTxdvD2ATi3WFHA.jpeg" alt="">
    
                    </div>
                </a>


                <div class="flex items-center justify-between mt-10 mb-5">

                    <div class="flex items-center gap-2">
    
                        <div class="bg-slate-100 rounded-full pt-1 pb-1 pr-2 pl-2">PHP</div>
    
                        <p>7 min read</p>
    
                    </div>
    
                    <div class="flex gap-5">
    
                        <p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="ks">
                                <path d="M17.5 1.25a.5.5 0 0 1 1 0v2.5H21a.5.5 0 0 1 0 1h-2.5v2.5a.5.5 0 0 1-1 0v-2.5H15a.5.5 0 0 1 0-1h2.5v-2.5zm-11 4.5a1 1 0 0 1 1-1H11a.5.5 0 0 0 0-1H7.5a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V5.75z" fill="#000"></path>
                            </svg>
                        </p>

                        <p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="ox oy">
                                <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </p>

                        <p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z" fill="currentColor"></path>
                            </svg>
                        </p>
    
                    </div>
                
                </div>

            </div>

            @endforeach

        </div>

        <div class="sidebar w-2/12 h-100 border-l border-inherit ml-20">

            <div class="mb-4">
                
                <h4 class="ml-10 font-bold">Staff Picks</h4>

                @foreach(['','',''] as $item)

                <div class="ml-8 mt-4">

                    <div class="flex items-center gap-4">
    
                        <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&_nc_ohc=a_-j6JTj5McAb6zE8rE&_nc_ht=scontent.fcai22-2.fna&oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&oe=661F052F" alt="">
    
                        <p>mohammed santa</p>
    
                    </div>

                    <h3 class="mt-2 font-bold">I Asked Generative AI Music Platform Suno to Write a Podcast Theme…Things Got Weird</h3>

                </div>

                @endforeach

            </div>

            <a href="" class="ml-8 mt-4 text-green-500 hover:text-black">see the all list</a>

            <div class="bg-blue-200 p-4 ml-8 rounded mt-4 relative">

                <svg width="19" height="19" viewBox="0 0 19 19" class="absolute top-3 right-3">
                    <path d="M13.8 4.6L9.5 8.89 5.21 4.6l-.61.61 4.29 4.3-4.29 4.28.61.62 4.3-4.3 4.28 4.3.62-.62-4.3-4.29 4.3-4.29" fill-rule="evenodd"></path>
                </svg>

                <h3 class="font-bold mb-4">Writing on Medium</h3>

                <div class="text-lg mb-4">

                    <p>New writer FAQ</p>
                    <p>Expert writing advice</p>
                    <p>Grow your readership</p>

                </div>

                <div class="p-1.5 bg-black text-white rounded-full mb-4 w-fit">
                    <a href="" class="">start writing</a>
                </div>


            </div>

            <div class="ml-8 mt-10">

                <h3 class="font-bold mb-4">Recommended topics</h3>

                <div class="flex flex-wrap gap-4 mb-4">

                    @foreach(['Nodejs','Artificial Intelligence','Productivity','Culture','Java','Angular','IOS'] as $item)
                    <div class="w-fit p-2 rounded-full" style="background-color: #F2F2F2;">{{$item}}</div>
                    @endforeach

                </div>

                <a href="" class="text-green-500 hover:text-black">see more topic</a>


            </div>

            <div class="ml-8 mt-4">

                <h3 class="mb-4 font-bold">Who to follow</h3>
            
                @foreach(['','',''] as $item)

                <div class="flex items-center gap-4 mb-8">

                    <div class="self-start">
                        <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&_nc_ohc=a_-j6JTj5McAb6zE8rE&_nc_ht=scontent.fcai22-2.fna&oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&oe=661F052F" alt="">
                    </div>

                    <div>

                        <h4 class="font-bold">Username</h4>
                        <p class="w-40 text-sm truncate" style="color: #6B6B6B;">about hi my name is mohamed samy i'm a web developer</p>

                    </div>

                    <button class="border p-2 rounded-full border-black">Follow</button>

                </div>

                @endforeach

                <a href="" class="mt-4 text-green-500 hover:text-black">see more suggestions</a>

            </div>

        </div>

    </section>

@endsection