<?php 
$pag = "9";
include('_includes/head.php'); ?>
  <body>
    <div id="container">
      <div id="content">
      <?php include('_includes/topo.php'); ?>
<?php //Bloco de pagina ?>
      <div id="interna" class="intern">
        <div class="left-top">
          <h2 title="<?php echo $titlepagAberta; ?>"><?php echo $titlepagAberta; ?></h2>
          <address style="color:#636466;">
             <em style="color:#636466;">Nosso telefone:<br/> </em> 
              <span style=" margin-left:0px;"> 11 </span><span style="font-size:20px; margin-left:0px;">2626.0000</span><br />
                <div style="background-color:#531E09; height:1px; width:220px; margin-left:0px; margin-top:5px; margin-bottom:5px;"></div>
                 <em style="color:#636466;">Nosso endere&ccedil;o:<br/></em>
                                    Rua Carlo Formes, 78<span style="font-size:20px; margin-left:0px;"></span><br />
                                    Vl Império - S&atilde;o Paulo - SP
                            </address>
                           <div style="background-color:#531E09; height:1px; width:220px; margin-left:0px; margin-top:5px; margin-bottom:5px;"></div>


                      <em style="color:#636466;">Nosso formul&aacute;rio:</em>  <br/>                                  
                      Caso queira nos enviar um e-mail preencha o formul&aacute;rio abaixo: <br/>  <br/>  
              <form action="form.php?action=contato" name="contato" id="contato" method="post"> 

 

 

            

             <table width="404" border="0" cellpadding="3" cellspacing="5" class="contato"> 

 

                <tr valign="top"> 

                  

                  <td width="85"  align="right" ><span style="color:#636466; font-size:12px;" >Nome</span><span style="color:#ab4d76;">*</span>:</td> 

                  

                  <td width="278" > 

                    

                    <input class="formularios" type="text" name="nomea" id="nome" size="34" /> 

                    

                  </td> 

                  

                </tr> 

                <tr> 

                  <td align="right"  ><span style="color:#636466; font-size:12px;" >E-mail</span><span style="color:#ab4d76;">*</span>:</td> 

                  <td ><input class="formularios" type="text" name="emaila"  id="email" size="34" /></td> 

                </tr> 

                <tr> 

                  <td align="right"  ><span style="color:#636466; font-size:12px;" >Telefone </span>:</td> 

                  <td ><input class="formularios" type="text" name="telefonea"  id="telefone" size="34" /></td> 

                </tr> 

          <tr> 

                  

                  <td align="right"  ><span style="color:#636466; font-size:12px;" >Mensagem</span>:<span style="color:#ab4d76;">*</span>:</td> 

                  

                  <td > 

                    

                    <textarea class="formularios" name="mensagemSite" id="mensagemSite"  cols="26" rows="4"></textarea> 

                    

                    </td> 

                  

                </tr> 

 

                <tr> 

 

                  <td ><br /> 

 

                    

 

                  </td> 

 

                  <td align="left" ><div align="center" style="margin-left:-30px;"> 

 

                    

 

                      <input class="formularios" type="submit" name="enviar" style="border:1px solid #ccc; margin-left:35px;  " value="Enviar" /> 

                  </div></td> 

 

                </tr> 

 

                

 

              </table> 
          




        </div><!--left-top-->
        <br class="clear" />       
      <?php include('_includes/footer.php'); ?>
  <!-- JS -->
    <?php include('_includes/js.php'); ?>
  <!-- /JS -->
  </body>
</html>



