<?php 
include_once 'includes/sesiones.php';
include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/funciones/cargar_cookies.php'; ?>

 <section class="seccion contenedor">
   <h2><a name="link_registro" id="link_registro">Registro de Usuarios</a></h2>
   <form id="registro" class="registro" action="pagar.php" method="post">
     <div  id="datos_usuario"class="registro caja clearfix">
       <div class="campo">
         <label for="nombre">Nombre:</label>
         <input type="text" id="nombre" readonly name="nombre" placeholder="Tu Nombre" value="<?=$_SESSION['nombre_cliente']?>">
       </div>
       <div class="campo">
         <label for="apellido">Apellido:</label>
         <input type="text" id="apellido" readonly name="apellido" placeholder="Tu Apellido" value="<?=$_SESSION['apellido_cliente']?>">
       </div>
       <div class="campo">
         <label for="email">Email:</label>
         <input type="email" id="email" readonly name="email" placeholder="Tu Email" value="<?=$_SESSION['email_cliente']?>">
       </div>
       <div id="error"></div>
     </div><!--#datos_usuario-->

     <div id="paquetes" class="paquetes">
       <h3>Elige el numero de boletos</h3>
       <ul class="lista-precios clearfix">
          <li>
             <div class="tabla-precio">
               <h3>Pase por dia(Viernes)</h3>
               <p class="numero">$30</p>
               <ul>
                   <li>3 Conferencias</li>
                   <li>5 Talleres</li>
                   <li>Bocadillos gratis</li>
               </ul>
              <div class="orden">
               <label for="pase_dia">Boletos deseados:</label>
               <input type="number"  min="0" id="pase_dia" size="3" name="boletos[un_dia][cantidad]" placeholder="0" value="<?=$boletosDia?>">
               <input type="hidden" value="30" name="boletos[un_dia][precio]">
              </div>
             </div>
          </li>
          <li>
             <div class="tabla-precio">
               <h3>Todos los dias</h3>
               <p class="numero">$50</p>
               <ul>
                   <li>Todas las conferencias</li>
                   <li>Todos los talleres</li>
                   <li>Bocadillos gratis</li>
               </ul>
               <div class="orden">
                <label for="pase_completo">Boletos deseados:</label>
                <input type="number"  min="0" id="pase_completo" size="3"  name="boletos[completo][cantidad]" placeholder="0" value="<?=$boletoCompleto?>">
                 <input type="hidden" value="50" name="boletos[completo][precio]">
               </div>
             </div>
          </li>
          <li>
             <div class="tabla-precio">
               <h3>Pase por 2 dias(Viernes/Sabado)</h3>
               <p class="numero">45</p>
               <ul>
                   <li>6 Conferencias</li>
                   <li>10 Talleres</li>
                   <li>Bocadillos gratis</li>
               </ul>
               <div class="orden">
                <label for="pase_dosdias">Boletos deseados:</label>
                <input type="number"  min="0" id="pase_dosdias" size="3"  name="boletos[2dias][cantidad]" placeholder="0" value="<?=$boletos2Dias?>">
                 <input type="hidden" value="45" name="boletos[2dias][precio]">
               </div>
             </div>
          </li>
       </ul>
       <div id="eventos" class="eventos clearfix">
         <h3>Elige tus talleres</h3>
         <div class="caja">
               <div id="viernes" class="contenido-dia clearfix">
                   <h4>Viernes</h4>
                       <div>
                           <p>Talleres:</p>
                           <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Escuela Para Padres</label>
                           <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> ??Depresion y Tristeza?</label>
                           <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> Un mejor lugar</label>
                           <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Comunidad Feliz</label>
                           <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> Ayuda y ayudate</label>
                       </div>
                       <div>
                           <p>Conferencias:</p>
                           <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Controla Tus Impulsos</label>
                           <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Disfruta Tu Felicidad</label>
                           <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Traza tu camino</label>
                       </div>
                       <div>
                           <p>Seminarios:</p>
                           <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> PSIVA en comunidad</label>
                       </div>
               </div> <!--#viernes-->
               <div id="sabado" class="contenido-dia clearfix">
                   <h4>S??bado</h4>
                   <div>
                         <p>Talleres:</p>
                         <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> Ni??os/Ni??as mejores 2019</label>
                         <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> Trabajo en comunidad</label>
                         <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> Libre</label>
                         <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> Ayuda y Ayudate</label>
                         <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> Con Optimismo para ti</label>
                         <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> ??Quien soy?</label>
                   </div>
                   <div>
                         <p>Conferencias:</p>
                         <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Un cambio por ti</label>
                         <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Problema Y Solucion</label>
                         <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> El turno del cambio</label>
                   </div>
                   <div>
                         <p>Seminarios:</p>
                         <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> SAJUBA</label>
                         <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> PSIVA en la comunidad</label>
                   </div>
               </div> <!--#sabado-->
               <div id="domingo" class="contenido-dia clearfix">
                   <h4>Domingo</h4>
                   <div>
                         <p>Talleres:</p>
                         <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Ayuda y Ayudate</label>
                         <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Ser mejor Padre</label>
                         <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> Ser mejor Hijo</label>
                         <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Un futuro mejor</label>
                         <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> ??Quien soy?</label>
                   </div>
                   <div>
                         <p>Conferencias:</p>
                         <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time>  Problema Y Solucion</label>
                         <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ??Soy mala persona?</label>
                         <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Controla Tus Impulsos</label>
                   </div>
                   <div>
                         <p>Seminarios:</p>
                         <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Psicologos Catolicos</label>
                         <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> SAJUBA</label>
                   </div>
               </div> <!--#domingo-->
           </div><!--.caja-->
     </div> <!--#eventos-->
     <div  id="resumen" class="resumen">
       <h3>Pago Y Extras</h3>
       <div class="caja clearfix">
         <div class="extras">
            <div class="orden">
              <label for="camisa_evento">Camisa del Evento $10<small>(Promocion 7% dto.)</small></label>
              <input type="number" min="0" id="camisa_evento" name="pedido_extra[camisas][cantidad]" size="3" placeholder="0" value="<?=$cantCamisas?>">
               <input type="hidden" value="10" name="pedido_extra[camisas][precio]">
            </div> <!--.orden-->
            <div class="orden">
              <label for="etiquetas">Paquete de 3 etiquetas $2<small>(PSIVA/SAJUBA/Psicologos Catolicos)</small></label>
              <input type="number" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]" size="3" placeholder="0" value="<?=$cantEtiquetas?>">
               <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]">
            </div> <!--.orden-->
            <div class="orden">
              <label for="regalo">Seleccione un regalo</label><br>
              <select  id="regalo" name="regalo" required>
                <option value="">-Selecione un regalo-</option>
                <option value="2">Etiquetas</option>
                <option value="1">Pulseras</option>
                <option value="3">Plumas</option>
              </select>
            </div><!--.orden-->
            <input type="button" id="calcular"  class="button" value="Calcular">
         </div><!--.extras-->
         <div class="total">
           <p>RESUMEN:</p>
           <div id="lista-productos">

           </div>
           <p>TOTAL:</p>
           <div id="suma-total">

           </div>
           <input type="hidden" name="total_pedido" id="total_pedido" value="0">
           <input type="hidden" name="enviado">
           <input type="hidden" id="tipo_de_pago" name="tipo_de_pago" value="0">
           <input type="hidden" id="id_cliente" name="id_cliente" value="<?=$_SESSION['id_cliente']?>">
           <input type="button" id="btnRegistro" class="button" value="Pagar">
         </div><!--.total-->
       </div><!--.caja-->
     </div><!--#resumen-->
     </div><!--#paquetes-->
   </form>

   <div id="seleccionar_metodo_de_pago" class="modal" tabindex="-2" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Seleccione el m??todo de pago que desea utilizar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="texto-modal">
          <p>El m??todo de pago Online se tramitar?? via PayPal, el m??todo offline generar?? un archivo PDF con su balance</p>
        </div>
        <div class="modal-footer">
          <button id="online_payment" class="btn btn-success">Pago Online</button>
          <button id="offline_payment" class="btn btn-primary">Pago Offline</button>
        </div>
      </div>
    </div>
  </div>

   <div id="confirmar_registro" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pol??tica de Privacidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="texto-modal">
          <p>POL??TICA DE PRIVACIDAD</p>

          <p>El presente Pol??tica de Privacidad establece los t??rminos en que PSIVA usa y protege la informaci??n que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compa????a est?? comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de informaci??n personal con la cual usted pueda ser identificado, lo hacemos asegurando que s??lo se emplear?? de acuerdo con los t??rminos de este documento. Sin embargo esta Pol??tica de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta p??gina para asegurarse que est?? de acuerdo con dichos cambios.</p>

          <p>Informaci??n que es recogida</p>

          <p>Nuestro sitio web podr?? recoger informaci??n personal por ejemplo: Nombre,  informaci??n de contacto como  su direcci??n de correo electr??nica e informaci??n demogr??fica. As?? mismo cuando sea necesario podr?? ser requerida informaci??n espec??fica para procesar alg??n pedido o realizar una entrega o facturaci??n.</p>

          <p>Uso de la informaci??n recogida</p>

          <p>Nuestro sitio web emplea la informaci??n con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electr??nicos peri??dicamente a trav??s de nuestro sitio con ofertas especiales, nuevos productos y otra informaci??n publicitaria que consideremos relevante para usted o que pueda brindarle alg??n beneficio, estos correos electr??nicos ser??n enviados a la direcci??n que usted proporcione y podr??n ser cancelados en cualquier momento.
          PSIVA est?? altamente comprometido para cumplir con el compromiso de mantener su informaci??n segura. Usamos los sistemas m??s avanzados y los actualizamos constantemente para asegurarnos que no exista ning??n acceso no autorizado.</p>

          <p>Cookies</p>

          <p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener informaci??n respecto al tr??fico web, y tambi??n facilita las futuras visitas a una web recurrente. Otra funci??n que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p>

          <p>Nuestro sitio web emplea las cookies para poder identificar las p??ginas que son visitadas y su frecuencia. Esta informaci??n es empleada ??nicamente para an??lisis estad??stico y despu??s la informaci??n se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, est??s no dan acceso a informaci??n de su ordenador ni de usted, a menos de que usted as?? lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayor??a de navegadores aceptan cookies autom??ticamente pues sirve para tener un mejor servicio web. Tambi??n usted puede cambiar la configuraci??n de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p>

          <p>Enlaces a Terceros</p>

          <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su inter??s. Una vez que usted de clic en estos enlaces y abandone nuestra p??gina, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los t??rminos o privacidad ni de la protecci??n de sus datos en esos otros sitios terceros. Dichos sitios est??n sujetos a sus propias pol??ticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted est?? de acuerdo con estas.</p>

          <p>Control de su informaci??n personal</p>

          <p>En cualquier momento usted puede restringir la recopilaci??n o el uso de la informaci??n personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opci??n de recibir informaci??n por correo electr??nico.  En caso de que haya marcado la opci??n de recibir nuestro bolet??n o publicidad usted puede cancelarla en cualquier momento.</p>

          <p>Esta compa????a no vender??, ceder?? ni distribuir?? la informaci??n personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p>

          <p>PSIVA Se reserva el derecho de cambiar los t??rminos de la presente Pol??tica de Privacidad en cualquier momento.</p>
        </div>
        <div class="modal-footer">
          <button id="policies_acepted" class="btn btn-primary">Acepto las pol??ticas de privacidad de PSIVA</button>
        </div>
      </div>
    </div>
  </div>
 </section>


<?php include_once 'includes/templates/footer.php'; ?>
