<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test producten met categorie</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="category"><br>
        <input type="submit" value="filter">
    </form>
    <table>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>


