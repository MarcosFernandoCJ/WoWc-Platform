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

<body class="bg-base-100 flex flex-col min-h-screen w-full">
    <header class="shadow-md w-full">
        <nav class="bg-primary dark:bg-neutral-800 p-6 flex items-center gap-2 justify-between">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>

            <section class="flex flex-row items-center text-3xl text-white gap-6 ">
                <span class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <span class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <span class="icon-[heroicons--user-circle-solid] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative justify-center ">
        <nav id="menu" class="text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full ">
                <ul class="flex flex-col gap-2 w-full">
                    <x-sidebar-item name="Personaje">
                        <x-slot name="icon">
                            <span class="icon-[heroicons--user-solid]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    <x-sidebar-item name="Misiones">
                        <x-slot name="icon">
                            <span class="icon-[mingcute--task-2-fill]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    <x-sidebar-collapse name="Gremio">
                        <x-slot name="icon">
                            <span class="icon-[game-icons--vertical-banner]"></span>
                        </x-slot>

                        <x-slot name="items">

                            <x-sidebar-subitem name="Miembros">
                                <x-slot name="icon">
                                    
                                </x-slot>
                            </x-sidebar-subitem>

                            <x-sidebar-subitem name="Grupo">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--users-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                        </x-slot>
                    </x-sidebar-collapse>
                    <x-sidebar-item name="Misiones">
                        <x-slot name="icon">
                            <span class="icon-[mingcute--task-2-fill]"></span>
                        </x-slot>
                    </x-sidebar-item>
                </ul>
                
            </div>
        </nav>
        <div class="text-lg flex flex-col gap-2  mt-5 w-3/6 h-3/4 p-4 rounded-md overflow-y-auto">
            
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>
                
                <x-slot name="description">
                <p>Hacer un Login con express y mongodb</p>                        
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false" class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept </button>
                      </div>                       
                </x-slot>
                
            </x-mision-collapse>
            
            
            
            
            
            </div>
    </main>
    
    <x-script-board>
        {{-- script componente --}}
    </x-script-board>
    
</body>

</html>

















