<div class="container mt-5">
    <ul>
        @foreach ($data as $item)
            <li><a href="/membre-show/{{$item->id}}">{{$item->nom}}</a></li>
        @endforeach
        <a href="/membre-delete">ZIDANE</a>
    </ul>
</div>