<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ajouter un joueur</h1>
    <form action="post">
    @csrf
        <label for="id">id:</label>
        <input type="text" name="id">

        <label for="nom">nom:</label>
        <input type="text" name="nom">

        <label for="prenom">prenome:</label>
        <input type="text" name="prenom">

        <label for="date_de_naissance">date_de_naissance:</label>
        <input type="text" name="date_de_naissance">

        <label for="taill">taill:</label>
        <input type="text" name="taill">

        <label for="poids">poids:</label>
        <input type="text" name="poids">

        <label for="id_sport">id_sport:</label>
        <input type="text" name="id_sport">

        <label for="id_equipe">id_equipe:</label>
        <input type="text" name="id_equipe">

        <button type="submit"></button>
        
        @error('id')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('nom')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('prenom')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('date_de_naissance')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('taill')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('poids')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('id_sport')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('id_equipe')
        <div class="error">{{ $message }}</div>
        @enderror 
    </form>
</body>
</html>