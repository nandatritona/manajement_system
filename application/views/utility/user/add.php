<?php if($this->session->flashdata('pesan') != null){?>
    <div class="alert alert-danger no-border">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold"><?php echo $this->session->flashdata('pesan') ?></span>.
    </div>
<?php }?>

<form action="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Save'?>" method="POST" class="form-horizontal">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Input User Detail</h5>
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
                <?php 
                    if(isset($user[0]->UserName)){?>
                        <input type="hidden" class="form-control" name="Edit" <?php if(isset($user[0]->UserName)){echo "value='1'";}?> required >
                <?php } ?>
            <div class="form-group">
                <label class="col-lg-3 control-label">UserName:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" placeholder="UserName" name="UserName" <?php if(isset($user[0]->UserName)){echo "value='" . $user[0]->UserName . "' readonly";}?> required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-9">
                    <input type="email" class="form-control" placeholder="Email" name="Email" <?php if(isset($user[0]->Email)){echo "value='" . $user[0]->Email . "'";}?> required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Password:</label>
                <div class="col-lg-9">
                    <input type="password" class="form-control" placeholder="password" name="Password" <?php if(isset($user[0]->Password)){echo "value='" . $user[0]->Password . "' readonly";}?> required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Ulangi Password:</label>
                <div class="col-lg-9">
                    <input type="password" class="form-control" placeholder="password" name="PasswordVerification" <?php if(isset($user[0]->Password)){echo "value='" . $user[0]->Password . "' readonly";}?> required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">User Level:</label>
                <div class="col-lg-9">
                    <select class="select" name="GroupID" required >
                        <?php 
                            if(isset($user[0]->UserName)){?>
                                <option value="<?php echo $user[0]->GroupID?>" required><?php echo $data[$user[0]->GroupID - 1]->GroupName?></option>
                        <?php } ?>
                        <option value="">- PILIH -</option>
                        <?php foreach($data as $get){?>
                            <option value="<?php echo $get->GroupID?>" required><?php echo $get->GroupName?></option>
                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Gender:</label>
                <div class="col-lg-9">
                    <label class="radio-inline">
                        <input type="radio" class="styled" name="Gender" <?php if(isset($user[0]->Gender)){if($user[0]->Gender == '1'){echo "checked='checked'";}} else {echo "checked='checked'";}?> value="1" >
                        Pria
                    </label>

                    <label class="radio-inline">
                        <input type="radio" class="styled" name="Gender" <?php if(isset($user[0]->Gender)){if($user[0]->Gender == '0'){echo "checked='checked'";}}?> value="0" >
                        Wanita
                    </label>
                </div>
            </div>

            <div class="text-right">      
                <?php 
                    if(isset($user[0]->UserName)){?>
                    <button type="button" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#modal_theme_danger" onclick="resetpassword('<?php echo $user[0]->UserName?>')">RESET PASSWORD</button>
                <?php } ?>
                <button type="submit" class="btn btn-primary">SIMPAN <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
    </div>
</form>

<!-- Danger modal -->
<div id="modal_theme_danger" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Reset?</h6>
            </div>

            <div class="modal-body">
                <h6 class="text-semibold" id="username"></h6>
                <h6>Password Akan Diganti : 123</h6>
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <a id="user" class="btn btn-danger" href="#">Reset</a>
            </div>
        </div>
    </div>
</div>
<!-- /default modal -->

<script>
    function resetpassword(username){
        document.getElementById("username").innerText="Anda Akan Mereset Password " + username;
        document.getElementById("user").href="<?= site_url() . $this->uri->segment(1, 'index') . '/' . $this->uri->segment(2, 'index') . 'Reset/'?>" + username;
    }
</script>