@extends("layouts.app")

@section("page-title", "Movie List")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                MOVIES
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($movies as $movie)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center border rounded">
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">

                    <p>
                        <strong>{{$movie->title}}</strong>
                    </p>


                    <p>
                        {{$movie->original_title}}
                    </p>

                    <p>
                        {{$movie->nationality}}
                    </p>

                    <p>
                        {{$movie->date}}
                    </p>

                    <p>
                        {{$movie->vote}} €
                    </p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
