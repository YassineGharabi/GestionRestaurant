<x-master>
    <button class="btn-add"><a href="{{ route('plat.create') }}">Ajouter une plat</a></button>
    <div class="container-cards">
        @foreach ($plats as $item)
            <div class="ccard">
                <div >
                    <img class="card-img" src="{{ asset('storage/'.$item->photo) }}" alt="Title" />
                    <div >
                        <p >Categorie number {{ $item->categorie_id }}</p>
                        <h6 >{{ $item->intitule }}</h6>
                        <p >{{ $item->description }}</p>
                        <h6 >{{ $item->prix }}</h6>
                    </div>
                </div>
                <div class="actions">
                    <span>
                        <form action="{{ route('plat.edit', $item->id )}}" method="GET">
                            <button>MODIFIER</button>
                        </form>
                    </span>
                    <span>
                        <form action="{{ route('plat.destroy', $item->id) }}" method="POST">   
                            @csrf
                            @method('DELETE')
                            <button type="submit">SUPPRIMER</button>
                        </form>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</x-master>
