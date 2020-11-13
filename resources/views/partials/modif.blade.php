<div class="container mt-5">
    <form action="/membre-update/{{$edit->id}}" method="post">
        @csrf
        <input type="text" name="nom" value="{{$edit->nom}}">
        <input type="number" name="age" value="{{$edit->age}}">
        <input type="text" name="email" value="{{$edit->email}}">
        <input type="text" name="telephone" value="{{$edit->telephone}}">
        <button type="submit">edit</button>
    </form>
</div>