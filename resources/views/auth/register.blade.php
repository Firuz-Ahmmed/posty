@extends('layouts.app')
@section('content')
      <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
              <form action="{{route('register')}}" method="post">
                @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-600
                            
                        @enderror" value="">
                         @error('name')
                             <div class="text-red-500 mt-2 text-sm">
                              {{ $message}}
                             </div>
                         @enderror
                    </div>
                    <div class="mb-4">
                        <label for="username" class="sr-only">User Name</label>
                        <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-600
                            
                        @enderror" value="">
                        @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                         {{ $message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-600
                            
                        @enderror" value="">
                        @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                         {{ $message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-600
                            
                        @enderror" value="">
                        @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                         {{ $message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Confirmation Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your Confirmation password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                        @error('password_confirmation')
                        {{-- <div class="text-red-500 mt-2 text-sm">
                         {{ $message}}
                        </div> --}}
                    @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                            Register
                        </button>
                    </div>
              </form>
        </div>

      </div>
@endsection