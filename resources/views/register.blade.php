<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- CDN Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-8">

  <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Create an Account</h2>

    <!-- Form Registrasi -->
    <form action="{{ route('register.save') }}" method="POST">
      @csrf <!-- Cross-Site Request Forgery (CSRF) token -->
      
      <!-- Nama -->
      <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Your name" value="{{ old('name') }}">
        @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700">Email</label>
        <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Your email" value="{{ old('email') }}">
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Alamat -->
      <div class="mb-4">
        <label for="address" class="block text-gray-700">Address</label>
        <input type="text" name="address" id="address" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Your address" value="{{ old('address') }}">
        @error('address')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- No HP -->
      <div class="mb-4">
        <label for="phone" class="block text-gray-700">Phone Number</label>
        <input type="text" name="phone" id="phone" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Your phone number" value="{{ old('phone') }}">
        @error('phone')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700">Password</label>
        <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Password">
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password Confirmation -->
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Confirm your password">
        @error('password_confirmation')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600">Register</button>
    </form>
  </div>

</body>

</html>
