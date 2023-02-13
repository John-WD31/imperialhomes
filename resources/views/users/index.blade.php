<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Newly added for carousel and other styles effects -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <title>IMPERIALHOMES</title>
</head>

<body>

  <section class="h-screen flex flex-col bg-gray-600 bg-center bg-cover bg-blend-overlay bg-black/50"
    style="background-image: url(images/hero-bg.jpg)">
    <!-- ####################################### Start Navbar ########################################### -->
    <nav
      class=" px-2 sm:px-4 py-2.5 dark:bg-sky-900 min-w-full md:min-w-screen z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
          <img src="images/logo.png" class="h-6 mr-3 sm:h-9">
          <span class="self-center text-xl font-semibold whitespace-nowrap text-amber-500">IMPERIAL</span><span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">HOMES</span>
        </a>

        <div class="flex lg:order-2">
          @auth
          <div class="mr-5 text-yellow-500">
            <span class="font-bold uppercase">Hi, {{auth()->user()->username}}</span>
          </div>

          {{-- dashboard --}}
          <a class="mr-2 " href="/dashboard">
            <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button"
              class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0">
              
              <div data-popover id="popover-bottom" role="tooltip" class="absolute z-10 invisible inline-block w-34 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Dashboard</h3>
                </div>
                <div data-popper-arrow></div>
            </div>
              <i class="fa-solid fa-gauge"></i></button></a>
                
              
              {{-- logout --}}
                    <form class="inline" method="POST" action="/logout">
                      @csrf
                      <button data-popover-target="popover-right" data-popover-placement="bottom" type="submit"
              class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0">
              
              <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-34 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Logout</h3>
                </div>
                <div data-popper-arrow></div>
            </div>
            <i class="fa-solid fa-right-from-bracket"></i></button>
                      </form>

                  @else
                <a class="mr-2" href="/register">
                  <button type="button"
                    class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0"><i class="fa-solid fa-right-to-bracket"></i> Register
                  </button>
                </a>

                      <a class="mr-2" href="/login">
                        <button type="button"
                    class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0"><i class="fa-solid fa-right-to-bracket"></i> Login
                        </button>
                      </a>
          @endauth
          <button data-collapse-toggle="navbar-sticky" type="button"
            class="inline-flex items-center p-2 text-sm text-amber-500 rounded-lg lg:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200"
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
          <ul
            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium lg:border-0 lg:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            
            <li>
              <a href="/"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0 focus:text-amber-500"
                aria-current="page"><i class="fa-solid fa-house"></i> HOME</a>
            </li>
            <li>
              <a href="#about-us"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                  class="fa-solid fa-magnifying-glass"></i> ABOUT</a>
            </li>
            <li>
              <a href="/property"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                  class="fa-solid fa-city"></i> PROPERTIES</a>
            </li>
            <li>
              <a href="/agents"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                  class="fa-solid fa-user-tie"></i> AGENTS</a>
            </li>
            <li>
              <a href="#contacts"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                  class="fa-solid fa-envelope"></i> CONTACTS</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <!-- ####################################### Start Hero Content ###################################### -->
    <div class="flex-1 flex items-center container mx-auto px-7">
      <div class="text-center mx-auto">
        <h1 class="text-5xl text-amber-500 m-10 mb-10">
          Your Property Is Our Priority
        </h1>
        <p class="text-md font-light text-amber-300 mt-5">
          A small river named Duden flows by their place and supplies it with
          the necessary regelialia. It is a paradisematic country, in which
          roasted parts of sentences fly into your mouth.
        </p>
        <a class="px-10 py-3 mt-5 text-white bg-amber-500 hover:bg-amber-400 inline-block rounded-2xl" href="#">Learn
          More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <!-- End of Hero -->
  </section>


  <main>

    <!-- ######################################## Start Search ############################################ -->
    <div class=" p-5 bg-amber-400 rounded">
      <div class="flex flex-col md:flex-row space-x-2 justify-center">
        <!-- 1 -->
        <div class="relative flex items-center m-2">
          <i class="fa-solid fa-magnifying-glass absolute pl-1 ml-1"></i>
          <input type="text" name="search"
            class="py-2 pl-6 pr-3 w-full outline-none flex border-none rounded-lg focus:ring-4 focus:outline-none focus:ring-amber-300"
            placeholder="  Search" />
        </div>
        <!-- 2 -->
        <div class="relative flex items-center m-2">
          <i class="fa-solid fa-magnifying-glass absolute pl-1 ml-1"></i>
          <input type="text" name="search"
            class="py-2 pl-6 pr-3 w-full outline-none flex border-none rounded-lg focus:ring-4 focus:outline-none focus:ring-amber-300"
            placeholder="  Search Location" />
        </div>

        <!-- 3 -->
        <div class="flex flex-row mt-2 mb-2">
          <div class="relative flex items-center">
            <select name="" id=""
              class="text-gray-400 mr-5 py-2 pl-6 pr-10 border-none rounded-lg cursor-pointer focus:ring-4 focus:outline-none focus:ring-amber-300">
              <option value="">Residential</option>
              <option value="">Commercial</option>
              <option value="">Land</option>
              <option value="">Industrial</option>
            </select>
          </div>

          <!-- 4 -->
          <div class="relative flex items-center">
            <select name="" id=""
              class="text-gray-400 mr-5 py-2 pl-6 pr-10 border-none rounded-lg cursor-pointer focus:ring-4 focus:outline-none focus:ring-amber-300">
              <option value="">Price</option>
              <option value="">₱ 10,000</option>
              <option value="">₱ 15,000</option>
              <option value="">₱ 20,000</option>
              <option value="">₱ 25,000</option>
            </select>
          </div>
        </div>
        <!-- send -->
        <div>
          <button type="submit"
            class="mt-2 px-6 py-2.5 bg-amber-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-300 hover:shadow-lg focus:bg-green-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-300 active:shadow-lg transition duration-150 ease-in-out rounded-lg">
            Send
          </button>
        </div>
      </div>
    </div>
    <!--End of Serch -->

    <!-- ######################################## Container for demo purpose ############################### -->
    <div class="container my-24 px-6 mx-auto">

      <!-- Section: Design Block -->
      <section class="mb-32 text-gray-800 text-center">

        <h2 class="text-3xl font-bold mb-12 pb-4 text-center text-amber-500">Featured Properties</h2>

        <div class="grid lg:grid-cols-3 gap-3 xl:gap-x-4">
          <div class="mb-6 lg:mb-0">
            <div class="relative block bg-white rounded-lg shadow-lg h-full">
              <div class="flex">
                <div
                  class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                  data-mdb-ripple="true" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                  <a href="#!">
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                      style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
              </div>
              <div class="p-6">
                <h5 class="font-bold text-lg mb-3 text-amber-500">My paradise</h5>
                <p class="text-gray-500 mb-4">
                  <small>Published <u>13.01.2022</u> by
                    <a href="" class="text-gray-900">Anna Maria Doe</a></small>
                </p>
                <p class="mb-4 pb-2">
                  Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                  placerat vulputate. Ut vulputate est non quam dignissim
                  elementum. Donec a ullamcorper diam.
                </p>
                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                  class="inline-block px-6 py-2.5 bg-amber-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-amber-400 hover:shadow-lg focus:bg-amber-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-400 active:shadow-lg transition duration-150 ease-in-out">Read
                  more</a>
              </div>
            </div>
          </div>


          <div class="mb-6 lg:mb-0">
            <div class="relative block bg-white rounded-lg shadow-lg h-full">
              <div class="flex">
                <div
                  class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                  data-mdb-ripple="true" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                  <a href="#!">
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                      style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
              </div>
              <div class="p-6">
                <h5 class="font-bold text-lg mb-3 text-amber-500">Travel to Italy</h5>
                <p class="text-gray-500 mb-4">
                  <small>Published <u>12.01.2022</u> by
                    <a href="" class="text-gray-900">Halley Frank</a></small>
                </p>
                <p class="mb-4 pb-2">
                  Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                  diam orci, nec ornare metus semper sed. Integer volutpat
                  ornare erat sit amet rutrum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
                  voluptatibus autem earum, nesciunt nostrum vitae libero sequi alias laborum dolorem laboriosam
                  obcaecati sint. Mollitia culpa, maxime non quo eum totam unde nisi! Provident deserunt nam porro
                  veritatis omnis ex iusto?
                </p>
                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                  class="inline-block px-6 py-2.5 bg-amber-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-amber-400 hover:shadow-lg focus:bg-amber-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-400 active:shadow-lg transition duration-150 ease-in-out">Read
                  more</a>
              </div>
            </div>
          </div>


          <div class="mb-0">
            <div class="relative block bg-white rounded-lg shadow-lg h-full">
              <div class="flex">
                <div
                  class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                  data-mdb-ripple="true" data-mdb-ripple-color="light">
                  <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp" class="w-full" />
                  <a href="#!">
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                      style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
              </div>
              <div class="p-6">
                <h5 class="font-bold text-lg mb-3 text-amber-500">Chasing the sun</h5>
                <p class="text-gray-500 mb-4">
                  <small>Published <u>10.01.2022</u> by
                    <a href="" class="text-gray-900">Joe Svan</a></small>
                </p>
                <p class="mb-4 pb-2">
                  Curabitur tristique, mi a mollis sagittis, metus felis mattis
                  arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                  massa volutpat feugiat. Donec.
                </p>
                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                  class="inline-block px-6 py-2.5 bg-amber-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-amber-400 hover:shadow-lg focus:bg-amber-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-400 active:shadow-lg transition duration-150 ease-in-out">Read
                  more</a>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- Section: Design Block -->

    </div>
    <!-- End Container for demo purpose -->

    <!-- ######################################### About Us ################################################# -->
    <div id="about-us" class="about-us container my-24 px-6 mx-auto">
      <section id="about-Us" class="mb-32 text-gray-800 text-center">

        <h2 class="text-3xl font-bold mb-12 pb-4 text-center text-amber-500">About Us</h2>

        <div class="flex flex-col lg:flex-row">

          <div class="lg:shrink-0">
            <img class="justify-center w-full" src="images/about-us.avif" alt="Picture">
          </div>

          <div class="text flex flex-col ml-9">

            <div class="font-semibold text-3xl mt-5 text-left">
              <h1><span class="text-amber-500">Imperial</span>Homes A Real Estate Company</h1>
            </div>

            <div class="text-left">
              <p class="pt-9 font-medium">
                Welcome to our real estate company, where we are dedicated to
                providing top-notch services to help you find your dream home or
                investment property. Our team of experienced agents is
                knowledgeable in the local real estate market and is here to
                guide you through every step of the process. Whether you are
                looking to buy or rent, we are here to help you achieve your
                goals with professionalism and a personal touch. With a focus on
                customer satisfaction, we are committed to finding the perfect
                fit for you. Contact us today to start your real estate journey.
              </p>
              <p class="pt-5 font-medium">
                Our real estate platform offers a comprehensive solution for all
                real estate needs. From searching for the perfect property, to
                managing rental agreements, our system streamlines the entire
                process. With cutting-edge technology and a team of expert real
                estate professionals, our users can easily navigate the market
                and make informed decisions. Whether you're a seasoned investor
                or a first-time buyer, our system has everything you need to
                succeed in the world of real estate.
              </p>
            </div>

            <div class="flex flex-row justify-between w-full px-4 relative mt-9">

              <div class="counter-cols basis-1/5">
                <div
                  class="counter-box bg-amber-500 text-white w-full h-full pt-7 pb-7 rounded-2xl shadow-lg shadow-neutral-400">
                  <h2 class="text-4xl m-2 counter">10</h2>
                  <h4 class="text-1md uppercase">Years of Experience</h4>
                </div>
              </div>

              <div class="counter-cols basis-1/5">
                <div
                  class="counter-box bg-amber-500 text-white w-full h-full pt-7 pb-7 rounded-2xl shadow-lg shadow-neutral-400">
                  <h2 class="text-4xl m-2 counter">200</h2>
                  <h4 class="text-1xl uppercase">Total Properties</h4>
                </div>
              </div>

              <div class="counter-cols basis-1/5">
                <div
                  class="counter-box bg-amber-500 text-white w-full h-full pt-7 pb-7 rounded-2xl shadow-lg shadow-neutral-400">
                  <h2 class="text-4xl m-2 counter">25</h2>
                  <h4 class="text-1xl uppercase">Qualified Realtors</h4>
                </div>
              </div>

              <div class="counter-cols basis-1/5">
                <div
                  class="counter-box bg-amber-500 text-white w-full h-full pt-7 pb-7 rounded-2xl shadow-lg shadow-neutral-400">
                  <h2 class="text-4xl m-2 counter">100</h2>
                  <h4 class="text-1xl uppercase">Total Branches</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--END OF ABOUT US -->

    <!-- ######################################### Testimonials ############################################# -->
    <section class="mb-20 pt-20 bg-gray-100">
      <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
        <h3 class="text-3xl font-bold mb-6 text-amber-500">Testimonials</h3>
        <p class="mb-6 pb-2 md:mb-12 md:pb-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
          amet numquam iure provident voluptate esse quasi, veritatis totam
          voluptas nostrum quisquam eum porro a pariatur veniam.
        </p>
      </div>

      <section>
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="swiper-container !overflow-hidden">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">Maria
                        Samantha
                      </h4>
                      <div class="border-b-4 border-b-amber-500"></div>

                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing
                        elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">Lisa Cudrow</h4>
                      <div class="border-b-4 border-b-amber-500"></div>
                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Neque cupiditate assumenda in maiores repudi mollitia
                        architecto.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">John Smith</h4>
                      <div class="border-b-4 border-b-amber-500"></div>
                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Delectus impedit saepe officiis ab aliquam repellat rem unde
                        ducimus.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">Maria
                        Samantha
                      </h4>
                      <div class="border-b-4 border-b-amber-500"></div>

                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing
                        elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">Lisa Cudrow</h4>
                      <div class="border-b-4 border-b-amber-500"></div>
                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Neque cupiditate assumenda in maiores repudi mollitia
                        architecto.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #f59e0b"></div>
                    <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                    </div>
                    <div class="p-6">
                      <h4 class="text-2xl font-semibold mb-4 text-center">John Smith</h4>
                      <div class="border-b-4 border-b-amber-500"></div>
                      <p class="mt-4 text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                          class="w-6 pr-2 inline-block" style="color: #f59e0b" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                          </path>
                        </svg>
                        Delectus impedit saepe officiis ab aliquam repellat rem unde
                        ducimus.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-pagination !relative !bottom-0 mt-12" style="color: #f59e0b !important">
            </div>


          </div>
        </div>
        </div>
      </section>

    </section>
    <!-- End of testimonials -->

    <!-- ########################################## Contact ################################################ -->
    <div id="contacts" class="container my-24 px-6 mx-auto mt-52">
      <!-- Section: Design Block -->
      <section class="mb-32 text-gray-800">
        <div class="container text-gray-800 px-4 md:px-12">
          <div class="block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6" style="
              margin-top: -100px;
              background: hsla(0, 0%, 100%, 0.8);
              backdrop-filter: blur(30px);
            ">
            <div class="text-center mx-auto font-medium text-2xl text-amber-500">
              <h1>Contact Us</h1>
            </div>
            <br />
            <br />
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 mb-12">
              <div class="mb-12 lg:mb-0 text-center mx-auto">
                <i class="fa-solid fa-earth-asia fa-2x text-amber-500"></i>
                <h6 class="font-medium">Philippines</h6>
              </div>
              <div class="mb-12 lg:mb-0 text-center mx-auto">
                <i class="fa-solid fa-location-dot fa-2x text-amber-500"></i>
                <h6 class="font-medium">Manila</h6>
              </div>
              <div class="mb-6 md:mb-0 text-center mx-auto">
                <i class="fa-solid fa-phone fa-2x text-amber-500"></i>
                <h6 class="font-medium">+63 927 349 1294</h6>
              </div>
              <div class="text-center mx-auto">
                <i class="fa-solid fa-envelope fa-2x text-amber-500"></i>
                <h6 class="font-medium">Wonderhome@gmail.com</h6>
              </div>
            </div>
            <div class="max-w-[700px] mx-auto">
              <form>
                <div class="form-group mb-6">
                  <input type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput7" placeholder="Name" />
                </div>
                <div class="form-group mb-6">
                  <input type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput8" placeholder="Email address" />
                </div>
                <div class="form-group mb-6">
                  <textarea
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                    id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="form-group form-check text-center mb-6">
                  <input type="checkbox"
                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-amber-500 checked:border-amber-500 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="exampleCheck87" checked />
                  <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of
                    this
                    message</label>
                </div>
                <button type="submit"
                  class="w-full px-6 py-2.5 bg-amber-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-400 hover:shadow-lg focus:bg-amber-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-amber-400 active:shadow-lg transition duration-150 ease-in-out">
                  Send
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
    </div>
    <!-- End of Contact -->

    <!-- ########################################## Footer ################################################# -->
    <footer class="text-center lg:text-left bg-gray-100 text-gray-600">

      <div class="flex flex-col-reverse md:flex-row justify-center items-center p-6 border-b border-gray-300">

        <div class="mr-12 lg:block text-gray-600">
          <span>Get connected with us on social networks:</span>
        </div>

        <div class="flex flex-row justify-self-center">
          <a href="#!"
            class="mr-6 text-amber-500 px-2 py-2 ease-in-out hover:scale-150 duration-300 hover:text-amber-500">
            <i class="fa-brands fa-facebook-f fa-2x"></i>
          </a>
          <a href="#!"
            class="mr-6 text-amber-500 px-2 py-2 ease-in-out hover:scale-150 duration-300 hover:text-amber-500">
            <i class="fa-brands fa-twitter fa-2x"></i>
          </a>
          <a href="#!"
            class="mr-6 text-amber-500 px-2 py-2 ease-in-out hover:scale-150 duration-300 hover:text-amber-500">
            <i class="fa-brands fa-instagram fa-2x"></i>
          </a>
        </div>

      </div>

      <div class="mx-6 py-10 text-center md:text-left">
        <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

          <div class="grid justify-items-stretch">
            <h6
              class="uppercase font-semibold mb-4 flex justify-self-center md:justify-self-start xl:justify-self-center lg:justify-self-center">
              <img src="images/logo.png" alt="" class="w-15 h-20">
            </h6>
            <p class="lg:text-center md:text-left sm:text-center">
              Making your home ownership dreams come true.<br />Find your dream
              home, one key at a time.
            </p>
          </div>

          <div class="flex flex-col">
            <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start text-amber-500">
              Offers
            </h6>
            <p class="mb-4 transition ease-in-out hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">Properties</a>
            </p>
            <p class="mb-4 ease-in-out hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">Agents</a>
            </p>
            <p class="mb-4 ease-in-out hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">Locations</a>
            </p>
          </div>

          <div class="">
            <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start text-amber-500">
              Useful links
            </h6>
            <p class="mb-4 hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">Terms & Conditions</a>
            </p>
            <p class="mb-4 hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">User`s Guide</a>
            </p>
            <p class="mb-4 hover:scale-110 duration-300 text-gray-600 hover:text-amber-500">
              <a href="#!">Support Center</a>
            </p>
          </div>

          <div class="">
            <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start text-amber-500">
              Contact
            </h6>
            <p class="flex items-center justify-center md:justify-start mb-4">
              <i class="fa-solid fa-location-dot fa-1x text-amber-500"></i>
              &ensp;&ensp;Manila
            </p>
            <p class="flex items-center justify-center md:justify-start mb-4">
              <i class="fa-solid fa-envelope fa-1x text-amber-500"></i>
              &ensp;&ensp;Imperialhomes@gmail.com
            </p>
            <p class="flex items-center justify-center md:justify-start mb-4">
              <i class="fa-solid fa-phone fa-1x text-amber-500"></i>
              &ensp;&ensp;+63 927 349 1294
            </p>
          </div>

        </div>
      </div>

      <div class="text-center p-6 bg-gray-200">
        <span class="text-amber-500">© </span>
        <span>2023 Copyright. </span>
        <a class="text-amber-500 font-semibold" href="#">IMPERIALHOMES</a>
      </div>

    </footer>
    <!-- end of footer -->

    <!-- Js links -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(".counter").counterUp({
          delay: 10,
          time: 1000,
        });
      });
    </script>

    <!-- Newly added for carousel effect and other styles  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      /* Testimonials Effect */
      document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper-container', {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 8,
          autoplay: {
            delay: 8000,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        })
      })
    </script>

</body>

</html>