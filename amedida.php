<?php include './header.php' ?>
<main>
   <section class="amedida">
        <div class="section-container">
            <h1>Formación a medida</h1>
            <p>En Polaris, entendemos que cada empresa es única y que sus necesidades formativas también lo son. Por eso, ofrecemos <strong>cursos totalmente a medida</strong>, diseñados específicamente para adaptarse a los objetivos, estructura y retos de tu organización.
            </p>
            <p>Nuestra metodología comienza con un análisis detallado de tus requerimientos. A partir de ahí, desarrollamos contenidos personalizados, ajustando el nivel, duración y formato del curso para garantizar la máxima relevancia y efectividad.
            </p>
        </div>

   </section>
   <section class="configurar-curso">
        
            <div class="flex-configurar-curso">
                <div class="left-column-configurar-curso">
                    <h2>Empieza a<br> configurar tu curso</h2>            
                    <img src="./img/office1.jpg" alt="Sillas y mesa de oficina" class="">
                </div>
                <div class="right-column-configurar-curso">
                    <div class="configurar-curso-content">
                        <p>En Polaris, queremos que configurar el curso ideal para tu organización sea un proceso sencillo y accesible. Por eso, te ofrecemos <b>múltiples formas de contactarnos</b> para empezar, elige la opción que te sea más cómoda:</p>
                        <div class="tarjeta-configurar-curso">
                            <h3><i class="fas fa-phone"></i> Llámanos por teléfono</h3>
                            <p>Habla con nosotros para analizar tus necesidades formativas. Llámanos al <a href="tel:+34638900366" ><i class="fas fa-phone"></i> 638 900 366</a> o envíanos un <a href="https://wa.me/34638900366" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a> y estaremos encantados de ayudarte.</p>
                        </div>
                        <div class="tarjeta-configurar-curso">
                            <h3><i class="fas fa-envelope"></i> Escríbenos un email</h3>
                            <p>Si lo prefieres prefieres, mándanos un email a <a href="mailto:info@polarisdata.es">info@polarisdata.es</a> describiendo brevemente tus necesidades, y nos pondremos en contacto contigo rápidamente.</p>
                        </div>
                        <div class="tarjeta-configurar-curso">
                            <h3><i class="fas fa-edit"></i> Rellena el formulario</h3>
                            <p>Completa el <a href="#formulario-amedida">formulario en esta página</a> indicando los detalles básicos de tu empresa y lo que buscas. Nosotros nos encargaremos del resto.</p>
                        </div>
                    </div>
                    
                </div>
    
            </div> <!-- Flex Configurar curso -->
        
       
    </section>
    <section class="contact contact-amedida">
        <div class="section-container">    
            <header>
                <h2>Configura tu curso</h2>  
            </header>    
            <form action="#" method="post" class="section-container mission-container formContact" id="formulario-amedida">
                <h3>DATOS DE CONTACTO</h3>
                <div class="form-group">
                    <input type="text" name="empresa" placeholder="Nombre de la empresa">
                    <input type="tel" name="telefono" placeholder="Teléfono*" required>
                    <input type="text" name="nombre" placeholder="Nombre*" required>    
                    <input type="email" name="email" placeholder="Correo electrónico*" required>
                </div>
                <h3>SOBRE EL CURSO</h3>
                <textarea class="textareaContact" name="message" placeholder="NECESIDAD FORMATIVA / OBJETIVOS*" required></textarea>
                <div class="form-group">
                    <div>
                        <p>Marca los perfiles de los destinatarios:</p>
                        <div><input type="checkbox" name="pefil" value="RRHH / Legal" id="rrhh"><label for="rrhh"> Recursos Humanos / Legal</label></div>
                    
                        <div><input type="checkbox" name="pefil" value="Finanzas / Administación" id="finanzas"><label for="finanzas"> Finanzas / Administación</label></div>
    
                        <div><input type="checkbox" name="pefil" value="Marketing, Ventas y Servicio al cliente" id="marketing"><label for="marketing"> Marketing, Ventas y Servicio al cliente</label></div>
    
                        <div><input type="checkbox" name="pefil" value="Tecnología y Desarrollo" id="tecno"><label for="tecno"> Tecnología y Desarrollo</label></div>
    
                        <div><input type="checkbox" name="pefil" value="Producción, Operaciones y logística" id="logistica"><label for="logistica"> Producción, Operaciones y logística</label></div>
    
                        <div><input type="checkbox" name="pefil" value="Dirección y Gerencia" id="direccion"><label for="direccion"> Dirección y Gerencia</label></div>
    
                    </div>
                    <div>
                        <select name="metodologia" id="metodologia">
                            <option disabled selected>Metodología:</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Aula virtualMixta">Aula virtualMixta</option>
                            <option value="Mixta">Mixta</option>
                            <option value="No sabe">No sabe</option>
                        </select>
                        <select name="idioma" id="idioma">
                            <option disabled selected>Idioma</option>
                            <option value="Castellano">Castellano</option>
                            <option value="Catalán">Catalán</option>
                            <option value="Infiferente">Infiferente</option>
                        </select>
                        <input type="number" placeholder="Número de participantes" name="participantes">
                    </div>
                    
                </div>
               
                
                
                
               
               
                
                
                
                
                <p><input type="checkbox" name="proteccion-datos" required> Acepto los términos y las condiciones.</p> 
                <p><small>En cumplimiento de la normativa de protección de datos se le informa que el responsable del tratamiento de los datos es Polaris S.L. La finalidad del tratamiento: Envío de información de nuestros cursos. La legitimación la conseguimos gracias a tu consentimiento. Tus datos estarán en nuestro fichero. Tus derechos: En cualquier comento puedes acceder, rectificar, eliminar tus datos personales, para ello ponte en contacto con nosotros.</small></p>
                <div class="submitButton"><input type="submit" class="btnContact"></div>

            </form>
        </div>
        
   </section>
</main>
<?php include './footer.php' ?>