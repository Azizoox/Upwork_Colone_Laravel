{{-- index page --}}
@extends('layouts.app')

@section('content')
  <h2 class="text-xl text-green-400 mb-4    "> Nos derniers mission</h2>
  @foreach($jobs as $job)
   <livewire:job :job="$job">
  @endforeach
@endsection
