@extends('header')
@section('noidung')
<div class="container">
    <form class="form-group form-inline" method="post">
        {{csrf_field()}}
        <div class="row">
            <label class="col-md-2">Category</label>
            <select name="category">
                @foreach($cate as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach;
            </select>
        </div>
        <div class="row">
            <label class="col-md-1">Name Product</label>
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
        <input class="form-control btn btn-success" type="submit" name="add">
    </form>
</div>
@endsection
</div>
