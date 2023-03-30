<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-lg lg:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Student Fullname
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Level
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Online
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        User status 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Payment Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->first_name }} {{ $user->last_name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            @if($user->level == 0)
                                                Super admin
                                            @else
                                                @foreach($levels as $level)
                                                    @if($user->level == $level->id)
                                                        {{ $level->level }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if(Cache::has('user-is-online-' . $user->id))
                                                <span class="bg-green-400 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-400"></span>
                                            @else
                                                <span class="bg-red-500 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-500"></span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($user->status == 'inactive')
                                                <span class="bg-red-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-500 dark:text-white">{{$user->status}}</span>
                                            @else
                                                <span class="bg-green-400 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-500 dark:text-white">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($user->payment_status == 'inactive')
                                                <span class="bg-red-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-500 dark:text-white">{{$user->payment_status}}</span>
                                            @else
                                                <span class="bg-green-400 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-500 dark:text-white">{{ $user->payment_status }}</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 flex flex-row">
                                            <a href="{{ route('user.show', $user->id) }}" class="basis-1/4">
                                                <svg class="w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                            </a> 

                                            <a href="#" class="basis-1/4">
                                                <svg class="w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                                </svg>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="show_confirm basis-1/4" data-toggle="tooltip" title='Delete'>
                                                <svg class="w-4 h-4 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                                </svg>
                                            </button>                                                    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>