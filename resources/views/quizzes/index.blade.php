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
        <nav class="bg-primary dark:bg-neutral-800 p-3 flex items-center gap-2 justify-between ">
            
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
                
                <div class="dropdown dropdown-end">
                <span tabindex="0" role="button" class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-[17vh]" tabindex="0">
                    <div class="flex justify-center items-center bg-yellow-600 h-10 w-full">
                        <h1 class="text-2xl">Acciones de jugador</h1>
                    </div>
                </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                        
                        <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-16" tabindex="0">
                            <div class="flex justify-center items-center bg-red-700 h-10 w-full">
                                <h1 class="text-2xl">Daño inferido</h1>
                            </div>
                        </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[heroicons--user-circle-solid] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer "></span>
                        <ul tabindex="0" class="text-slate-950 dropdown-content z-[1] menu rounded-md bg-yellow-500 w-32 mt-6">
                          <li><a>Mi perfil</a></li>
                          <li><a>Salir</a></li>
                        </ul>
                </div>
                  
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative  ">
        
        <nav id="menu" class=" text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full ">
                <ul class="flex flex-col gap-2 w-full justify-between">
                    <div >
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
                                    <span class="icon-[heroicons--user-group-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                            <x-sidebar-subitem name="Grupo">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--users-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                        </x-slot>
                    </x-sidebar-collapse>
                    </div>
                    <div class="justify-between ">
                        
                        <x-sidebar-item name="Salida">
                            <x-slot name="icon">
                                <span class="icon-[material-symbols--exit-to-app]"></span>
                            </x-slot>
                        </x-sidebar-item>
                        
                    </div>
                </ul>
                
                
            </div>
            
        </nav>
        <div class="bg-white w-full flex justify-center text-black flex-col gap-2 items-center p-2">
            <div class="flex w-4/5 flex-col border-2 border-black h-full">
            <section class=" w-full flex p-2">
                <div class="
                 p-2 w-full flex flex-col">
                    <h1 class="text-2xl font-semibold">EXAM QUIZ</h1>
                    <hr class="border border-black">
                </div>
            </section>

            <section class=" w-full flex p-2 flex-col gap-2">
                <section class="w-full space-y-2 justify-center p-2">
                    
                        <form method="POST" action="{{ route('quizzes.check') }}" class="flex flex-col gap-y-2 overflow-auto h-[30rem]">
                                @csrf
                            @foreach($quizzes as $quiz)
                            <div>
                                <div class=" border-2 border-black border-b-0 flex flex-row justify-between bg-red-500 p-2">
                                    <h3 class="text-2xl">Pregunta</h3>
                                    <h2 class="text-2">2 pts</h2>
                            
                                </div>

                                <div class="bg-white flex flex-col justify-betwee p-2  flex-grow border-2 border-black">
                                    <h2 class="text-2xl pb-4">
                                        {{ $quiz->question }}
                                    </h2>
                                @foreach($quiz->answers as $answer)
                                    <div class="flex flex-col justify-between p-2 gap-1">
                                        <div class="flex flex-row gap-1 items-center">
                                            <input type="radio" name="answerselected[{{ $quiz->id }}]" value="{{ $answer }}">
                                            <label for="{{ $answer }}{{ $quiz->id }}">{{ $answer }}</label>
                                        </div>
                                    </div>

                                @endforeach

                                </div>
                            </div>
                            @endforeach

                </section>
                            <button class="btn" type="submit">
                                <p class="text-xl">Entregar</p>
                            </button>
                        </form>
                    </div>
                
            </section>
            
        
    </div>  
    </main>
    
    <x-script-board>
        {{-- script componente --}}
    </x-script-board>
    
</body>

</html>

















