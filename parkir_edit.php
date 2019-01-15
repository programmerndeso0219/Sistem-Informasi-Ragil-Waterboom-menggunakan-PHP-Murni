<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM parkir WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Parkir</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" value="<?=$data['jenis']?>"class="form-control" id="inputEmail3" placeholder="Jenis">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="merk" class="col-sm-3 control-label">Merk</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" value="<?=$data['merk']?>"class="form-control" id="inputEmail3" placeholder="Merk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="warna" class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" value="<?=$data['warna']?>"class="form-control" id="inputEmail3" placeholder="Warna">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarif" class="col-sm-3 control-label">Tarif</label>
                            <div class="col-sm-9">
                                <input type="text" name="tarif" value="<?=$data['tarif']?>"class="form-control" id="inputEmail3" placeholder="Tarif">
                            </div>
                        </div>
						
							
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Parkir</button>
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
    $jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
    $warna=$_POST['warna'];
    $tarif=$_POST['tarif'];
    
    //buat sql
    $sql="UPDATE parkir SET jenis='$jenis',merk='$merk',warna='$warna',tarif='$tarif' WHERE id ='$id'";  
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Parkir Error");
    if ($query){
        echo "<script>window.location.assign('?page=parkir&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



