<div class="container py-5 px-4">
    <div class="mb-3">
        {{--opcja lazy oznacza, że uaktualnienie wykona się dopiero po naciśnięciu Enter --}}
        <input type="text" class="form-control rounded-0 w-auto" 
        wire:model.lazy="search" placeholder="Wyszukaj produkty">
    </div>
    <table class="table-auto w-100 mb-2">
        <thead>
            <tr>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-start">ID</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-start">Zdjęcie produktu</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-start">Nazwa produktu</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-start">Cena</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="py-2 px-3 border-bottom border-1">{{$product->id}}</td>
                <td class="py-2 px-3 border-bottom border-1"><img class="w-4r" src="{{$product->image}}"></td>
                <td class="py-2 px-3 border-bottom border-1">{{$product->title}}</td>
                <td class="py-2 px-3 border-bottom border-1">{{$product->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
    {{$products->links()}}

</div>