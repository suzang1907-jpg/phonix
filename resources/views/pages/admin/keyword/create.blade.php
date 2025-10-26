<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Create keyword">
        <div class="flex flex-col p-6">
            <x-input.form action="{{route('admin.keyword.store')}}" class="mx-auto">
                <components-input-text title="Keyword" id="keyword" :required="true"></components-input-text>

                @unless(empty(App\Services\LocationService::getCountry()))
                <components-input-select title="City" id="city">
                    <components-input-select-option>-- City --</components-input-select-option>
                    @foreach(App\Services\LocationService::getCities() as $city)
                    <components-input-select-option value="{{$city}}">{{__('location.'.$city)}}</components-input-select-option>
                    @endforeach
                </components-input-select>
                @endunless
                <div>
                    <components-button-primary type="submit" class="w-full mt-2">Create keyword</components-button-primary>
                </div>
            </x-input.form>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>