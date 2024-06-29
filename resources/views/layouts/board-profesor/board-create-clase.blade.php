<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-base-300 flex flex-col min-h-screen w-full">
    <header class="shadow-md w-full">
        <nav class="bg-primary dark:bg-neutral-800 p-3 flex items-center gap-2 justify-between">
            <div class="flex flex-row">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
                
            </label>
            <div class=" ml-52 h-12  duration-500 pl-4 border-l-2" id="list-navegation">
                <div class="text-2xl breadcrumbs">
                    <ul>
                      <li><a>2024-BDA-AB</a></li> 
                      <li>Avatar</li>
                    </ul>
                </div>
            </div>
              </div>
            
            <section class="flex flex-row items-center text-3xl text-white gap-6 ">    
                <span class="icon-[mdi--share-variant] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span> 
                <p class="text-xs">Compartir Configuración</p>
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative  ">
        
        <nav id="menu" class=" text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full ">
                <ul class="flex flex-col gap-2 w-full justify-between">
                    <div >
                    <x-sidebar-item name="Hogar">
                        <x-slot name="icon">
                            <span class="icon-[heroicons--user-solid]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    <x-sidebar-item name="Clase">
                        <x-slot name="icon">
                            <span class="icon-[mingcute--task-2-fill]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Logout') }}
                    </a>
                    </form> --}}
                    </div>
                    <div class="justify-between ">
                        
                        
                        
                    </div>
                </ul>
                
                
            </div>
            
        </nav>

        <div class="bg-white w-full flex flex-col gap-2">
            
            <section class="bg-orange-300 h-30 p-2 justify-center items-center">Section tile
                <div class="bg-green-500 p-2 space-y-2">
                    <p class="bg-red-300">title 1</p>
                    <p class="bg-red-300">title 2</p>
                </div>
            </section>


            <section class="bg-orange-300 h-full flex w-full flex-col gap-2 p-2">section content

                <div class="bg-blue-300 h-full flex w-full flex-row gap-2 p-2">

                    <div class="bg-red-500 w-4/12 flex flex-col gap-2 p-2">content-nobres
                        <div class="flex bg-yellow-300 h-20">title-content-nombre

                        </div>

                        <div class="flex bg-yellow-300 h-full ">content-nombre

                        </div>
                    </div>

                    <div class="bg-red-500 w-full grid-rows-2 gap-2 text-black">conten-grupos
                        <div class="bg-white h-32 w-32">hola</div>
                        <div class="bg-white h-32 w-32">hola</div>
                    </div>

                </div>

                <div class="bg-red-400 flex justify-end p-2">
                    <button class="btn"><p>hola</p></button>
                </div>

            </section>

        </div>
        
    </main>
    
    <x-script-board>
        
    </x-script-board>
    
</body>

</html>