<x-app-layout>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('questions.update', $question->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
                            <textarea type="text" name="question"  id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $question->questions }}</textarea>
                        </div>

                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Сorrect answer</label>
                            <input type="text" name="correct_answer" value="{{ $question->correct_answers }}" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        
                        @foreach ($answers as $key => $answer)
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">answer</label>
                                <input name="answer_id_{{$key+1}}" type="hidden" value="{{ $answer->id }}">
                                <input type="text" name="answer_{{$key+1}}" value="{{ $answer->answer }}" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div> 
                        @endforeach

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>