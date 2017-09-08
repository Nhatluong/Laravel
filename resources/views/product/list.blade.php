@extends('header')
@section('noidung')
<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Id Loại</th>
                <th>Id</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->idCategory}}</td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->image}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection