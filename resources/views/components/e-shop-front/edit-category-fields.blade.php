<div>
    <div class="mt-4">
        <form method="POST" action={{ route('category.update', ['category' => $category->id]) }}>
            @csrf
            @method('PATCH')
            <fieldset>
                <legend>Change category</legend>
                <div class="input-group">

                    <select 
                        id="edit_category" 
                        name="edit_category"
                        class="form-control"
                        aria-label="Select category" 
                        onchange="window.document.getElementById('changed_category').value = window.document.getElementById('edit_category').value"
                    >
                        @foreach ( $categories as  $category )
                            <option value="{{ $category->category }}" >{{ $category->category }}</option>
                        @endforeach
                    </select>
                    
                    <input 
                        type="text" 
                        class="form-control rounded-end border" 
                        name="changed_category" 
                        id="changed_category" 
                        aria-label="Edit selected Category" 
                        value=""
                    />
                    
                </div>
                <input type="submit" class="btn btn-outline-primary mt-1" value="Change category"/>
            </fieldset>
        </form>
    </div>
    <div class="mt-4 mb-2">
        <form action={{ route('category.destroy', ['category' => $category->id]) }} method="POST">
            @method('delete')
            @csrf
            <fieldset>
                <legend>Delete category and all related products</legend>
                <div class="input-group">
                    <select 
                        id="delete_category" 
                        name="delete_category"
                        class="form-control"
                        aria-label="Select the category to delete"
                    >
                        @foreach ( $categories as  $category )
                            <option value="{{ $category->category }}" >{{ $category->category }}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-outline-primary form control" value="Delete category"/>
                    
                </div>
            </fieldset>
        </form>
    </div>
</div>