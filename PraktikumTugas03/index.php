<?php

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    fieldset {
        background-color: #eeeeee;
    }
    legend {
        background-color: gray;
        color: white;
        padding: 5px 10px;
    }
    input {
        margin: 5px;
    }
    form {
        margin: auto;
        width: 75%;
        padding: 10px;
    }
</style>
</head>
<body>
    <div>
        <form class="form-horizontal" method="GET" action="hasilBMI.php">
            <fieldset>
            <legend>Form Isian Index Massa Tubuh (BMI)</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="nama">Nama</label>
                <div class="col-md-6 input-group mb-3">
                    <i class="fa fa-address-book input-group-text" id="basic-addon1"></i>
                    <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="umur">Umur</label>  
                <div class="col-md-6 input-group mb-3">
                    <i class="fa fa-user input-group-text" id="basic-addon1"></i>
                    <input id="umur" name="umur" type="text" placeholder="" class="form-control input-md" required="">  
                    <span class="input-group-text" id="basic-addon1">Thn</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="berat">Berat Badan</label>  
                <div class="col-md-6 input-group mb-3">
                    <i class="fa fa-anchor input-group-text" id="basic-addon1"></i>
                    <input id="berat" name="berat" type="text" placeholder="" class="form-control input-md" required="">
                    <span class="input-group-text" id="basic-addon1">Kg</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="tinggi">Tinggi Badan</label>  
                <div class="col-md-6 input-group mb-3">
                    <i class="fa fa-bell-o input-group-text" id="basic-addon1"></i>
                    <input id="tinggi" name="tinggi" type="text" placeholder="" class="form-control input-md" required=""> 
                    <span class="input-group-text" id="basic-addon1">cm</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Gender</label>
                <div class="col-md-6"> 
                    <label class="radio-inline" for="radios-0">
                    <input type="radio" name="gender" id="radios-0" value="Laki" checked="checked">
                        Laki-Laki
                    </label> 
                    <label class="radio-inline" for="radios-1">
                    <input type="radio" name="gender" id="radios-1" value="Perempuan">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Kirim"></label>
                <div class="col-md-4">
                    <button id="Kirim" name="Kirim" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</body>
</html>