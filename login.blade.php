<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />



    <section class="w-full min-h-screen flex items-stretch">
        <div
            class="lg:flex w-1/2 hidden  bg-no-repeat bg-cover relative items-center  bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')]">
            <div class="absolute  opacity-60 inset-0 z-0"></div>
        </div>
        <div class="lg:w-1/2 w-full flex  items-center justify-center  md:px-16 px-0 z-0 ">
            <div
                class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')] ">
                <div class="absolute  bg-gray-600 opacity-60 inset-0 z-0 "></div>
            </div>
            <div class="w-full  z-20 m-[60px]">
                <h1 class="text-4xl font-semibold mb-8 text-white lg:text-text-dark  text-center ">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex  -mx-3">
                        <div class="w-full px-3 mb-5">
                            
                        <!-- Email Address -->
                            <div>
                                <x-forms.input-label for="email" class=" text-white text-[16px] lg:text-text-dark"
                                    :value="__('Email')" />
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail text-gray-400 text-lg" width="25"
                                            height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                    </div>
                                    <x-forms.text-input id="email"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 border rounded-md  border-gray-200 outline-none focus:border-blue-500"
                                        placeholder="Enter your email" type="email" name="email" :value="old('email')"
                                        required autofocus autocomplete="username" />
                                </div>
                                <x-forms.input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <div class="mt-4">
                                <x-forms.input-label for="password" class=" text-white lg:text-text-dark"
                                    :value="__('Password')" />
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-samsungpass text-gray-400 text-lg"
                                            width="25" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 10m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                            <path d="M7 10v-1.862c0 -2.838 2.239 -5.138 5 -5.138s5 2.3 5 5.138v1.862" />
                                            <path
                                                d="M10.485 17.577c.337 .29 .7 .423 1.515 .423h.413c.323 0 .633 -.133 .862 -.368a1.27 1.27 0 0 0 .356 -.886c0 -.332 -.128 -.65 -.356 -.886a1.203 1.203 0 0 0 -.862 -.368h-.826a1.2 1.2 0 0 1 -.861 -.367a1.27 1.27 0 0 1 -.356 -.886c0 -.332 .128 -.651 .356 -.886a1.2 1.2 0 0 1 .861 -.368h.413c.816 0 1.178 .133 1.515 .423" />
                                        </svg>

                                    </div>

                                    <x-forms.text-input id="password"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-blue-500"
                                        placeholder="Password" type="password" name="password" required
                                        autocomplete="current-password" />

                                    <x-forms.input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mt4 mb-2 flex-wrap">
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none"
                                    checked name="remember">
                                <span
                                    class="ml-2 text-[16px] text-white lg:text-gray-700 dark:text-gray-300">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="hover:underline text-[16px]  float-right text-error-dark lg:text-secondary-dark  hover:text-secondary-darker "
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <x-primary-button
                        class="bg-primary hover:bg-primary-darker text-white items-center text-center font-semibold rounded-md py-2 px-4 w-full ">
                        <div class="text-[16px] text-center">
                            {{ __('Log in') }}
                        </div>
                    </x-primary-button>
                </form>
                <div class="mt-6 text-blue-500 text-center">
                    <a href="#"
                        class="hover:underline text-[16px] text-error-dark lg:text-secondary-dark  hover:text-secondary-darker">Sign
                        up Here</a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>