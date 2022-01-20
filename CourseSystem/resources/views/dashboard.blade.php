<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight color-main">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" mt-2" style="margin-bottom: 20px;">
                <a href="/course" class="font-bold panel-btn color-main" >Add course</a>
            </div>

                <div class="overflow-hidden" >

                    <table class="glass-table panel-table color-main">
                        <tr>
                            <th class="text-left p-3 px-5">Course</th>
                            <th class="text-left p-3 px-5">Image</th>
                            <th class="text-left p-3 px-5">Category</th>
                            <th class="text-left p-3 px-5">Date</th>
                            <th class="text-left p-3 px-5">Duration</th>
                            <th class="text-left p-3 px-5">Venue</th>
                            <th class="text-left p-3 px-5">Teacher</th>
                            <th class="text-left p-3 px-5">Organisation</th>
                            <th class="text-left p-3 px-5">Actions</th>
                        </tr>
                        @foreach($course as $c)
                            <tr class="">
                                <td class="p-3 px-5">
                                    {{$c->course_name}}
                                </td>
                                <td class="p-3 px-5 flex items-center justify-center">
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
                                <td class="p-3 px-5">
                                    <div class="flex">
                                        <a href="/course_info/{{$c->id}}" name="info" class="mr-3 text-sm  py-1 px-2 rounded focus:outline-none focus:shadow-outline flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                            <span class="p-2">Preview</span>
                                        </a>
                                        <a href="/edit_course/{{$c->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                            <span class="p-2">Edit</span>
                                        </a>
                                        <form action="/edit_course/{{$c->id}}" class="inline-block">
                                            <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                                <span class="p-2">Delete</span>
                                            </button>
                                            {{ csrf_field() }}
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</x-app-layout>
