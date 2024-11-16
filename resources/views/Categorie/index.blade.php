<x-master>
        <button class="btn-add"><a href="{{ route('categorie.create') }}">Ajouter une categorie</a></button>
        <div class="container-cards">
            @foreach ($categories as $item)
                <div class="ccard">
                    <div >
                        <img class="card-img" src="{{ asset('storage/'.$item->photo) }}" alt="Title" />
                        <div >
                            <h4 >{{ $item->title }}</h4>
                        </div>
                    </div>
                    <div class="actions">
                        <span>
                            <form action="{{ route('categorie.edit', $item->id)}}" method="GET">
                                <button>MODIFIER</button>
                            </form>
                        </span>
                        <span>
                            <form action="{{ route('categorie.destroy', $item->id) }}" method="POST">
                                @method('DELETE')    
                                @csrf
                                <button type="submit">SUPPRIMER</button>
                            </form>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
</x-master>
