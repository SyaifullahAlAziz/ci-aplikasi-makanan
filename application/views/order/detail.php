        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Detail Order</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">No.Antrian : <?= $detail->no_antrian ?> (<?= $detail->nama_user ?>)</h4>
                            </div>
                            <hr style="color:red;">
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-10">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home" style="color:black;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4 class="mb-4">Detail Order</h4>
                                                            <li>Lokasi Antar : <?= $detail->lokasi_antar ?></li>
                                                            <li>Total Harga : Rp.<?= number_format($detail->total_harga, 0, ',', '.') ?></li>
                                                            <li>Tanggal Order :<?= date('d-m-Y', strtotime($detail->tgl_order)) ?></li>
                                                            <li>Status Order : <?= $detail->status_order ?></li>
                                                        </div>
                                                        <div class="col-md-">
                                                            <h4 class="mb-4">Menu</h4>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($menu as $data) :
                                                            ?>
                                                                <li style="color:black;"><?= $no++ ?>. <?= $data->nama_menu ?> (<?= $data->jml ?>)</li>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel">
                                                    <h4 class="mb-4">Menu</h4>

                                                </div>
                                                <div class="tab-pane fade" id="list-messages">
                                                    <h4 class="mb-4">Message Tab Content</h4>
                                                    <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
                                                        enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                                                        Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-settings">
                                                    <h4 class="mb-4">Settings Tab Content</h4>
                                                    <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute
                                                        est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna
                                                        labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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