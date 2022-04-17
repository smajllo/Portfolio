<div class="favicon">
  <h2>Edit Favicon and Title</h2>
  <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
  <div>Successfully Updated !</div>
  <?php
  }  
  if($_GET['msg']=='error'){
      ?>
  <div>something wrong with your image please check type or size !</div>
  <?php
  } } 
?>
  <div class="favicon-form">
    <form
      method="post"
      action="php/update-favicon.php"
      enctype="multipart/form-data"
    >
    <div class="inside">
    <div class="form-image">
      <img src="../assets/img/<?=$data['icon']?>" />
    </div>
    <div class="form-input">

      <div class="inner-input">
      <label for="projectpic">Choose Pic</label>
      <input type="file" name="siteicon" id="profilepic" />
      </div>

      <div class="inner-input">
      <label for="name"> Title</label>
      <input
        type="text"
        name="title"
        value="<?=$data['title']?>"
        id="name"
        placeholder="Enter Name"
      />
      </div>
      </div>
      <input type="submit" name="seo" class="update" value="Update" />
      </div>
    </form>
    </div>
  </div>
</div>
