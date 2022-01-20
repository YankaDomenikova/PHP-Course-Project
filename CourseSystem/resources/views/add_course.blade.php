<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">

                <form method="POST" action="/course"  enctype="multipart/form-data" class="glass-form add-from">
                    <div clas="form-group">
                        <div class="row flex">
                            <div>
                                <label for="course_name">Course Name</label>
                                <input type="text" name="course_name">
                                @if ($errors->has('course_name'))
                                    <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control form-img-input">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    <img src="images/{{ Session::get('image') }}">
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your image input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="category">Category</label>
                                <input type="text" name="category" >
                                @if ($errors->has('category'))
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="venue">Venue</label>
                                <input type="text" name="venue" >
                                @if ($errors->has('venue'))
                                    <span class="text-danger">{{ $errors->first('venue') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="date">Date</label>
                                <input type="date" name="date">
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                            <div>
                                <label for="duration">Duration</label>
                                <input type="number" name="duration">
                                @if ($errors->has('duration'))
                                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row flex">
                            <div>
                                <label for="full_name">Teacher</label>
                                <select name="full_name">
                                    <option value="">-</option>
                                    @foreach($teacher as $t)
                                        <option value="{{$t->full_name}}">{{$t->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="organization_name">Organization</label>
                                <select name="organization_name">
                                    <option value="">-</option>
                                    @foreach($organization as $org)
                                        <option value="{{$org->organization_name}}">{{$org->organization_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-btn">Add Course</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
