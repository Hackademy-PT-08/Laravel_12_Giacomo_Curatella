<x-layout>
    <x-slot name="title">Login</x-slot>

    <section class="container py-5">
        <p class="h2 display-6 text-center pt-5">Login</p>
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-5">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Indirizzo e-mail</label>
                        <input type="text" name="email" class="form-control form-control-lg shadow" placeholder="La tua mail...">
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg shadow" placeholder="Non rivelare mai la tua password a nessuno...">
                    </div>

                    <div class="mt-5 d-flex align-items-center justify-content-center">
                        <input type="submit" value="Accedi" class="btn btn-lg btn-success">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>