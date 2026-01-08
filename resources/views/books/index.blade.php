<x-layout>
    <h1>I nostri Libri</h1>
    <main class="container">
        <section class="row">
            @foreach ($books as $book)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="lead fw-bold">{{$book->title}}</p>
                        <p class="lead">{{$book->author}}</p>
                        <p class="lead">{{$book->year}}</p>
                        <p class="lead">{{$book->description}}</p>
                    </div>
                </div>
            </article> 
            @endforeach
        </section>
    </main>
</x-layout>