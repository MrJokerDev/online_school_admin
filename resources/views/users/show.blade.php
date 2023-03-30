<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg lg:rounded-lg">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg dark:text-white dark:bg-gray-900">
                        <div class="px-4 py-5 sm:px-6 flex">
                            <div class="flex-1 w-64">
                                <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">Personal Information</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-white">Personal details and application.</p>
                            </div>
                            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            @if ($user_info->foto === null)
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            @else
                                <img class="h-24 mb-3 rounded-full shadow-lg" src="{{ asset('/user/image/' . $user_info->foto) }}" alt="Bonnie image"/>
                            @endif
                            </div>
                            
                        </div>
                        <div class="border-t border-gray-200 dark:border-white">
                            <dl>
                                <div class="bg-gray-50 dark:bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">Full name</dt>
                                    <dd class="mt-1 text-sm text-gray-900 uppercase sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->first_name }} {{ $user_info->last_name }} ({{ $user_info->nik_name }})</dd>
                                </div>
                                <div class="bg-white dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">User level</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->level }}</dd>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">Email address</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->email }}</dd>
                                </div>
                                <div class="bg-white dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">User test result</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->result_test }}</dd>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">User status</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->status }}</dd>
                                </div>
                                <div class="bg-white dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">User order</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">{{ $user_info->payment_status }}</dd>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">About</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">Fugiat ipsum ipsum
                                        deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat.
                                        Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud
                                        in ea officia proident. Irure nostrud pariatur mollit ad adipisicing
                                        reprehenderit deserunt qui eu.</dd>
                                </div>
                                <div class="bg-white dark:bg-gray-700 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-white">Attachments</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 dark:text-white">
                                        <ul
                                            role="list"
                                            class="divide-y divide-gray-200 rounded-md border border-gray-200 dark:border-gray-500 dark:divide-gray-500">
                                            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                <div class="flex w-0 flex-1 items-center">
                                                    <svg
                                                        class="h-5 w-5 flex-shrink-0 text-gray-400 dark:text-white"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                            clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="ml-2 w-0 flex-1 truncate">resume_back_end_developer.pdf</span>
                                                </div>
                                                <div class="ml-4 flex-shrink-0">
                                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-white">Download</a>
                                                </div>
                                            </li>
                                            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                                <div class="flex w-0 flex-1 items-center">
                                                    <svg
                                                        class="h-5 w-5 flex-shrink-0 text-gray-400 dark:text-white"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                            clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="ml-2 w-0 flex-1 truncate">coverletter_back_end_developer.pdf</span>
                                                </div>
                                                <div class="ml-4 flex-shrink-0">
                                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-white">Download</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>