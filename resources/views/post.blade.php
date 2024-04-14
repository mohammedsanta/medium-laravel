@extends('components.layout')

@section('content')

    <section class=" ">

        <!-- top -->

        <div class="w-2/5 m-auto flex flex-col">

            <p class="text-5xl font-bold mt-10">looking for progress is looking for a place to stop</p>
    
            <div class="flex items-center gap-4 mt-10">
    
                <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&_nc_ohc=a_-j6JTj5McAb6zE8rE&_nc_ht=scontent.fcai22-2.fna&oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&oe=661F052F" alt="">
    
                <div class="flex flex-col">
    
                    <div class="flex gap-2">
        
                        <p>mohammed santa</p>
        
                        <p>.</p>
        
                        <p>Following</p>
        
                    </div>
        
                    <div class="flex gap-2">
        
                        <p>2 min read</p>
        
                        <p>.</p>
        
                        <p>Mar 22, 2024</p>
        
                    </div>
    
                </div>
    
    
            </div>
    
            <div class="my-4">
    
                @include('components.actions-with-border')
    
            </div>
    
            <div>
    
                <p class="font-medium font-semibold mt-8">I read this the other day, and I have been thinking about it ever since.
        
                    Initially I thought.. of course I look at my progress whether it is a skill,
                     knowledge or hobby and I want to improve it and get better so I can reach a specific goal in mind whether to land a job or get a better living.
        
                    But then I thought about it little more and I realized that it is one of the main sources of anxiety. Because that very looking for progress leads to comparing my skill to some other reference point be it another person or some unknown future.
                     Moreover when I get there it is often met with a temporary happiness followed by slight disappointment, oh is this what I was working for? I expected more or something different. (For reference one of my favorite episodes in original 1996 Rurouni Kenshin 
                     (るろうに剣心) titled The Legend of the fireflies, speaks exactly to this point)
        
                    You see “that” looking for progress is the search for a stopping point. “Am I there yet” is the implicit question if you will. Once I get there the goal post is often moved, and the chase continues.
                     And I am just not sure this is the point to be honest. Because this looking for progress takes me out of what am trying to do in the first place.
        
                    Don’t get me wrong, I don’t believe the “journey” or the “process” is the reward either because that is just looking into something else other than the thing you do.
        
                    Is it possible to be lost in doing something without looking for progress?
        
                    I know it is, I recall one of my joyous moments when I was young is when I was solving aljebra problems and learning complex Arabic grammar ( نحو) being lost in the thing.
                     Not competing for a prize, not thinking how important what am doing is, or silly or relevant. But simply doing it for its sake because there was something inside me that wanted to approach it
                     . Allowing mistakes or not even allowing it but enjoying the mistakes as part of the doing. Like a blooming flower missing some of its petals.
                </p>
    
            </div>
    
            <!-- Tags of story -->
    
            <div class="mt-10 flex gap-3">
    
                @foreach(['Operating Systems','Computer Architecture'] as $item)
            
                <div class="w-fit bg-gray-100 py-2 px-4 rounded-full">{{ $item }}</div>
    
                @endforeach
    
            </div>
    
            <!-- Actions -->
    
            <div class="mt-10 mb-20">
    
                @include('components.actions')
    
            </div>

        </div>

        <!-- end topp -->


        <!--  -->

        <div class="w-full bg-gray-100">

            <div class="w-2/5 m-auto flex flex-col">

                <!-- About author -->

                <div class="mt-20 border-b border-slate-400 pb-4 mb-10">

                    <div>
                        <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&amp;_nc_ohc=a_-j6JTj5McAb6zE8rE&amp;_nc_ht=scontent.fcai22-2.fna&amp;oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&amp;oe=661F052F" alt="">
                    </div>
    
                    <div>
                        
                        <div class="flex justify-between">

                            <h3 class="font-semibold my-4">Write by mohammed santa</h3>
    
                            <div class="flex items-center gap-2">

                                <button class="py-1.5 px-2.5 border border-green-500 rounded-full text-green-500">Following</button>
        
                                <button class="py-1.5 px-2.5 border border-green-500 rounded-full text-white bg-green-500" style="border-radius: 100%;width: 60px;height: 50px;">Email</button>
        
                                <button class="p-2 border border-green-500 rounded-full bg-green-500">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" class="aid aie"><mask id="tip-icon_svg__a" fill="#fff">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.58 6.68c-.36-.39-.58-.9-.58-1.47A2.25 2.25 0 0 1 12.29 3c.68 0 1.3.29 1.71.75A2.31 2.31 0 0 1 15.71 3C16.98 3 18 3.99 18 5.21c0 .57-.22 1.08-.58 1.47l-.18.19-2.54 2.46a1 1 0 0 1-1.4 0l-2.54-2.46-.18-.19z"></path></mask><path d="M10.58 6.68l-.73.68v.01l.02.01.71-.7zM14 3.75l-.74.67.74.81.74-.8-.74-.68zm3.42 2.93l.71.7h.01l.01-.02-.73-.68zm-.18.19l.7.72v-.01l.01-.01-.71-.7zm-6.48 0l-.71.7.02.02.7-.72zm.56-.87c-.2-.21-.32-.49-.32-.79H9c0 .83.32 1.59.85 2.15L11.32 6zM11 5.21c0-.64.54-1.21 1.29-1.21V2A3.25 3.25 0 0 0 9 5.21h2zM12.29 4c.4 0 .74.17.97.42l1.48-1.35A3.31 3.31 0 0 0 12.29 2v2zm2.45.42c.23-.25.58-.42.97-.42V2c-.97 0-1.84.41-2.45 1.07l1.48 1.35zM15.7 4c.75 0 1.29.57 1.29 1.21h2C19 3.41 17.5 2 15.71 2v2zM17 5.21c0 .3-.12.58-.32.8l1.47 1.35c.53-.56.85-1.32.85-2.15h-2zm.95 2.36l.18-.19-1.43-1.4-.18.19 1.43 1.4zm-2.56 2.48l2.54-2.46-1.39-1.44L14 8.61l1.39 1.44zm-5.32-2.46l2.54 2.46L14 8.6l-2.54-2.46-1.4 1.44zm-.2-.2l.18.18 1.43-1.4-.18-.18-1.43 1.4zM14 8.6l-1.39 1.44a2 2 0 0 0 2.78 0L14 8.6z" fill="#242424" mask="url(#tip-icon_svg__a)"></path><path d="M21.4 10.33l-.34.36.35-.36zm-9.63 6.45l-.35-.35.35.35zm9.54-4.81l.37.34-.37-.34zm-1.44-1.67l-.3-.4.3.4zm-1.89 5.25l-.37-.34.37.34zM6.73 14.4l2.1-1.9-.68-.74-2.1 1.9.68.74zm10.96-1.82l2.48-1.87-.6-.8-2.48 1.87.6.8zm2.85-2.07c.16-.01.34.02.52.19l.7-.7c-.44-.45-.95-.51-1.3-.48l.08 1zm.52.19c.14.14.18.29.18.42l1-.04a1.6 1.6 0 0 0-.48-1.09l-.7.7zm-.12.94l-3.33 3.58.74.69 3.33-3.6-.74-.67zm-4.42 4.06h-.01-.01-.01-.03-.01-.01-.04-.03-.01-.04-.02-.01-.02-.01-.01-.03-.04-.01-.02-.01-.02-.01-.04-.01-.04H16h-.04-.01-.01-.01-.04-.02-.01-.01-.01-.08-.02-.02-.02-.01-.01-.01-.01-.01-.01-.02-.02-.02-.02-.02-.02-.07-.01-.01-.01-.01-.02-.02-.05-.01-.01-.02-.05-.01-.01-.02-.05-.01-.01-.02-.03-.01-.01-.02-.05-.02-.05-.02-.03-.01-.01-.02-.03-.01-.01-.02-.03-.01-.01-.02-.03-.01-.01-.02-.03-.01-.01-.02-.05-.02-.05-.01-.01-.02-.05-.01-.01-.02-.02-.05-.01-.01-.01-.01-.02-.02-.02-.15-.01-.01-.01-.1-.02-.02-.01-.01-.01H13.71h-.01-.01-.01-.04-.01-.01-.01-.02-.01-.01-.01-.02-.01-.04-.01-.02-.01-.02-.01-.02-.01-.02-.01-.04-.02-.01-.01-.02-.01-.01-.02-.01-.01-.02v1H16.52v-1zm-5.1.74l-.85.85-.24.24-.06.06-.02.01v.01l.35.35.35.36.02-.02.07-.07.24-.24.85-.85-.71-.7zm-.92-4.6H11.6v-1h-.01-.01-.01-.05-.01-.01-.01-.01-.03-.01-.01-.03-.01-.02-.01-.02-.01-.02-.01-.02-.02-.02-.01-.01-.01-.01-.02-.02-.02-.01-.02-.01-.02-.01-.02-.01-.01H11 11h-.03-.01-.01-.01-.03-.01-.01-.01-.01-.01-.05-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.07-.01-.01-.01-.01-.01-.01-.01-.01-.02v1zm2.69 3.86c-.67 0-1.3.27-1.77.74l.7.7a1.5 1.5 0 0 1 1.07-.44v-1zm8.05-4.58c0 .12-.07.27-.3.52l.74.68c.23-.26.58-.68.56-1.24l-1 .04zm-1.07-.41c.18-.14.29-.19.37-.2l-.08-1c-.4.04-.7.25-.9.4l.6.8zM17.6 15.2c-.28.31-.68.48-1.1.48v1c.7 0 1.36-.29 1.84-.8l-.74-.68zM8.82 12.5a2.5 2.5 0 0 1 1.68-.66v-1a3.5 3.5 0 0 0-2.35.92l.67.74z" fill="#242424"></path><path d="M10.85 10.84a.5.5 0 1 0 0 1v-1zm2.01 2.51a.5.5 0 1 0 0 1v-1zm-2-1.5h5.27v-1h-5.28v1zm5.27 1.5h-3.27v1h3.27v-1zm.76-.75c0 .42-.34.75-.76.75v1c.97 0 1.76-.78 1.76-1.75h-1zm-.76-.76c.42 0 .76.34.76.76h1c0-.97-.79-1.76-1.76-1.76v1z" fill="#242424"></path>
                                    <rect x="2.71" y="15.84" width="3.52" height="8.72" rx="0.5" transform="rotate(-49.02 2.7 15.84)" stroke="#242424"></rect></svg>
                                </button>    

                            </div>

                        </div>
    
                        <div>
                            <p class="text-sm">21K Followers</p>
                        </div>
    
                        <!-- About -->
    
                        <div class="text-sm mt-4">Software Engineer passionate about Backend Engineering, Get my backend course https://backend.win</div>
    
                    </div>

                </div>

                <!-- More stories -->

                <div clss="w-full mt-20">

                    <h3 class="font-bold mb-6">More from mohammed santa</h3>

                    <div class="w-full flex flex-wrap justify-between mb-10 pb-6 border-b">

                        @foreach(['','','',''] as $item)
    

                        <div class="w-2/5 flex flex-col">

                            <img src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*l9R7GvxuyXWpM7qpxuhPIw@2x.jpeg" alt="">

                            <div class="flex gap-3 my-4">

                                <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&amp;_nc_ohc=a_-j6JTj5McAb6zE8rE&amp;_nc_ht=scontent.fcai22-2.fna&amp;oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&amp;oe=661F052F" alt="">
        
                                <p>mohammed santa</p>

                            </div>

                            <h3 class="font-bold">Memory Fragmentation</h3>

                            <p class="text-sm text-slate-400">Does it affect performance?</p>

                            <div class="flex gap-2 text-sm text-slate-400 my-4">

                                <p>12 min read</p>

                                <p>.</p>

                                <p>jan14, 2023</p>

                            </div>

                            @include('components.actions-small')

                        </div>
    
    
                        @endforeach

                    </div>

                    <button class="border border-black text-sm rounded-full p-2 mb-4">See all from mohammed santa</button>

                </div>
    
            </div>

            <!-- Recommented from medium -->

            <div class="mt-20 w-2/5 m-auto">

                <h3 class="font-bold mb-6">Recommented from medium</h3>

                <div class="">
    
                    <div class="w-full flex flex-wrap justify-between mb-10 pb-6 border-b">
    
                        @foreach(['',''] as $item)
    
    
                        <div class="w-2/5 flex flex-col">
    
                            <img src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*l9R7GvxuyXWpM7qpxuhPIw@2x.jpeg" alt="">
    
                            <div class="flex gap-3 my-4">
    
                                <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&amp;_nc_ohc=a_-j6JTj5McAb6zE8rE&amp;_nc_ht=scontent.fcai22-2.fna&amp;oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&amp;oe=661F052F" alt="">
    
                                <p>mohammed santa</p>
    
                            </div>
    
                            <h3 class="font-bold">Memory Fragmentation</h3>
    
                            <p class="text-sm text-slate-400">Does it affect performance?</p>
    
                            <div class="flex gap-2 text-sm text-slate-400 my-4">
    
                                <p>12 min read</p>
    
                                <p>.</p>
    
                                <p>jan14, 2023</p>
    
                            </div>
    
                            @include('components.actions-small')
    
                        </div>
    
    
                        @endforeach
    
                    </div>

                </div>

                <p class="font-bold">Lists</p>

                <div class="flex justify-between gap-8 flex-wrap mt-4 border-b pb-8">

                    @foreach(['','','',''] as $item)

                    <div class="w-2/5 flex gap-12">

                        <div class="relative">
                            <img class="absolute border-r-4 border-white z-20" src="https://miro.medium.com/v2/da:true/resize:fill:48:48/0*VnPTfBIeAtcSaKcB" alt="">
                            <img class="absolute left-4 border-r-4 border-white z-10" src="https://miro.medium.com/v2/resize:fill:48:48/1*N4d7W5s6xV9lkFYYlHoyhg.png" alt="">
                            <img class="relative left-8 border-r-4 border-white" src="https://miro.medium.com/v2/resize:fill:48:48/1*IMqgyfoCmzzxh8ptYXDYrA.jpeg" alt="">
                        </div>

                        <div>

                            <div>

                                <h3>Staff Picks</h3>

                                <div>

                                    <p>621 stories . 891 saves</p>

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

                <!-- stories -->

                <div class="">
    
                    <div class="w-full flex flex-wrap justify-between my-10 pb-6 border-b">

                        @foreach(['','','',''] as $item)


                        <div class="w-2/5 flex flex-col">

                            <img src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*l9R7GvxuyXWpM7qpxuhPIw@2x.jpeg" alt="">

                            <div class="flex gap-3 my-4">

                                <img class="w-8 h-8 rounded-full" src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/344770515_577976204314118_2783696838824807599_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_eui2=AeHpFExMlDqM7xtXaRj3a4Kmne32TYCw_Wyd7fZNgLD9bFQ-ymfcSAx1hw7CN9qYRjw6BLE0HpUiFYzYYKcb0qcp&amp;_nc_ohc=a_-j6JTj5McAb6zE8rE&amp;_nc_ht=scontent.fcai22-2.fna&amp;oh=00_AfCaHjxTTZdh_5FEMyfkzRsidtk1kc08YoqEwlY9nB66kg&amp;oe=661F052F" alt="">

                                <p>mohammed santa</p>

                            </div>

                            <h3 class="font-bold">Memory Fragmentation</h3>

                            <p class="text-sm text-slate-400">Does it affect performance?</p>

                            <div class="flex gap-2 text-sm text-slate-400 my-4">

                                <p>12 min read</p>

                                <p>.</p>

                                <p>jan14, 2023</p>

                            </div>

                            @include('components.actions-small')

                        </div>


                        @endforeach

                    </div>

                </div>

                <button class="border border-black text-sm rounded-full p-2 mb-10">See more recommendation</button>

            </div>

            <!-- Footer -->

            <div class="flex border-t py-4">

                <div class="w-2/5 m-auto flex gap-2 text-sm">

                    <a href="">Help</a>
                    <a href="">Status</a>
                    <a href="">About</a>
                    <a href="">Careers</a>
                    <a href="">Blog</a>
                    <a href="">Privacy</a>
                    <a href="">Term</a>
                    <a href="">Text to speech</a>
                    <a href="">Teams</a>

                </div>

            </div>

        </div>


    </section>

@endsection