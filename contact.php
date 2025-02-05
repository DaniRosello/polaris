<?php include './header.php' ?>
<main>
   
    <section class="contact contacto">
        <div class="section-container">    
            <header>
                <h2>Contacta con nosotros</h2>  
            </header>    
            <form action="#" method="post" class="section-container mission-container formContact">
                <div class="form-group">
                    <input type="text" name="empresa" placeholder="Nombre de la empresa">
                    <input type="tel" name="telefono" placeholder="Teléfono*" required>
                    <input type="text" name="nombre" placeholder="Nombre*" required>    
                    <input type="email" name="email" placeholder="Correo electrónico*" required>
                </div>
                <textarea class="textareaContact" name="message" placeholder="Mensaje*" required></textarea>
                <p><input type="checkbox" name="proteccion-datos" required> Acepto los términos y las condiciones.</p> 
                    <p><small>En cumplimiento de la normativa de protección de datos se le informa que el responsable del tratamiento de los datos es Polaris S.L. La finalidad del tratamiento: Envío de información de nuestros cursos. La legitimación la conseguimos gracias a tu consentimiento. Tus datos estarán en nuestro fichero. Tus derechos: En cualquier comento puedes acceder, rectificar, eliminar tus datos personales, para ello ponte en contacto con nosotros.</small></p>
                <div class="submitButton"><input type="submit" class="btnContact"></div>
            </form>
            <div class="contacto">
                <div class="cont direccion">
                    <h3>Dirección</h3>
                    <address>Carrer Compte Güell, 54 4º 1º<br>
                        08028 Barcelona</address>
                </div>
                <div class="cont telefono">
                    <h3>Teléfono / Whatssapp</h3>
                    <a href="tel:+34638900366" ><i class="fab fa-whatsapp"></i> 638 900 366</a>
                </div>
                <div class="cont email">
                    <h3>email</h3>
                    <a href="mailto:info@polarisdata.es"><i class="fas fa-envelope"></i> info@polarisdata.es</a>
                </div>
            </div>
        </div>
       
        
   </section>

</main>
<?php include './footer.php' ?>