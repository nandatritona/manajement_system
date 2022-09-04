<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Daftar Menu</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-heading">
        <div class="text-right card-body">
            <a class="btn bg-teal-400 btn-labeled btn-labeled-left" href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Add'?>">
                <b><i class="icon-reading"></i></b>ADD
            </a>
        </div>
    </div>

    <table class="table datatable-button-html5-basic">
        <thead>
            <tr>
                <th>ID Menu</th>
                <th>Name Menu</th>
                <th>Label Menu</th>
                <th>Icons Menu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $get) { ?>
                <tr>
                    <td><?php echo $get->MenuID ?></td>
                    <td><?php echo $get->MenuName ?></td>
                    <!-- <td><?php if($get->Gender){echo "Pria";} else {echo "Wanita";} ?></td>
                    <td><?php if($get->Active){echo "<span class='label label-success'>Active</span>";}
                        else {echo "<span class='label label-dafault'>InActive</span>";}?></td> -->
                    <td><?php echo $get->MenuLabel ?></td>
                    <td><?php echo $get->MenuIcon ?></td>
                    <td>
                        <a class="btn btn-primary btn-icon" href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Add/' . $get->MenuID?>">
                            <b><i class="icon-pencil"></i></b>
                        </a>
                        <button type="button" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#modal_theme_danger" onclick="deleteuser('<?php echo $get->MenuID?>')"><i class="icon-cross2"></i></button>
                    </td>
                </tr>
                <?php
            }?>
        </tbody>
    </table>

</div>

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Sub Menu</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-heading">
        <div class="text-right card-body">
            <a class="btn bg-teal-400 btn-labeled btn-labeled-left" href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Add'?>">
                <b><i class="icon-reading"></i></b>ADD
            </a>
        </div>
    </div>

    <table class="table datatable-button-html5-basic">
        <thead>
            <tr>
                <th>ID Menu</th>
                <th>Name Menu</th>
                <th>Label Menu</th>
                <th>Icons Menu</th>
                <th>Link Menu</th>
                <th>Menu Header</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data2 as $get) {?>
                <tr>
                    <td><?php echo $get->MenuID ?></td>
                    <td><?php echo $get->MenuName ?></td>
                    <td><?php echo $get->MenuLabel ?></td>
                    <td><?php echo $get->MenuIcon ?></td>
                    <td><?php echo $get->MenuLink ?></td>
                    <td><?php echo $get->MenuHeader ?></td>
                    <td>
                        <a class="btn btn-primary btn-icon" href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Add/' . $get->MenuID?>">
                            <b><i class="icon-pencil"></i></b>
                        </a>
                        <button type="button" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#modal_theme_danger" onclick="deleteuser('<?php echo $get->MenuID?>')"><i class="icon-cross2"></i></button>
                    </td>
                </tr>
                <?php
            }?>
        </tbody>
    </table>

</div>

<!-- Danger modal -->
<div id="modal_theme_danger" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Hapus?</h6>
            </div>

            <div class="modal-body">
                <h6 class="text-semibold">Anda Akan Menghapus Data Ini?</h6>
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <a id="user" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- /default modal -->

<script>
    function deleteuser(username){
        document.getElementById("user").href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Delete/'?>" + username;
    }
</script>