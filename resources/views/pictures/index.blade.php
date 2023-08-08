<x-layout>
    <x-slot name="title">Personal Area</x-slot>
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <p class="h2 text-center display-6">Tutti i tuoi annunci</p>
            </div>
        </div>
    </section>

    @if(count($pictures) == 0)
    <section class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2 text-center text-warning">Non hai creato ancora nessun annuncio!</p>
            </div>
        </div>
    </section>
    @else
    <section class="container py-5">
        <div class="row justify-content-center">
            @foreach ($pictures as $picture)
                <div class="col-12 col-md-8">
                    <div class="card mb-3 p-1 rounded-3 border-0">
                        <div class="row align-items-center">
                            @if($picture->image)
                                <div class="col-2 userCardImage rounded-3" style="background-image: url('{{ asset('storage/' . $picture->image) }}');">
                                    <!-- <img src="{{ asset('storage/' . $picture->image) }}" alt="" class="img-fluid"> -->
                                </div>
                            @else
                                <div class="col-2 userCardImage rounded-3" style="background-image: url('storage/img_placeholder.jpg');">
                                    <!-- <img src="storage/img_placeholder.jpg" alt="" class="img-fluid"> -->
                                </div>
                            @endif
                            <div class="col-6 p-3">
                                <p class="h4">{{ $picture->title }}</p>
                                <p class="text-truncate">{{ $picture->description }}</p>
                            </div>
                            <div class="col-2 p-3">
                                <p>Euro</p>
                                <p>{{ round($picture->price, 2) }}</p>
                            </div>
                            <div class="col-2 p-3 d-flex flex-column justify-content-around align-items-center gap-1">
                                <a href="{{ route('dettaglioProdotto', ['id'=>$picture->id]) }}" class="btn btn-primary">Dettaglio</a>
                                <a href="{{ route('modificaAnnuncio', ['id'=>$picture->id]) }}" class="btn btn-warning">Modifica</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </section>
    @endif
</x-layout>