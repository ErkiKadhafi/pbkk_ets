<x-layout>
    <section>
        <div class="container-xl">
            <div class="mt-5 mb-5 d-flex justify-content-between">
                <h1>Daftar Rekam Medis</h1>
                <a href={{ route('patient.create') }} class="d-block ml-auto btn btn-primary">Add New Patient</a>
            </div>
            {{-- @dump($data) --}}
            <div class="row gy-3">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @foreach ($patients as $item)
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img style="height: 10rem" src={{ asset('storage/img/' . $item->img) }}
                                class="card-img-top" alt="gambar resep">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->human->name }}</h5>
                                <p class="card-text">Kondisi Kesehatan : <span>{{ $item->condition }}</span></p>
                                <p class="card-text">Suhu : <span>{{ $item->temperature }} derajat celcius</span>
                                </p>
                                <p class="card-text">Nama Dokter : <span>{{ $item->doctor->name }}</span></p>
                                <a href={{ route('patient.show', $item) }} class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
</x-layout>
