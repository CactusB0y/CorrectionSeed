<div class="container mt-5">
    <p>{{$show->nom}}</p>
    <p>{{$show->age}}</p>
    <p>{{$show->email}}</p>
    <p>{{$show->telephone}}</p>
    <a href="/membre-edit/{{$show->id}}">Edit</a>
    <form action="/membre-destroy/{{$show->id}}" method="post">
        @csrf
        <button type="submit">SUPPRIMER</button>
    </form>
</div>