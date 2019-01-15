<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Parkir</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            
						 <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">No Polisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="Inputkan no_polisi" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Inputkan jenis" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="merk" class="col-sm-3 control-label">Merk</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="inputEmail3" placeholder="Inputkan merk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="warna" class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" class="form-control" id="inputEmail3" placeholder="Inputkan warna" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarif" class="col-sm-3 control-label">Tarif</label>
                            <div class="col-sm-9">
                                <input type="text" name="tarif" class="form-control" id="inputEmail3" placeholder="Inputkan Tarif" required>
                            </div>
                        </div>
		
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Parkir</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=parkir&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Parkir
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id=$_POST['id'];
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
    $warna=$_POST['warna'];
    $tarif=$_POST['tarif'];
	
    //buat sql
    $sql="INSERT INTO parkir VALUES ('$id','$jenis','$merk','$warna','$tarif')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Parkir Error");
    if ($query){
        echo "<script>window.location.assign('?page=parkir&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
