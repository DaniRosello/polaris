
<?php include './header.php' ?>
<main>
<section class="banner">
    <video src="./img/office.mp4" muted autoplay loop class="banner-video" poster="./img/office.jpg"></video>
    <div class="section-container">
        <div class="banner-content">                   
            <div class="item">
                <h1>Expertos en formación para empresas</h1>
                <h3>En Polaris ofrecemos <strong>cursos a medida</strong>, diseñados para maximizar el rendimiento de tu equipo adaptándonos a tus necesidades.</h3>                
                <a class="btn btn1" href="cursos.html">Nuestros cursos</a> 
                <a class="btn btn2" href="contact.html">Solicita información</a>
            </div>
        </div>
        <!-- <div class="hola">Hola</div> -->
        <div class="students-container">
            <div class="students-item">
                <i class="fas fa-cogs"></i>
                <div class="students-content">
                    <h4>Cursos a medida</h4>          
                    <p>Diseñamos programas específicos para el sector, tamaño y necesidades de tu equipo, garantizando resultados efectivos.</p>
                </div>            
            </div>
            <div class="students-item">
                <i class="fas fa-graduation-cap"></i>
                <div class="students-content">
                    <h4>Formadores expertos</h4>          
                    <p>Contamos con formadores están especializados en capacitar al personal con metodologías prácticas y actualizadas.</p>
                </div>            
            </div>
        </div>
    </div>
</section> 
<section class="students">     
    <div class="text-medio">         
        <div class="item image-container">        
            <img class="students-image" src="./img/meet02.jpg" alt="Chica hablando en una reunión de trabajo">          
        </div>                   
        <div class="text-medio-content">
            <h3>Calidad y eficiencia garantizadas</h3>
            <p>Con Polaris, tu equipo se beneficiará de una formación práctica, impartida por expertos, y enfocada en resolver los desafíos reales de tu empresa. La excelencia es nuestra prioridad.</p>
            <a class="btn btn2" href="contact.html">Solicita información</a>
        </div>       
    </div>   
</section>
<section class="cursos">  
    <div class="section-container cursos-container"> 
        <header class="cursos-header">
            <h2>Nuestros cursos destacados</h2>
            <p>Explora nuestras formaciones más demandadas. Cada curso es <strong>TOTALMENTE&nbsp;PERSONALIZABLE</strong>, asegurando una experiencia de aprendizaje alineada con los objetivos de tu empresa.</p>               
        </header>        
        <div class="cursos-flex">
            <div class="curso">
                <img src="./img/ia.jpg" alt="IA">
                <div class="curso-content">
                    <h3>Nuevas habilidades IA</h3>
                    <h4>IA Generativa | Machine Learning</h4>
                    <p>Descubre cómo aprovechar la inteligencia artificial para potenciar la productividad, creatividad, innovación, competitividad y toma de decisiones estratégicas en tu empresa.</p>
                </div>               
            </div>
            <div class="curso">
                <img src="./img/meet01.jpg" alt="Clase meeting">
                <div class="curso-content">
                    <h3>Microsoft Excel</h3>
                    <h4>Domina Excel a todos los niveles</h4>
                    <p>Domina Excel en todos los niveles con formación personalizada y totalmente práctica. Desde lo básico hasta funciones avanzadas, adaptado a tus necesidades empresariales.</p>
                </div>               
            </div>
            <div class="curso">
                <img src="./img/excel2.jpg" alt="Portátil Excel">
                <div class="curso-content">
                    <h3>Excel for Data Insights</h3>
                    <h4>Da un paso más con Excel</h4>
                    <p>Transforma tus datos en información valiosa mediante técnicas avanzadas de análisis con Excel, utilizando tablas dinámicas, gráficos interactivos y Power Query para decisiones estratégicas.</p>
                </div>               
            </div>
            <div class="curso">
                <img src="./img/tiempo.jpg" alt="">
                <div class="curso-content">
                    <h3>Gestión del tiempo</h3>
                    <h4>Aumenta la productividad</h4>
                    <p>Aprende técnicas efectivas para gestionar tu tiempo, aumentar la productividad, reducir el estrés y alcanzar tus metas profesionales con éxito.</p>
                </div>               
            </div>
            <div class="curso">
                <img src="./img/access.jpg" alt="">
                <div class="curso-content">
                    <h3>Microsoft Access</h3>
                    <h4>Gestión de datos eficiente</h4>
                    <p>Domina Microsoft Access y gestiona bases de datos de forma eficiente. Aprende a diseñar, organizar y analizar información clave para mejorar la toma de decisiones empresariales.</p>
                </div>               
            </div>
            <div class="curso">
                <img src="./img/web.jpg" alt="">
                <div class="curso-content">
                    <h3>Páginas web</h3>
                    <h4>Diseño y programación Web</h4>
                    <p>Forma a tu equipo con nuestro curso práctico para diseñar y gestionar páginas web profesionales, optimizadas para una navegación eficiente.</p>
                </div>               
            </div>            
        </div> <!-- Cursos Flex  -->
        <div class="diferente">
            <p>¿Buscas algo diferente?</p>
            <p>Mira nuestro <a href="cursos.html">catálogo de cursos</a> o crea tu <a href="amedida.html">curso personalizado</a></p>   
        </div>
             
    </div>      
</section>    
<section class="contact">
    <div class="section-container">    
        <header>
            <h2>Solicita información</h2>  
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
    </div> <!-- Container -->
</section> <!-- Mission -->
</main>
<?php include './footer.php' ?>