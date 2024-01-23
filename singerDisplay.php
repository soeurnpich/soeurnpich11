<table class="table table-hover table-bordered">
    <tr>
        <th class="text-center">NO</th>
        <th class="text-center">អ្នកចម្រៀង</th>
        <th class="text-center">ប្រភេទ</th>
        <th colspan="2" class="text-center"​>ផ្សេងៗ</th>
    </tr>
    <?php
    require('class.php');
    $object = new myclass;
    $query = $object->display("tblsinger");
    $i = 0;
    while($row = mysqli_fetch_assoc($query)){
        $id = $row['singer_id'];
        $singer = $row['singer'];
        $type = $row['type'];
        $i++;
  
    ?>
    <tr>
        <td class="text-center"><?php echo $i;?></td>
        <td class="text-center"><?php echo $singer;?></td>
        <td class="text-center"><?php echo $type;?></td>
        <td class="text-center"><i class="fas fa-edit text-primary" onClick="showModal('<?php echo  $singer;?>','<?php echo $id;?>','<?php echo $type;?>')"> </i></td>
        <td class="text-center"><i class="fas fa-trash text-danger text-center" onClick="deleteSinger(<?php echo $id;?>)"></i></td>
    </tr>
    <?php
    }
    ?>
</table>