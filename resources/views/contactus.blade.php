@extends('layout')

@section('content')

<section class="mt-0 bg-gray-100 px-4 pb-32 pt-24">

<div class="rounded-xl mt-0 mx-auto w-full max-w-[700px] bg-purple-100 px-4 pb-32 pt-4 py-10 flex items-center justify-center text-purple-900">
    <div class="w-full">
        <form action="{{ route('contact.store') }}" method="POST" class="w-full px-5">
            @csrf
            <h2 class="flex justify-start py-5 text-xl font-normal">Your Information</h2>

            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="relative mb-10 w-1/2">
                    <input placeholder="First name" class="block rounded-md border-2 border-solid border-grey bg-grey-9 placeholder-text-grey text-purple-900 outline-none focus:border-purple-900 w-full  duration-300" name="firstName" required>
                </div>

                <div class="relative mb-10 w-1/2">
                    <input placeholder="Last Name" class="block rounded-md border-2 border-solid border-grey bg-grey-9 placeholder-text-grey text-purple-900 outline-none focus:border-purple-900 w-full duration-300" name="lastName" required>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="relative mb-10 w-1/2">
                    <input type="email" placeholder="Email address" class="block rounded-md border-2 border-solid border-grey bg-grey-9 placeholder-text-grey text-purple-900 outline-none focus:border-purple-900 w-full duration-300" name="email" required>
                </div>

                <div class="relative mb-10 w-1/2">
                    <input type="number" placeholder="Contact Number" class="block rounded-md border-2 border-solid border-grey bg-grey-9 placeholder-text-grey text-purple-900 outline-none focus:border-purple-900 w-full duration-300" name="number" required>
                </div>

            </div>

                <h2 class="flex py-8 text-justify text-xl font-normal">Please, tell us about the project</h2>
                <textarea class="mb-0 w-full rounded-lg border-2 border-grey-7 bg-grey-9 p-5 text-purple-900 duration-300 placeholder-text-purple-900 outline-none focus:border-purple-900" placeholder="Type your message here" name="message" id="" cols="30" rows="10"></textarea>


            <div class="flex items-start mt-0 mb-5">
                <div class="flex mt-0.5 ml-5">
                    <input class="block bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700 px-4 py-3 rounded-md text-md w-full cursor-pointer mt-1" id="disclaimer" type="checkbox" name="disclaimer">
                </div>

                <div class="ml-1">
                    <label class="dark:text-gray-400 text-sm text-text-purple-900 cursor-pointer select-none" for="disclaimer">By submitting, you acknowledge and agree to the collection of your personal information.</label>

                </div>


            </div>

            <div class="flex justify-center">
                <button class="send focus:shadow-outline mt-4 rounded-lg bg-transparent border border-purple-900 px-5 py-2.5 mr-2 mb-2 text-md font-semibold text-purple-900 hover:bg-purple-900 hover:text-white focus:bg-gray-400 focus:text-gray focus:outline-none md:mt-0 md:ml-1" type="submit">Send us a message now...</button>
            </div>

            <div class="text-center mt-1 ml-5">
                <p class="dark:text-gray-400 text-sm text-purple-900">Our support team typically responds within 24 business hours.</p>
            </div>

        </form>
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
</section>


@endsection
