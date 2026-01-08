<x-layout>
    <h1>I nostri Musei</h1>
    <main class="container">
        <section class="row">
            @foreach ($museums as $museum)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="lead fw-bold">{{$museum->title}}</p>
                        <p class="lead">{{$museum->country}}</p>
                        <p class="lead">{{$museum->year}}</p>
                        <p class="lead">{{$museum->description}}</p>
                    </div>
                </div>
            </article> 
            @endforeach
        </section>
    </main>
</x-layout>