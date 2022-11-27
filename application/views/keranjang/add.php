<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Form Input Data Keranjang</h4>
                    <!-- <span class="ml-1">Element</span> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Keranjang</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="<?= base_url('keranjang/save') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama User</label><br>
                                            <select name="id_user" id="" class="form-control" data-live-search="true" required>
                                                <option value="">Silahkan Pilih Nama User</option>
                                                <?php foreach ($user as $data) : ?>
                                                    <option value="<?= $data->id_user ?>"><?= $data->nama_user ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Menu</label>
                                            <select name="id_menu" id="" class="form-control" data-live-search="true" required>
                                                <option value="">Silahkan Pilih Nama Menu</option>
                                                <?php foreach ($menu as $data) : ?>
                                                    <option value="<?= $data->id_menu ?>"><?= $data->nama_menu ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="number" name="jml" class="form-control" placeholder="Masukkan Jumlah" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <a href="<?= base_url('keranjang') ?>" class="btn btn-dark mt-3 ml-2">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->