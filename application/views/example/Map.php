<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbF9O9Ks9_-QNWHi2SFxLqLUBOwrMyzXk"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/maps/google/basic/basic.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/maps/google/drawings/rectangles.js"></script>
<script src="<?= base_url() ?>global_assets/js/demo_pages/maps/google/markers/simple.js"></script>

<!-- Basic map -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Basic map</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <p class="content-group">Example of simple <code>google map</code> with default options and center in Budapest, Hungary. Zoom and center of the map is defined in chart settings. Google API loads using default synchronous method when the page renders after the script is loaded. Asynchronous method is optional and available for usage. Google Maps uses a close variant of the <code>Mercator projection</code>, and therefore cannot accurately show areas around the poles.</p>

        <div class="map-container map-basic"></div>
    </div>
</div>
<!-- /basic map -->

<!-- Rectangle shapes -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Rectangle shapes</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <p class="content-group">In addition to a generic <Code>Polygon</Code> class, the Google Maps JavaScript API includes a specific class for <code>Rectangle</code> objects, to simplify their construction. A <code>Rectangle</code> is similar to a <code>Polygon</code> in that you can define custom colors, weights, and opacities for the edge of the rectangle (the stroke) and custom colors and opacities for the area within the rectangle (the fill). Colors should be indicated in hexadecimal numeric HTML style.</p>
        
        <div class="map-container map-drawing-rectangle"></div>
    </div>
</div>
<!-- /rectangle shapes -->

<!-- Basic markers -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Basic markers</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <p class="content-group">Example of basic map <code>markers</code>. A marker identifies a location on a map. By default, a marker uses a standard image. Markers can display custom images, in which case they are usually referred to as "icons." Markers and icons are objects of type <code>Marker</code>. Markers are designed to be interactive, you can allow users to move a marker on the map by setting the marker's <code>draggable</code> property to <code>true</code>.</p>

        <div class="map-container map-marker-simple"></div>
    </div>
</div>
<!-- /basic markers -->