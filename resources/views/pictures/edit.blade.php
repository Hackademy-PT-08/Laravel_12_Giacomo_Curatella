<x-layout>
<x-slot name="title">Modifica Annuncio</x-slot>

    <section class="container py-5">
        <p class="h2 text-center display-6">Modifica annuncio</p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('inviaModificheAnnuncio', ['id'=>$picture->id])}}" method="post" class="py-5" enctype="multipart/form-data" id="aggiorna">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label"><strong>Titolo dell'annuncio</strong></label>
                        <input type="text" name="title" class="form-control form-control-lg shadow" placeholder="Scegli un titolo accattivante..." value="{{$picture->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Testo dell'annuncio</strong></label>
                        <textarea name="description" cols="30" rows="10" style="resize: none;" class="form-control shadow form-control-lg" placeholder="Descrivi al meglio il tuo articolo per aumentare le probabilità di venderlo!">{{$picture->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="categories" class="form-label"><strong>Categorie</strong></label>
                        <select name="categories[]" id="categories" multiple class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ ($picture->categories->contains($category->id)) ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label"><strong>Prezzo dell'articolo</strong></label>
                        <input type="number" name="price" class="form-control form-control-lg shadow" placeholder="€" value="{{$picture->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"><strong>Scegli la foto più bella che hai!</strong></label>
                        <input type="file" name="image" class="form-control form-control-lg shadow">
                    </div>

                </form>
                <form action="{{route('eliminaAnnuncio', ['id'=>$picture->id])}}" method="post" id="elimina">
                    @csrf
                    @method('DELETE')
                </form>
                <div class="row">
                    <div class="col-6 d-flex align-items-center justify-content-start">
                        <button type="submit" class="btn btn-info btn-lg" form="aggiorna">Aggiorna annuncio</button>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn btn-danger btn-lg" form="elimina">Elimina annuncio</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>