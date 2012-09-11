
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
  <head>
<!-- ################################################################################################ -->
        <!--Defaults -->  
      <title>O ônibus que navega - Duck Tour Brasil - Em breve</title>
        <!--/Defaults -->  
<!-- ################################################################################################ -->
        <!--Metas tags -->  
              <meta http-equiv="content-Type"     content="text/html; charset=utf-8" />  
              <meta http-equiv="content-language" content="pt_BR" /> 
              <meta name="title" content="O ônibus que navega - Duck Tour Brasil - Em breve" />
              <meta name="description" content="Conheça o Brasil e suas lindas praias em um dinâmico passeio guiado que percorre a cidade em um ônibus anfíbio, primeiro por terra e depois por água, através das maravilhosas orlas. Descubra o contraste do Brasil de um modo inesquecível! "/>
              <meta name="keywords" content="ônibus, anfíbio, turismo, rio de janeiro, passeio, city tour rio de janeiro, rio de janeiro, passeio aquatico, aventura aquatica"/>
              <meta name="copyright" content="Copyright - 2012 - Duck tour Brasil - www.ducktourbrasil.com.br Todos os direitos reservados"/>
              <meta name="Distribution" content="Global"/>
              <meta name="rating" content="General"/>
              <meta name="audience" content="General"/> 
              <meta name="autor" content="Neweb Design"/>
              <meta name="company" content="Duck tour Brasil"/>
              <meta http-equiv='expires' content='Thu, 01 Jan 2050 00:00:00 GMT' />
              <meta http-equiv='pragma' content='no-cache' />
              <meta name="revisit-after" content="07 Days"/>
              <meta name="robots" content="index,follow" />
              <meta name="google-site-verification"   content="" /> 
              <meta name="googlebot" content="archive" />
              <meta name="google-site-verification" content="CDjEMWwQWha7Pm6KAkPiqH_CXhhyTfQc5B8zrKO36ss" />
        <!--/Metas tags -->
<!-- ################################################################################################ -->
  <!-- CSS -->
     <link type="text/css" rel="stylesheet" href="http://www.southsplace.com.br/_css/default.css"   media="screen" />
    <style>
      html{
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; 
        font-size:14px; 
        color:#FFFFFF; 
        background:#0d76c9;
      }
      body{
        background:url('_imgs/background.jpg') no-repeat 0 0;
      }
      textarea{
        width: 335px; 
        margin-left: 1px;
        height: 100px;
        font-size: 14px;
        padding-left: 5px;
        border: 0px;
        margin-top: -1px;}
      input {
        border:0px; 
        height:33px;
        width:330px; 
        font-size:14px; 
        padding-left:5px;  }
      #container{
        width:970px;
        height:auto;
        min-height:900px;
        background:url('_imgs/frente.png') no-repeat 0 0;
        margin:0 auto;
      }
      .mail{
        float:right;
        margin-top:470px;
        margin-right:50px;
      }
      button{
        background:url('_imgs/enviar.png') no-repeat 0 0;  
        margin-top:25px; 
        width: 100px; 
        height:35px;
        float:right;
        text-indent: -9999px;
        margin-top:10px;
      }
    </style>
  <!-- /CSS -->
<!-- ################################################################################################ -->
  <!-- JS -->
     <script type="text/javascript"> 
     
    </script>
    <!-- /JS -->
<!-- ################################################################################################ -->    
  </head> 
  <body>
    <div id="container">
      <div class="mail">
        <form action="form.php" name="contato" id="contato" method="post">
          <input type="text" name="nome" id="nome" value="Nome"   /> 
          <br class="clear" />
          <input style="margin-top:11px;" type="text"  value="E-mail" name="email"  id="email" /> 
          <br class="clear" />
          <br class="clear" />
          <textarea id="mensagem"   name="mensagem"  >Mensagem</textarea>
          <br class="clear" />
          <button type="submit">Enviar </button><br/>
          <?php if($_GET['msg']){echo "Mensagem enviada com sucesso! Obrigado."; }; ?>
        </form> 
      </div>
    </div> <!-- /container -->  
  </body>
</html>






