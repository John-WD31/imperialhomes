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
                <a href="#" class="text-1xl text-yellow-700">Our Agents</a>
              </li>
            </ol>
            <h3
              class="text-7xl text-yellow-600 font-bold mb-8 animate__animated animate__fadeInUp animate__fast"
            >
              Our Agents
            </h3>
          </div>
        </div>
      </div>
    </div>

    <!-- =======================agents======================================= -->

    <div
      class="flex flex-col md:flex-row items-center justify-center gap-4 mx-20 mt-16"
    >
      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/m1.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/w1.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/m2.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/w2.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================================SECOND ROW=============================== -->

    <div
      class="flex flex-col md:flex-row items-center justify-center gap-4 mx-20 my-4"
    >
      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/m3.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/w3.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/m4.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card2 hide">
        <img
          class="w-full h-full object-cover hover:scale-110 transition duration-300 ease-in-out"
          src="../img/agents/w4.jpg"
          alt="room"
        />
        <div class="p-5 flex flex-col gap-3">
          <div>
            <span class="text-2xl">Listing 10 Properties</span>
          </div>

          <span class="flex items-center my-5"> LEBRON JAMES </span>
          <div>
            <div class="flex items-center gap-5">
              <span class="badge2"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-brands fa-twitter fa-2xl"></i
              ></span>
              <span class="badge2"
                ><i class="fa-solid fa-envelope fa-2xl"></i
              ></span>
            </div>
          </div>

          <div class="mt-5 flex gap-2">
            <button
              class="button-primary"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalScrollable"
            >
              Make a Deal
            </button>
          </div>
        </div>
      </div>
      <!-- 
        ==========================================
        ========================== -->

      <!-- Modal -->
      <div
        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable"
        tabindex="-1"
        aria-labelledby="exampleModalScrollableLabel"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none"
        >
          <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
          >
            <div
              class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
            >
              <h5
                class="text-xs font-medium leading-normal text-gray-800"
                id="exampleModalScrollableLabel"
              >
                Please fill out all fields to set an appointent
              </h5>
              <button
                type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body relative p-4">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                <form>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput7"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="number"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Contact Number"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property type"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleInput8"
                      placeholder="Property Location"
                    />
                  </div>
                  <div class="form-group mb-6">
                    <div
                      class="datepicker relative form-floating mb-6 xl:w-96"
                      data-mdb-toggle-button="false"
                    >
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a date</label
                      >
                      <button
                        class="datepicker-toggle-button"
                        data-mdb-toggle="datepicker"
                      >
                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <div class="timepicker relative form-floating mb-3 xl:w-96">
                      <input
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Select a date"
                      />
                      <label for="floatingInput" class="text-gray-700"
                        >Select a time</label
                      >
                    </div>
                  </div>

                  <button
                    type="submit"
                    class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Submit
                  </button>
                </form>
              </div>
            </div>
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
