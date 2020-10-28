<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Titolo</label>
        <input type="text" name="title" placeholder="Titolo" id="title">

        <label for="author">Autore</label>
        <input type="text" name="author" placeholder="Autore" id="author">

        <label for="author">Edizione</label>
        <input type="text" name="edition" placeholder="Editore" id="edition">

        <label for="author">Genere</label>
        <input type="text" name="genre" placeholder="Genere" id="genre">

        <label for="author">Immagine</label>
        <input type="text" name="image" placeholder="URL" id="image">

        <label for="author">Anno</label>
        <input type="date" name="year" placeholder="Anno" id="year">

        <label for="author">Pagine</label>
        <input type="number" name="pages" placeholder="Pagine" id="pages">

        <label for="author">ISBN</label>
        <input type="text" name="isbn" placeholder="ISBN" id="isbn">


        <input type="submit" name="Salva">



    </form>
</body>
</html>
