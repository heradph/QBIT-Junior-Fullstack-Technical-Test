<x-layout>
    <div class="bg-white">
        <div class="relative isolate overflow-hidden bg-white px-6  lg:overflow-visible lg:px-0">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute top-0 left-[max(50%,25rem)] h-256 w-512 -translate-x-1/2 mask-[radial-gradient(64rem_64rem_at_top,white,transparent)] stroke-gray-200"
                    aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                            patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path
                            d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                            stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                        fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="grid px-4 grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-6">
                <div class="h-32 rounded bg-gray-300"><img src="img/kantin.png" class="object-cover w-full h-full"
                        alt=""></div>
                <div class="h-32 rounded bg-gray-300"><img src="img/kantin2.png" class="object-cover w-full h-full"
                        alt=""></div>
            </div>
            <div class="mx-auto max-w-2xl px-4 py-16 lg:max-w-7xl lg:px-6 lg:py-10">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Menu</h2>
                {{ $menus->links() }}
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($menus as $menu)
                        <div class="group relative">
                            <img src="{{ $menu->thumbnail }}" alt="Front of men&#039;s Basic Tee in black."
                                class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="/menus/{{ $menu->slug }}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $menu->name }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $menu->description }}</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">
                                    Rp{{ number_format($menu->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- More products... -->
                </div>
            </div>
        </div>
    </div>
</x-layout>
