@extends('layout')

@section('content')

    {{-- About --}}
    <section class="mt-0 bg-gray-100 px-4 pb-32 pt-4" id='about'>
        <div class="container mx-auto">
            <div class="mt-32 flex flex-wrap items-center">
    
                <div class="mx-auto mt-24 flex w-full justify-center px-4 md:w-4/12 lg:mt-0">
                    <div class="shadow-lg bg-blue-gray-100 rounded-xl rounded-br-80" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);; width: 80%; max-width: 400px;">
                        <div class="relative h-64">
                            <img
                                alt="Event"
                                src="{{ url('images/event.jpg') }}"
                                class="h-full w-full object-cover"
                            />
                        </div>
                        <div class="relative h-64">
                            <img
                                alt="Event"
                                src="{{ url('images/event1.jpg') }}"
                                class="h-full w-full object-cover"
                            />
                        </div>
                    </div>
                </div>
    
                <div class="mx-auto mt-8 w-full px-4 md:w-5/12">
    
                    <h3 class="mb-4 text-4xl tracking-tight font-extrabold text-purple-900 lg:w-1/2">Working with us is a pleasure</h3>
                    <p class="mb-8 text-purple-900">
                         We understand the importance of every milestone in your life, and we're here to transform your vision into reality. With our comprehensive suite of services and expert event planners, we aim to make your special moments truly extraordinary. From elegant weddings to jubilant birthday celebrations, we are committed to crafting experiences that reflect your unique style and preferences. Let us take the reins while you enjoy every moment of your special day.
          
                        <br />
                        <br />
                        At XYZ Event Management, we pride ourselves on being the catalysts for joyous and stress-free event planning experiences. Our team is comprised of seasoned professionals with a passion for curating events that leave lasting impressions. With an unwavering commitment to detail and personalization, we strive to bring your event visions to life, no matter the occasion. From the initial consultation to the final execution, we work closely with you to ensure that every aspect of your event aligns with your aspirations. Let us handle the logistics while you bask in the delight of creating cherished memories with your loved ones.
                    </p>
                    
                </div>
    
            </div>
        </div>
    </section>

{{-- Featuring Team Services --}}
<section class="mx-auto mt-0 px-4 pb-10 pt-4" style="background-image: linear-gradient(to bottom, #FFD8E3, #D59FCA, #855E9E);" id='features'>

    <div class="md:px-14 mt-4 p-4 max-w-s mx-auto py-10 text-purple-900" id="">
        <div class="text-center">
            <h2 class="md:text-4xl tracking-tight font-extrabold leading-tight mb-4">Meet our talented team members</h2>

            <p class="md:text-xl font-light mb-12">We are a dynamic team of dedicated event managers committed to making your special occasions truly memorable. <br> With a diverse range of expertise and a passion for creating unforgettable experiences, <br> our team at XYZ Event Management is here to bring your vision to life.</p>

           
        </div>
    </div>
    
    <div class='mt-4 my-24 md:px-14 px-4 max-w-screen-2xl mx-auto' id='features'>
      <div class='flex flex-col lg:flex-row justify-between items-start gap-10'>

        <div class='w-full lg:w-3/4'>
            <div class='grid md:grid-cols-2 items-start md:gap-12 gap-8'>

                <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer md:mt-12'>
                    <div>
                        <img src="{{ url('images/sarah.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded-full"/>
                        <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>Sarah Matthews</h4>
                        <p class='text-md  text-[white] px-3 text-center mt-2'> The Event Coordinator <br> Ensures that every aspect of your event is meticulously planned and executed to perfection.</p>
                    </div>  
                </div>

                <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer'>
                    <div>
                        <img src="{{ url('images/john.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded-full"/>
                        <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>John Parker</h4>
                        <p class='text-md  text-[white] px-3 text-center mt-2'>The Creative Director <br>Crafting stunning decor and conceptualizing themes, his creative touch leaves a lasting impression on every guest.</p>
                    </div>  
                </div>

            </div>
        </div>
  
          <div class='w-full lg:w-3/4'>
              <div class='grid md:grid-cols-2 items-start md:gap-12 gap-8'>
  
                <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer md:mt-12'>
                    <div>
                        <img src="{{ url('images/emily.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded-full"/>
                        <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>Emily Chen</h4>
                        <p class='text-md  text-[white] px-3 text-center mt-2'>The  Catering Manager <br>Her precise menu planning and dedication to quality ingredients leave a memorable taste of excellence for every guest</p>
                    </div>  
                </div>
  
                <div class='bg-gray-900 bg-opacity-25 rounded-3xl h-96 shadow-3xl p-8 items-center flex justify-center hover:-translate-y-4 transition-all duration-300 cursor-pointer'>
                    <div>
                        <img src="{{ url('images/michael.jpg') }}" alt="" class="w-60 h-auto mx-auto rounded-full"/>
                        <h4 class='text-lg font-semibold text-[white] px-3 text-center mt-5'>Michael Johnson</h4>
                        <p class='text-md  text-[white] px-3 text-center mt-2'>The Entertainment Specialist <br>From live music to engaging activities, he curates entertainment that creates lasting memories and joyous experiences.</p>
                    </div>  
                </div>
  
              </div>
          </div>


      </div>
  </div>
  </section>

{{-- contact area --}}
    <section class="mt-0 bg-gray-100 px-4 pb-32 pt-4">

        <h3 class="mb-8 text-center pt-24 text-3xl font-medium md:text-4xl text-purple-900">TESTIMONIALS</h3>
            <p class="text-center text-lg">Let's hear our friends</p>


    <div class=" items-center px-5 py-8 mx-auto lg:px-24">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="flex flex-col h-full p-8">
                        <div class="flex-grow">
                            <p class="mb-8 font-medium leading-relaxed text-base text-purple-900">The Organizers made our wedding an absolute dream come true. Their attention to detail and seamless coordination left us and our guests in awe. We couldn't have asked for a better team to bring our vision to life</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="{{ url('images/sassydog.jpg') }}" class="flex-shrink-0 object-cover object-center w-10 h-10 rounded-full">
                                <span class="flex flex-col flex-grow pl-3">
                                    <span class="font-medium text-neutral-600">Micah Afable</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex flex-col h-full p-8">
                        <div class="flex-grow">
                            <p class="mb-8 font-medium leading-relaxed text-base text-purple-900">From start to finish, The Organizers demonstrated their professionalism and creativity in crafting an event that truly reflected our company's values. Their expertise in planning and execution is unparalleled. We highly recommend their services to anyone looking for an exceptional event.</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="{{ url('images/dogbubble.jpg') }}" class="flex-shrink-0 object-cover object-center w-10 h-10 rounded-full">
                                <span class="flex flex-col flex-grow pl-3">
                                    <span class="font-medium text-neutral-600">Gene, CEO of XYZ Company</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex flex-col h-full p-8">
                        <div class="flex-grow">
                            <p class="mb-8 font-medium leading-relaxed text-base text-purple-900">Our family reunion organized by The Organizers was nothing short of perfect. They managed to create an atmosphere that brought generations together, making the event memorable for everyone. We are grateful for their dedicated team and their commitment to making our day truly special.</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="{{ url('images/favedog.jpg') }}" class="flex-shrink-0 object-cover object-center w-10 h-10 rounded-full">
                                <span class="flex flex-col flex-grow pl-3">
                                    <span class="font-medium text-neutral-600">Rasmus Doe</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



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
    </div>
   
</section>
    
    
    
    
    
    
    
    @endsection