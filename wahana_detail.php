<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Wahana</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM wahana WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Wahana</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Wahana</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tarif Per Wahana</td> <td><?= $data['tarif'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=wahana&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Wahana</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

