@extends('header')
@section('noidung')
    <form class="form-group form-inline" method="post" >
        {{csrf_field()}}
        <label>Name Category</label>
        <input class="form-control" type="text" name="namecategory" value="{{$category->name}}">
        <label></label>
        <input class="btn btn-success" type="submit" name="edit" value="Update">
    </form>
    @endsection