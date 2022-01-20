<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl color-main leading-tight">
            {{ __('Edit Teacher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden flex justify-center">
                <form method="POST" action="/edit_teacher/{{$teacher->id}}" class="glass-form edit-form w-3/4">
                    <div class="form-group">
                        <div class="row">
                            <div>
                                <label for="full_name">Full Name</label>
                                <textarea name="full_name" class="bg-gray-100 rounded"  placeholder='Name'>{{$teacher->full_name}}</textarea>
                                @if ($errors->has('full_name'))
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" class="form-btn">Update teacher</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


