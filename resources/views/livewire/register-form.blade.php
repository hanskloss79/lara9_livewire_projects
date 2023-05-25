<form wire:submit.prevent="submit" class="w-400 mx-auto py-5">
    @if (session()->has('message'))
    <div class="bg-success text-white py-3 px-3 mb-3 text-center">
        {{ session('message') }}
    </div>
    @endif

    <div class="d-flex gap-3 mb-3">
        <label>
            <input type="radio" class="form-check-input" value="customer" name="role" wire:model='role'>
            Klient
        </label>
        <label>
            <input type="radio" class="form-check-input" value="vendor" name="role" wire:model='role'>
            Sprzedawca
        </label>
    </div>

    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="first_name" placeholder="Imię"
            class="form-control rounded-0 @error('first_name') border-danger @enderror">
        @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="last_name" placeholder="Nazwisko"
            class="form-control rounded-0 @error('last_name') border-danger @enderror">
        @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <input type="email" wire:model.debounce.500ms="email" placeholder="Email"
            class="form-control rounded-0 @error('email') border-danger @enderror">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <input type="password" wire:model.debounce.500ms="password" placeholder="Hasło"
            class="form-control rounded-0 @error('password') border-danger @enderror">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    @if ($role === 'vendor')
    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="company_name" placeholder="Nazwa firmy"
            class="form-control rounded-0 @error('company_name') border-danger @enderror">
        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <input type="text" wire:model.debounce.500ms="vat_number" placeholder="Numer VAT"
            class="form-control rounded-0 @error('vat_number') border-danger @enderror">
        @error('vat_number') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Zarejestruj użytkownika</button>
</form>