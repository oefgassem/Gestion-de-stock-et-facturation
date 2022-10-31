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

              <div class="card">
                <div class="card-header py-3"> 
                  <div class="row g-3 align-items-center">
                    <div class="col-12 col-lg-4 col-md-6 me-auto">
                      <h5 class="mb-1"><?php echo date('d/m/Y', time()) ?></h5>
                      <p class="mb-0">Order ID : #<?php echo $nextid['AUTO_INCREMENT'] ?></p>
                    </div>
                    <div class="col-12 col-lg-3 col-6 col-md-3">
                      <select class="form-select">
                        <option>Change Status</option>
                        <option>Awaiting Payment</option>
                        <option selected>Confirmed</option>
                        <option>Shipped</option>
                        <option>Delivered</option>
                      </select>
                    </div>
                    <div class="col-12 col-lg-3 col-6 col-md-3">
                       <button type="button" class="btn btn-primary">Sauvegarder</button>
                       <button type="button" class="btn btn-secondary"><i class="bi bi-printer-fill"></i>Imprimer</button>
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
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Code client" aria-label="Code client">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#selectclient">Chercher</button>
                                <button class="btn btn-outline-secondary" type="button">Confirmer</button>
                              </div>
                              <div class="input-group mb-3">
                                <input class="form-control form-control-sm" type="text" placeholder="Nom du client" aria-label="Nom du client">
                              </div>
                              <div class="input-group mb-3">
                                <input class="form-control form-control-sm mb-3" type="text" placeholder="Adresse" aria-label="Adresse">
                              </div>
                                <p class="mb-1">+91-9910XXXXXX</p>
                              </div>
                           </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
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
                       </div>
                      <div class="col">
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
                    </div>
                  </div><!--end row-->

                  <div class="row">
                      <div class="col-12 col-lg-8">
                         <div class="card border shadow-none radius-10">
                           <div class="card-body">
                               <div class="table-responsive">
                                 <table class="table align-middle mb-0">
                                   <thead class="table-light">
                                     <tr>
                                       <th>Product</th>
                                       <th>Unit Price</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                     <tr>
                                       <td>
                                         <div class="orderlist">
                                          <a class="d-flex align-items-center gap-2" href="javascript:;">
                                            <div class="product-box">
                                                <img src="https://via.placeholder.com/400X300" alt="">
                                            </div>
                                            <div>
                                                <P class="mb-0 product-title">Men White Polo T-shirt</P>
                                            </div>
                                           </a>
                                         </div>
                                       </td>
                                       <td>$35.00</td>
                                       <td>2</td>
                                       <td>$70.00</td>
                                     </tr>
                                     <tr>
                                      <td>
                                        <div class="orderlist">
                                         <a class="d-flex align-items-center gap-2" href="javascript:;">
                                           <div class="product-box">
                                               <img src="https://via.placeholder.com/400X300" alt="">
                                           </div>
                                           <div>
                                               <P class="mb-0 product-title">Formal Black Coat Pant</P>
                                           </div>
                                          </a>
                                        </div>
                                      </td>
                                      <td>$25.00</td>
                                      <td>1</td>
                                      <td>$25.00</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="orderlist">
                                         <a class="d-flex align-items-center gap-2" href="javascript:;">
                                           <div class="product-box">
                                               <img src="https://via.placeholder.com/400X300" alt="">
                                           </div>
                                           <div>
                                               <P class="mb-0 product-title">Blue Shade Jeans</P>
                                           </div>
                                          </a>
                                        </div>
                                      </td>
                                      <td>$65.00</td>
                                      <td>2</td>
                                      <td>$130.00</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="orderlist">
                                         <a class="d-flex align-items-center gap-2" href="javascript:;">
                                           <div class="product-box">
                                               <img src="https://via.placeholder.com/400X300" alt="">
                                           </div>
                                           <div>
                                               <P class="mb-0 product-title">Yellow Winter Jacket for Men</P>
                                           </div>
                                          </a>
                                        </div>
                                      </td>
                                      <td>$56.00</td>
                                      <td>1</td>
                                      <td>$56.00</td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="orderlist">
                                         <a class="d-flex align-items-center gap-2" href="javascript:;">
                                           <div class="product-box">
                                               <img src="https://via.placeholder.com/400X300" alt="">
                                           </div>
                                           <div>
                                               <P class="mb-0 product-title">Men Sports Shoes Nike</P>
                                           </div>
                                          </a>
                                        </div>
                                      </td>
                                      <td>$85.00</td>
                                      <td>1</td>
                                      <td>$85.00</td>
                                    </tr>
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
                                   <button type="button" class="btn alert-success radius-30 px-4">Confirmed</button>
                                </div>
                              </div>
                                <div class="d-flex align-items-center mb-3">
                                  <div>
                                    <p class="mb-0">Subtotal</p>
                                  </div>
                                  <div class="ms-auto">
                                    <h5 class="mb-0">$198.00</h5>
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

                        <div class="card border shadow-none bg-warning radius-10">
                          <div class="card-body">
                              <h5>Payment info</h5>
                               <div class="d-flex align-items-center gap-3">
                                  <div class="fs-1">
                                    <i class="bi bi-credit-card-2-back-fill"></i>
                                  </div>
                                  <div class="">
                                    <p class="mb-0 fs-6">Master Card **** **** 8956 </p>
                                  </div>
                               </div>
                              <p>Business name: Template Market LLP <br>
                                 Phone: +91-9910XXXXXX
                              </p>
                          </div>
                        </div>


                     </div>
                  </div><!--end row-->
                  </form>
                </div>
              </div>
            <!-- Modal -->
										<div class="modal fade" id="selectclient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-xl">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Selectionner le client</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<h6 class="mb-0 text-uppercase">DataTable Import</h6>
                          <hr/>
                          <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="selectclient" name="selectclient" class="table table-striped table-bordered table-hover">
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
                                    <tr>
                                      <td><?php echo $client['id'] ?></td>
                                      <td><?php echo $client['cardcode'] ?></td>
                                      <td><?php echo $client['partname'] ?></td>
                                      <td></td>
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
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div>
											</div>
										</div>
          </main>
       <!--end page main-->