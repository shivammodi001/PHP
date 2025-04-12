<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Stylish Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            animation: {
              fadeIn: "fadeIn 0.8s ease-in-out",
            },
            keyframes: {
              fadeIn: {
                "0%": { opacity: 0, transform: "translateY(20px)" },
                "100%": { opacity: 1, transform: "translateY(0)" },
              },
            },
          },
        },
      };
    </script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body
    class="bg-gradient-to-br from-blue-100 to-purple-200 min-h-screen flex items-center justify-center p-10"
  >
    <div
      class="bg-white/60 backdrop-blur-lg w-full max-w-2xl p-10 rounded-3xl shadow-2xl animate-fadeIn"
    >
      <form action="Action.php" method="post" class="space-y-6">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">
          🚀 User Information Form
        </h2>

        <!-- Name -->
        <div class="relative">
          <label
            for="name"
            class="block text-sm font-semibold text-gray-700 mb-1"
            >Name</label
          >
          <div
            class="flex items-center border rounded-lg px-3 py-2 bg-white shadow-sm focus-within:ring-2 focus-within:ring-blue-500"
          >
            <i class="fa fa-user text-gray-400 mr-2"></i>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="John Doe"
              class="w-full outline-none text-gray-800 placeholder-gray-400 bg-transparent"
            />
          </div>
        </div>

        <!-- Age -->
        <div class="relative">
          <label
            for="age"
            class="block text-sm font-semibold text-gray-700 mb-1"
            >Age</label
          >
          <div
            class="flex items-center border rounded-lg px-3 py-2 bg-white shadow-sm focus-within:ring-2 focus-within:ring-blue-500"
          >
            <i class="fa fa-calendar text-gray-400 mr-2"></i>
            <input
              type="number"
              name="age"
              id="age"
              placeholder="25"
              class="w-full outline-none text-gray-800 placeholder-gray-400 bg-transparent"
            />
          </div>
        </div>

        <!-- Gmail -->
        <div class="relative">
          <label
            for="gmail"
            class="block text-sm font-semibold text-gray-700 mb-1"
            >Gmail</label
          >
          <div
            class="flex items-center border rounded-lg px-3 py-2 bg-white shadow-sm focus-within:ring-2 focus-within:ring-blue-500"
          >
            <i class="fa fa-envelope text-gray-400 mr-2"></i>
            <input
              type="email"
              name="gmail"
              id="gmail"
              placeholder="you@gmail.com"
              class="w-full outline-none text-gray-800 placeholder-gray-400 bg-transparent"
            />
          </div>
        </div>

        <!-- Skills (Radio Buttons) -->
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2"
            >Skills</label
          >
          <div class="grid grid-cols-2 gap-3">
            <label
              class="flex items-center bg-white/70 backdrop-blur-sm p-2 rounded-lg shadow hover:bg-purple-100 transition cursor-pointer"
            >
              <input
                type="checkbox"
                name="skill[]"
                value="HTML"
                class="mr-2 accent-purple-600"
              />
              HTML
            </label>
            <label
              class="flex items-center bg-white/70 backdrop-blur-sm p-2 rounded-lg shadow hover:bg-purple-100 transition cursor-pointer"
            >
              <input
                type="checkbox"
                name="skill[]"
                value="CSS"
                class="mr-2 accent-purple-600"
              />
              CSS
            </label>
            <label
              class="flex items-center bg-white/70 backdrop-blur-sm p-2 rounded-lg shadow hover:bg-purple-100 transition cursor-pointer"
            >
              <input
                type="checkbox"
                name="skill[]"
                value="JavaScript"
                class="mr-2 accent-purple-600"
              />
              JavaScript
            </label>
            <label
              class="flex items-center bg-white/70 backdrop-blur-sm p-2 rounded-lg shadow hover:bg-purple-100 transition cursor-pointer"
            >
              <input
                type="checkbox"
                name="skill[]"
                value="PHP"
                class="mr-2 accent-purple-600"
              />
              PHP
            </label>
          </div>
        </div>

        <!-- Gender -->
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2"
            >Gender</label
          >
          <div class="flex space-x-6">
            <label class="flex items-center space-x-2">
              <input type="radio" name="gender" value="Male" />
              <span>Male</span>
            </label>
            <label class="flex items-center space-x-2">
              <input type="radio" name="gender" value="Female" />
              <span>Female</span>
            </label>
            <label class="flex items-center space-x-2">
              <input type="radio" name="gender" value="Other" />
              <span>Other</span>
            </label>
          </div>
        </div>

        <!-- State Dropdown -->
        <div>
          <label
            for="state"
            class="block text-sm font-semibold text-gray-700 mb-1"
            >State</label
          >
          <select
            name="state"
            id="state"
            class="w-full border rounded-lg px-3 py-2 shadow-sm bg-white focus:ring-2 focus:ring-blue-500 transition"
          >
            <option value="">-- Select State --</option>
            <option value="California">California</option>
            <option value="Texas">Texas</option>
            <option value="New York">New York</option>
            <option value="Florida">Florida</option>
          </select>
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold py-3 rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transform transition duration-300 ease-in-out"
          >
            <i class="fa fa-paper-plane mr-2"></i> Submit
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
