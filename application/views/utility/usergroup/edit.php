<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title"><?php echo $Group[0]->GroupName; ?></h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>
                            
    <div class="panel-body">
        <!-- <p class="mb-15">Hierarchical multi selection example. A single-click handler selects the node; a keydown handler selects on <kbd>space</kbd>.</p> -->
        <form action="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Save/' . $Group[0]->GroupID;?>" method="POST" class="form-horizontal">
                <?php foreach($Lv1 as $row1){ ?>
                    <div class="form-group">
                        <label class="control-label col-lg-3"><?php echo $row1->MenuLabel; ?></label>
                        <div class="col-lg-9">
                            <div class="checkbox checkbox-switch">
                                <label>
                                    <input type="checkbox" name="<?php echo $row1->MenuID?>" <?php if($row1->Active){echo "checked='checked'";}?> data-on-text="Ya" data-off-text="Tidak" class="switch">
                                    Akses Menu <?php echo $row1->MenuLabel?>
                                </label>
                            </div>
                            <?php foreach($Lv2 as $row2){
                                if($row1->MenuID === $row2->MenuHeader) {?>
                                    <div class="checkbox checkbox-switch">
                                        <label>
                                            <input type="checkbox" name="<?php echo $row2->MenuID?>" <?php if($row2->Active){echo "checked='checked'";}?> data-on-text="Ya" data-off-text="Tidak" class="switch">
                                            <?php echo $row2->MenuLabel?>
                                        </label>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <hr/>
                <?php }?>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">SIMPAN <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div>