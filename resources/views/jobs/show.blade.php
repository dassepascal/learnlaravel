<x-layout>
    <x-slot:heading>
       Job 
    </x-slot:heading>

    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$job->title}}</h1>

    <p>
        This job pays {{$job->salary}} per year.
    </p>

    <p class="mt-6 text-base leading-7 text-gray-600">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>


    </p>

    
</x-layout>