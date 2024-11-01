@extends('layouts.project.admin.project-admin-layout')
@section('content')
    {{-- //parent div --}}
    <div
        class="bg-gray-200 text-gray-900 uppercase flex items-center justify-center text-center rounded-md shadow-lg py-4 px-7 mt-7">
        <h1
            class="text-3xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-purple-700 via-purple-500 to-purple-400">
            RESEARCH & CONSULTANCY PANEL</h1>
    </div>
    <div class="p-4 rounded-lg dark:border-gray-700">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-4">
            <div
                class="relative p-4 rounded-lg bg-gradient bg-gradient-to-r from-green-900 to-green-700 shadow-lg text-center text-white">
                <span class="text-lg font-semibold favFont uppercase">Active Projects</span>
                <div class="mt-2 text-sm font-medium text-white flex items-center justify-center space-x-1">
                    <span class="favFont lg:text-6xl">10</span>
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-center mt-7">
                    <a href="{{ route('admin.project.projects') }}"
                        class="py-2 px-4 text-xs uppercase font-semibold tracking-wider bg-white text-gray-900 border border-white rounded-md ">View</a>
                </div>
            </div>

            <div
                class="relative p-4 rounded-lg bg-gradient bg-gradient-to-r from-purple-950 to-purple-700 shadow-lg text-center text-white">
                <span class="text-lg font-semibold favFont uppercase">Scholarships</span>
                <div class="mt-2 text-sm font-medium text-white flex items-center justify-center space-x-1">
                    <span class="favFont lg:text-6xl">10</span>
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-center mt-7">
                    <a href="#"
                        class="py-2 px-4 text-xs uppercase font-semibold tracking-wider bg-white text-gray-900 border border-white rounded-md ">View</a>
                </div>
            </div>

            <div
                class="relative p-4 rounded-lg bg-gradient bg-gradient-to-r from-emerald-900 to-emerald-700 shadow-lg text-center text-white">
                <span class="text-lg font-semibold favFont uppercase">Researchers</span>
                <div class="mt-2 text-sm font-medium text-green-100 flex items-center justify-center space-x-1">
                    <span class="favFont lg:text-6xl">10</span>
                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-center mt-7">
                    <a href="#"
                        class="py-2 px-4 text-xs uppercase font-semibold tracking-wider bg-white text-gray-900 border border-white rounded-md ">View</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="relative flex flex-col rounded-xl bg-transparent">
        <h4 class="block text-xl font-medium text-slate-800">
            Sign Up
        </h4>
        <p class="text-slate-500 font-light">
            New Project
        </p>
        <form class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
            <div class="mb-1 flex flex-col gap-6">
                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                        Your Name
                    </label>
                    <input type="text"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Your Name" />
                </div>
                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                        Email
                    </label>
                    <input type="email"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Your Email" />
                </div>
                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                        Password
                    </label>
                    <input type="password"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Your Password" />
                </div>
            </div>
            <div class="inline-flex items-center mt-2">
                <label class="flex items-center cursor-pointer relative" for="check-2">
                    <input type="checkbox"
                        class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-slate-800 checked:border-slate-800"
                        id="check-2" />
                    <span
                        class="absolute text-white opacity-0 pointer-events-none peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                            stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </label>
                <label class="cursor-pointer ml-2 text-slate-600 text-sm" for="check-2">
                    Remember Me
                </label>
            </div>
            <button
                class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                Sign Up
            </button>
            <p class="flex justify-center mt-6 text-sm text-slate-600">
                Don&apos;t have an account?
                <a href="#signup" class="ml-1 text-sm font-semibold text-slate-700 underline">
                    Sign up
                </a>
            </p>
        </form>
    </div> --}}
@endsection
