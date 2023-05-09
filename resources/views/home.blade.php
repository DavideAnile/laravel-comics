@extends ('layouts/app')

@section ('content')
<main>

    <div class="content container">
    @foreach($comics as $singleComic)

    
    <div class="card-container">

        <div class="thumb-container">
            <img src= "{{$singleComic['thumb']}}" alt="Immagine thumb">
        </div>
        <div class="cardTitle"> {{ $singleComic['title'] }} </div>
    
    </div>
    @endforeach

    <div class="btn"><button>LOAD MORE</button></div>
    </div>

    

</main>
@endsection