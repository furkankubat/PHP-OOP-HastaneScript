
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

      if (isset($_GET['aboutsInsert'])) { ?> 

       <header class="panel-heading panel-primary"> <h3>Kurumsal Sayfa Ekle</h3> </header>
       <?php 
       if (isset($_POST['abouts_insert'])) 
       {
        $sonuc=$db->insert("abouts",$_POST, // abouts tablosunu çekiyoruz ve gelen bütün POST değerlerini çekiyoruz. post ettiğimizde bütün değerlerle birlikte abouts_insert değeri de geldiği için post verilerinden abouts_insertü ayıklıyoruz.($options)
          [
            "form_name" => "abouts_insert",
            "slug" => "abouts_slug",
            "title" => "abouts_title",
            "file_name" => "abouts_file",
            "dir" => abouts
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
               <input class="form-control" type="file" name="abouts_file">
             </div>
           </div>
         </div>

         <div class="form-gruop">
           <label>Kurumsal Title</label>
           <div class="row">
             <div class="col-xs-12">
               <input class="form-control" type="text" name="abouts_title" required="">
             </div>
           </div>
         </div>

         <div class="form-gruop">
           <label>Kurumsal Anahtar</label>
           <div class="row">
             <div class="col-xs-12">
               <input class="form-control" type="text" name="abouts_key" required="">
             </div>
           </div>
         </div>

         <div class="form-gruop">
           <label>Kurumsal Sayfa İçerik</label>
           <div class="row">
             <div class="col-xs-12">
               <textarea class="form-control" name="abouts_content" id="editor1"></textarea>
             </div>
           </div>
         </div>

         <script>
          CKEDITOR.replace( 'editor1' );
        </script>


        <div align="right" class="panel-footer">
         <button type="submit" class="btn btn-success" name="abouts_insert">Ekle</button>
       </div>



     </form>


   </section>

 </div>
</div>

<?php } else if (isset($_GET['aboutsUpdate'])) { 

 //Bağşı id bilgilerini çek

  ?>

  <div class="row">
    <div class="col-lg-12">
     <section class="panel">



       <header class="panel-heading panel-primary"> <h3>Kurumsal Sayfa Düzenle</h3> </header>

       <?php 
       if (isset($_POST['abouts_update'])) 
       {
        $sonuc=$db->update("abouts",$_POST, 
          [
            "form_name" => "abouts_update",
            "slug" => "abouts_slug",
            "title" => "abouts_title",
            "columns" => "abouts_id",
            "sir" => "abouts",
            "file_name" => "abouts_file",
            "file_delete" => "delete_file"
          ]);

          if (isset($sonuc['status'])) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt Başarısız...</div>
          <?php }

        }

        $sql=$db->wread("abouts","abouts_id",$_GET['abouts_id']);
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        ?>

        <form method="POST" enctype="multipart/form-data">

         <div class="form-gruop">
          <label>Yüklü Resim</label>
          <div class="row">
           <div class="col-xs-12">
            <img width="100" height="100" src="dimg/abouts/<?php echo $row['abouts_file'] ?>">
          </div>
        </div>
      </div>

      <div class="form-gruop">
        <label>Resim Seç</label>
        <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="file" name="abouts_file">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kurumsal Sayfa Title</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" value="<?php echo $row['abouts_title'] ?>" name="abouts_title" required="">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kurumsal Anahtar</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" name="abouts_key" required="" value="<?php echo $row['abouts_key'] ?>">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kurumsal Sayfa İçerik</label>
       <div class="row">
         <div class="col-xs-12">
          <textarea class="form-control" name="abouts_content" id="editor1"><?php echo $row['abouts_content']; ?></textarea>
        </div>
      </div>
    </div>

    <script>
      CKEDITOR.replace( 'editor1' );
    </script>

  </div>



  <input type="hidden" name="abouts_id" value="<?php echo $row['abouts_id']; ?>">

  <div align="right" class="panel-footer">
   <button type="submit" class="btn btn-success" name="abouts_update">Düzenle</button>
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
     <h3>Kurumsal Sayfa Listele</h3>
     <div class="mt-2" align="right">
      <a href="?aboutsInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    </div>
  </header>

  <table class="table table-striped table-bordered">

    <thead>
      <tr>
        <th align="center" width="10">#</th>
        <th>Kurumsal Sayfa Title</th>
        <th>Kurumsal Anahtar Değer</th>
        <th></th>
        <th ></th>
      </tr>
    </thead>

    <?php 
    $say=1;
    $sql=$db->read("abouts");
    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
      <tbody id="sortable">
       <tr id="item-<?php echo $row['abouts_id']; ?>">
        <td><?php echo $say++; ?></td>
        <td class="sortable"><?php echo $row['abouts_title']; ?></td>
        <td><?php echo $row['abouts_key']; ?></td>
        <td width="10" align="center"><div class="btn-group update"><a class="btn btn-success" href="?aboutsUpdate=true&abouts_id=<?php echo $row['abouts_id'] ?>"><i class="icon_pencil"></i></a></div></td>  
        <td width="10" align="center"><div class="btn-group delete"><a  class="btn btn-danger" href="?aboutsDelete=true&abouts_id=<?php echo $row['abouts_id'] ?>&file_delete=<?php echo $row['abouts_file'] ?>"><i class="icon_trash"></i></a></div></td>

      </tr>
    </tbody>

  <?php } 
  if (isset($_GET['aboutsDelete'])) {
    $sonuc=$db->delete("abouts","abouts_id",$_GET['abouts_id'],$_GET['file_delete']);

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
          url:"netting/order-ajax.php?abouts_must=true",
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
