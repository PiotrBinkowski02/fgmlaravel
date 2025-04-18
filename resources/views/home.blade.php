@extends('layouts.app')

@section('title', "Fundacja Głos Młodych - Fundacja na rzecz promocji i rozwoju")
@section('meta-description', "Fundacja Głos Młodych - działania na rzecz promocji i rozwoju, wspieranie innowacyjności, inicjatyw kulturalnych, edukacyjnych i społecznych.")

@section('content')
<!-- Slajdy -->
<main class="flex flex-col justify-center items-center w-full">
    <section class="w-full min-h-auto hidden md:block">
        <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" id="default-carousel"
            class="relative cursor-pointer w-full" data-carousel="slide">
            <div class="relative h-300 max-w-full lg:w-[1470px] mx-auto overflow-hidden lg:h-[450px]">

                @foreach($gallery as $lide)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset($lide['img']) }}" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full w-full object-cover" alt="{{ $lide['alt'] }}">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400 lg:text-4xl"
                        x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 -translate-y-6"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-6">{{ $lide['header'] }}</h2>
                            <br>
                            <hr class="border-t-[1px] w-32 font-bold m-auto">
                            <br>
                            <div class="lg:mt-12 lg:text-2xl">
                                <ul class="space-y-3">
                                    @if($lide['p1'])<li class="inline-block bg-stone-900 bg-opacity-25 w-auto">{{ $lide['p1'] }}</li>@endif
                                    @if($lide['p2'])<li class="inline-block bg-stone-900 bg-opacity-25 w-auto">{{ $lide['p2'] }}</li>@endif
                                    @if($lide['p3'])<li class="inline-block bg-stone-900 bg-opacity-25 w-auto">{{ $lide['p3'] }}</li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- sterowanie sliderami -->
                <button x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 -translate-x-6" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-400" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0 -translate-x-6" type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 translate-x-6" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-400" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0 translate-x-6" type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
                <!-- Slidery -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 opacity-75 transition duration-200 hover:opacity-100 space-x-3 rtl:space-x-reverse hidden lg:block">
                    @foreach($gallery as $index => $slide)
                        <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-zinc-100 bg-opacity-25 min-h-72 px-4 w-full">
        <div class="flex flex-nowrap flex-col md:flex-row justify-center py-8 w-full md:space-x-12 space-y-12 md:space-y-0">
            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-sky-400 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Praktyki uczelniane i nie tylko</h5>
                <p class="text-lg font-medium text-gray-700">Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania. Zdobycie doświadczenia będącego przepustka do przyszłej kariery i osiągniecia zaplanowanych celów.</p>
            </div>

            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-green-400 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Fundacja na rzecz promocji i rozwoju Głos Młodych</h5>
                <p class="text-lg font-medium text-gray-700">to organizacja pozarządowa o charakterze non-profit. Fundacja utrzymywana jest ze środków własnych Fundatora i drobnych darowizn ludzi dobrej woli.</p>
            </div>

            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-fuchsia-600 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Realizując praktyki uczelniane uwzględniamy</h5>
                <p class="text-lg font-medium text-gray-700">programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk. Wystawiamy stosowne dokumenty. Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnieć i umiejętności.</p>
            </div>
        </div>
    </section>

    <section class="w-full relative">
        <div class="relative w-full max-w-full min-h-40 mx-auto h-full md:h-[450px] lg:w-[1470px] bg-[url('{{ asset('images/licznik22.png') }}')] bg-cover">
            <div class="grid lg:grid-cols-8 gap-y-20 md:gap-4 text-white text-center h-full w-full py-8">
                <h3 class="col-start-4 md:col-start-2 md:col-span-6 text-4xl">Nasze ostatnie dokonania <strong>w liczbach!</strong></h3>
                <div class="col-start-4 md:col-start-2 md:col-span-2 text-3xl">Zrealizowaliśmy <br><strong class="text-5xl">{{ number_format($praktykiCount, 0, ',', ' ') }}</strong><br> praktyk</div>
                <div class="col-start-4 md:col-span-2 text-3xl">w tym <br><strong class="text-5xl">{{ number_format($praktykiUczelnianeCount, 0, ',', ' ') }}</strong><br> praktyk uczelnianych</div>
                <div class="col-start-4 md:col-start-6 md:col-span-2 text-3xl">Współpracujemy z <br><strong class="text-5xl">{{ number_format($wspolpracaCount, 0, ',', ' ') }}</strong><br> osobami</div>
                <div class="col-start-4 md:col-start-1 md:col-span-8 text-xl">Z zakresu dziennikarstwa, redakcji,
                    tłumaczeń, moderowania, programowania -różne technologie, reklamy, social mediów, administracji
                    systemów serwerowych, fotografii, ogólnie rozumianej grafiki , HR-u, administracji.</div>
            </div>
        </div>
    </section>

    <section>
        <div class="grid lg:grid-cols-2 items-start w-full max-w-full xl:max-w-[1470px] mx-auto my-4">
            <div class="space-x-2 flex flex-col mb-12">
                <h1 class="text-center text-3xl font-bold">Aktualności</h1>

                @forelse($aktualnosci as $newsItem)
                    <div class="min-w-96 max-w-1/2 basis-1/3 flex-1 min-h-48">
                        <div class="items-center px-2 min-h-[150px] w-full bg-white md:flex-row">
                            <img class="float-left pr-2 w-[150px] max-w-full h-[150px] max-h-full object-cover"
                                 src="{{ asset($newsItem['image']) }}"
                                 alt="{{ $newsItem['title'] }}">
                            <div class="flex flex-col justify-center flex-wrap p-4 leading-normal text-sm">
                                <h5 class="mb-2 font-semibold tracking-tight text-base text-blue-700 hover:text-red-500">
                                    <a href="{{ route('posts.show', $newsItem['slug']) }}">
                                        {{ $newsItem['title'] }}
                                    </a>
                                </h5>
                                <p class="mb-3 font-normal break-all">{{ $newsItem['desc'] }}</p>
                                <p class="self-end">
                                    <a href="{{ route('posts.show', $newsItem['slug']) }}"
                                       class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">
                                       Czytaj Dalej
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Brak aktualności do wyświetlenia.</p>
                @endforelse

                <div class="text-center font-semibold text-blue-600"><a href="{{ route('news.index') }}">Zobacz Wszystkie</a></div>
            </div>

            <div class="space-x-2 flex flex-col mb-12">
                <h1 class="text-center text-3xl font-bold">Projekty</h1>

                @forelse($projekty as $projectItem)
                    <div class="min-w-96 max-w-1/2 basis-1/3 flex-1 min-h-48">
                        <div class="items-center px-2 min-h-[150px] w-full bg-white md:flex-row">
                            <img class="float-left pr-2 w-[150px] max-w-full h-[150px] max-h-full object-cover"
                                 src="{{ asset($projectItem['image']) }}"
                                 alt="{{ $projectItem['title'] }}">
                            <div class="flex flex-col justify-center flex-wrap p-4 leading-normal text-sm">
                                <h5 class="mb-2 font-semibold tracking-tight text-base text-blue-700 hover:text-red-500">
                                    <a href="{{ route('posts.show', $projectItem['slug']) }}">
                                        {{ $projectItem['title'] }}
                                    </a>
                                </h5>
                                <p class="mb-3 font-normal break-all">{{ $projectItem['desc'] }}</p>
                                <p class="self-end">
                                    <a href="{{ route('posts.show', $projectItem['slug']) }}"
                                       class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">
                                       Czytaj Dalej
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Brak projektów do wyświetlenia.</p>
                @endforelse

                <div class="text-center font-semibold text-blue-600"><a href="{{ route('projects.index') }}">Zobacz Wszystkie</a></div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col justify-center align-center items-center my-24">
            <h4 class="font-semibold text-lg">Pomóż nam promować talenty !</h4><br>
            <h2 class="font-semibold text-3xl">Skontaktuj się z nami!</h2><br>
            <p>Tel: <a href="tel:+48{{ str_replace(' ', '', $phone1) }}" class="underline text-blue-600">{{ $phone1 }}</a>,
                   <a href="tel:+48{{ str_replace(' ', '', $phone2) }}" class="underline text-blue-600">{{ $phone2 }}</a></p><br>
            <p>e-mail: <a href="mailto:{{ $email }}"
                    class="underline text-blue-600">{{ $email }}</a></p><br>
        </div>
    </section>
</main>
@endsection