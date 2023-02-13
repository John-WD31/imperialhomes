<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
        extend: {
        fontFamily: {
        sans: ['Inter', 'sans-serif'],
            },
        }
    }
}
</script>
    <title>Login</title>
</head>
<body>
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
                          src="/img/29605555501.png"
                          alt="logo"
                        />
                      </div>
                      <h2>Admin Dashboard</h2>
                      <form>
                        <p class="mb-4">Please login to your account</p>
                        <div class="mb-4">
                          <input
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                            placeholder="Username"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1"
                            placeholder="Password"
                          />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1">
                          <button
                            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            type="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            style="
                              background: linear-gradient(
                                to right,
                                #86ee24,
                                #36d846,
                                #49d563,
                                #50e05c
                              );
                            "
                          >
                            Log in
                          </button>
                          <a class="text-gray-500" href="#!">Forgot password?</a>
                        </div>
                        <div class="flex items-center justify-between pb-6">
                          <p class="mb-0 mr-2">Don't have an account?</p>
                          <button
                            type="button"
                            class="inline-block px-6 py-2 border-2 border-green-600 text-green-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                          >
                            Register
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

      

    <div class="bg-gray-300 mx-80 py-10  inset-x-0 rounded backdrop-blur-sm bg-gray/30">
    <div class="flex space-x-2 justify-center">
<!-- 1 -->
      <div class="dropdown relative">
        
        <i class="fa-solid fa-magnifying-glass absolute"></i>
         <input
                type="text"
                name="search"
                class="py-2 pl-6 pr-3 w-full outline-none flex rounded"
                placeholder="Enter Keyword"
              />
      </div>
<!-- 2 -->
<div class="dropdown relative ">
  
  <i class="fa-solid fa-magnifying-glass absolute "></i>
   <input
          type="text"
          name="search"
          class="py-2 pl-6 pr-3 w-full outline-none flex rounded"
          placeholder="Enter Keyword"
        />
</div>
<!-- 3 -->
<div class="dropdown relative">
  
  <i class="fa-solid fa-magnifying-glass absolute"></i>
   <input
          type="text"
          name="search"
          class="py-2 pl-6 pr-3 w-full outline-none flex rounded" 
          placeholder="Enter Keyword"
        />
</div>
<!-- 4 -->
<div class="dropdown relative">
  
  <i class="fa-solid fa-magnifying-glass absolute"></i>
   <input
          type="text"
          name="search"
          class="py-2 pl-6 pr-3 w-full outline-none flex rounded"
          placeholder="Enter Keyword"
        />
</div>
<!-- send -->
      <button
              type="submit"
              class="px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
            >
              Send
            </button>
    </div>
  </div>
       
        
      
</body>
</html>