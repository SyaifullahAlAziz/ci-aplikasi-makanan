<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Form Input Data Kantin</h4>
                    <!-- <span class="ml-1">Element</span> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kantin</a></li>
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
                            <form action="<?= base_url('kantin/save') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Kantin</label>
                                            <input type="text" name="nama_kantin" class="form-control" placeholder="Masukkan Nama Kantin">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kantin</label>
                                            <textarea name="alamat_kantin" id="" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Kantin</label>
                                            <input type="file" name="foto_kantin" class="form-control">
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