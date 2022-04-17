<div class="projects">
  <h2>Edit Projects Section</h2>
  <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
  <div>Project Successfully Added !</div>
  <?php
  }  
  if($_GET['msg']=='error'){
      ?>
  <div>something wrong with your image please check type or size !</div>
  <?php
  } } 
?>
  <div class="projectcontainer">
    <form
      method="post"
      action="php/update-projects.php"
      enctype="multipart/form-data"
    >
      <div class="about-inner">
        <div class="about-input">
          <label>Project Screenshot/Image </label>
          <input type="file" name="projectpic" id="profilepic" />
          <label for="projectpic">Choose Pic</label>
        </div>
        <div class="about-input">
          <label for="name">Project Name</label>
          <input
            type="text"
            name="projectname"
            id="name"
            placeholder="Project Name"
          />
        </div>
        <div class="about-input">
          <label for="email">Project Link</label>
          <input
            type="text"
            name="projectlink"
            id="email"
            placeholder="Project Link"
          />
        </div>
      </div>
      <input
        type="submit"
        class="about-button"
        name="addtoportfolio"
        value="Add To Portfolio"
      />
    </form>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Project Image</th>
          <th>Project Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
$query2="SELECT * FROM projects";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
        <tr>
          <td><?=$count?></td>
          <td><img src="../assets/img/<?=$data2['projectpic']?>" /></td>
          <td><?=$data2['projectname']?></td>
          <td>
            <a href="<?=$data2['projectlink']?>">
              <button type="button" class="visit">Visit</button></a
            >
            <a href="php/update-projects.php?del=<?=$data2['id']?>"
              ><button type="button" class="delete">Delete</button></a
            >
          </td>
        </tr>
        <?php $count++;
} ?>
      </tbody>
    </table>
  </div>
</div>
