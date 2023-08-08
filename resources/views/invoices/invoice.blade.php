<x-layout>
    <x-slot name="title">FatturaPDF</x-slot>

    <section class="container py-5">
        <div class="row justify-content-center">
            <p class="h2 text-center display-6 mt-5">Ordine <span class="text-success"><strong>Confermato</strong><i class="fa-solid fa-check ms-2"></i></span></p>
            <p class="text-center mb-5 text-decoration-underline">di seguito la fattura di acquisto per la stampa</p>
            <div class="col-6 d-flex justify-content-start">
                <a href="" class="btn btn-info">Stampa Fattura</a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{route('home')}}" class="btn btn-danger">Torna alla Home</a>
            </div>
        </div>

        <hr>

        <div class="row py-5">
            <div class="col-6 col-md-1">
                <img src="https://picsum.photos/300" alt="" class="img-fluid">
            </div>
            <div class="col-md-11 d-flex align-items-center">
                <p class="fs-4">Mercatino dei quadri.it</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-6 d-flex flex-column align-items-start border border-1 p-md-5">
                <p>{{$customer->user->name}}</p>
                <p>{{$customer->user->email}}</p>
            </div>
            <div class="col-6 d-flex flex-column align-items-end border border-1 p-md-5">
                <p>{{ $customer->name }} {{$customer->last_name}}</p> 
                <p>{{ $customer->billing_address }}</p> 
                <p>{{ $customer->zip_code }}</p> 
                <p>{{ $customer->city }} {{ $customer->province }}</p> 
                <p>{{ $customer->phone }}</p> 
            </div>
        </div>

        <div class="row py-4">
            <div class="col-6 d-flex align-items-center justify-content-start border border-1 p-5">
                <p>Data Fattura: {{ $customer->created_at }}</p>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end border border-1 p-5">
                <p>Nome della banca:</p>
                <p class="ms-2">Cicciput Enterprise</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-3 d-flex align-items-center justify-content-start border border-1 p-md-5">
                <p>Titolo: {{ $image[0]->title }}</p>
            </div>
            <div class="col-3 d-flex align-items-center justify-content-end border border-1 p-md-5">
                <p class="text-truncate">Descrizione: {{ $image[0]->description}}</p>
            </div>
            <div class="col-3 d-flex align-items-center justify-content-end border border-1 p-md-5">
                <p>Quantità: 1</p>
            </div>
            <div class="col-3 d-flex align-items-center justify-content-end border border-1 p-md-5">
                <p>Prezzo: {{$image[0]->price}}</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-12 d-flex flex-column align-items-end p-5">
                <p>Sub totale: € {{$image[0]->price}}</p>
                <p>IVA: € 0</p>
                <p>Totale: € {{$image[0]->price}}</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-12">
                <p class="text-center small">Fattura di esempio, FAC-Simile da non prendere in considerazione di certo su questo sito.</p>
            </div>
        </div>
    </section>
</x-layout>