<x-layout>
    <x-slot name="title">Dettaglio prodotto</x-slot>
    <section class="container py-5">
        <p class="h2 text-center display-6">Dettaglio articolo "{{ $picture->title }}"</p>
        <div class="row py-5 justify-content-center">
            <div class="col-6">
                <img src="{{ asset('storage/' . $picture->image) }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row py-3">
            <div class="col-12">
                <p class="h4 mb-5">{{ $picture->title }}</p>
                <p class="mb-5"><strong>€ {{ $picture->price }}</strong></p>
                <a href="{{route('checkout', ['id'=> $picture->id])}}" class="btn btn-primary mb-5">Acquista Ora!</a>
                <p class="fs-5">{{ $picture->description }}</p>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-6 d-flex align-items-center justify-content-end">
                <a href="{{ route('home') }}" class="btn btn-info">Indietro</a>
            </div>
        </div>
    </section>
</x-layout>