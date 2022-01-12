<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Teacher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/teacher" >

                    <div class="form-group">
                        <textarea name="full_name" class="bg-gray-100 rounded"  placeholder='Full name'></textarea>
                        @if ($errors->has('full_name'))
                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
                        @endif

                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">Add Teacher</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
