<h1>ciao ci sei sei connesso?<body>
    @extends('layouts.app')

    @section('content')

        </div>
        <section class="">
            <div class="container py-5">
                <div class="row g-4">
                    @foreach ($movie as $movieElement)
                        <div class="col-2">
                            <div class="card bg-dark text-light">
                                <img src="" class="card-img-top" alt="...">
                                <div class="card-body p-0 py-3">
                                    <h3 class="card-title">Titolo: {{ $movieElement -> title }}</h3>
                                    <h5>Titolo originale: {{ $movieElement -> original_title }}</h5>
                                    <h5>Data Rilascio: {{ $movieElement -> date }}</h5>
                                    <h6> Voto: {{ $movieElement -> vote }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        </section>
    @endsection


</body>

</html>
</h1>