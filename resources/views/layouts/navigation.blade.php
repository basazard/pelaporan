<aside class="w-full h-screen dark:bg-gray-800 bg-[#07A287] overflow-y-auto">
    <div class="flex flex-col">
        <div class="flex justify-center my-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/dylan.jpg') }}" class="w-16 h-16 rounded-full" />
                <span class="text-gray-200 dark:text-gray-100 text-md mt-3 font-semibold tracking-wider">{{
                    auth()->user()->name }}</span>
                <span class="text-gray-200 dark:text-gray-100 font-extralight text-md mt-1">Verifikator Finance</span>
            </div>
        </div>

        @foreach ($screengroups as $screengroup)
        <div class="px-6 py-2 text-md text-gray-200 dark:text-gray-100 font-semibold">
            <span>{{ $screengroup->description }}</span>
            @foreach ($screengroup->screens as $screen)
            <div x-data="{ open: false }">
                @if (count($screen->subscreens) > 0)
                <div class="flex items-center justify-between px-4 py-2 font-normal text-md hover:bg-gray-900 transition rounded-lg mt-1"
                    @click="open = ! open">
                    <span>
                        {{ $screen->description }}
                    </span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </div>

                @foreach ($screen->subscreens as $subscreen)
                <div class="px-8 py-2 text-md font-extralight list-disc list-inside bg-gray-700 rounded-lg mt-1"
                    x-show="open" x-transition.duration.300ms>
                    <a href="{{ $subscreen->subscreen_id }}">{{
                        $subscreen->description }}</a>
                </div>
                @endforeach
                @else
                <a href="{{ $screen->screen_id }}"
                    class="flex w-full px-4 py-2 font-normal text-md hover:bg-gray-900 transition rounded-lg mt-1">
                    {{ $screen->description }}
                </a>
                @endif

            </div>
            @endforeach
        </div>
        @endforeach

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="px-6 py-2 text-md text-gray-900 dark:text-gray-100 font-semibold" :href="route('logout')"
                onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</aside>