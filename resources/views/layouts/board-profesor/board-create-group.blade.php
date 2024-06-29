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

        <div class="bg-white w-full flex flex-col">
            
            <section class=" h-30 p-2 justify-center items-center">
                <div class="p-2 space-y-2 flex flex-col items-center">
                    <h2 class=" text-black font-semibold text-2xl">Crear grupos</h2>
                    <p class=" text-neutral-600">Arastar y soltar alumnos en los grupos</p>
                </div>
            </section>


            <section class=" h-full flex w-full flex-col gap-2 p-2 overflow-auto
            ">   

                <div class=" h-full flex w-full flex-row gap-2 px-2">

                    <div class=" w-4/12 flex flex-col gap-2 p-2 bg-neutral-300">
                        <div class="flex h-20 items-center justify-center">
                            <p class="text-xl text-black">Alumnos no asignados</p>
                        </div>

                        <div class="flex h-full flex-col gap-2 overflow-auto  justify-center p-2">
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                        </div>
                    </div>

                    <div class=" w-full grid grid-cols-2 text-black items-center gap-2 border-2 border-black p-2">
                        <div class="bg-white w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            <div class=" flex flex-row items-center justify-between ">
                                <div>
                                    <div class="h-16 w-16 rounded-full bg-neutral-200"></div>
                                </div>
                                <div class=" p-2 gap-2 flex w-full">
                                    <input type="text" placeholder="nombre de equipo" class="border-0 border-b-2 bg-transparent focus:border-transparent w-full" />
                                    <span>xd</span>
                                </div>
                            </div>
                            <div class="gap-2 p-2 flex flex-col justify-center items-center h-full flex-grow text-neutral-500">
                                <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                                <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            </div>
                        </div>

                        <div class="bg-white w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            <div class=" flex flex-row items-center justify-between ">
                                <div>
                                    <div class="h-16 w-16 rounded-full bg-neutral-200"></div>
                                </div>
                                <div class=" p-2 gap-2 flex w-full">
                                    <input type="text" placeholder="nombre de equipo" class="border-0 border-b-2 bg-transparent focus:border-transparent w-full" />
                                    <span>xd</span>
                                </div>
                            </div>
                            <div class="gap-2 p-2 flex flex-col justify-center items-center h-full flex-grow text-neutral-500">
                                <p>Arastrar un jugador</p>
                            </div>
                        </div>

                        <div class="bg-white w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            
                            <div class="gap-2 p-2 flex flex-row justify-center items-center h-full flex-grow text-neutral-500">
                                <span class="icon-[gridicons--add] text-4xl"></span>
                                <p class="text-xl">Arastrar un jugador</p>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="flex justify-end pr-2">
                    <button class="p-1 w-16 border-2 border-black bg-white rounded-xl text-black font-semibold"><p>hola</p></button>
                </div>

            </section>

        </div>
        
    </main>
    
    <x-script-board>
        
    </x-script-board>
    
</body>

</html>