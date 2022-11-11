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
                    <li class="breadcrumb-item active" aria-current="page">Liste des clients</li>
                  </ol>
                </nav>
             
              </div>
            </div>
            <!--end breadcrumb-->

               <div class="card">
                 <div class="card-body">
                   <div class="d-flex align-items-center">
                       <form class="ms-auto position-relative">
                         <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         <input class="form-control ps-5" type="text" placeholder="search">
                       </form>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                          <th>#</th>
                          <th>Code client</th>
                          <th>Nom du client</th>
                          <th>adresse</th>
                          <th>Wilaya</th>
                          <th>Code postal</th>
                          <th>Pays</th>
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                        <?php foreach ($clients as $key => $client) {?>
                         <tr>
                          <td><?php echo $client['id'] ?></td>
                          <td><?php echo $client['cardcode'] ?></td>
                          <td><?php echo $client['partname'] ?></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>
                             <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             </div>
                           </td>
                         </tr>
                         <?php }?>
                       </tbody>
                     </table>
                   </div>
                 </div>
               
              </div>
    
          </main>
       <!--end page main-->