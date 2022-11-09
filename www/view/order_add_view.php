<script src="../public/assets/js/bootstrap.bundle.min.js"></script>
<script src="../public/assets/js/autocomplete.js"></script>
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Vente</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter commande</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <form method="POST" action="../controller/order_add_exec.php" enctype = "multipart/form-data" id="orderaddform">
        <div class="card">
            <div class="card-header py-3">
                <div class="row g-3 align-items-center">
                    <div class="col-12 col-lg-4 col-md-6 me-auto">
                        <h5 class="mb-1" name="DocDate"><?php echo date('d/m/Y', time()) ?></h5>
                        <input type="text" name="DocDate" value="<?php echo date('Y-m-d', time()) ?>" hidden>
                        <p class="mb-0" name="DocNum">Order ID : #<?php echo $nextid['docnumber'] ?></p>
                        <input type="text" name="DocNum" value="<?php echo $nextid['docnumber'] ?>" hidden>
                    </div>
                    <!-- <div class="col-12 col-lg-3 col-6 col-md-3">
                        <select class="form-select">
                            <option>Change Status</option>
                            <option>Awaiting Payment</option>
                            <option selected>Confirmed</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                        </select>
                        </div> -->
                    <div class="col-12 col-lg-3 col-6 col-md-3">
                        <!-- <button type="button" class="btn btn-primary">Sauvegarder</button>
                        <button type="button" class="btn btn-secondary"><i class="bi bi-printer-fill"></i>Imprimer</button> -->
                        <button type="submit" class="btn btn-primary" form="orderaddform" value="submit">Sauvegarder</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
                        <div class="col">
                            <div class="card border shadow-none radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="icon-box bg-light-primary border-0">
                                            <i class="bi bi-person text-primary"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-2">Client</h6>
                                            <div class="input-group mb-3">
                                                <input type="text" id="part_id" name="part_id" class="form-control"
                                                    placeholder="ID client" aria-label="ID Client" hidden>
                                                <input type="text" id="cardcode" name="cardcode" disabled class="form-control"
                                                    placeholder="Code client" aria-label="Code client">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#selectclient">Chercher</button>

                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="cardname" class="form-control form-control-sm"
                                                    type="text" placeholder="Nom du client" aria-label="Nom du client" id="cardname" name="cardname">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="address" disabled class="form-control form-control-sm mb-3"
                                                    type="text" placeholder="Adresse" aria-label="Adresse">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-light-success border-0">
                                    <i class="bi bi-truck text-success"></i>
                                </div>
                                <div class="info">
                                    <h6 class="mb-2">Order info</h6>
                                    <p class="mb-1"><strong>Shipping</strong> : Red Express</p>
                                    <p class="mb-1"><strong>Pay Method</strong> : Master Card</p>
                                    <p class="mb-1"><strong>Status</strong> : New</p>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div> -->
                        <!-- <div class="col">
                            <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-light-danger border-0">
                                    <i class="bi bi-geo-alt text-danger"></i>
                                </div>
                                <div class="info">
                                    <h6 class="mb-2">Deliver to</h6>
                                    <p class="mb-1"><strong>City</strong> : Sydney, Australia</p>
                                    <p class="mb-1"><strong>Address</strong> : 47-A, Street Name, <br>Sydney Australia</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div> -->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- <div class="card border shadow-none radius-10">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="product_info_table">
                                    <thead>
                                    <tr>
                                        <th style="width:50%">Produit</th>
                                        <th style="width:10%">Prix untaire</th>
                                        <th style="width:10%">Quantité</th>
                                        <th style="width:20%">Prix total</th>
                                        <th style="width:10%"><button type="button" id="add_row" class="btn btn-primary"><i class="fa fa-plus">Ajouter ligne</i></button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="orderlist">
                                            <a class="d-flex align-items-center gap-2" href="javascript:;">
                                                <div class="product-box">
                                                    <img src="https://via.placeholder.com/400X300" hidden alt="">
                                                </div>
                                                <div>
                                                    <input type="text" name="selectproduct" id="selectproduct" placeholder="Sélectionner un produit" class="form-control actions" required>
                                                </div>
                                            </a>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            </div> -->
                            <div>
                                <div class="input-group mb-3">
                                    <form action="" id="form1" method="get">
                                        <input type="text" name="selectproduct" id="selectproduct" placeholder="Sélectionner un produit" class="form-control actions">
                                        <input type="text" name="selectqty" id="selectqty" placeholder="Quantité" class="form-control actions">
                                        <!-- <input type="submit" value="Ajouter" class="btn btn-primary"> -->
                                        <button id="selectproductbtn" name="selectproductbtn" type="button" form="form1" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table" id="tablearticle">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Photo</th>
                                                    <th>Article</th>
                                                    <th>Qté</th>
                                                    <th>Prix unitaire</th>
                                                    <th class="text-end">Prix total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div>
                                            <h5 class="mb-0">Order Summary</h5>
                                        </div>
                                        <div class="ms-auto">
                                            <button type="button"
                                                class="btn alert-success radius-30 px-4">Confirmed</button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Total HT</p>
                                        </div>
                                        <div class="ms-auto">
                                            <input type="text" id="totaldata" name="totaldata" value="">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Shipping Price</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0">$0.00</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Taxes</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0">$24.00</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Payment Fee</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0">$14.00</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Discount</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0 text-danger">-$36.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="selectclient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selectionner le client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="selectclienttable" name="selectclient"
                                class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code client</th>
                                        <th>Nom du client</th>
                                        <th>Adresse</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clients as $key => $client) { ?>
                                    <tr class="clickableRow">
                                        <td><?php echo $client['id'] ?></td>
                                        <td><?php echo $client['cardcode'] ?></td>
                                        <td><?php echo $client['partname'] ?></td>
                                        <td>XX</td>
                                        <td></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Code client</th>
                                        <th>Nom du client</th>
                                        <th>Adresse</th>
                                        <th>Balance</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="selectok">OK</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!--end page main-->

<script>
var auto_complete = new Autocomplete(document.getElementById('selectproduct'), {
    data: <?php echo json_encode($productssearcha); ?>,
    maximumItems: 10,
    highlightTyped: true,
    highlightClass: 'fw-bold text-primary'
});
</script>