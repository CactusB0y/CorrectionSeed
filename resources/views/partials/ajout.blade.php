<div class="container mt-5">
    <h1>ajouter un membre</h1>
    <form action="/membre-store" method="post">
        @csrf
        <input type="text" name="nom" placeholder="nom">
        <input type="number" name="age" placeholder="age">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="telephone" placeholder="telephone">
        <button type="submit">Rajouter</button>
    </form>
</div>