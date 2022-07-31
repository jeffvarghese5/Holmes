<?php  require('../../private/initialize.php')    ?>

<?php require_once('../../private/initialize.php') ?>
<?php  include(SHARED_PATH.'/staff_header.php')    ?>
<div id="content">
    <?php
        $subjects =[
        ['id'=>1, 'subject'=>'DataScience', 'visible'=>'1','position'=>1],
        ['id'=>2, 'subject'=>'AI', 'visible'=>'1','position'=>1],
        ['id'=>3, 'subject'=>'MachineLearning', 'visible'=>'1','position'=>1],
        ['id'=>4, 'subject'=>'CyberSecurity', 'visible'=>'1','position'=>1]
        ];
    ?>
<?php 

    $p =  dirname($_SERVER['SCRIPT_NAME']);
    echo substr($p, 0, strpos($p, '/staff')).'/teachers/index.php';



?>
<a  href="<?php echo substr($p, 0, strpos($p, '/staff')).'/teachers/index.php'; ?>">View</a>


<table class="list">
<tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($subjects as $subject) { ?>
        <tr>
          <td><?php echo h($subject['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo h($subject['visible']) == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($subject['subject']); ?></td>
          <td><a  href="<?php echo 'show.php?id=' . u($subject['id']); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
          </tr>
      <?php } ?>

</table>

</div>

<?php echo 'I am from main page' ?>
<?php  include(SHARED_PATH.'/staff_footer.php')    ?>


