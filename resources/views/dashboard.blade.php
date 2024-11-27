<x-app-layout>
    <div class="">
        <div class="max-w-full flex">
            <div class="flex flex-col items-center w-60 h-auto overflow-hidden text-gray-800 bg-white">
                <div class="w-full px-2">
                    <div class="flex flex-col items-center w-full mt-3">
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300"
                            href="#">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Dasboard</span>
                        </a>
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300"
                            href="#">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">Tasks</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white m-12 dark:bg-gray-800 overflow-hidden w-full shadow-sm sm:rounded-lg h-screen">
                <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-3 sm:px-8 ms-7">
                    <div class=" justify-center content-center w-full">
                        <div class="w-full rounded-[25px] bg-slate-100 p-8 aspect flex items-center justify-evenly">
                            <svg fill="#000000" viewBox="0 0 24 24" id="Layer_1" version="1.1" width="90"
                                height="90" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M16.71,9.29c-0.39-0.39-1.02-0.39-1.41,0L14,10.59l-0.29-0.29c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41l1,1 C13.49,12.9,13.74,13,14,13s0.51-0.1,0.71-0.29l2-2C17.1,10.32,17.1,9.68,16.71,9.29z">
                                    </path>
                                    <path
                                        d="M7,5c0-0.55-0.45-1-1-1H5C4.45,4,4,4.45,4,5v16c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1V5c0-0.55-0.45-1-1-1h-1 c-0.55,0-1,0.45-1,1s0.45,1,1,1v14H6V6C6.55,6,7,5.55,7,5z">
                                    </path>
                                    <path
                                        d="M15,2H9C8.45,2,8,2.45,8,3v4c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1V3C16,2.45,15.55,2,15,2z M14,6h-4V4h4V6z">
                                    </path>
                                    <path d="M8,12c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1s-1,0.45-1,1V12z">
                                    </path>
                                    <path d="M8,17c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1s-1,0.45-1,1V17z">
                                    </path>
                                    <path
                                        d="M15.71,14.29c-0.39-0.39-1.02-0.39-1.41,0L14,14.59l-0.29-0.29c-0.39-0.39-1.02-0.39-1.41,0s-0.39,1.02,0,1.41L12.59,16 l-0.29,0.29c-0.39,0.39-0.39,1.02,0,1.41C12.49,17.9,12.74,18,13,18s0.51-0.1,0.71-0.29L14,17.41l0.29,0.29 C14.49,17.9,14.74,18,15,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L15.41,16l0.29-0.29C16.1,15.32,16.1,14.68,15.71,14.29z">
                                    </path>
                                </g>
                            </svg>
                            <div class="">
                                <div class="my-2">
                                    <h2 class="text-4xl font-bold"><span>{{ $tasks }}</span></h2>
                                </div>

                                <div>
                                    <p class="mt-2 font-sans text-base font-medium text-gray-500">Total Tasks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" justify-center content-center">
                        <div class="w-full rounded-[25px] bg-slate-100 p-8 aspect flex items-center justify-evenly">
                            <svg viewBox="0 0 1024 1024" class="icon" version="1.1" width="80" height="80"
                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M864 512a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM881.92 389.44a23.68 23.68 0 0 0-5.76-2.88 19.84 19.84 0 0 0-6.08-1.92 32 32 0 0 0-28.8 8.64A32 32 0 0 0 832 416a32 32 0 1 0 64 0 33.6 33.6 0 0 0-9.28-22.72z"
                                        fill="#231815"></path>
                                    <path
                                        d="M800 128h-32a96 96 0 0 0-96-96H352a96 96 0 0 0-96 96H224a96 96 0 0 0-96 93.44v677.12A96 96 0 0 0 224 992h576a96 96 0 0 0 96-93.44V736a32 32 0 0 0-64 0v162.56a32 32 0 0 1-32 29.44H224a32 32 0 0 1-32-29.44V221.44A32 32 0 0 1 224 192h32a96 96 0 0 0 96 96h320a96 96 0 0 0 96-96h32a32 32 0 0 1 32 29.44V288a32 32 0 0 0 64 0V221.44A96 96 0 0 0 800 128z m-96 64a32 32 0 0 1-32 32H352a32 32 0 0 1-32-32V128a32 32 0 0 1 32-32h320a32 32 0 0 1 32 32z"
                                        fill="#231815"></path>
                                    <path
                                        d="M712.32 426.56L448 721.6l-137.28-136.32A32 32 0 0 0 265.6 630.4l160 160a32 32 0 0 0 22.4 9.6 32 32 0 0 0 23.04-10.56l288-320a32 32 0 0 0-47.68-42.88z"
                                        fill="#231815"></path>
                                </g>
                            </svg>
                            <div class="">
                                <div class="my-2">
                                    <h2 class="text-4xl font-bold"><span>{{ $completed }}</span></h2>
                                </div>

                                <div>
                                    <p class="mt-2 font-sans text-base font-medium text-gray-500">Completed Tasks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto my-5 w-[1100px] h-[500px] p-6 overflow-y-auto bg-slate-100">
                    <!-- Group Header -->
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4">Due Today</h2>
                        <div class="space-y-4">

                            <!-- Task -->
                            @foreach ($todays as $today)
                                <div class="flex items-center justify-between p-4 bg-white shadow-md rounded-lg">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">{{ $today->title }}</p>
                                        <p class="text-xs text-gray-500">{{ $today->description }}</p>
                                    </div>
                                    <span class="px-3 py-1 text-xs font-semibold
                                    {{ $today->completed ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }} rounded-full">
                                    {{ $today->completed ? 'Completed' : 'Incompleted' }}
                                </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Next Group -->
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4">Due Tomorrow</h2>
                        <div class="space-y-4">
                            @foreach ($tommorows as $tommorow)
                                <div class="flex items-center justify-between p-4 bg-white shadow-md rounded-lg">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">{{ $tommorow->title }}</p>
                                        <p class="text-xs text-gray-500">{{ $tommorow->description }}</p>
                                    </div>
                                    <span class="px-3 py-1 text-xs font-semibold
                                    {{ $tommorow->completed ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }} rounded-full">
                                    {{ $tommorow->completed ? 'Completed' : 'Incompleted' }}
                                </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Another Group -->

                    @foreach ($tasksGroupedByDate as $date => $tasks)
                        <div class="mb-8">
                            <h2 class="text-lg font-semibold text-gray-700 mb-4">Due:
                                {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}</h2>
                            <div class="space-y-4">
                                @foreach ($tasks as $task)
                                    <div class="flex items-center justify-between p-4 bg-white shadow-md rounded-lg">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">{{ $task->title }}</p>
                                            <p class="text-xs text-gray-500">{{ $task->description }}</p>
                                        </div>
                                        <span class="px-3 py-1 text-xs font-semibold
                                        {{ $task->completed ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }} rounded-full">
                                        {{ $task->completed ? 'Completed' : 'Incompleted' }}
                                    </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
