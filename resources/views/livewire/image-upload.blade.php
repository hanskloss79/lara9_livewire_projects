<div class="p-4">
    <form wire:submit.prevent="save" class="d-flex flex-column w-400 mx-auto py-5">
        @if ($image)
        Podgląd:
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($image as $im)
            <img src="{{ $im->temporaryUrl()}}" class="w-110 h-90 object-cover">
            @endforeach
        </div>
        @endif
        <input type="file" wire:model='image' class="mb-3 form-control" multiple>

        @error('image') 
        <span class="error">AleAle{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Wyślij zdjęcie</button>
    </form>
    <div class="d-flex flex-wrap gap-4">

        @foreach($images  as $image)
            <img src="{{$image}}" class="w-auto h-150 object-cover">
        @endforeach
    </div>
</div>