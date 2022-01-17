<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <a href="{{ url('/') }}">Go to all courses</a>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" mt-2" style="margin-bottom: 20px;">
                <a href="/course" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded" style="background: lightblue">Add course</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5" >

                    <table class="w-full text-md rounded mb-4">
                        <th class="text-left p-3 px-5">Course</th>
                        <th class="text-left p-3 px-5">Image</th>
                        <th class="text-left p-3 px-5">Category</th>
                        <th class="text-left p-3 px-5">Date</th>
                        <th class="text-left p-3 px-5">Duration</th>
                        <th class="text-left p-3 px-5">Venue</th>
                        <th class="text-left p-3 px-5">Teacher</th>
                        <th class="text-left p-3 px-5">Organisation</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <tbody>
                        @foreach($course as $c)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{$c->course_name}}
                                </td>
                                <td class="p-3 px-5">
                                    <img src="{{$c->img_url}}" style="max-height: 50px" >
                                </td>
                                <td class="p-3 px-5">
                                    {{$c->category}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$c->date}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$c->duration}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$c->venue}}
                                </td>
                                <td class="p-3 px-5">
                                    @if($c->teacher_id != null)
                                    {{$c->teacher->full_name}}
                                    @else
                                    -
                                    @endif
                                </td>
                                 <td class="p-3 px-5">
                                     @if($c->organization_id != null)
                                         {{$c->organization->organization_name}}
                                     @else
                                         -
                                     @endif

                                 </td>
                                <td class="p-3 px-5 flex">
                                    <a href="/course_info/{{$c->id}}" name="info" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline">Preview</a>
                                    <a href="/edit_course/{{$c->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                    <form action="/edit_course/{{$c->id}}" class="inline-block">
                                        <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
