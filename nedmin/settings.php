
<?php 
require_once 'header.php';
require_once 'sidebar.php';
?>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">

   <div class="row">
    <div class="col-lg-12">
     <section class="panel">

      <?php 

      if (isset($_GET['settingsInsert'])) { ?> 

       <header class="panel-heading panel-primary"> <h3>Ayar Ekle</h3> </header>
       <?php 
       if (isset($_POST['admin_insert'])) 
       {
        $sonuc=$db->insert("settings",$_POST, // settings tablosunu çekiyoruz ve gelen bütün POST değerlerini çekiyoruz. post ettiğimizde bütün değerlerle birlikte settings_insert değeri de geldiği için post verilerinden admin_insertü ayıklıyoruz.($options)
          [
            "form_name" => "admin_insert",
            "dir" => "settings",
            "file_name" => "settings_file",
            "pass"      => "settings_pass"
          ]);

          if ($sonuc['status']) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt başarısız...</div>
          <?php }

        }

        ?>      


        <form method="POST" enctype="multipart/form-data">

         <!-- Ayar Ekleme Kısmı -->


        </form>


      </section>

    </div>
  </div>

<?php } else if (isset($_GET['settingsUpdate'])) { 

 //Bağşı id bilgilerini çek

  ?>

  <div class="row">
    <div class="col-lg-12">
     <section class="panel">



       <header class="panel-heading panel-primary"> <h3>Ayar Düzenle</h3> </header>

       <?php 
       if (isset($_POST['settings_update'])) 
       {
        $sonuc=$db->update("settings",$_POST, 
          [
            "form_name" => "settings_update",
            "columns" => "settings_id",
            "dir" => "settings",
            "file_name" => "settings_value",
            "file_delete" => "delete_file"
          ]);

          if (isset($sonuc['status'])) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt Başarısız...</div>
          <?php }

        }

        $sql=$db->wread("settings","settings_id",$_GET['settings_id']);
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        ?>

        <form method="POST" enctype="multipart/form-data">

         <div class="form-gruop">
           <label>Açıklama</label>
           <div class="row">
             <div class="col-xs-12">
               <input class="form-control" type="text" readonly="" value="<?php echo $row['settings_description'] ?>" name="settings_description" required="">
             </div>
           </div>
         </div>

         <?php 
         if ($row['settings_type']=="file") { ?>

          <div class="form-gruop">
           <label>Resim Seç</label>
           <div class="row">
             <div class="col-xs-12">
              <input class="form-control" type="file" name="settings_value" required="">
            </div>
          </div>
        </div>

      <?php } ?>

      <div class="form-gruop">
        <label>İçerik</label>
        <div class="row">
         <div class="col-xs-12">

          <?php 
          if ($row['settings_type']=="text") { ?>
           <input class="form-control" type="text" name="settings_value" value="<?php echo $row['settings_value'] ?>" required="">
         <?php } else if ($row['settings_type']=="textarea") { ?>
           <textarea name="settings_value" class="form-control"><?php echo $row['settings_value']; ?></textarea>
         <?php } else if ($row['settings_type']=="ckeditor") { ?>
          <textarea id="editor1" name="settings_value" class="form-control"><?php echo $row['settings_value']; ?></textarea>
        <?php } else if ($row['settings_type']=="file") { ?>
         <a target="_blank" href="dimg/settings/<?php echo $row['settings_value'] ?>"><img width="100" src="dimg/settings/<?php echo $row['settings_value'] ?>"></a>
       <?php }
       ?>


     </div>
   </div>
 </div>

 <script>
  CKEDITOR.replace( 'editor1' );
</script>



<input type="hidden" name="settings_id" value="<?php echo $row['settings_id']; ?>">
<input type="hidden" name="delete_file" value="<?php echo $row['settings_value'] ?>">

<div align="right" class="panel-footer">
 <button type="submit" class="btn btn-success" name="settings_update">Düzenle</button>
</div>



</form>


</section>

</div>
</div>


<?php } ?>

<div class="row">
  <div class="col-lg-12">
   <section class="panel">
    <header class="panel-heading panel-primary">
     <h3>Ayarlar</h3>
     <!-- <div class="mt-2" align="right">
      <a href="?settingsInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    </div> -->
  </header>

  <table class="table table-striped table-bordered">

    <thead>
      <tr>
        <th>Ad</th>
        <th>İçerik</th>
        <th>Key</th>
        <th></th>
      </tr>
    </thead>

    <?php 
    $say=1;
    $sql=$db->read("settings");
    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
       <tbody id="sortable">
        <tr id="item-<?php echo $row['settings_id']; ?>">
          <td class="sortable"><?php echo $row['settings_description']; ?></td>
          <td><?php 

          if ($row['settings_type']=="file") { ?>
            <img width="100" src="dimg/settings/<?php echo $row['settings_value'] ?>" alt="">
          <?php } else { 
             echo $row['settings_value']; 
          }

          ?></td>
          <td><?php echo $row['settings_key']; ?></td>
          <td width="10" align="center"><div class="btn-group update"><a class="btn btn-success" href="?settingsUpdate=true&settings_id=<?php echo $row['settings_id'] ?>"><i class="icon_pencil"></i></a></div></td>

          <td width="10" align="center"><div class="btn-group delete"><a  class="btn btn-danger" href="?settingsDelete=true&settings_id=<?php echo $row['settings_id'] ?>"><i class="icon_trash"></i></a></div></td>

        </tr>
      </tbody>

    <?php } 
    if (isset($_GET['settingsDelete'])) {
      $sonuc=$db->delete("settings","settings_id",$_GET['settings_id'],$_GET['file_delete']);

      if (isset($sonuc['status'])) {?>
        <div class="alert alert-success">Silme İşlemi Başarılı...</div>
      <?php } else { ?>
        <div class="alert alert-danger">Silme İşlemi Başarısız...</div>
      <?php }
    }

    ?>

  </table>
</section>


</div>
</div>

</section>
</section>
<!--main content end-->
<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


<!-- jquery ui -->
<script src="js/jquery-ui/jquery-ui.js"></script>

<script type="text/javascript">

  $(function() {
    $("#sortable").sortable({
      revert:true,
      handle:".sortable",
      stop:function(event,ui) {
        var data=$(this).sortable('serialize');

        $.ajax({
          type:"POST",
          dataType:"json",
          data:data,
          url:"netting/order-ajax.php?settings_must=true",
          success:function(msg) {
            if (msg.islemMsj) {
              alert("Sıralama Başarılı");
            } else {
              alert("Hata Var...");
            }

          }
        });
      }



    });
    $("#sortable").disableSelection();
  });

</script>

</body>

</html>
