<form method="post">
    {{csrf_field()}}
    <label></label>
    <?php echo "Delete: ".$category->name ;?>
    <label></label>
    <input type="submit" name="delete" value="Xóa">
</form>