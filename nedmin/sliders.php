
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

      if (isset($_GET['slidersInsert'])) { ?> 

       <header class="panel-heading panel-primary"> <h3>Slider Ekle</h3> </header>
       <?php 
       if (isset($_POST['sliders_insert'])) 
       {
        $sonuc=$db->insert("sliders",$_POST, // sliders tablosunu çekiyoruz ve gelen bütün POST değerlerini çekiyoruz. post ettiğimizde bütün değerlerle birlikte sliders_insert değeri de geldiği için post verilerinden sliders_insertü ayıklıyoruz.($options)
          [
            "form_name" => "sliders_insert",
            "dir" => "sliders",
            "file_name" => "sliders_file"
          ]);

          if ($sonuc['status']) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt başarısız...</div>
          <?php }

        }

        ?>      


        <form method="POST" enctype="multipart/form-data">

         <div class="form-gruop">
          <label>Resim Seç</label>
          <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="file" name="sliders_file" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Başlık Bir</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="sliders_baslik_bir" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Başlık İki</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="sliders_baslik_iki" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Başlık Üç</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="sliders_baslik_uc" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Sliders Title</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="sliders_title" required="">
           </div>
         </div>
       </div>


       <div align="right" class="panel-footer">
         <button type="submit" class="btn btn-success" name="sliders_insert">Ekle</button>
       </div>



     </form>


   </section>

 </div>
</div>

<?php } else if (isset($_GET['slidersUpdate'])) { 

 //Bağşı id bilgilerini çek

  ?>

  <div class="row">
    <div class="col-lg-12">
     <section class="panel">



       <header class="panel-heading panel-primary"> <h3>Slider Düzenle</h3> </header>

       <?php 
       if (isset($_POST['sliders_update'])) 
       {
        $sonuc=$db->update("sliders",$_POST, 
          [
            "form_name" => "sliders_update",
            "columns" => "sliders_id",
            "dir" => "sliders",
            "file_name" => "sliders_file",
            "file_delete" => "delete_file"
          ]);

          if (isset($sonuc['status'])) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt Başarısız...</div>
          <?php }

        }

        $sql=$db->wread("sliders","sliders_id",$_GET['sliders_id']);
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        ?>

        <form method="POST" enctype="multipart/form-data">

         <div class="form-gruop">
          <label>Yüklü Resim</label>
          <div class="row">
           <div class="col-xs-12">
            <img width="100" height="100" src="dimg/sliders/<?php echo $row['sliders_file'] ?>">
          </div>
        </div>
      </div>

      <div class="form-gruop">
        <label>Resim Seç</label>
        <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="file" name="sliders_file">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Başlık Bir</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" name="sliders_baslik_bir" value="<?php echo $row['sliders_baslik_bir'] ?>">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Başlık İki</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" name="sliders_baslik_iki" value="<?php echo $row['sliders_baslik_iki'] ?>">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Başlık Üç</label>
       <div class="row">
         <div class="col-xs-12">
          <input class="form-control" type="text" name="sliders_baslik_uc" value="<?php echo $row['sliders_baslik_uc'] ?>">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Sliders Title</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" value="<?php echo $row['sliders_title'] ?>" name="sliders_title" required="">
         </div>
       </div>
     </div>


   </div>

   <input type="hidden" name="sliders_id" value="<?php echo $row['sliders_id']; ?>">
   <input type="hidden" name="delete_file" value="<?php echo $row['sliders_file']; ?>">

   <div align="right" class="panel-footer">
     <button type="submit" class="btn btn-success" name="sliders_update">Düzenle</button>
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
     <h3>Slider Listele</h3>
     <div class="mt-2" align="right">
      <a href="?slidersInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    </div>
  </header>

  <table class="table table-striped table-bordered">

    <thead>
      <tr>
        <th align="center" width="10">#</th>
        <th>Slider</th>
        <th>Slider Title</th>
        <th></th>
        <th ></th>
      </tr>
    </thead>

    <?php 
    $say=1;
    $sql=$db->read("sliders");
    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
      <tbody id="sortable">
        <tr id="item-<?php echo $row['sliders_id']; ?>">
          <td><?php echo $say++; ?></td>
          <td class="sortable"><img width="100" height="100" src="dimg/sliders/<?php echo $row['sliders_file'] ?>" alt=""></td>
          <td><?php echo $row['sliders_title']; ?></td>
          <td width="10" align="center"><div class="btn-group update"><a class="btn btn-success" href="?slidersUpdate=true&sliders_id=<?php echo $row['sliders_id'] ?>"><i class="icon_pencil"></i></a></div></td>  
          <td width="10" align="center"><div class="btn-group delete"><a  class="btn btn-danger" href="?slidersDelete=true&sliders_id=<?php echo $row['sliders_id'] ?>&file_delete=<?php echo $row['sliders_file'] ?>"><i class="icon_trash"></i></a></div></td>

        </tr>
      </tbody>

    <?php } 
    if (isset($_GET['slidersDelete'])) {
      $sonuc=$db->delete("sliders","sliders_id",$_GET['sliders_id'],$_GET['file_delete']);

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
          url:"netting/order-ajax.php?sliders_must=true",
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
