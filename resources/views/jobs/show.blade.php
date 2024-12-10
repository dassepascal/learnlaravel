<x-layout>
    <x-slot:heading>
       Job 
    </x-slot:heading>

    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$job['title']}}</h1>

    <p>
        This job pays {{$job['salary']}} per year.
    </p>

    
</x-layout>