{{-- job blade livwire --}}
<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded  border-gray-300 border ">

        <div class="flex justify-between align-items-center">
            <h2 class="text-xl font-bold text-green-400 ">{{ $job->title }}</h2>
            <button class="h-5 w-5 text-gray-500 " wire:click='like'>

                <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
            </button>
        </div>



        <p class="text-md text-gray-400">{{ $job->description }}</p>
        <div class="">
            <a href="/jobs/{{ $job->id }}"> Consulter la mission</a>
        </div>
        <span class="text-sm text-gray-400">{{ $job->price }}</span>
    </div>
</div>
