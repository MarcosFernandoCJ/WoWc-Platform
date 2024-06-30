@extends('layouts.main.player')

@section('content')
    <div class="bg-black  w-full flex justify-center">
        <div class="w-3/5 flex flex-col justify-center">
            <div class="collapse bg-base-200">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium">Click me to show/hide content</div>
                <div class="collapse-content">
                  <p>hello</p>
                </div>
              </div>
            <x-mision-collapse title="Mision 1 " text=' Mongodb'>

                <x-slot name="description">
                    <p>Hacer un Login con express y mongodb</p>
                </x-slot>
                <x-slot name="button">
                    <div class="border-t px-4 py-2 flex justify-between">
                        <span>500 XP</span>
                        <button x-on:click="open = false"
                            class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept
                        </button>
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
                        <button x-on:click="open = false"
                            class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept
                        </button>
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
                        <button x-on:click="open = false"
                            class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept
                        </button>
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
                        <button x-on:click="open = false"
                            class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept
                        </button>
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
                        <button x-on:click="open = false"
                            class="px-3 py-1 bg-neutral-800 text-white  rounded-md w-full sm:w-auto"> Accept
                        </button>
                    </div>
                </x-slot>

            </x-mision-collapse>

        </div>
    </div>
@endsection