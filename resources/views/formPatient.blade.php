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
        <h1>Add New Patient</h1>
        <div class="border p-2" style="width: 400px">
            <form action={{ route('patient.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <p>Select Patient</p>
                    <select name="patient" class="form-select" aria-label="Default select example">
                        @foreach ($person as $people)
                            <option value={{ $people->id }}>{{ $people->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="div-3">
                    <p>Select Doctor</p>
                    <select name="doctor" class="form-select" aria-label="Default select example">
                        @foreach ($doctors as $doctor)
                            <option value={{ $doctor->id }}>{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="health_condition" class="form-label">Health Condition</label>
                    <input name="health_condition" type="text" class="form-control" id="health_condition">
                </div>
                <div class="mb-3">
                    <label for="temperature" class="form-label">Temperature</label>
                    <input step=".01" name="temperature" type="number" class="form-control" id="temperature">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</x-layout>
