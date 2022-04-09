<html>
<?php $this->load->view("includes/header.php"); ?>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Service</th>
      <th scope="col">Budget</th>
      <th scope="col">Message</th>
	  <!-- <th scope="col">Created At</th> -->
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($items as $item) {?>
            <tr>
      <th scope="row"><?php echo $item->id; ?></th>
      <td><?php echo $item->name ?></td>
      <td><?php echo $item->email ?></td>
      <td><?php echo $item->service ?></td>
      <td><?php echo $item->budget ?></td>
      <td><?php echo $item->message ?></td>
      <!-- <td><?php echo $item->CreatedAt ?></td> -->
    </tr>
       <?php  } ?>
    
  </tbody>
</table>
	<div id="dropDownSelect1"></div>
  </body>
  </html>