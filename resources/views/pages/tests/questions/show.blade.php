<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mt-2 mb-8 w-full">
                        <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                            Question ID#{{ $question->id }}
                        </h4>
                        <p class="mt-2 px-2 text-base text-gray-600">
                            {{ $question->questions }}
                        </p>
                    </div> 
                    <div class="grid grid-cols-2 gap-4 px-2 w-full">
                        @foreach ($answers as $answer)
                            @if ($question->correct_answers == $answer->answer)
                                <div class="flex text-center items-start justify-center rounded-2xl bg-green-600 bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                                    <p class="flex-1 w-64 text-white font-medium text-navy-700 dark:text-white">
                                        {{ $answer->answer }}
                                    </p>
                                    <svg class="flex-none w-6 text-end h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                    </svg>
                                </div>
                            @else
                                <div class="flex text-center items-start justify-center rounded-2xl bg-red-600 bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                                    <p class="flex-1 w-64 text-white font-medium text-navy-700 dark:text-white">
                                        {{ $answer->answer }}
                                    </p>
                                    <svg class="flex-none w-6 text-end h-6 dark:text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"></path>
                                    </svg>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
