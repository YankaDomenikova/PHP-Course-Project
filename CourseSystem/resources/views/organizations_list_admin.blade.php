<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight color-main">
            {{ __('All Organizations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" mt-2" style="margin-bottom: 20px;">
                <a href="/organization" class="font-bold py-2 px-4 rounded  panel-btn color-main">Add organizations</a>
            </div>

                <div class="overflow-hidden" >
                    <table class="glass-table panel-table color-main">
                        <th class="text-left p-3 px-5">Organization</th>
                        <th class="text-left p-3 px-5">City</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <tbody>
                        @foreach($organization as $org)
                            <tr class=" hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{$org->organization_name}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$org->city}}
                                </td>
                                <td class="p-3 px-5 flex">
                                    <a href="/edit_organization/{{$org->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        <span class="p-2">Edit</span>
                                    </a>
                                    <form action="/edit_organization/{{$org->id}}" class="inline-block">
                                        <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            <span class="p-2">Delete</span>
                                        </button>
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
</x-app-layout>
