<!DOCTYPE html>
<html>
<head>
  <title>Employer Login</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen flex items-center justify-center">
  <div class="w-full max-w-xs">
    
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('employer.login') }}" method="post">
        @csrf
      <label for="employerLoginText">Employer Login</label>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          Email
        </label>
        <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Log In
        </button>
      </div>
    </form>
  </div>
</body>
</html>
