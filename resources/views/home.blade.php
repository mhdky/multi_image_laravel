<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Upload Multi Image Laravel</title>
</head>
<body>
    <div class="bg-zinc-300 w-[800px] mx-auto mt-10 flex rounded-md p-5">
        {{-- image --}}
        <div class="mr-2">
            {{-- image active --}}
            <img src="{{ asset('img/product-1.jpg') }}" alt="" class="w-[300px]">

            {{-- images --}}
            <div class="w-[300px] grid grid-cols-4 gap-1 mt-5">
                <div class="border-2 h-[70px] border-transparent hover:border-blue-500">
                    <img src="{{ asset('img/screenshot-mhdky.github.io-2022.05.17-19_25_48.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="border-2 h-[70px] border-blue-500">
                    <img src="{{ asset('img/product-1.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="border-2 h-[70px] border-transparent hover:border-blue-500">
                    <img src="{{ asset('img/product-5.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="border-2 h-[70px] border-transparent hover:border-blue-500">
                    <img src="{{ asset('img/product-5.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="border-2 h-[70px] border-transparent hover:border-blue-500">
                    <img src="{{ asset('img/product-5.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="border-2 h-[70px] border-transparent hover:border-blue-500">
                    <img src="{{ asset('img/product-5.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        {{-- title --}}
        <div class="ml-2">
            <h1 class="text-blue-600 text-xl font-bold">{{ Str::title('Baju Baja Yang Lain Lewat Mah') }}</h1>
            <p class="mt-2">XL</p>
            <p class="mt-2">Rp. 300.000.000</p>
        </div>
    </div>
</body>
</html>