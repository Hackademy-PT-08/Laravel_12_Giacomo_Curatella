<x-layout>
    <x-slot name="title">Ordini</x-slot>

    <section class="container py-5">
        <p class="h2 text-center display-6">I miei ordini da spedire</p>
            <div class="row py-5">
                @foreach($customers as $customer)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-0 shadow p-3">
                            <p class="text-center mb-4"><strong>Nuovo Ordine</strong></p>
                            <p class="me-2"><strong>Nome: </strong>{{ $customer->name }} {{ $customer->last_name }}</p>
                            <p class="me-2"><strong>Ind fatturazione: </strong>{{ $customer->billing_address }}</p>
                            <p class="me-2"><strong>Ind spedizione: </strong>{{ $customer->shipping_address }}</p>
                            <p class="me-2"><strong>Cap: </strong>{{ $customer->zip_code }}</p>
                            <p class="me-2"><strong>Città: </strong>{{ $customer->city }}</p>
                            <p class="me-2"><strong>Provincia: </strong>{{ $customer->province}}</p>
                            <p class="me-2"><strong>Telefono: </strong>{{ $customer->phone }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
</x-layout>