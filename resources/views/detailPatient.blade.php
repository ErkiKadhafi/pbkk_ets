<x-layout>
    <section>
        <div class="container-xl">
            <div class="mt-5 mb-5 d-flex justify-content-between">
                <h1>Detail Patient</h1>
            </div>
            <div class="">
                <img src={{ asset('storage/img/' . $patient->img) }} alt="foto pasien">
                <h3>Name : {{ $patient->human->name }}</h3>
                <h3>Doctor Name : {{ $patient->doctor->name }}</h3>
                <h3>Condition : {{ $patient->condition }}</h3>
                <h3>Temperature : {{ $patient->temperature }} derajat celcius</h3>
            </div>
    </section>
</x-layout>
