<x-layout>
    <x-slot name="title">Registrati</x-slot>

    <section class="container py-5">
        <p class="h2 display-6 text-center pt-5">Registrati</p>
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-5">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nickname</label>
                        <input type="text" name="name" class="form-control form-control-lg shadow" placeholder="Scegli un Nome Utente">
                    </div>

                    <div class="mb-3">
                        <label for="email">Indirizzo e-mail</label>
                        <input type="text" name="email" class="form-control form-control-lg shadow" placeholder="La tua mail...">
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg shadow" placeholder="Scegli una password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">Ripeti password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg shadow" placeholder="Ripeti la password che hai scelto">
                    </div>

                    <div class="mt-5 d-flex align-items-center justify-content-center">
                        <input type="submit" value="Crea account" class="btn btn-lg btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>