<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Form Input Data Menu</h4>
                    <!-- <span class="ml-1">Element</span> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
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
                            <form action="<?= base_url('menu/save') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis</label><br>
                                            <select name="id_jenis" id="" class="form-control" data-live-search="true" required>
                                                <option value="">Silahkan Pilih Jenis</option>
                                                <?php foreach ($jenis as $data) : ?>
                                                    <option value="<?= $data->id_jenis ?>"><?= $data->jenis ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kantin</label><br>
                                            <select name="id_kantin" id="" class="form-control" data-live-search="true" required>
                                                <option value="">Silahkan Pilih Nama Kantin</option>
                                                <?php foreach ($kantin as $data) : ?>
                                                    <option value="<?= $data->id_kantin ?>"><?= $data->nama_kantin ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Menu</label>
                                            <input type="text" name="nama_menu" class="form-control" placeholder="Masukkan Nama Menu" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Menu</label>
                                            <input type="number" name="harga_menu" class="form-control" placeholder="Masukkan Harga Menu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Menu</label>
                                            <input type="file" name="foto_menu" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Menu</label>
                                            <textarea name="deskripsi_menu" id="" cols="30" rows="8" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <a href="<?= base_url('menu') ?>" class="btn btn-dark mt-3 ml-2">Back</a>
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