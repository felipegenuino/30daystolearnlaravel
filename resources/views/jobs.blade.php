<x-layout :title="'Jobs'">
    <x-slot:heading> Job</x-slot:heading>
    <h1>Hello from my jobs page</h1>






<div class="space-y-4">
         @foreach ($jobs as $job )

                 <a href="/job/{{$job['id']}}" class="block px-4 py-6  border border-gray-200 rounded-lg">
                   <span class="block font-bold text-blue-500 text-sm">
                         {{$job->employer->name}}
                   </span>
                   </span>
                        <span>
                            <strong>  {{$job['title']}}: </strong> Pays  {{$job['salary']}} per year
                        </span>

                </a>

        @endforeach
 </div>



</x-layout>
