<link rel="stylesheet" href="{{ asset('richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{ asset('richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src="{{ asset('richtexteditor/plugins/all_plugins.js')}}"></script>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-lg lg:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{ route('lessons.store') }}" method="POST">
                            @csrf
                            <div class="mb-6">

                                <label for="video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Video</label>
                                <input type="text" id="video" name="video" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lesson title</label>
                                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Courses</label>
                            <select id="countries" name="courses_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a courses</option>
                                @foreach ($courses as $key => $value)
                                    <option value="{{ $value->id }}"
                                    @if ($key == old('courses', $value->courses))
                                        selected="selected"
                                    @endif
                                    >{{ $value->courses }}</option>
                                @endforeach
                            </select>
                            <br>

                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lesson level</label>
                            <select id="countries" name="level_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a level</option>
                                @foreach ($levels as $key => $value)
                                    <option value="{{ $value->id }}"
                                    @if ($key == old('lesson', $value->level))
                                        selected="selected"
                                    @endif
                                    >{{ $value->level }}</option>
                                @endforeach
                            </select>
                            <br>

                            <div class="mb-6">
                                <input name="description" id="inp_htmlcode" type="hidden" />
                                <div id="div_editor1" class="richtexteditor">
                                </div>
                                <script>
                                    var editor1 = new RichTextEditor(document.getElementById("div_editor1"));
                                    editor1.attachEvent("change", function () {
                                        document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
                                    });
                                </script>
                            </div>
                            
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>