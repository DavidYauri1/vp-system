<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="flex  m2 p-2">
        <a href="{{ route('admin.puestos.index') }}" 
        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" >Category index</a>
    </div>
    <div class="m-2 p-2 bg-slate-100 rounded">
          <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.puestos.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') @enderror" />
                            </div>
                       
                       
                       
                            
                        </div>
                        <div class="mt-6 p-4">
                            
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                        </div>
                       
                    </form>
                </div>
    
    </div>
    </div>
</x-admin-layout>
