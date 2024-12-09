<x-layout>
    <x-slot:heading>
       Job listings
    </x-slot:heading>
<ul>
    @if(is_iterable($jobs))
    @foreach ($jobs as $job)
    
        <li> 
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:undeline">
                <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per year.</li>
            </a>
          
    
    @endforeach
    @else
        <p>No jobs found</p>
    @endif
  
</ul>

    
</x-layout>