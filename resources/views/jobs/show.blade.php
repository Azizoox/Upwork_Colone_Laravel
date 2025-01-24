@extends('layouts.app')

@section('content')
  <h1 class="text-3xl text-green-500 mb-5">{{ $job->title }}</h1>
  <p class="text-base text-gray-700 mb-4">
  {{ $job->description }}
  </p>
  <button type="submit" id="btn"  class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md px-4 py-2 mt-3">soummettre </button>
  <form action="/submit/{{ $job->id}}" method="POST">
    @csrf
    <div class="mt-7" id="div" style="display: none">
        <textarea class="font-thin border-2" cols="30" rows="10" name="content">frf</textarea><br/>
        <button type="submit" class="bg-green-700 text-white px-2 py-1 rounded-full">soummettre </button>

      </div>
  </form>
  <script>
    let btna=document.getElementById("btn");
    let div=document.getElementById("div");
    btna.onclick=function(){
        div.style.display='block';
    }
  </script>

@endsection
