<div class="user">
  <h2>Edit User</h2>
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
  <div class="user-form-container">
    <form
      method="post"
      action="php/update-user.php"
      enctype="multipart/form-data"
    >
      <div class="user-form-inner">
        <div class="user-image">
          <img src="../assets/img/<?=$data['profilepic']?>" /><br />
          <div class="user-input-file">
            <label for="profilepic">Choose Profile Pic</label>
            <input type="file" name="profile" id="profilepic" />
          </div>
        </div>

        <div class="user-other">
          <div class="user-input-types">
            <label for="name">Name</label>
            <input
              type="name"
              name="name"
              value="<?=$data['name']?>"
              id="name"
            />
          </div>

          <div class="user-input-types">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              value="<?=$data['emailid']?>"
              id="email"
            />
          </div>

          <div class="user-input-types">
            <label for="linkedin">Linkedin</label>
            <input
              type="text"
              value="<?=$data['linkedin']?>"
              name="linkedin"
              id="linkedin"
            />
          </div>
          <div class="user-input-types">
            <label for="github">Github</label>
            <input
              type="text"
              value="<?=$data['github']?>"
              name="github"
              id="github"
            />
          </div>
        </div>
      </div>

      <input
        class="user-button"
        type="submit"
        name="save"
        value="Save Changes"
      />
    </form>
  </div>
</div>
