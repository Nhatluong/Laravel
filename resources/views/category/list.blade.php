@extends('header')
@section('noidung')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <table class="table table-bordered table-responsive table-striped">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên thể loại</th>
                        <th class="text-center">Quản lý</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route("show.edit",$category->id)}}"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                                <a class="btn btn-danger" href="{{route("show.delete",$category->id)}}"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
