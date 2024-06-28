
<?php include_once 'Views/template-principal/header.php';?>
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Contáctanos</h1>
        <p>
            En HandyTech, estamos aquí para ayudarte. Ya sea que tengas preguntas sobre nuestros productos tecnológicos, necesites asistencia técnica o desees más información sobre nuestros servicios, nuestro equipo está listo para ofrecerte soporte de calidad.
        </p>
    </div>
</div>


   
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-danger btn-lg px-3">Hablemos</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
    <?php include_once 'Views/template-principal/footer.php';?>

   
</body>

</html>