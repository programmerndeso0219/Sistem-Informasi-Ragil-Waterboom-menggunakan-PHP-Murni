<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Wahana</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            
						 <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="Inputkan ID" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
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
                                    <span class="fa fa-save"></span> Simpan Wahana</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=wahana&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Wahana
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
	$nama=$_POST['nama'];
	$tarif=$_POST['tarif'];
	
    //buat sql
    $sql="INSERT INTO wahana VALUES ('$id','$nama','$tarif')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Wahana Error");
    if ($query){
        echo "<script>window.location.assign('?page=wahana&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
