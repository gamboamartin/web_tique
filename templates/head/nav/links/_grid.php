<?php
use config\generales;
$generales = new generales();
?>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Map
        <i class="icon-dropdown"></i>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="map.php">Grid results</a>
        <a class="dropdown-item" href="map_list.php">List result</a>
        <a class="dropdown-item" href="map_side.php">Side version</a>
        <a class="dropdown-item" href="map_side_list.php">Side version list</a>
        <a class="dropdown-item" href="map_geo.php?geolocation=paris">Geo regions</a>
    </div>
</li>
