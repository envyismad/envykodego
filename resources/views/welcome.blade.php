@extends('layout')

@section('content')

{{-- hero --}}
      <section class="mx-auto mt-0 px-4 pb-32 pt-32" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);" id='hero'>

        <div class='md:px-14 md:py-2 max-w-screen-2xl mx-auto flex flex-col md:flex-row-reverse justify-between items-center gap-8'>

          <div>
            <img src="{{ url('images/forhero.jpg') }}" alt="hero" class="lg:h-200 lg:w-200 rounded-2xl transition duration-500 ease-in-out transform hover:scale-125" style="border-bottom-right-radius: 9rem; border-top-left-radius: 5rem;" />


          </div>

          <div class='md:w-3/5'>
          <h2 class="md:text-6xl font-bold text-white mb-6 leading-relaxed" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)">Plan it with...<br>XYZ Event Management</h2>

            <p class='max-w-[600px] drop-shadow-2xl py-2 text-2xl text-[white] font-semibold'>Your ultimate destination for seamless event planning and unforgettable occasions. From weddings to birthday celebrationsnad etc. Let us take the reins while you enjoy every moment of your special day.</p>
            
            <div class="mt-4 space-x-5 space-y-4">
              <a href="/aboutus" class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded">Learn More...</a>
            </div>
          
          
          </div>

      </div>

      </section>

{{-- About --}}
    <section class="mt-0 bg-gray-100 px-4 pb-32 pt-4" id='about'>
        <div class="container mx-auto">
            <div class="mt-32 flex flex-wrap items-center">
    
                <div class="mx-auto mt-24 flex w-full justify-center px-4 md:w-4/12 lg:mt-0">
                    <div class="shadow-lg bg-blue-gray-100 rounded-xl rounded-br-80" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E); width: 80%; max-width: 400px;">
                        <div class="relative h-64">
                            <img
                                alt="Event"
                                src="{{ asset('images/aboutpic.jpg') }}"
                                class="h-full w-full object-cover"
                            />
                        </div>
                        <div class="p-4 text-white">
                            <h5 class="mb-3 font-bold text-blue-gray text-xl text-center">Event Categories</h5>
                            <ul class="list-none pl-5 flex flex-col items-center">
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    Birthdays
                                </li>
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    Christenings
                                </li>
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    Anniversaries
                                </li>
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    Pre-Nup
                                </li>
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    Weddings
                                </li>
                                <li class="mb-2 font-semibold text-blue-gray flex items-center">
                                    <img src="{{ asset('images/bullets.png') }}" alt="" class="w-4 h-4 mr-2" />
                                    And More...
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
    
                <div class="mx-auto mt-8 w-full px-4 md:w-5/12">
    
                    <h3 class="mb-4 text-4xl tracking-tight font-extrabold text-purple-900 lg:w-1/2">About Us...</h3>
                    <p class="mb-8 text-xl text-purple-900">
                        At XYZ Event Management, We understand the importance of every milestone in your life, and we're here to transform your vision into reality. With our comprehensive suite of services and expert event planners, we aim to make your special moments truly extraordinary. From elegant weddings to jubilant birthday celebrations, we are committed to crafting experiences that reflect your unique style and preferences. Let us take the reins while you enjoy every moment of your special day.
          
                        <br />
                        <br />
                        Our team specializes in a diverse array of events, catering to every milestone and celebration life has to offer.
                    </p>
                    <div class="mt-4 space-x-5 space-y-4">
                      <a href="/aboutus" class="focus:shadow-outline mt-2 rounded-lg bg-transparent border border-gray-900 px-4 py-2 text-md font-semibold text-gray-900 hover:bg-purple-200 hover:text-gray-900 focus:bg-gray-400 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4">Read More...</a>

                    </div>
                </div>
    
            </div>
        </div>
    </section>

{{-- Featuring Team Services --}}
    <section class="mx-auto mt-0 px-4 pb-10 pt-4" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);" id='features'>
    
      <div class='my-24 md:px-14 px-4 max-w-screen-2xl mx-auto' id='features'>
        <div class='flex flex-col lg:flex-row justify-between items-start gap-10'>

            <div class='lg:w-1/2'>
                <h2 class='text-4xl text-purple-900 font-extrabold lg:w-1/2 mb-3'>We Offer Best Services </h2>
                <p class='lg:w-3/4 text-xl text-[white] mb-3 py-4'>Our team of seasoned professionals provides personalized recommendations and valuable insights to ensure that your event is meticulously organized and tailored to your specific requirements. From intricate details to special arrangements, our consultation services are designed to help you curate an exceptional and memorable occasion, perfectly aligned with your vision and preferences</p>
    
                <a href="/services" class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded">Learn More...</a>
    
            </div>
    
            <div class='w-full lg:w-3/4'>
                <div class='grid md:grid-cols-2 items-start md:gap-12 gap-8'>
    
                    <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer'>
                        <div>
                            <img src="{{ url('images/featpic01.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded"/>
                            <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>CHRISTENING</h4>
                            <p class='text-md  text-[white] px-3 text-center mt-2'>Celebrate the joyous milestone of your child's spiritual journey with our meticulously crafted christening events.</p>
                        </div>  
                    </div>
    
                    <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer md:mt-12'>
                        <div>
                            <img src="{{ url('images/featpic2.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded"/>
                            <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>GENDER REVEAL</h4>
                            <p class='text-md  text-[white] px-3 text-center mt-2'>Get ready to share the excitement of your baby's gender reveal with a unique and personalized event.</p>
                        </div>  
                    </div>
    
                </div>
            </div>


        </div>
      </div>
    </section>

{{-- contact --}}
    <section class="mt-0 bg-gray-100 px-4 pb-32 pt-4">

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

