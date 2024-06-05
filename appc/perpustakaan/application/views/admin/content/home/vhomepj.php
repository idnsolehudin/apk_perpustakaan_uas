<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Selamat Datang</h4>

            <div class="row row-md">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div style="margin-left: 8%;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img style="width: 50%;" src="<?= base_url("public/img/code.png") ?>" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
            </div>

            <br>
            <div class="row row-md">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box box-block bg-white tile tile-1 m-b-2">
                        <div class="t-icon right"><span class="bg-danger"></span></div>
                        <div class="t-content">
                            <h6 class="text-uppercase m-b-1">Jumlah Pengunjung Hari Ini</h6>
                            <h1 class="m-b-1"><?= $hari_ini ?></h1>
                            <span class="text-muted font-90">Pengunjung</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box box-block bg-white tile tile-1 m-b-2">
                        <div class="t-icon right"><span class="bg-success"></span></div>
                        <div class="t-content">
                            <h6 class="text-uppercase m-b-1">Jumlah Pengunjung Kemarin</h6>
                            <h1 class="m-b-1"><?= $kemarin ?></h1>
                            <span class="text-muted font-90">Pengunjung</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="box box-block bg-white tile tile-1 m-b-2">
                        <div class="t-icon right"><span class="bg-primary"></span></div>
                        <div class="t-content">
                            <h6 class="text-uppercase m-b-1">Total Jumlah Pengunjung</h6>
                            <h1 class="m-b-1"><?= $total ?></h1>
                            <span class="text-muted font-90">Pengunjung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Log Pengunjung</h4>
            <br>
            <div class="box box-block bg-white">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama </th>
                            <th>Nim</th>
                            <th>Hari / Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($log as $k) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $this->Mahasiswa_model->get_data_id($k['id_mahasiswa'])["nama"] ?></td>
                                <td><?= $this->Mahasiswa_model->get_data_id($k['id_mahasiswa'])["nim"] ?></td>
                                <td> <?= getHari($k['tanggal']) . ", " . $k['tanggal'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>