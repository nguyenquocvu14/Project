<style>
    input{
        display:block;
    }
</style>
<form action="xu_li.php" method = "POST" enctype = "multipart/form-data">
    <label>Ten</label>
    <input type="text" name = "ten">
    <label>Loai San Pham</label>
    <input type="text" name = "loaisp">
    <label>Hinh anh</label>
    <input type="file" name = "hinh">
    <label>Don Gia</label>
    <input type="text" name = "dongia">
    <label>So Luong</label>
    <input type="text" name = "soluong">
    <label>Mo ta</label>
    <br>
    <textarea name="mota" id="" cols="30" rows="10"></textarea>
    <br>
    <button>Gui</button>
</form>