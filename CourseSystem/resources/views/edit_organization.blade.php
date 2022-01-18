<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Organization') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/edit_organization/{{$organization->id}}">

                    <div class="form-group">
                        <textarea name="organization_name" class="bg-gray-100 rounded"  placeholder='Name'>{{$organization->organization_name}}</textarea>
                        @if ($errors->has('organization_name'))
                            <span class="text-danger">{{ $errors->first('organization_name') }}</span>
                        @endif
                        <select name="city">
                            <option value="{{$organization->city}}" selected>{{$organization->city}}</option>
                            <option value="Blagoevgrad">Blagoevgrad</option>
                            <option value="Burgas">Burgas</option>
                            <option value="Dobrich">Dobrich</option>
                            <option value="Gabrovo">Gabrovo</option>
                            <option value="Haskovo">Haskovo</option>
                            <option value="Kardzhali">Kardzhali</option>
                            <option value="Kyustendil">Kyustendil</option>
                            <option value="Lovech">Lovech</option>
                            <option value="Montana">Montana</option>
                            <option value="Pazardzhik">Pazardzhik</option>
                            <option value="Pernik">Pernik</option>
                            <option value="Pleven">Pleven</option>
                            <option value="Plovdiv">Plovdiv</option>
                            <option value="Razgrad">Razgrad</option>
                            <option value="Ruse">Ruse</option>
                            <option value="Shumen">Shumen</option>
                            <option value="Silistra">Silistra</option>
                            <option value="Sliven">Sliven</option>
                            <option value="Smolyan">Smolyan</option>
                            <option value="Sofia">Sofia</option>
                            <option value="Stara Zagora">Stara Zagora</option>
                            <option value="Targovishte">Targovishte</option>
                            <option value="Varna">Varna</option>
                            <option value="Veliko Tarnovo">Veliko Tarnovo</option>
                            <option value="Vidin">Vidin</option>
                            <option value="Vratsa">Vratsa</option>
                            <option value="Yambol">Yambol</option>
                        </select>
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">Update teacher</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
