<x-layout  :title=" $job['title'] ">
    <x-slot:heading>
    <a href="{{ url()->previous() }}"  class="text-gray-400">
        <span>&#8612;</span></a> Job
    </x-slot:heading>
    <h2 class="font-bold text-large"> {{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year</p>
</x-layout>
