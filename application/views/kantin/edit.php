<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Form Edit Data Kantin</h4>
                    <!-- <span class="ml-1">Element</span> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kantin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="<?= base_url('kantin/update') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_kantin" value="<?= $kantin->id_kantin ?>">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Kantin</label>
                                            <input type="text" name="nama_kantin" class="form-control" placeholder="Masukkan Nama Kantin" value="<?= $kantin->nama_kantin ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kantin</label>
                                            <textarea name="alamat_kantin" id="" cols="30" rows="3" class="form-control"><?= $kantin->alamat_kantin ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Kantin</label><br>
                                            <img src="<?= base_url('assets_admin/images/kantin/' . $kantin->foto_kantin) ?>" width="100px" alt="">
                                            <input type="file" name="foto_kantin" class="form-control">
                                            <input type="hidden" name="foto_lama" value="<?= $kantin->foto_kantin ?>">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <a href="<?= base_url('kantin') ?>" class="btn btn-dark mt-3 ml-2">Back</a>
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