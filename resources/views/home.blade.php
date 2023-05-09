@extends ('layouts/app')

@section ('content')
<main>

    @foreach($comics as $singleComic)
    <div class="card-container">

        <div class="thumb-container">
            <img :src= "{{$singleComic['thumb']}}" alt="Immagine thumb">
        </div>
        <div class="cardTitle"> {{ $singleComic['title'] }} </div>
    
    </div>
    @endforeach

</main>
@endsection