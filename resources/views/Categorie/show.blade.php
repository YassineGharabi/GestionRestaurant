<x-master>
    <div class="show">
        <h4>liste des plats dans  categorie {{ $categorie->title }}</h4>
        <div class="show-container">
        @foreach ($plats as $item)
            <div class="show-item">
            <p>{{ $item->intitule}}</p>
            <ul>
                <li>Ingridients: {{ $item->description}}</li>
                <li>Prix: {{ $item->prix}}</li>
            </ul>
            </div>
        @endforeach
    </div>
    </div>
</x-master>
