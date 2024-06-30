
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen bg-white">
    <div class="bg-white-400 flex w-full justify-center items-center">
                
                <div class="px-3 py-4 flex w-8/12 bg-red-400 flex-col items-center">

                    {{-- content-title --}}
                    <div class="p-3 flex justify-between w-11/12 items-center ">
                        
                            <span class="text-2xl text-black ">
                                {{ __('Teachers') }}
                            </span>
                            <div class="">
                                <a href="{{ route('teachers.create') }}" class=" text-md bg-blue-500 hover:bg-blue-700 text-white p-2 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Create New') }}
                                </a>
                            </div>
                        
                    </div>
                    {{-- content-title --}}
                    
                    @if ($message = Session::get('success'))
                        
                        <div role="alert" class="alert alert-success">
                            <span class="icon-[ep--success-filled] text-2xl"></span>
                            <p class="text-xl text-black">{{ $message }}</p>
                          </div>
                    @endif
                    
                    <div class="rounded-sm flex w-full items-center overflow-x-scroll">
                        
                            <table class="w-full text-md bg-white shadow-md rounded">
                                <thead class="border-b text-black">
                                    <tr>
                                        
									<th class="text-left p-3 px-5" >Teacher</th>
									<th class="text-left p-3 px-5">Email</th>
									<th class="text-left p-3 px-5">Institution</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class=" text-black space-y-2">
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                                
                                            <td class="text-left p-3 px-5">{{ $teacher->user->name }}</td>
                                            <td class="text-left p-3 px-5" >{{ $teacher->user->email }}</td>
                                            <td class="text-left p-3 px-5">{{ $teacher->institution->name }}</td>
                                            <td class="p-3 px-5 text-left">
                                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="flex flex-row justify-center items-center mb-0 gap-4" >
                                                    <a class="bg-yellow-200 hover:bg-yellow border-2 border-black rounded-md p-2" href="{{ route('teachers.show', $teacher->id) }}"><span class="icon-[bx--show]"></span></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 border-2 border-black rounded-md p-2" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><span class="icon-[mi--delete]"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
                {!! $teachers->withQueryString()->links() !!}
           
        </div>
    


</body>
</html>
    