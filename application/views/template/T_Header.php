<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?php echo $this->uri->segment(1, 'index');?></span> - <?php echo $this->uri->segment(2, 'index');?></h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?= site_url()?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><?php echo $this->uri->segment(1, 'index');?></li>
            <li class="active"><?php echo $this->uri->segment(2, 'index');?></li>
        </ul>
    </div>
</div>