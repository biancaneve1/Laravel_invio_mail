<x-layout>
<x-slot name="Title">
Contatti
</x-slot>

<x-navbar></x-navbar>


<div class="container-black" style="height:900px">
<div class="container  ">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- form --}}
            <div class="form-card1">
                <div class="form-card2">
                  <form class="form" method="POST" action="{{route('invia.dati')}}">
                    @csrf
                    
                    {{-- snippet per errore in sessione --}}
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error')}}
                    </div>
                @endif

                    <p class="form-heading ">GET IN TOUCH</p>
                 
                    <div class="form-field">
                      
                     
                      <input  required=""
                        class="input-field" 
                        placeholder="NAME"
                        type="text" name="name" />
                    </div>
           
                    <div class="form-field">
                    
                      <input
                        required=""
                        placeholder="EMAIL"
                        class="input-field"
                        type="email"
                        name="email"
                      />
                    </div>
              
                    <div class="form-field">
                      <input
                        required=""
                        placeholder="SUBJECT"
                        class="input-field"
                        type="text"
                        name="info"
                      />
                    </div>
              
                    <div class="form-field">
                      <textarea
                        required=""
                        placeholder="MESSAGE"
                        cols="30"
                        rows="3"
                        class="input-field"
                        name="message"
                      ></textarea>
                    </div>
              
                    <button class="sendMessage-btn">SEND MESSAGE</button>
                  </form>
                </div>
              </div>
               </div>
               {{-- fine form --}}
            </div>
          
    </div>
</div>



</x-layout>