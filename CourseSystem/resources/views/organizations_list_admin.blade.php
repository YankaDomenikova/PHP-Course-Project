<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Organizations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" mt-2" style="margin-bottom: 20px;">
                <a href="/organization" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded" style="background: lightblue">Add organizations</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5" >

                    <table class="w-full text-md rounded mb-4">
                        <th class="text-left p-3 px-5">Organization</th>
                        <th class="text-left p-3 px-5">City</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <tbody>
                        @foreach($organization as $org)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{$org->organization_name}}
                                </td>
                                <td class="p-3 px-5">
                                    {{$org->city}}
                                </td>
                                <td class="p-3 px-5 flex">
                                    <a href="/edit_organization/{{$org->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700  py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                    <form action="/edit_organization/{{$org->id}}" class="inline-block">
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