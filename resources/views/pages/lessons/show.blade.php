<x-app-layout>
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="py-5">
            @foreach ($course as $c)
            <span
                class="bg-green-300 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-600 dark:text-green-300 border border-green-300">Course:
                {{ $c->courses }}</span>
            @endforeach @foreach ($level as $l)
            <span
                class="bg-yellow-300 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-400 dark:text-dark-300 border border-yellow-300">Lesson for
                {{ $l->level }}</span>
            @endforeach
        </div>

        <div class="bg-white overflow-hidden shadow-lg lg:rounded-lg">
            <div class="relative p-5 overflow-x-auto shadow-md sm:rounded-lg">
                {!! html_entity_decode($lesson->description) !!}
            </div>
        </div>
    </div>
</x-app-layout>