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
                    @foreach($applications as $application)
                    <div class="mb-5 rounded-lg bg- shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="mr-2 h-10 w-10 rounded-full object-cover"
                                     src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                     alt="profile"/>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">{{ $application->user->name }}</h3>
                                </div>
                            </div>
                            <div class=" flex">
                                <span class="text-sm font-medium text-indigo-500 pr-5">
                                    {{ $application->id }}
                                </span>
                                <span class="text-sm font-medium text-indigo-500 pl-5">
                                 {{ $application->created_at }}
                                </span>
                            </div>
                        </div>
                        <hr class="mt-3 border border-gray-100 shadow">
                        <div class="flex justify-between  cursore-pointer">
                            <div class="">
                                <h5 class="my-6 text-sm font-normal text-black-900">
                                    Subject: {{$application->subject}}
                                </h5>
                                <p class="my-6 text-sm font-normal text-gray-700">
                                    {{$application->message}}
                                </p>
                                <span class="mr-1">
                                Email: {{$application->user->email}}
                            </span>
                            </div>
                            <div class="rounded rounded-xl border border-gray-200 p-6 m-6 flex flex-col text-center">
                                @if(!is_null($application->file_url))
                                    <a href="{{ asset($application->file_url) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                                        </svg>
                                    </a>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                        No file
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $applications->links() }}
                    {{--                //   end table request section--}}
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
