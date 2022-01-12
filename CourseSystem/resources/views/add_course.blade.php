<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/course" >

                    <div class="form-group">
                        <textarea name="course_name" class="bg-gray-100 rounded"  placeholder='Name'></textarea>
                        @if ($errors->has('course_name'))
                            <span class="text-danger">{{ $errors->first('course_name') }}</span>
                        @endif
                        <textarea name="category" class="bg-gray-100 rounded"  placeholder='Category'></textarea>
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                        <input type="date" name="date">
                        @if ($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        <input type="number" name="duration">
                        @if ($errors->has('duration'))
                            <span class="text-danger">{{ $errors->first('duration') }}</span>
                        @endif

                        <textarea name="venue" class="bg-gray-100 rounded"  placeholder='Venue'></textarea>
                        @if ($errors->has('venue'))
                            <span class="text-danger">{{ $errors->first('venue') }}</span>
                        @endif
                        <select name="full_name">
                            <option value="">-</option>
                            @foreach($teacher as $t)
                                <option value="{{$t->full_name}}">{{$t->full_name}}</option>
                            @endforeach
                        </select>
                        <select name="organization_name">
                            <option value="">-</option>
                            @foreach($organization as $org)
                                <option value="{{$org->organization_name}}">{{$org->organization_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">Add Task</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
