<x-layout>
    <x-slot name="title">HomePage</x-slot>
    <section class="container py-5">
        <p class="h1 text-center display-6">Sfoglia i nostri annunci</p>
        <div class="row py-5">
            @if(count($pictures) == 0)
                <div class="col-12 py-5">
                    <p class="text-danger text-center display-6">Non ci sono annunci da mostrare!</p>
                </div>
            @else
                @foreach($pictures as $picture)
                    <div class="col-12 col-md-4">
                        <div class="card shadow p-2">
                            <div class="mainPageCardImage" style="background-image: url('{{ asset('storage/' . $picture->image) }}');"></div>
                            <div class="card-body">
                              <h5 class="card-title text-truncate">{{ $picture->title }}</h5>
                              <p class="card-text text-truncate">{{ $picture->description }}</p>
                              <p class="card-text">€ {{ $picture->price }}</p>
                              <a href="{{ route('dettaglioProdottoHome', ['id' => $picture->id]) }}" class="btn btn-info">Dettaglio articolo</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
</x-layout>