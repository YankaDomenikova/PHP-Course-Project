<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course') }}
        </h2>
    </x-slot>

    <div class="py-12 px-6 flex items-center justify-center">
        <div class="card-body-lg course-card glass">
            <div class="category">
                <span>{{$course->category}}</span>
            </div>
            <div class="course-img">
                <img src="/{{$course->img_url}}" class="card-img-top" alt="...">
            </div>
            <h5 class="card-title course-name">{{$course->course_name}}</h5>
            <h6 class="card-subtitle teacher-name ">by {{$course->teacher->full_name}}, {{$course->organization->organization_name}}</h6>
            <p class="venue">{{$course->venue}}</p>
            <div class="course-details">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    <span>Date: {{$course->date}}</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    <span>Hours: {{$course->duration}}</span>
                </div>
            </div>
        </div>
    </div>
            {{--<div class="b p-5">

                <div>{{$course->course_name}}</div>
                <div>{{$course->category}}</div>
                <div>{{$course->date}}</div>
                <div>{{$course->duration}}</div>
                <div>{{$course->venue}}</div>
                <div>
                    @if($course->teacher_id != null)
                        {{$course->teacher->full_name}}
                    @else
                        -
                    @endif
                </div>
                <div>{{$course->organization->organization_name}}</div>
            </div>
        </div>
--}}
</x-app-layout>
