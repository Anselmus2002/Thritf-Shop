<div class="class-fluid">
<table class="table table-bordered ml-3">
    <tr>
        <th>NO</th>
        <th>ID USER</th>
        <th>NAMA</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>AKSI</th>
    </tr>

    <?php
    $no = 1;
        foreach($user as $usr) :?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $usr->id ?></td>
            <td><?php echo $usr->nama ?></td>
            <td><?php echo $usr->username ?></td>
            <td><?php echo $usr->password?></td>
            <td><?php echo anchor('admin/data_user/hapus/' .$usr->id, '<div class="btn btn-danger btn-sm">hapus<i class="fas fa-trash"></i></div>')?></td>
        </tr>
    <?php
        endforeach;?>

</table>
</div>