<?php include_once 'Views/template-principal/header.php'; ?>


<!-- Start Content -->
<div class="container py-3">

<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
    <path d="M16 8a8 8 0 1 1-16 0 8 8 0 0 1 16 0zM6.293 9.293a1 1 0 0 0 1.414 0L8 9l3-3a1 1 0 0 0-1.414-1.414L7 6.586 5.707 5.293A1 1 0 0 0 4.293 6.707l2 2z"/>
  </svg>
  <div>
    <?php echo ucfirst($data['title']); ?>
  </div>
</div>
   

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ti</h5>
                    <p class="card-text"></p>

                    <table class="table table-bordered" id="tableListaDeseo" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantida</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        
    </div>

</div>





<!-- Start Footer -->

<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL; ?>assets/js/modulos/listaDeseo.js"></script>
<!-- End Footer -->
</body>

</html>