<x-layout>
<x-slot name="title">Crea Annuncio</x-slot>


<section class="container py-5">
    <p class="h2 text-center display-6">Inserisci nuovo annuncio</p>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form action="{{ route('storeAnnuncio') }}" method="post" class="py-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><strong>Titolo dell'annuncio</strong></label>
                    <input type="text" name="title" class="form-control form-control-lg shadow" placeholder="Scegli un titolo accattivante...">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"><strong>Testo dell'annuncio</strong></label>
                    <textarea name="description" cols="30" rows="10" style="resize: none;" class="form-control shadow form-control-lg" placeholder="Descrivi al meglio il tuo articolo per aumentare le probabilità di venderlo!"></textarea>
                </div>

                <div class="mb-3">
                    <label for="categories" class="form-label"><strong>Categorie</strong></label>
                    <select name="categories[]" id="categories" multiple class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"><strong>Prezzo dell'articolo</strong></label>
                    <input type="number" name="price" class="form-control form-control-lg shadow" placeholder="€">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label"><strong>Scegli la foto più bella che hai!</strong></label>
                    <input type="file" name="image" class="form-control form-control-lg shadow">
                </div>

                <div class="mt-5 d-flex align-items-center justify-content-center">
                    <input type="submit" class="btn btn-success btn-lg" value="Pubblica Annuncio">
                </div>
            </form>
        </div>
    </div>
</section>

</x-layout>