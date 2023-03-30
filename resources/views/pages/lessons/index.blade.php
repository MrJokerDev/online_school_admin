<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('lessons.create') }}">
                <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Create</button>
            </a>
            <div class="grid grid-cols-4 gap-4">
                @foreach ($lessons as $lesson)
                    <a href="{{ route('lessons.show', $lesson->id) }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl text-center uppercase font-bold tracking-tight text-gray-900 dark:text-white">{{ $lesson->title }}</h5>
                    </a> 
                @endforeach  
            </div>   
        </div>
    </div>
</x-app-layout>