<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>
	
<?php
	/*  $this->widget('ext.RGmapPicker.RGmapPicker',
		array(
				'title' => 'Location',
				'element_id' => 'GMapLocation',
				'map_width' => 670,
				'map_height' => 300,
				'map_latitude' => '7.008706', # Your default position
				'map_longtitude' => '100.496212', # Your default position
				'map_location_name' => '',
		) 
); */

$this->widget('application.extensions.addresspicker.addresspicker', array(
		'appendAddressString' => ', France',
		'address' => '#House_address',
		'locality' => '#House_city',
		'lat' => '#House_latitude',
		'lng' => '#House_longitude',
		'map' => '#map'));
?>

<p></p>
