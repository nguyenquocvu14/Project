<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
        }
        form{
            border : 2px solid red;
            margin:0 auto
        }
        .controll{
            margin-top:8px;
            padding: 0 15px;
        }
        button{
            width: 100%;
        }
        textarea{
            width: 100%;
        }
      
    </style>
</head>
<body>
    <form action="xuli1.php" method = "POST">
        <h1>NHAP VAO THONG TIN</h1>
        <div class="controll">
            <label for="">MSSV</label>
            <input type="text" name = "mssv">
        </div>

        <div class="controll">
            <label for="">Ho va Ten</label>
            <input type="text" name = "ten">
        </div>

        <div class="controll">
            <label for="">Gioi tinh</label>
            <input type="radio" name = "gioitinh" value = "nam">Nam ,
            <input type="radio" name = "gioitinh" value = "nu">Nu
        </div>

        <div class="controll">
            <label>Ngon Ngu Lap Trinh</label>
            <input type="checkbox" name = "c++">c++
            <input type="checkbox" name = "php">PHP
        </div>

        
        <div class="controll">
            <label for="">Thanh Pho ban chon </label>
        <select name="thanhpho">
        <option value="">Vui Long Chon Thanh Pho</option>
        <option value="hcm"name ="thanhpho">TPHCM</option>
        <option value="hn"name ="thanhpho">HA NOI</option>
        <option value="ct"name ="thanhpho">CAN THO</option>
        </select>
        </div>

        <div class="controll">
        Tin Nhan :<br><textarea name="content" id="" cols="30" rows="10" ></textarea>
        </div>
        <button type = "submit">GUI</button>
    </form>
</body>
</html>