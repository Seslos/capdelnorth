<x-app-layout>

                <!-- Container for demo purpose -->
                <div class="container my-24 mx-auto md:px-6">
                    <!-- Section: Design Block -->
                    <section class="mb-32">
                      <div class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat bg-[url('https://mdbcdn.b-cdn.net/img/new/textures/full/284.jpg')]"></div>
                      <div class="container px-6 md:px-12">
                        <div class="block rounded-lg bg-[hsl(0,0%,100%)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[#fffefe] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
                          @if (session('info'))
                              <script>
                                alert("{{session('info')}}");
                              </script>
                          @endif
                          <div class="flex flex-wrap">
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                              <form action="{{route('contactanos.store')}}" method="POST">
                             @csrf
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                  <label class="text-base font-semibold leading-none text-gray-800 dark:text-black" >Nombre</label>
                                  <input type="text" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 block " name="name">
                                @error('name')
                                    <p><strong>{{$message}}</strong></p>
                                @enderror

                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <label class="text-base font-semibold leading-none text-gray-800 dark:text-black">email</label>
                                    <input type="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 block" name="email">
                                  </div>
                                  @error('email')
                                  <p><strong>{{$message}}</strong></p>

                                  @enderror
  
                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your message</label>
                                  <textarea id="message" rows="4" name="descr" class="block p-2.5 w-full text-sm text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                  
                                  @error('descr')
                                  <p><strong>{{$message}}</strong></p>

                                  @enderror
  
                                </div>
                            
                                <button type="submit" data-te-ripple-init data-te-ripple-color="light"
                                  class="flex w-full justify-center rounded-md border border-transparent bg-sky-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
                                  Send
                                </button>
                              </form>
                            </div>
                          
                            <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                              <div class="flex flex-wrap">
                                @foreach ($contacto as $contactos)
                                <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                  <div class="flex items-start">
                                    <div class="shrink-0">
                                      <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" class="h-6 w-6">
                
                                          <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                        </svg>
                                      </div>
                                    </div>
                
                             
                                    <div class="ml-6 grow">
                                      <p class="mb-2 font-bold dark:text-black">
                                        {{$contactos->name}}
                                      </p>
                              
                                      <p class="text-neutral-500 dark:text-black-200">
                                        {{$contactos->contacto}}
                                      </p>
                                    </div>
                                 
                                  </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                        
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- Section: Design Block -->
                  </div>
</x-app-layout>