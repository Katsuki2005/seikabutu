<div class="category">
    <h2>Category</h2>
    <select name="post[category_id]">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>