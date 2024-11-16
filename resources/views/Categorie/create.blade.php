<x-master>  
        <form action="{{  route('categorie.store')}}" method="POST" enctype="multipart/form-data">
            <h1>Ajouter une categorie</h1> 
            @csrf
            <input type="text" placeholder="Entrez le titre" name="title" >
            <input type="file" placeholder="Entrez l'image" name="photo" >
            <button type="submit">Ajouter</button>
        </form>
</x-master>
