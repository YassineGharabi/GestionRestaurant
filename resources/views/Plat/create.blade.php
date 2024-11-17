<x-master>  
    <form action="{{ route('plat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Ajouter une plat</h1> 
        <input type="text" placeholder="Entrez le categorieId" name="categorie_id" >
        <input type="text" placeholder="Entrez le intitule" name="intitule" >
        <input type="text" placeholder="Entrez le description" name="description" >
        <input type="text" placeholder="Entrez le prix" name="prix" >
        <input type="file" placeholder="Entrez l'image" name="photo" >
        <button type="submit">Ajouter</button>
    </form>
</x-master>
