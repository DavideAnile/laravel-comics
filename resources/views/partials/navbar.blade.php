<nav>
    <div class="up-nav">
        <div>DC POWERED BY VISA</div>
        <div>ADDITIONAL DC SITES</div>
    </div>
    <div class="my-container">
        <div class="img-container">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <ul>
            @foreach($links as $singleLink)
                <li>{{$singleLink}}</li>
            @endforeach
            
        </ul>
        <div class="input-container">
            <input type="text" placeholder="Cerca">
        </div>
    </div>
        
        
  </nav>