<x-master>
    <form action="{{ route('categorie.update',$categorie->id) }}" method="POST" enctype="multipart/form-data">
        <h1>Modifier une categorie</h1> 
        @csrf
        @method('PUT')
        <input type="text" placeholder="Entrez le titre" name="title" value="{{ $categorie->title}}">
        <input type="file" placeholder="Entrez l'image" name="photo" value="{{ $categorie->photo}}" >
        <button type="submit">MODIFIER</button>
    </form>
</x-master>