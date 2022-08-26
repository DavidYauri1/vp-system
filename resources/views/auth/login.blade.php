<x-guest-layout>
    <div class="container py-16 px-6 h-full ">
        <div class="flex justify-center items-center flex-wrap h-full  text-gray-800">
            <div class="xl:w-10/12">
                <div class="block bg-white shadow-2xl rounded-lg">
                    <div class="lg:flex lg:flex-wrap g-0">
                        <div class="lg:w-6/12 px-4 md:px-0">
                       <div class="md:p-12 md:mx-6">
                            <div class="text-center">
                                    <img
                                    class="mx-auto w-48"
                                    src="https://worldvision.pe/photos/shares/NOTICIAS/Logo%20png.png"
                                    alt="logo"
                                    />
                                    <h4 class="text-2xl font-medium mt-20 mt-1 mb-12 pb-1 tracking-wider font-sans"> INICIAR SESIÓN</h4>
                            </div>
                                    <x-slot name="logo">
                                        <a href="/">
                                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                        </a>
                                    </x-slot>
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                                
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email Address -->
                                    <div class="mb-4">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />
                                    </div>

                                  

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    
                                    

                                    

                                    <div class="flex items-center justify-end mt-4 pb-6">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

                                        <x-button class="ml-3">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                                 <div
                                    class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                                    style=" background: linear-gradient(to right,#ee7724, #f46256,#ffa666,#ffc399);" >
                                    <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                                    <h3 class="text-2xl font-semibold mb-6 ">WORLD VISION PERÚ </h>
                                    <p class="text-sm">
                                    Organización cristiana de ayuda humanitaria, desarrollo y promoción 
                                    de la justicia, dedicada a trabajar con niños, niñas, familias y 
                                    comunidades para reducir la pobreza e injusticia. World Vision 
                                    sirve a todas las personas, sin distinción de raza, religión, 
                                    grupo étnico o género. 
                                    </p>
                                    </div>
                                </div>    
                    </div> 
                   
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

