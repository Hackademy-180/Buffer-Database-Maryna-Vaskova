<x-layout>
    <h1>Carica i dati di un film</h1>
    <main class="container">
        <section class="row align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route('post_movie_submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome film</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Regista</label>
                        <input type="text" class="form-control" id="author" aria-describedby="emailHelp" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di uscita</label>
                        <input type="number" class="form-control" id="year" aria-describedby="emailHelp" name="year">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Trama</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>