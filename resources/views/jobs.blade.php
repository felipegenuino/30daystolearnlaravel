<x-layout :title="'Jobs'">
    <x-slot:heading> Job</x-slot:heading>
    <h1>Hello from my jobs page</h1>




<div class="w-6/12 bg-white shadow-sm rounded-md dark:bg-gray-700">
    <p class="p-4 font-bold text-black text-md dark:text-white" >
       Jobs
        <span class="ml-2 text-sm text-gray-500 dark:text-gray-300 dark:text-white">
            (05)
        </span>
    </p>
    <ul class="list-decimal">
        @foreach ($jobs as $job )
        <li class="flex items-center justify-between py-3 text-gray-600 dark:text-gray-200">
            <div class="flex items-center justify-start text-sm">
                <span class="mx-4">
                    {{$job['id']}}
                </span>
                 <a href="/job/{{$job['id']}}" class="text-blue-500 hover:underline">
                    {{$job['title']}}
                </a>
            </div>
            <div class="mx-4 text-gray-400 dark:text-gray-300" >
                {{$job['salary']}}
            </div>
        </li>
        @endforeach
    </ul>
</div>



</x-layout>
