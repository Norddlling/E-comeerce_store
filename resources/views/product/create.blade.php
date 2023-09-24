<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action={{ route('product.store') }}>
        @csrf
        <label for="product_name">
            product_name
            <input type='text' id="product_name" name="product_name"/>
        </label>
        <br/>
        <label for="category">
            category
            <select id="category" name="category">
                @foreach ( $categories as  $category )
                    <option value={{ $category->category }}>{{ $category->category }}</option>
                @endforeach
            </select>
        </label>
        <br/>
        <label for="quantity_of_product">
            quantity_of_product
            <input type="number" id="quantity_of_product" name="quantity_of_product"/>
        </label>
        <br/>
        <label for="product_characteristics">
            product_characteristics
            <input type='text' id="product_characteristics" name="product_characteristics"/>
        </label>
        <br/>
        <label for="description">
            description
            <input type='text' id="description" name="description"/>
        </label>
        <br/>
        <label for="users_raiting">
            users_raiting
            <input type="number" id="users_raiting" name="users_raiting"/>
        </label>
        <br/>
        <input type="submit"/>
    </form>

    <form method="POST" action={{ route('category.store') }}>
        @csrf
        <label for="category">
            category
            <input type='text' id="category" name="category"/>
        </label>
        <br/>
        <input type="submit"/>
    </form>
    
</body>
</html>