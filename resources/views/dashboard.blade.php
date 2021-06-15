<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <P class="text-6xl text-center">User's Post</P>   
                                  
                <table class=" min-w-full table-fixed">
                    <thead>
                        <tr>
                        <th class="border-2 border-gray-200 rounded w-1/4 py-2 px-4">Title</th>
                        <th class="border-2 border-gray-200 rounded w-1/4 py-2 px-4">Body</th>
                        <th class="border-2 border-gray-200 rounded w-1/4 py-2 px-4">Photo</th>
                        <th class="border-2 border-gray-200 rounded w-1/4 py-2 px-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                        <td class="border-2 border-gray-200 rounded">{{$post->title}}</td>
                        <td class="border-2 border-gray-200 rounded">{{$post->body}}</td>
                
                        <td class="border-2 border-gray-200 rounded"><img  src="url('storage/images/'.'{{$post->photo}}')" alt="image"></td>
                        <td class="border-2 border-gray-200 rounded" >
                            <a href="{{url('post/edit',$post->id)}}" class="bg-gray-400 hover:bg-gray-300 focus:shadow-outline 
                            focus:shadow-outline-none text-white text-sm py-1 px-2 rounded mx-6">EDIT</a>
                            
                            <a href="{{url('post/delete',$post->id)}}" class="bg-red-500 hover:bg-red-400 focus:shadow-outline 
                            focus:shadow-outline-none text-white text-sm py-1 px-2 rounded mx-6">DELETE</a>
                            
                        </td>
                        <br>
                        </tr>
                     @endforeach
                        
                    </tbody>
                 </table>
                 
                 @if(session()->has('status'))
                    <div class='mt-5 shadow bg-green-500 text-white font-bold py-2 px-4 rounded' >
                        {{session('status')}}
                    </div>
                 @endif
            </div>
        </div>
    </div>
</x-app-layout>
