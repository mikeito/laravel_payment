@extends('layouts.app')

@section('content')

<!-- component -->
<div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80);">
    <div class="absolute bg-gradient-to-b from-blue-500 to-blue-400 opacity-75 inset-0 z-0"></div>
    <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
        <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
            <div class="self-start hidden lg:flex flex-col  text-white">
                <img src="{{ url('/images/foundation.jpg') }}" alt="logo here" class="mb-3 h-36 w-40">
                <h1 class="mb-3 font-bold text-5xl">Hi 👋 For donations? </h1>
                <p class="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups</p>
            </div>
        </div>
        <div class="flex justify-center self-center  z-10">
            <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                <div class="mb-4">
                    <h3 class="font-semibold text-2xl text-gray-800">Make a Donation </h3>
                    <p class="text-gray-500">By filling the below fields.</p>
                </div>
                <form class="mt-8 space-y-6" action="{{ route('donate') }}" method="POST">
                    @csrf
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">Amount: </label>
                            <input name="amount" type="number" class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" placeholder="E.g 500" required>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center bg-blue-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Donate
                            </button>
                        </div>
                    </div>
                </form>
                <div class="pt-5 text-center text-gray-400 text-xs">
                    <span>
                        <a href="#" class="text-green underline hover:text-green-500">Go back to our site</a>
                        <a href="{{ route('thanks') }}" class="text-green underline hover:text-green-500">thanks</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
