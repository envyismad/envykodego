@extends('layout')

@section('content')

{{-- cards --}}
<section class="mx-auto mt-0 px-4 pb-10 pt-4" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);" id='features'>

    <div class='my-4 md:px-14 px-4 max-w-screen-2xl mx-auto' id='features'>

        <div class="md:px-14 mt-8 p-4 max-w-s mx-auto py-10 text-purple-900" id="">
            <div class="text-left">
                <h2 class="md:text-4xl tracking-tight font-extrabold leading-tight mb-4">Upcoming events...</h2>

           
    
            </div>
        </div>

            <div class="grid grid-cols-1 gap-12 lg:gap-24 lg:grid-cols-2">
          
              <div class="sm:flex lg:items-start group">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                  <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover" src="{{ url('images/babyshower.jpg') }}" alt="text">
                </div>
                <div>
                  <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./events.html" class="text-xl text-gray-800 hover:text-white">A Spectacular Celebration: Hilton Family is having a baby shower!</a>
                  </p>
                  <p class="mt-2 text leading-normal text-purple-900">Join us for the Hilton Family's joyous baby shower, an enchanting affair filled with love and laughter, expertly curated by our dedicated team.</p>
                </div>
              </div>
          
              <div class="sm:flex lg:items-start group">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                  <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover" src="{{ url('images/wedding.jpg') }}" alt="text">
                </div>
                <div>
                  <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./events.html" class="text-xl text-gray-800 hover:text-white">Elegant Unison: Eugene and Lance's Exquisite Wedding Celebration!</a>
                  </p>
                  <p class="mt-2 text leading-normal text-purple-900">Join us as we celebrate the radiant love between Eugene and Lance. Be part of this enchanting union, meticulously planned by our team to create cherished memories that will last a lifetime.</p>
                </div>
              </div>
          
              <div class="sm:flex lg:items-start group">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                  <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover" src="{{ url('images/reunion.jpg') }}" alt="text">
                </div>
                <div>
                  <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./events.html" class="text-xl text-gray-800 hover:text-white">Embracing Roots: Bienne's Family Reunion Extravaganza!</a>
                  </p>
                  <p class="mt-2 text leading-normal text-purple-900">Be part of the heartwarming gathering as the Bienne family comes together for an unforgettable reunion. Join us in commemorating cherished family traditions and creating new memories to be treasured for generations to come.</p>
                </div>
              </div>
          
              <div class="sm:flex lg:items-start group">
                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                  <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover" src="{{ url('images/teampic.jpg') }}" alt="text">
                </div>
                <div>
                  <p class="mt-3 text-lg font-medium leading-6">
                    <a href="./events.html" class="text-xl text-gray-800 hover:text-white">See More Special Gatherings...</a>
                  </p>
                  <p class="mt-2 text leading-normal text-purple-900">Discover the breadth of our expertise as we host an array of events beyond imagination. From intimate gatherings to grand celebrations, we bring every occasion to life with passion and finesse.</p>
                </div>
              </div>
          
            </div>
        
      
    </div>

  </section>





{{-- Gallery --}}
<section class="mt-0 bg-gray-50 px-4 pb-32 pt-4">
  <div>
        <div class='grid md:grid-cols-2 items-start md:gap-4'>

            <div class='max-w-7xl mx-auto py-16 px-4 grid lg:grid-cols-1 gap-2'>
                <div class='grid grid-cols-2 grid-rows-6 h-[80vh]'>
                    <img class='row-span-2 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic1.jpg') }}" alt="/" />
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic2.jpg') }}" alt="/" />
                    <img class='row-span-3 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic3.jpg') }}" alt="/" />
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic4.jpg') }}" alt="/" />
                    <img class='row-span-2 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic5.jpg') }}" alt="/" />
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic6.jpg') }}" alt="/" />
                </div>
            </div>


            <div class='max-w-7xl mx-auto py-16 px-4 grid lg:grid-cols-1 gap-2'>
                <div class='grid grid-cols-2 grid-rows-6 h-[80vh]'>
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic7.jpg') }}" alt="/" />
                    <img class='row-span-2 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic8.jpg') }}" alt="/" />
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic9.jpg') }}" alt="/" />
                    <img class='row-span-3 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic10.jpg') }}" alt="/" />
                    <img class='row-span-2 object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic11.jpg') }}" alt="/" />
                    <img class='object-cover w-full h-full p-2 hover:scale-75 ease-in duration-500' src="{{ url('images/eventpic12.jpg') }}" alt="/" />
                </div>
            </div>

        </div>
    </div>



    <div class="md:px-14 mt-16 p-4 max-w-s mx-auto py-10 text-purple-900" id="">
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
    </div>
</section>

    
    

    
    
    @endsection

