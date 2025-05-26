                <!-- Logo --> 
                <div class="shrink-0 flex items-center"> 
                    @if (Auth::user()->role == 'dokter') 
                        <a href="{{ route('dokter.dashboard') }}"> 
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> 
                        </a> 
                    @elseif(Auth::user()->role == 'pasien') 
                        <a href="{{ route('pasien.dashboard') }}"> 
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> 
                        </a> 
                    @endif 
                </div> 
 
                <!-- Navigation Links --> 
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"> 
                    @if (Auth::user()->role == 'dokter') 
                        <x-nav-link :href="route('dokter.dashboard')" :active="request()->routeIs('dokter.dashboard')"> 
                            {{ __('Dashboard') }} 
                        </x-nav-link> 
                    @elseif(Auth::user()->role == 'pasien') 
                        <x-nav-link :href="route('pasien.dashboard')" :active="request()->routeIs('pasien.dashboard')"> 
                            {{ __('Dashboard') }} 
                        </x-nav-link> 
                    @endif 
                </div> 
                <!-- Responsive Navigation Menu --> 
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden"> 
                <div class="pt-2 pb-3 space-y-1"> 
                @if (Auth::user()->role == 'dokter') 
                    <x-responsive-nav-link :href="route('dokter.dashboard')" :active="request()->routeIs('dokter.dashboard')"> 
                        {{ __('Dashboard') }} 
                    </x-responsive-nav-link> 
                @elseif(Auth::user()->role == 'pasien') 
                    <x-responsive-nav-link :href="route('pasien.dashboard')" :active="request()->routeIs('pasien.dashboard')"> 
                        {{ __('Dashboard') }} 
                    </x-responsive-nav-link> 
                @endif