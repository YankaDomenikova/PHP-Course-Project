<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl color-main leading-tight">
            {{ __('Add Teacher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <form method="POST" action="/teacher" class="glass-form add-form w-3/4">
                    <div class="form-group">
                        <div class="row">
                            <div>
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name">
                                @if ($errors->has('full_name'))
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-btn">Add Teacher</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
