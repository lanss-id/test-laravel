<div>
    <div class="mb-16 text-center">
        <h1 class="text-xl font-semibold capitalize mb-4">product popular</h1>
        <a class="py-2 px-8 border-2 border-red-700 text-red-700">View All</a>
    </div>
    <div class="bg-white grid grid-cols-3 gap-20">
        @foreach ($product as $item)
        @php
            $priceDiscount = $item->price - ($item->price * $item->discount / 100);
        @endphp
        <div>
            <a href="#">
                <img class="rounded-t-lg" src="{{ $item->image }}" alt="" />
            </a>
            <div class=" flex flex-col justify-center text-center">
                <a href="#">
                    <h5 class="mb-2 text-lg font-medium capitalize tracking-wide text-white py-2 bg-red-700">{{ $item->name }}</h5>
                </a>
                <div class="text-2xl font-normal text-gray-700">
                    <p class="line-through">
                       IDR {{ number_format($item->price, 0, ',', '.') }}
                    </p>
                    <P>
                        IDR {{ number_format($priceDiscount, 0, ',', '.') }}
                    </P>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
