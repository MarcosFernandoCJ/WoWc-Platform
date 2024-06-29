<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-red-300 flex flex-grow h-screen">
    <div class="
    bg-[url('https://www.adslzone.net/app/uploads-adslzone.net/2019/04/borrar-fondo-imagen-1.jpg')] bg-no-repeat text-black bg-white border-2 border-black rounded-lg flex-col justify-center items-center flex w-full">
        <div class="w-56 h-56 ">
        <h1>Quiz Result</h1>
        <p>Your score: {{ $result }}%</p>
        <a href="{{ route('indexquiz') }}" class="btn bg-yellow-300 text-black">Try Again</a>
        <progress class="progress progress-error w-56 bg-black" value='{{$result}}' max="100"></progress>
        
        
        </div>
    </div>
    
</body>
</html>