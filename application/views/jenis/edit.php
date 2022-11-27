<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Form Edit Data Jenis</h4>
                    <!-- <span class="ml-1">Element</span> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Jenis</a></li>
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
                            <form action="<?= base_url('jenis/update') ?>" method="post">
                                <input type="hidden" name="id_jenis" value="<?= $jenis->id_jenis ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Jenis</label>
                                        <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis" value="<?= $jenis->jenis ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <a href="<?= base_url('jenis') ?>" class="btn btn-dark mt-3 ml-2">Back</a>
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