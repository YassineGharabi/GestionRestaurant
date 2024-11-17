<x-master>
    <form action="{{ route('plat.update', $plat->id) }}" method="POST" enctype="multipart/form-data">
        <h1>Modifier une plat</h1> 
        @csrf
        @method('PUT')
        <input type="text" placeholder="Entrez le categorieId" name="categorie_id" value="{{ $plat->categorie_id}}" >
        <input type="text" placeholder="Entrez le intitule" name="intitule" value="{{ $plat->intitule}}" >
        <input type="text" placeholder="Entrez le description" name="description" value="{{ $plat->description}}" >
        <input type="text" placeholder="Entrez le prix" name="prix" value="{{ $plat->prix}}" >
        <input type="file" placeholder="Entrez l'image" name="photo" value="{{ $plat->photo}}" >
        <button type="submit">MODIFIER</button>
    </form>
</x-master>