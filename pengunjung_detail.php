<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pengunjung</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pengunjung WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Pengunjung</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengunjung</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin Pengunjung</td> <td><?= $data['jk'] ?></td>
                        </tr>
                        <tr>
                            <td>No HP Pengunjung</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pengunjung</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pengunjung&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pengunjung</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

