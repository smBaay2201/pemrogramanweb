<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #4caf50;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
    <form action="#" method="POST" class="space-y-4">
      <!-- Full Name -->
      <div>
        <label class="block text-gray-700 font-medium mb-1" for="fullname">Full Name</label>
        <input
          type="text"
          id="fullname"
          name="fullname"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-700 font-medium mb-1" for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Password -->
      <div>
        <label class="block text-gray-700 font-medium mb-1" for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
      </div>

      <!-- Submit Button -->
      <div>
        <button
          type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition duration-300"
        >
          Register
        </button>
      </div>
    </form>
    <p class="text-center text-sm text-gray-600 mt-4">
      Already have an account?
      <a href="#" class="text-blue-600 hover:underline">Login here</a>
    </p>
  </div>
</body>

