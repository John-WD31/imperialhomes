
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Add Property</title>
  </head>

<section class="flex justify-center h-full gradient-form bg-gray-200 md:h-screen">
  <div class="container py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-10/12">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="flex justify-center items-center lg:flex lg:flex-wrap g-0">
            <div class="lg:w-6/12 px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                  <img
                    class="mx-auto w-48 pb-7"
                    src="/Capstone_01/images/logo.png"
                    alt="logo"
                  />
                </div>
                <form method="POST" action="/dashboard/listings" enctype="multipart/form-data">
                  @csrf
                  <p class="mt-1 mb-4 pt-6 text-center font-semibold">Add Property</p>
                  <!-- Property type -->
                  <div class="mb-4">
                      <input
                        name="propertyType"
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="propertyType"
                        placeholder="Property Type"
                        value="{{old('propertyType')}}"
                      />
                    </div>
                    <!-- Location -->
                    <div class="mb-4">
                      <input
                        name="location"
                        id="location"
                        value="{{old('location')}}"
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Location"
                      />
                    </div>
                    <!-- Model -->
                  <div class="mb-4">
                    <input
                      name="model"
                      id="model"
                      value="{{old('model')}}"
                      type="text"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleFormControlInput1"
                      placeholder="Model"
                    />
                  </div>
                  <!-- Price -->
                  <div class="mb-4">
                    <select name="" id="" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                      <option value="">₱ 10,000</option>
                      <option value="">₱ 15,000</option>
                      <option value="">₱ 20,000</option>
                      <option value="">₱ 25,000</option>
                     </select>
                    </div>
                    <!-- Description -->
                  <div class="mb-4">
                    <label for="description"></label>
                      <input
                        name="description"
                        id="description"
                        value="{{old('description')}}"
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Description"
                      />
                    </div>
                  <div class="text-center pt-1 mb-12 pb-1">
                    <button
                      class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-400 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3 bg-gray-200"
                      type="submit"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="light"
                     
                    >
                    <i class="fa-solid fa-plus mr-5 text-green-600"> Add</i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>