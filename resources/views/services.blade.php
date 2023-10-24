@extends('layout')

@section('content')


<section class="bg-white text-purple-900">
    <div class="flex flex-col items-center px-5 py-8 mx-auto">
        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="order-last w-full max-w-screen-sm m-auto mt-12 lg:w-1/4 lg:order-first">
                <div class="p-4 transition duration-500 ease-in-out transform bg-white border rounded-lg">
                    <div class="relative h-64">
                        <img
                            alt="Event"
                            src="{{ url('images/familypic.jpg') }}"
                            class="h-full w-full object-cover"
                        />
                    </div>
                </div>
            </div>
            

            <div class="flex flex-col w-full mb-8 prose text-left max-w-max lg:max-w-2xl">
                <div class="w-full mx-auto">
                    <h1 class="text-3xl mt-10 font-bold">EXPECT EXCEPTIONAL SERVICES.</h1>
                    <h2 class="text-xl mt-2 font-semibold">Planning an event but no idea where to start?</h2>
                    <p class="text-lg mt-2 text-purple-900">We approach every occasion with a meticulous and comprehensive process. We begin by meticulously planning each detail, working closely with our clients to understand their vision and preferences. Our team of experienced professionals then delves into designing innovative concepts that bring these ideas to life, creating captivating experiences tailored to each client's unique style.<br> <br>Finally, our skilled execution ensures that every aspect, from decor to entertainment, is flawlessly orchestrated, allowing our clients to relax and enjoy their special day while we handle the rest. With our unwavering commitment to excellence, we transform events into unforgettable experiences that leave a lasting impression.</p>
                </div>
            </div>
        </div>


        <div class="items-center w-full px-5">
            <div class="flex flex-wrap justify-center w-full mx-auto prose max-w-max lg:max-w-3xl">
                <div class="relative justify-center lg:px-4">
                    <div class="lg:grid lg:grid-cols-2">
                        <div class="p-8">
                            <h1 class="text-xl mb-4 font-bold">Plan it with us!</h1>
                            <p class="text-base text-purple-900">Create a memorable experience in a memorable space, and enjoy! We take pride in offering top-notch consultation services to ensure the best possible outcomes for your event</p>
                            
                        </div>
                        <div class="p-8">
                            <h1 class="text-xl mb-4 font-bold">Book it with ease.</h1>
                            <p class="text-base purple-900">Once you find a perfect match, book the space and pay online through our easy-to-use payment system.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="mx-auto mt-0 px-4 pb-10 pt-4" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);" id='features'>

    <div class='my-4 md:px-14 px-4 max-w-screen-2xl mx-auto' id='features'>

        <div class="flex flex-col items-center px-5 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col w-full max-w-3xl mx-auto prose text-left prose-blue">

                <div class="md:px-14 mt-0 p-4 max-w-s mx-auto py-10 text-purple-900" id="">
                    <div class="text-center">
                        <h2 class="md:text-4xl tracking-tight font-extrabold leading-tight mb-4">Our Services</h2>
            
                        <p class="md:text-xl font-light mb-12">We have you covered. We are partners with local vendors to create fun, unique and innovative events tailored just for you or your organization. We have a variety of event planning experience; including weddings, social, corporate and non-profit events.</p> 
                        
                    </div>
                </div>
    
                <div class="flex flex-wrap text-center justify-start flex-grow mt-8 md:mt-0">
    
                    <div class="w-full md:w-1/2 lg:w-1/4">
                        <p class="text-lg text-purple-900 mb-4 font-semibold">Corporate Events</p>
                        <nav class="mb-10 list-none">
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Product Launches</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Conferences</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Trade Shows</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Team Building Workshops</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">And more!</a>
                            </li>
                        </nav>
                    </div>
    
                    <div class="w-full md:w-1/2 lg:w-1/4">
                        <p class="text-lg text-purple-900 mb-4 font-semibold">Non-Profits Events</p>
                        <nav class="mb-10 list-none">
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Award Dinners</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Fairs, Festivals & Expos</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Walks & Runs</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Unique Fundraisers</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">And more!</a>
                            </li>
                        </nav>
                    </div>
    
                    <div class="w-full md:w-1/2 lg:w-1/4">
                        <p class="text-lg text-purple-900 mb-4 font-semibold">Social Events</p>
                        <nav class="mb-10 list-none">
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Birthday Parties</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Anniversary Parties</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Baby Showers!</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Christening</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">And more!</a>
                            </li>
                        </nav>
                    </div>
    
                    <div class="w-full md:w-1/2 lg:w-1/4">
                        <p class="text-lg text-purple-900 mb-4 font-semibold">Weddings</p>
                        <nav class="mb-10 list-none">
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Ceremonies</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Bridal Showers</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Engagement Parties</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">Bachelor/ Bachelorette Parties</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-normal text-white hover:text-purple-900">And more!</a>
                            </li>
                        </nav>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

</section>


<section>
    <div class="md:px-14 mt-32 p-4 max-w-s mx-auto py-10 text-purple-900" id="">
        <div class="text-center">
            <h2 class="md:text-4xl tracking-tight font-extrabold leading-tight mb-4">Sign-up to our newsletter!</h2>

            <p class="md:text-xl font-light mb-12">We take pride in offering top-notch consultation services to ensure the best possible outcomes for your event</p>


            <div class="overflow-hidden opacity-100 transition">
                <div class="flex justify-center">
                <form class="w-full lg:w-3/5" action="">
                    <div class="relative mb-5 lg:mb-0 flex items-center justify-center">
                        <div class="absolute left-5">
                            <svg class="w-8 h-8" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1848 2H3.8152C2.85301 2 2.07594 2.77707 2.07594 3.73925L2 16.2607C2 17.2229 2.85301 18 3.8152 18H16.1848C17.1469 18 18 17.2229 18 16.2607V3.73925C18 2.77707 17.1469 2 16.1848 2ZM16.1848 4L10 8.26051L3.8152 4H16.1848ZM16.1848 16H3.8152C3.07454 16 2.4705 15.396 2.4705 14.6554V7.3175L10 11.739L17.5295 7.3175V14.6554C17.5295 15.396 16.9255 16 16.1848 16Z" fill="#000"/>
                            
                            </svg>
                        </div>
                        <input type="email" placeholder="Your email address" class="rounded-lg border-2 border-solid border-grey bg-grey-9 p-5 pl-14 placeholder-text-grey text-black outline-none focus:border-black w-full duration-300" required fdprocessedid="vgoovq">
                    </div>
                </form>
                </div>

                <p class="text-center text-xs text-purple-900">By submitting this form you agree that we store and use your email in order to send you our newsletters.</p>
            </div>
          
          <div class="flex justify-center mt-8">
            <a href="/hey.ggene@gmail.com" class="focus:shadow-outline rounded-lg bg-transparent border border-gray-900 px-5 py-2.5 mr-2 mb-2 text-md font-semibold text-gray-900 hover:bg-purple-200 hover:text-gray-900 focus:bg-gray-400 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4">Subscribe now!</a>
          </div>
          


          <div class="mt-8 mb-8">
              <img src="{{ url('images/design.png') }}" alt="" class="w-60 h-auto mx-auto rounded"/>

        </div>
         

    </div>
</section>


@endsection