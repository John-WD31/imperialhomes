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
    <title>Register</title>
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
                          class="mx-auto w-48"
                          src="/img/29605555501.png"
                          alt="logo"
                        />
                      </div>
                      <form method="POST" action="/users">
                        @csrf
                        <p class="mt-1 mb-4 pt-6">Please fill out all fields to create account</p>
                        <div class="mb-4">
                            <input
                              value="{{old('firstname')}}"
                              name="firstname"
                              type="text"
                              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              id="firstname"
                              placeholder="First Name"
                            />
                          </div>
                          <div class="mb-4">
                            <input
                              value="{{old('lastname')}}"
                              name="lastname"
                              type="text"
                              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              id="lastname"
                              placeholder="Last Name"
                            />
                          </div>
                        <div class="mb-4">
                          <input
                            value="{{old('username')}}"
                            name="username"
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="username"
                            placeholder="Username"
                          />
                        </div>
                        <div class="mb-4">
                            <input
                            value="{{old('email')}}"
                              name="email"
                              type="email"
                              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              id="email"
                              placeholder="email"
                            />
                          </div>
                        <div class="mb-4">
                          <label for="password"></label>
                          <input
                            name="password"
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="password"
                            placeholder="Password"
                          />
                        </div>
                        <div class="mb-4">
                          <label for="password_confirmation"></label>
                            <input
                              name="password_confirmation"
                              type="password"
                              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              id="password_confirmation"
                              placeholder="Confirm Password"
                            />
                          </div>
                        <div class="text-center pt-1 mb-12 pb-1">
                          <button
                            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md text-black hover:bg-amber-600 bg-amber-500 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                           
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
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
</body>
</html>