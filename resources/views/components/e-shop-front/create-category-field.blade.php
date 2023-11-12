<div style="width: 100%;">
    <form method="POST" action={{ route('category.store') }} id="create_category_form">
        @csrf
        <fieldset style="width: 100%;">
            <legend>Create new category</legend>
            <div class="input-group" style="width: 100%;">
                <input 
                    type="text" 
                    id="created_category" 
                    name="created_category" 
                    class="form-control rounded-start border"
                    aria-label="Create category"
                />
                <input type="submit" class="btn btn-outline-primary form-control" value="Create category"/>
            </div>
        <fieldset>
    </form>
</div>