<!--start content-->
<main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Articles</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="../controller/home.php"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter article</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="row">
                 <div class="col-lg-8 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                       <h5 class="mb-0">Ajouter un client</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <form class="row g-3" method="POST" action="../controller/customer_add_exec.php" enctype = "multipart/form-data">
                      <div class="col-12">
                          <div class="row g-3">
                            <div class="col-lg-3">
                                <label class="form-label">Code client</label>
                                <input type="text" class="form-control" readonly placeholder="Code client" name="cardcode" value="<?php echo $nextcode['codeclient'] ?>">
                            </div>
                            <div class="col-lg-9">
                                <label class="form-label">Nom du client</label>
                                <input type="text" class="form-control" placeholder="Nom du client" name="partname">
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <label class="form-label">Adresse</label>
                          <textarea class="form-control" placeholder="Adresse" name ="adresse" rows="4" cols="4"></textarea>
                        </div>
                        <!-- <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Publish on website
                            </label>
                          </div>
                        </div> -->
                        <div class="col-12">
                          <button class="btn btn-primary px-4">Enregistrer</button>
                        </div>
                      </form>
                      </div>
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>
       <!--end page main-->