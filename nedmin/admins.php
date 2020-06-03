
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

      if (isset($_GET['adminsInsert'])) { ?> 

       <header class="panel-heading panel-primary"> <h3>Yönetici Ekle</h3> </header>
       <?php 
       if (isset($_POST['admin_insert'])) 
       {
        $sonuc=$db->insert("admins",$_POST, // admins tablosunu çekiyoruz ve gelen bütün POST değerlerini çekiyoruz. post ettiğimizde bütün değerlerle birlikte admins_insert değeri de geldiği için post verilerinden admin_insertü ayıklıyoruz.($options)
          [
            "form_name" => "admin_insert",
            "dir" => "admins",
            "file_name" => "admins_file",
            "pass"      => "admins_pass"
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
             <input class="form-control" type="file" name="admins_file" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Ad Soyad</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="admins_namesurname" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Kullanıcı Adı</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="text" name="admins_username" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Kullanıcı Şifre</label>
         <div class="row">
           <div class="col-xs-12">
             <input class="form-control" type="password" name="admins_pass" required="">
           </div>
         </div>
       </div>

       <div class="form-gruop">
         <label>Kullanıcı Durum</label>
         <div class="row">
           <div class="col-xs-12">
            <select class="form-control" name="admins_status">
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </div>
        </div>
      </div>

      <div align="right" class="panel-footer">
       <button type="submit" class="btn btn-success" name="admin_insert">Ekle</button>
     </div>



   </form>

   
 </section>

</div>
</div>

<?php } else if (isset($_GET['adminsUpdate'])) { 

 //Bağşı id bilgilerini çek

  ?>

  <div class="row">
    <div class="col-lg-12">
     <section class="panel">



       <header class="panel-heading panel-primary"> <h3>Yönetici Düzenle</h3> </header>

       <?php 
       if (isset($_POST['admin_update'])) 
       {
        $sonuc=$db->update("admins",$_POST, 
          [
            "form_name" => "admin_update",
            "columns" => "admins_id",
            "dir" => "admins",
            "file_name" => "admins_file",
            "file_delete" => "delete_file",
            "pass"      => "admins_pass"
          ]);

          if (isset($sonuc['status'])) {?>
            <div class="alert alert-success">Kayıt Başarılı...</div>
          <?php } else { ?>
            <div class="alert alert-danger">Kayıt Başarısız...</div>
          <?php }

        }

        $sql=$db->wread("admins","admins_id",$_GET['admins_id']);
        $row=$sql->fetch(PDO::FETCH_ASSOC);
        ?>

        <form method="POST" enctype="multipart/form-data">

         <div class="form-gruop">
          <label>Yüklü Resim</label>
          <div class="row">
           <div class="col-xs-12">
            <img width="100" src="dimg/admins/<?php echo $row['admins_file'] ?>">
          </div>
        </div>
      </div>

      <div class="form-gruop">
        <label>Resim Seç</label>
        <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="file" name="admins_file">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Ad Soyad</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" value="<?php echo $row['admins_namesurname'] ?>" name="admins_namesurname" required="">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kullanıcı Adı</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="text" value="<?php echo $row['admins_username'] ?>" name="admins_username" required="">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kullanıcı Şifre</label>
       <div class="row">
         <div class="col-xs-12">
           <input class="form-control" type="password" name="admins_pass">
         </div>
       </div>
     </div>

     <div class="form-gruop">
       <label>Kullanıcı Durum</label>
       <div class="row">
         <div class="col-xs-12">
          <select class="form-control" name="admins_status">
            <option <?php echo $row['admins_status']==1 ? 'selected' : '' ?> value="1">Aktif</option>
            <option <?php echo $row['admins_status']==0 ? 'selected' : '' ?> value="0">Pasif</option>
          </select>
        </div>
      </div>
    </div>

    <input type="hidden" name="admins_id" value="<?php echo $row['admins_id']; ?>">
    <input type="hidden" name="delete_file" value="<?php echo $row['admins_file']; ?>">

    <div align="right" class="panel-footer">
     <button type="submit" class="btn btn-success" name="admin_update">Düzenle</button>
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
     <h3>Yöneticiler</h3>
     <div class="mt-2" align="right">
      <a href="?adminsInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    </div>
  </header>

  <table class="table table-striped table-bordered">

    <thead>
      <tr>
        <th align="center" width="10">#</th>
        <th>Kullanıcı Adı</th>
        <th>Ad Soyad</th>
        <th>Durum</th>
        <th></th>
        <th ></th>
      </tr>
    </thead>

    <?php 
    $say=1;
    $sql=$db->read("admins",[
      "columns_name" => "admins_must",
      "columns_sort" => "ASC"
    ]);
    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>

      <tbody id="sortable">

        <tr id="item-<?php echo $row['admins_id']; ?>">
          <td><?php echo $say++; ?></td>
          <td class="sortable"><?php echo $row['admins_username']; ?></td>
          <td><?php echo $row['admins_namesurname']; ?></td>
          <td><?php 
          if ($row['admins_status']==0) {
            echo "Pasif";
          } else if ($row['admins_status']==1){
            echo "Aktif";
          }
          ?></td>
          <td width="10" align="center"><div class="btn-group update"><a class="btn btn-success" href="?adminsUpdate=true&admins_id=<?php echo $row['admins_id'] ?>"><i class="icon_pencil"></i></a></div></td>  
          <td width="10" align="center"><div class="btn-group delete"><a  class="btn btn-danger" href="?adminsDelete=true&admins_id=<?php echo $row['admins_id'] ?>&file_delete=<?php echo $row['admins_file'] ?>"><i class="icon_trash"></i></a></div></td>
        </tr>

      </tbody>

    <?php } 
    if (isset($_GET['adminsDelete'])) {
      $sonuc=$db->delete("admins","admins_id",$_GET['admins_id'],$_GET['file_delete']);

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



</body>

</html>

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
          url:"netting/order-ajax.php?admins_must=true",
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