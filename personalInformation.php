<?php


include 'header.php'; 
include 'sidebar.php';
YetkiKontrol ();
giriskontrol ();

?>


<!--İndex Göbek-->
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">SİTE GENEL AYARLARI</h1>


        <?php

        if ($_GET['durum']=="ok") { ?>
        

        <h1 style="color:green;" class="page-subhead-line">Kayıtlar Başarıyla Güncellendi...</h1>
        
        

        <?php } elseif ($_GET['durum']=="no") { ?>
        

        <h1 style="color:red;" class="page-subhead-line">Kayıtlar güncellenemedi değişiklik yapmamış olabilirsiniz...</h1>
        
        

        <?php } else {?>

        <h1 class="page-subhead-line">Sitenizin genel ayarlarını bu sayfadan  düzenleyebilirsiniz...</h1>

        <?php }

        ?>

        <!--   -->

      </div>
    </div>
    <!-- /. ROW  -->
    <form action="netting/islem.php" method="POST">
      
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info">
            Önemli Durumlarda Admin İle İrtibarta Geçiniz!
            
          </div>
        </div>
      </div>

      <h5 style="color:green;" class="page-subhead-line">Site Bilgileri</h5>  
      <div class="col-md-12">                    
       <div  class="form-group col-md-6">
        <label>Site Başlığı</label>
        <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">                 
      </div>
      
      
      <div  class="form-group col-md-6">
        <label>Site Açıklaması</label>
        <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">                 
      </div>
      

      
      <div  class="form-group col-md-6">
        <label>Site Anahtar Kelimeleri</label>
        <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>">                 
      </div>
      

      
      <div  class="form-group col-md-3">
        <label>Telefon Numaranız:</label>
        <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">              
      </div>
    </div>

    <h5 style="color:green;" class="page-subhead-line">Sosyal Medya</h5>
    
    <div class="col-md-12">                    
     <div  class="form-group col-md-6">
      <label>Facebook Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">       
    </div>
    <div  class="form-group col-md-6">
      <label>Twitter Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>">   
    </div> 
    <div  class="form-group col-md-6">
      <label>Instagram Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram']; ?>">       
    </div>   
    <div  class="form-group col-md-6">
      <label>Github Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_github" value="<?php echo $ayarcek['ayar_github']; ?>">       
    </div>  
    <div  class="form-group col-md-6">
      <label>Youtube Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube']; ?>">       
    </div>
    <div  class="form-group col-md-6">
      <label>Stackoverflow Hesabınız:</label>
      <input class="form-control" type="text" name="ayar_stackoverflow" value="<?php echo $ayarcek['ayar_stackoverflow']; ?>">       
    </div>  
    
  </div>
  
  <h5 style="color:green;" class="page-subhead-line">Footer</h5>
  
  
  <div class="col-md-12">
   <div  class="form-group col-md-12">
    <label>Footer</label>
    <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ?>">              
  </div>
</div>

<h5 style="color:green;" class="page-subhead-line">Adresler</h5>
<div class="col-md-12">
 <div  class="form-group col-md-12">
  <label>Adresiniz:</label>
  <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>">              
</div>
</div>


<div class="col-md-12">

  <div  class="form-group col-md-6">
    <label>Mail Adresi:</label>
    <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>">        

  </div>
  <div  class="form-group col-md-6">
    <label>Fax Numarası:</label>
    <input class="form-control" type="text" name="ayar_fax" value="<?php echo $ayarcek['ayar_fax']; ?>">        

  </div>

</div>

<div class="col-md-12">

 <!-- <div  class="form-group col-md-6">
    <input style="width:100%" class="btn btn-success" type="submit" name="ayarkaydet" value="Ayarları Güncelle">        

  </div> -->
  

</div>





</form>


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php include 'footer.php'; ?>