<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM wahana WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Wahana</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
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
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
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
    $nama=$_POST['nama'];
	$tarif=$_POST['tarif'];
    
    //buat sql
    $sql="UPDATE wahana SET nama='$nama',tarif='$tarif' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Wahana Error");
    if ($query){
        echo "<script>window.location.assign('?page=wahana&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



