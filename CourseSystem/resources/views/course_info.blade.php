<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white text-center overflow-hidden shadow-xl sm:rounded-lg p-5">

                <div>{{$course->course_name}}</div>
                <div>{{$course->category}}</div>
                <div>{{$course->date}}</div>
                <div>{{$course->duration}}</div>
                <div>{{$course->venue}}</div>
                <div>{{$course->teacher->full_name}}</div>
                <div>{{$course->organization->organization_name}}</div>
            </div>
        </div>
    </div>
</x-app-layout>
