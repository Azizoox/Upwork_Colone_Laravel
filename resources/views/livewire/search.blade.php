<div class="inline-block  mr-5 relative">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <input type="text"  wire:keydown.arrow-down.prevent="increment"  wire:keydown.arrow-up.prevent="decrement"
    wire:keydown.arrow-up.backspace="resetIndex"
    wire:keydown.arrow.enter='showJob'


     class=" bg-gray-200  mr-3 text-gray-700 rounded-full border-2 focus:outline-none px-2 py-1" placeholder="rechercher une mission" wire:model='query'>
    <svg class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-3 mt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
      </svg>
   <div class="absolute">
    @if(strlen($query)>2 )
    <div class="m-4  bg-gray-200 rounded-md w-18 p-2 w-50 ">
        @if(count($jobs)>0)
          @foreach($jobs as $index=>$job)
            <h2 class="text-md font-bold  text-gray-600 {{ $index==$selectedIndex ? 'text-green-400':'' }}">{{ $job->title }}</h2>
          @endforeach
          @else
            <span class="text-gray">aucane resultat pour {{ $query }}</span>
        @endif

    </div>

    @endif
   </div>

</div>
