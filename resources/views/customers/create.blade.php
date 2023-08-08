<x-layout>
    <x-slot name="title">CheckOut form</x-slot>

    <section class="container py-5">
        <p class="h3 text-center display-6">Completa l'acquisto</p>
        <p class="text-center"><strong>per l'articolo {{ $picture->title }}</strong></p>
        <form action="{{ route('checkoutSubmit') }}" method="post">
            @csrf
            <input type="text" value="{{ $picture->user_id }}" name="user_id" hidden>
            <div class="row py-5">
                <div class="col-6">
                    <input type="text" name="name" class="form-control shadow" placeholder="Nome">
                </div>
                <div class="col-6">
                    <input type="text" name="last_name" class="form-control shadow" placeholder="Cognome">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-12">
                    <input type="email" name="email" class="form-control shadow" placeholder="E-mail">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6">
                    <input type="text" name="billing_address" class="form-control shadow" placeholder="Indirizzo di fatturazione">
                </div>
                <div class="col-6">
                    <input type="text" name="shipping_address" class="form-control shadow" placeholder="Indirizzo di spedizione">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6">
                    <input type="text" name="zip_code" class="form-control shadow" placeholder="Cap">
                </div>
                <div class="col-6">
                    <input type="text" name="city" class="form-control shadow" placeholder="Città">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6">
                    <input type="text" name="province" class="form-control shadow" placeholder="Provincia">
                </div>
                <div class="col-6">
                    <input type="text" name="phone" class="form-control shadow" placeholder="Recapito telefonico (cellullare)">
                </div>
            </div>

            <div class="row py-5 justify-content-center">
                <div class="col-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Conferma ordine</button>
                </div>
            </div>
        </form>
    </section>
</x-layout>