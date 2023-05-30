<x-main>

     <section>

        <div class="container-fluid">
            <div class="row">
               
               @foreach ($lista as $prodotto )
                   
               
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box card">
                        <div class="box cardImg">
                            <img src="{{$prodotto['image']}}" alt="...">
                        </div>
                        <div class="info">
                            <h3>{{$prodotto['name']}}</h3>
                            <p>{{$prodotto['tag']}}</p>
                            <a href="{{route('detail',['id'=>$prodotto['id']])}}"><button class="btn btn-primary">Vai ai dettagli</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    




     </section>
    </x-main>
