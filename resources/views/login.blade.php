<x-layout>
    <section class="container-sm d-flex justify-content-center flex-column align-items-center"
        style="height: 100vh; width: 100vw">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ol>
                    @foreach ($errors->all() as $err)
                        <li>
                            {{ $err }}
                        </li>
                    @endforeach
                </ol>
            </div>
        @endif
        <h1>Login</h1>
        <div class="border p-2" style="width: 400px">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</x-layout>
