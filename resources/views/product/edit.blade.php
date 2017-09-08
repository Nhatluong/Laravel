<form class="form-group" method="post">
    {{csrf_field()}}
    <div >
        <label>Category</label>
        <select name="category">
            @foreach($cate as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach;
        </select>
    </div>
    <div>
        <label>Name Product</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div>
        <label>Price</label>
        <input class="form-control" type="text" name="price">
    </div>
    <div>
        <label>promotion Price</label>
        <input class="form-control" type="text" name="promotion">
    </div>
    <div>
        <label>Image</label>
        <input class="form-control" type="file" name="image">
    </div>
    <div>
        <label>new</label>
        <input class="form-control" type="text" name="new" placeholder="0 or 1">
    </div>
    <div>
        <label>Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <label></label>
    <input class="form-control" type="submit" name="add">
</form>