<div>
    <div class="d-flex flex-column gap-4 w-400 mx-auto py-5">
        <select class="form-select rounded-0" 
            wire:model="selectedContinent" wire:change="changeContinent">
            <option value="-1">Proszę wybrać kontynent</option>
            @foreach ($continents as $continent)
                <option value="{{$continent->id}}">{{$continent->name}}</option>
            @endforeach
        </select>
        <div class="d-flex position-relative">
            <p wire:loading class="position-absolute start-0 top-0 end-0 bottom-0 z-10 bg-white
                bg-opacity-90 py-2_1 px-2">
                Trwa wczytywanie danych
            </p>
            <select wire:model="selectedCountry" class="flex-1 form-select rounded-0">
                <option value="-1">Proszę wybrać kraj</option>
                @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>