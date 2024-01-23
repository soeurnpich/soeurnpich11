
<table class="container table table-hover table-bordered">
    <tr>
        <th class="text-center">NO</th>
        <th class="text-center">ចង្វាក់</th>
        <th colspan="2" class="text-center"​>ផ្សេងៗ</th>
    </tr>
    <?php
    require('class.php');
    $object = new myclass;
    $query = $object->display("tblrhythm");
    $i = 0;
    while($row = mysqli_fetch_assoc($query)){
        $id = $row['rhythm_id'];
        $rhythm = $row['rhythm'];
        $i++;
  
    ?>
    <tr>
        <td class="text-center"><?php echo $i;?></td>
        <td><?php echo $rhythm;?></td>
        <td class="text-center"><i class="fas fa-edit text-primary" onClick="showModal('<?php echo  $rhythm;?>', '<?php echo $id;?>')"> </i></td>
        <td class="text-center"><i class="fas fa-trash text-danger text-center" onClick="deleteRhythm(<?php echo $id;?>)"></i></td>
    </tr>
    <?php
    }
    ?>
</table>
