<x-layout>
    <h1>I nostri Film</h1>
    <main class="container">
        <section class="row">
            @foreach ($movies as $movie)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="lead fw-bold">{{$movie->title}}</p>
                        <p class="lead">{{$movie->author}}</p>
                        <p class="lead">{{$movie->year}}</p>
                        <p class="lead">{{$movie->description}}</p>
                    </div>
                </div>
            </article> 
            @endforeach
        </section>
    </main>
</x-layout>