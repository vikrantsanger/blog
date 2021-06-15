<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class='py-2'>
        <div class='max-w-7xl mx-auto sm:px-6 lg:px-8'>
            <div class='bg-red-500 overflow-hidden shadow-sm sm:rounded-lg'>
                <h1 class='p-5 font-blod text-white'>Edit Post</h1>
                <hr class="border-gray-600">
                <div class="p-6 bg-gray-700">
                    <form  class="w-full max-w-sm" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">Title</label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="border-2 border-gray-200 rounded w-full py-2 px-4" id="title" type="text" name="title" value="{{$post->title}}">
                            </div>
                        </div>

                       
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">Body</label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea class="resize border rounded-md" name="body" style="width:250px;">{{$post->body}}</textarea>
                            </div>
                        </div>


                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">Title</label>
                            </div>
                            <div class="md:w-2/3">
                                <input class="border-2 border-gray-200 rounded w-full py-2 px-4" id="photo" type="file" name="photo" value="{{$post->photo}}">
                            </div>
                        </div>


                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                              <input type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none 
                              text-white font-bold py-2 px-4 rounded"  value="UPDATE">
                            </div>
                        </div>
                    </form>
                    @if(session()->has('status'))
                    <div class='mt-5 shadow bg-green-500 text-white font-bold py-2 px-4 rounded' >
                        {{session('status')}}
                    </div>
                    @endif
                
                </div>
            </div>  
    </div>
    </div>
</x-app-layout>

