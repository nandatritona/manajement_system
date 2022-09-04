<script src="<?= base_url() ?>global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/charts/echarts/candlesticks_others.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/charts/echarts/bars_tornados.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/charts/echarts/columns_waterfalls.js"></script>

<div class="row">
    <div class="col-md-6">

        <!-- Basic pie chart -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Basic pie chart</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="chart-container has-scroll">
                    <div class="chart has-fixed-height has-minimum-width" id="pie_basic"></div>
                </div>
            </div>
        </div>
        <!-- /bacis pie chart -->

        <!-- Filled radar areas -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Filled radar areas</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="chart-container">
                    <div class="chart has-fixed-height" id="radar_filled"></div>
                </div>
            </div>
        </div>
        <!-- /filled radar areas -->

    </div>

    <div class="col-md-6">
        <!-- Basic radar chart -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Basic radar chart</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="chart-container">
                    <div class="chart has-fixed-height" id="radar_basic"></div>
                </div>
            </div>
        </div>
        <!-- /basic radar chart -->

        <!-- Basic gauge chart -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Basic gauge chart</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="chart-container">
                    <div class="chart has-fixed-height" id="gauge_basic"></div>
                </div>
            </div>
        </div>
        <!-- /basic gauge chart -->
    </div>
</div>

<!-- Basic bar chart -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Basic bar chart</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="chart-container">
            <div class="chart has-fixed-height" id="bars_basic"></div>
        </div>
    </div>
</div>
<!-- /basic bar chart -->

<!-- Basic column chart -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Basic column</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="chart-container">
            <div class="chart has-fixed-height" id="columns_basic"></div>
        </div>
    </div>
</div>
<!-- /basic column chart -->

<!-- Columns timeline -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Columns timeline</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="chart-container">
            <div class="chart has-fixed-height" id="columns_timeline"></div>
        </div>
    </div>
</div>
<!-- /columns timeline -->