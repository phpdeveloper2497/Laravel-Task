<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('MANAGER') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6  bg-white border-gray-200 ">
                    <div class="text-center">
                        <span class="  text-blue-500 font-bold text-xl">
                    {{ __("You're logged in MANAGER!") }}
                    </span>
                    </div>
                    {{--                    table request section--}}
                    <div class="mb-5 rounded-lg bg- shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="mr-2 h-10 w-10 rounded-full object-cover"
                                     src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     alt="profile"/>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">Name</h3>
                                </div>
                            </div>
                            <div class="">
                                <p class="text-sm font-medium text-indigo-500">id</p>
                                <p class="text-sm font-medium text-indigo-500">created_at </p>
                            </div>
                        </div>
                        <h5 class="my-6 text-sm font-normal text-black-900">Subject</h5>
                        <p class="my-6 text-sm font-normal text-gray-700">
                            Hi, I'm Alex Stanton. I am a doctoral student
                            at Oxford University majoring in UI / UX . . .
                        </p>
                        <h6 class="mr-1">Email</h6>
                    </div>
                    {{--                //    table request section--}}
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
