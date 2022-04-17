<div class="welcome">
  <h2>User Messages</h2>
  <div class="message-container">
    <?php
    $query="SELECT * FROM contact";
      $queryrun=mysqli_query($db,$query);
      while($data=mysqli_fetch_array($queryrun)){
          ?>
    <div class="message-card">
      <h4><?=$data['cname']?></h4>
      <p><?=$data['csubject']?></p>
      <h4><?=$data['cemail']?></h4>
      <p><?=$data['cmessage']?></p>
    </div>
    <?php }?>
  </div>
</div>
