<x-app-layout>
    {{-- Navbar Section --}}
    <x-navbar />

    {{-- Hero Carousel Section --}}
    <x-carousel />

    <div class="container mx-auto">
        {{-- Promo Section --}}
        <img src="/images/banner.png" alt="banner promo" class="my-12 mx-auto w-full">

        {{-- Product Section --}}
        <div class="mb-56">
            <x-card :product="$product"/>
        </div>

        <div>
        <x-footer></x-footer>
        </div>
    </div>

</x-app-layout>
