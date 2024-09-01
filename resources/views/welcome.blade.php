
 <x-layout>
    <x-slot name="Title">
        Home
        </x-slot>
    <x-navbar></x-navbar>
    
      <div class="container-square" style="height:900px">
<h1 class=" testo mx-2"><br>Let's <span class="start">Start,</span> <br> <span class="colore2 mx-5">Let's</span>  <span class="colore">Create.</span> </h1>
      </div>
      {{-- posizionato sotto per non rompere il layout --}}
      @if (session('emailSent'))
      <div class="alert alert-success">
          {{ session('emailSent') }}
      </div>
  @endif
    {{-- {{$slot}} --}}

</x-layout>
    