<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script
      src="https://kit.fontawesome.com/782572ab2b.js"
      crossorigin="anonymous"
    ></script>
 
  </head>

  <body class="bg-gray-100">
    <!-- ####################################### Start Navbar ########################################### -->
    <nav
      class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 min-w-full md:min-w-screen z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="index.html" class="flex items-center">
          <img src="images/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap text-amber-500">IMPERIAL</span><span
            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">HOMES</span>
        </a>
        <div class="flex lg:order-2">
          <a class="mr-2" href="/dashboard">
            <button type="button"
              class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0"><i
                class="fa-solid fa-chart-bar"></i> DashBoard</button></a>
                
                <a class="mr-2" href="/login">
                  <button type="button"
                    class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-5 md:mr-0"><i class="fa-solid fa-right-to-bracket"></i> Login</button></a>
          <button data-collapse-toggle="navbar-sticky" type="button"
            class="inline-flex items-center p-2 text-sm text-amber-500 rounded-lg lg:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200"
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
          <ul
            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium lg:border-0 lg:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="/"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"
                aria-current="page"><i class="fa-solid fa-house"></i> HOME</a>
            </li>
            <li>
              <a href="#about-us"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                  class="fa-solid fa-magnifying-glass"></i> ABOUT</a>
            </li>
            <li>
              <a href="/property"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0 active:text-amber-500 focus:outline-none focus:ring focus:ring-violet-300"><i
                  class="fa-solid fa-city"></i> PROPERTIES</a>
            </li>
            <li>
              <a href="/agents"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0 active:bg-violet-700 "><i
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

    <div
      class="relative overflow-hidden bg-no-repeat bg-cover"
      style="
        background-position: 50%;
        background-image: url('../img/pedro-lastra-Nyvq2juw4_o-unsplash.jpg');
        height: 550px;
      "
    >
      <div
        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.6)"
      >
        <div class="flex justify-center items-center h-full">
          <div class="text-center text-white px-6 md:px-12">
            <ol class="list-reset flex items-center justify-center">
              <li>
                <a href="#" class="text-1xl text-white hover:text-black"
                  >Home</a
                >
              </li>
              <li><span class="text-gray-500 mx-2">/</span></li>
              <li>
                <a href="#" class="text-1xl text-yellow-700"
                  >Properties</a
                >
              </li>
            </ol>
            <h3 class="text-7xl text-yellow-600 font-bold mb-8 animate__animated animate__fadeInUp animate__fast">PROPERTIES</h3>
          </div>
        </div>
      </div>
    </div>

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

    <div class="flex flex-col md:flex-row items-center justify-center m-10 gap-10">
      <div class="card hideleft">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h1.png"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">2 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">1 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="affordable house">
              Affordable house
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-half-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">20k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideleft">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h2.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">3 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">2 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Modern Home
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">25k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideright">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h9.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">5 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">2 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Classic Home
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-no-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">20k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideright">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h4.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">3 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">2 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Minimal Home
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="badge">2 <i class="fa-solid fa-bed"></i></span>
                <span class="badge">1 <i class="fa-solid fa-toilet"></i></span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-half-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">40k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- =========section2========== ++++++++++++++++=====================================-->
    <div class="flex flex-col md:flex-row items-center justify-center m-10 gap-10">
      <div class="card hideleft">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h5.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">2 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">1 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Elegant House
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-half-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">19k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideleft">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h6.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">4 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">1 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Nature Inspired
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-no-fill.svg" alt="" />
            <img src="../images/star-no-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">5k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideright">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h10.png"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">5 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">2 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">Wide View</h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">50k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>

      <div class="card hideright">
        <img
          class="w-full h-full object-cover opacity-70 hover:opacity-100 transition duration-300 ease-in-out"
          src="../img/rooms/h8.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div class="flex items-center gap-2">
            <span class="badge">4 <i class="fa-solid fa-bed"></i></span>
            <span class="badge">2 <i class="fa-solid fa-toilet"></i></span>
          </div>

          <div>
            <h2 class="product-title" title="Best Headphone Ever">
              Asthetic Home
            </h2>
            <div>
              <span class="text-xl font-bold"> 100,000 </span>
              <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50"> 300,000 </span>
                <span class="discount-percent">save 20%</span>
              </div>
            </div>
          </div>

          <span class="flex items-center mt-1">
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star.svg" alt="" />
            <img src="../images/star-half-fill.svg" alt="" />
            <span class="text-xs ml-2 text-gray-500">35k views</span>
          </span>

          <div class="mt-5 flex gap-2">
            <button class="button-primary">Checkout</button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/love.svg"
                alt="add to likes"
              />
            </button>
            <button class="button-icon">
              <img
                class="opacity-50"
                src="../images/eye.svg"
                alt="add to likes"
              />
            </button>
          </div>
        </div>
      </div>  
    </div>
      <!-- ===============SLASH SLASH PAGINATE============== -->
    <div class="flex items-center justify-center">
        <nav aria-label="Page navigation example">
          <ul class="flex list-style-none">
            <li class="page-item disabled"><a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none"
                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
            <li class="page-item"><a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#">1</a></li>
            <li class="page-item active"><a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                href="#">2 <span class="visually-hidden">(current)</span></a></li>
            <li class="page-item"><a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#">3</a></li>
            <li class="page-item"><a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#">Next</a></li>
          </ul>
        </nav>
      </div>

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

      <script src="/src/app.js"></script>
    <script src="/node_modules/tw-elements/dist/js/index.min.js"></script>
  </body>
</html>
