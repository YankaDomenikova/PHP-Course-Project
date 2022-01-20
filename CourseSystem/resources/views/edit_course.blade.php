<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl color-main leading-tight">
            {{ __('Edit Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <form method="POST" action="/edit_course/{{$course->id}}" enctype="multipart/form-data" class="glass-form edit-form">
                    <div class="form-group">
                        <div class="row flex">
                            <div>
                                <label for="course_name">Course Name</label>
                                <textarea name="course_name" class="bg-gray-100 rounded"  placeholder='Name'>{{$course->course_name}}</textarea>
                                @if ($errors->has('course_name'))
                                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                @endif
                            </div>
                            <div style="position: relative">
                                <label for="image">Image</label>
                                <img src="/{{$course->img_url}}" style="max-width: 55px; position: absolute; right: 5px; top: 27px" >
                                <input type="file" name="image" class="form-control form-img-input">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="category">Category</label>
                                <textarea name="category" class="bg-gray-100 rounded"  placeholder='Category'>{{$course->category}}</textarea>
                                @if ($errors->has('category'))
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="venue">Venue</label>
                                <textarea name="venue" class="bg-gray-100 rounded"  placeholder='Venue'>{{$course->venue}}</textarea>
                                @if ($errors->has('venue'))
                                    <span class="text-danger">{{ $errors->first('venue') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="date">Date</label>
                                <input type="date" name="date" value="{{$course->date}}">
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="duration">Duration</label>
                                <input type="number" name="duration" value="{{$course->duration}}">
                                @if ($errors->has('duration'))
                                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="full_name">Teacher</label>
                                <select name="full_name" >
                                    @if($course->teacher_id != null)
                                        <option value="{{$course->teacher->full_name}}" selected>{{$course->teacher->full_name}} </option>
                                    @else
                                        <option value="-" selected>-</option>
                                    @endif
                                    @foreach($teacher as $t)
                                        @if($t->id != $course->teacher_id)
                                            <option value="{{$t->full_name}}">{{$t->full_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="organization_name">Organization</label>
                                <select name="organization_name" >
                                    @if($course->organization_id != null)
                                        <option value="{{$course->organization->organization_name}}" selected>{{$course->organization->organization_name}} </option>
                                    @else
                                        <option value="-" selected>-</option>
                                    @endif
                                    @foreach($organization as $org)
                                        @if($org->id != $course->organization_id)
                                            <option value="{{$org->organization_name}}">{{$org->organization_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="form-btn">Update course</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


