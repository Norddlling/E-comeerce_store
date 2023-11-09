<div>
    <div>
        <form method="POST" action={{ route('category.update', ['category' => $category->id]) }}>
            @csrf
            @method('PATCH')
            <label for="edit_category">
                Change category name
                <input type="text" name="changed_category" id="changed_category" value=""/>
            <select 
                id="edit_category" 
                name="edit_category"
                onchange="window.document.getElementById('changed_category').value = window.document.getElementById('edit_category').value"
            >
                @foreach ( $categories as  $category )
                    <option value="{{ $category->category }}" >{{ $category->category }}</option>
                @endforeach
            </select>
            </label>
            <br/>
            <input type="submit"/>
        </form>
    </div>
    <div>
        <form action={{ route('category.destroy', ['category' => $category->id]) }} method="POST">
            @method('delete')
            @csrf
            <select 
                id="delete_category" 
                name="delete_category"
            >
                @foreach ( $categories as  $category )
                    <option value="{{ $category->category }}" >{{ $category->category }}</option>
                @endforeach
            </select>
            <input type="submit" value="Delete category"/>
        </form>
    </div>
</div>