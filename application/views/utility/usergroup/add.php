<?php if($this->session->flashdata('pesan') != null){?>
    <div class="alert alert-danger no-border">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold"><?php echo $this->session->flashdata('pesan') ?></span>.
    </div>
<?php }?>

<form action="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Save'?>" method="POST" class="form-horizontal">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Input Group</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label class="col-lg-3 control-label">GroupName:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" placeholder="GroupName" name="GroupName" required >
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">SIMPAN <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
    </div>
</form>