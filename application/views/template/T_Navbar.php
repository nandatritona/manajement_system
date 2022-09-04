<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= site_url()?>Dashboard"><img src="<?= site_url()?>global_assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-person"></i> 
                    <span><?php echo $this->session->userdata('UserName')?></span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-key"></i> Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= site_url()?>Login/Logout"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Primary modal -->
<div id="modal_theme_primary" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Ganti Password.</h6>
            </div>

            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="userid" value="<?php echo $this->session->userdata('UserName')?>"/>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password Lama</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" name="password0" id="password0" onkeyup="verifikasi()" class="form-control" placeholder="Password Lama" required="">
                                    <div class="input-group-addon" onclick="passvisibility(0)">
                                        <i id="eye0" class="icon-eye"></i>
                                    </div>
                                </div>
                                <span id="keterangan0" hidden></span>
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Password Baru</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" name="password1" id="password1" onkeyup="verifikasi()" placeholder="Password Baru" class="form-control" required="">
                                    <div class="input-group-addon" onclick="passvisibility(1)">
                                        <i id="eye1" class="icon-eye"></i>
                                    </div>
                                </div>
                                <span id="keterangan1" hidden></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Verifikasi Password</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" name="password2" id="password2" onkeyup="verifikasi()" placeholder="Ketik Ulang Password Anda" class="form-control" required="">
                                    <div class="input-group-addon" onclick="passvisibility(2)">
                                        <i id="eye2" class="icon-eye"></i>
                                    </div>
                                </div>
                                <span id="keterangan2" hidden></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                        <button type="button" id="save" class="btn btn-primary" disabled="" onclick="savenewpassword()">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function passvisibility(location){
        var password    = $("#password"+location);
        var eye         = $("#eye"+location);
        if(password.attr("type") == "password")
        {
            password.attr("type","text");
            eye.attr("class","icon-eye-blocked");
        } else {
            password.attr("type","password");
            eye.attr("class","icon-eye");
        }
    }

    function verifikasi(){
        var oldpass = $("#password0");
        var newpass = $("#password1");
        var verpass = $("#password2");
        var keterangan0 = $("#keterangan0");
        var keterangan1 = $("#keterangan1");
        var keterangan2 = $("#keterangan2");
        if(verpass.val() == "" || newpass.val() == ""){
            oldpass.closest("div .form-group").removeClass("has-error");
            oldpass.closest("div .form-group").removeClass("has-success");
            newpass.closest("div .form-group").removeClass("has-error");
            newpass.closest("div .form-group").removeClass("has-success");
            verpass.closest("div .form-group").removeClass("has-error");
            verpass.closest("div .form-group").removeClass("has-success");
            keterangan0.removeClass("help-block");
            keterangan1.removeClass("help-block");
            keterangan2.removeClass("help-block");
            keterangan0.hide();
            keterangan1.hide();
            keterangan2.hide();
            $("#save").attr("disabled", true);
        } else {
            if(oldpass.val() == ""){
                $("#save").attr("disabled", true);
            } else {
                if(newpass.val() != verpass.val()){
                    newpass.closest("div .form-group").removeClass("has-success");
                    verpass.closest("div .form-group").removeClass("has-success");
                    newpass.closest("div .form-group").addClass("has-error");
                    verpass.closest("div .form-group").addClass("has-error");
                    $("#save").attr("disabled", true);
                } else {
                    newpass.closest("div .form-group").removeClass("has-error");
                    verpass.closest("div .form-group").removeClass("has-error");
                    newpass.closest("div .form-group").addClass("has-success");
                    verpass.closest("div .form-group").addClass("has-success");
                    $("#save").attr("disabled", false);
                }
            }
        }
    }

    function savenewpassword(){
        var oldpass = $("#password0");
        var newpass = $("#password1");
        var verpass = $("#password2");
        var keterangan0 = $("#keterangan0");
        var keterangan1 = $("#keterangan1");
        var keterangan2 = $("#keterangan2");
        if(oldpass.val() == newpass.val()){
            oldpass.closest("div .form-group").addClass("has-error");
            newpass.closest("div .form-group").addClass("has-error");
            verpass.closest("div .form-group").addClass("has-error");
            keterangan0.addClass("help-block");
            keterangan1.addClass("help-block");
            keterangan2.addClass("help-block");
            keterangan0.show();
            keterangan1.show();
            keterangan2.show();
            keterangan0.html("Password Lama dan Baru Tidak Boleh Sama");
            keterangan1.html("Password Lama dan Baru Tidak Boleh Sama");
            keterangan2.html("Password Lama dan Baru Tidak Boleh Sama");
        } else {
            $.ajax({
                url:"<?= site_url()?>Login/ChangePassword",
                method:"POST",
                data:{
                    UserName : "<?php echo $this->session->userdata('UserName')?>",
                    PassLama : oldpass.val(),
                    PassBaru : newpass.val()
                },
                success:function(response){
                    if(response == 1){
                        swal({
                            title: "Berhasil",
                            text: "Password Anda Berhasil DiGanti.",
                            type: "success"
                        }, function(isConfirm){
                            if(isConfirm){
                                $("#modal_theme_primary").modal('hide');
                                window.location.reload();
                            }
                        });
                    } else {
                        swal({
                            title: "Gagal",
                            text: "Password Anda Gagal Diganti, Kemungkinan Password Lama Salah Input.",
                            type: "error"
                        }, function(isConfirm){
                            if(isConfirm){
                                oldpass.closest("div .form-group").removeClass("has-error");
                                oldpass.closest("div .form-group").removeClass("has-success");
                                newpass.closest("div .form-group").removeClass("has-error");
                                newpass.closest("div .form-group").removeClass("has-success");
                                verpass.closest("div .form-group").removeClass("has-error");
                                verpass.closest("div .form-group").removeClass("has-success");
                                keterangan0.removeClass("help-block");
                                keterangan1.removeClass("help-block");
                                keterangan2.removeClass("help-block");
                                keterangan0.hide();
                                keterangan1.hide();
                                keterangan2.hide();
                                oldpass.val("");
                                newpass.val("");
                                verpass.val("");
                                $("#modal_theme_primary").modal('hide');
                            }
                        });
                    }
                }
            });
        }
    }
</script>