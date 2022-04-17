<div class="about">
  <h2>Edit About Section</h2>
  <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
  <div>Successfully Updated !</div>
  <?php
  }  
 } 
?>
  <div class="about-form-container">
    <form
      method="post"
      action="php/update-about.php"
      enctype="multipart/form-data"
    >
      <div class="about-inner">
        <div class="about-input">
          <label for="ptitle">Professional Heading</label>
          <input
            type="text"
            name="ptitle"
            value="<?=$data['heading']?>"
            id="ptitle"
          />
        </div>

        <div class="about-input">
          <label for="exampleFormControlTextarea1"
            >Long Description About You</label
          >
          <textarea id="exampleFormControlTextarea1" rows="10" name="longdesc">
<?=$data['longdesc'];?>
    </textarea
          >
        </div>
        <div class="about-input">
          <label for="pdf_file">Your Resume</label>
          <input
            type="file"
            name="pdf_file"
            id="pdf_file"
            accept="application/pdf"
          />
        </div>
      </div>

      <input
        type="submit"
        name="save"
        value="Save Changes"
        class="about-button"
      />
    </form>
    <div class="table-container">
      <h4>Manage Skills</h4>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Skill</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
$query2="SELECT * FROM skills";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
          <tr>
            <td><?=$count?></td>
            <td><?=$data2['skill']?></td>
            <td>
              <a href="php/supdate.php?del=<?=$data2['id']?>"
                ><button type="button" class="delete">Delete</button></a
              >
            </td>
          </tr>
          <?php $count++;
} ?>
        </tbody>
      </table>
    </div>
    <form action="php/supdate.php" method="post">
      <div class="about-inner">
        <div class="about-input">
          <label for="sn">Skill Name</label>
          <input
            type="text"
            name="skill"
            id="website"
            placeholder="PHP"
            required
          />
        </div>
        <div>
          <input
            type="submit"
            name="addskill"
            value="Add Skill"
            class="about-button add"
          />
        </div>
      </div>
    </form>
  </div>
  
</div>
