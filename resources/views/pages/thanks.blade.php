@extends('layouts.app')

@section('content')

<!-- component -->
<div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80);">
<div class="absolute bg-gradient-to-b from-blue-500 to-blue-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center items-center">
            <div class="flex-col flex p-10 sm:max-w-5xl xl:max-w-2xl z-10">
                <div class="items-center hidden lg:flex flex-col text-white">
                    <img src="{{ url('/images/foundation.jpg') }}"alt="logo here" class="mb-3 h-56 w-60">
                    <h1 class="mb-3 font-bold text-4xl">Thanks you for donating 🙏</h1>
                    <p class="">Lorem ipsum is placeholder text commonly used in the graphic, print,
                        and publishing industries for previewing layouts and visual mockups</p>
                </div>
            </div>
        </div>
    </div>


@endsection
