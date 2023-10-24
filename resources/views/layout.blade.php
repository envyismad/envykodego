<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XYZ MANAGEMENT</title>
  @vite('resources/css/app.css')

  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/font-awesome@5.15.4/css/all.min.css" rel="stylesheet">

  

  

  <style>

    .navbar,
    .footer {
      font-family: 'Lilita One', sans-serif;
    }

    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 50;
        padding: 5px 0;
        transition: padding 0.3s ease;
        font-family: 'Pacifico', cursive;

    }

    .sticky-top.scrolled {
        padding: 2px 0;
      
    }

    .navbar {
    font-family: 'Lobster', cursive;
  }
  </style>

</head>
<body>
{{-- Navbar --}}
    <div class="sticky top-0 bg-white mx-auto pt-4 pb-4 border-b z-50" >
        <div x-data="{ open: false }" class="mx-auto flex max-w-screen-xl flex-col px-4 md:flex-row md:items-center md:justify-between md:px-6 lg:px-8">
          
            <div class="flex flex-row items-center justify-between p-4">
            <a href="#" class="text-3xl font-semibold uppercase tracking-widest text-purple-900 focus:outline-none">XYZ Event Management</a>
            </div>


            <nav class="my-custom-nav ml-8" :class="{'flex': open, 'hidden': !open}" class="hidden flex-grow flex-col pb-4 md:flex md:flex-row md:justify-end md:pb-0 ml-8">

                <a class="focus:shadow-outline mt-2 bg-transparent px-4 py-2 text-md font-normal hover:text-pink-300 cursor-pointer focus:outline-none md:mt-0 md:ml-4 text-purple-900" style="font-family: 'Lilita One', sans-serif; letter-spacing: 2px;" href="/home">Home</a>

                <a class="focus:shadow-outline mt-2 bg-transparent px-4 py-2 text-md font-normal hover:text-pink-300 cursor-pointer focus:outline-none md:mt-0 md:ml-4 text-purple-900" style="font-family: 'Lilita One', sans-serif; letter-spacing: 2px;" href="/aboutus">About</a>

                <a class="focus:shadow-outline mt-2 bg-transparent px-4 py-2 text-md font-normal hover:text-pink-300 cursor-pointer focus:outline-none md:mt-0 md:ml-4 text-purple-900" style="font-family: 'Lilita One', sans-serif; letter-spacing: 2px;" href="/events">Events</a>

                <a class="focus:shadow-outline mt-2 bg-transparent px-4 py-2 text-md font-normal hover:text-pink-300 cursor-pointer focus:outline-none md:mt-0 md:ml-4 text-purple-900" style="font-family: 'Lilita One', sans-serif; letter-spacing: 2px;" href="/services">Services</a>

                 <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-md font-normal text-purple-900 border border-gray-900 hover:bg-purple-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4" style="font-family: 'Lilita One', sans-serif; letter-spacing: 2px;" href="/contactus">Contact Us</a>
               
                 

            </nav>
            

        </div>
      </div>
    
      @yield('content')


      @include('footer')


      <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.sticky-top');
            if (window.scrollY === 0) {
                navbar.style.padding = '5px 0';
                navbar.classList.remove('scrolled');
            } else {
                navbar.style.padding = '2px 0';
                navbar.classList.add('scrolled');
            }
        });
    </script>
    
    
</body>
</html>