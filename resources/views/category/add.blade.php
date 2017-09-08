@extends('header');
@section('noidung')
    <form class="form-group form-inline" method="post" >
        {{csrf_field()}}
        <label>Name Category</label>
        <input class="form-control" type="text" name="namecategory">
        <label></label>
        <input class="btn btn-success" type="submit" name="add" value="Add">
    </form>
    @endsection


