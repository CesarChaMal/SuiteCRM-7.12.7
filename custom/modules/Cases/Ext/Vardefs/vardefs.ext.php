<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2022-11-11 19:01:23
$dictionary["Case"]["fields"]["bugs_cases_1"] = array (
  'name' => 'bugs_cases_1',
  'type' => 'link',
  'relationship' => 'bugs_cases_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_CASES_1_FROM_BUGS_TITLE',
  'id_name' => 'bugs_cases_1bugs_ida',
);
$dictionary["Case"]["fields"]["bugs_cases_1_name"] = array (
  'name' => 'bugs_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_CASES_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_cases_1bugs_ida',
  'link' => 'bugs_cases_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["bugs_cases_1bugs_ida"] = array (
  'name' => 'bugs_cases_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BUGS_CASES_1_FROM_CASES_TITLE',
);


// created: 2022-09-12 14:00:04
$dictionary["Case"]["fields"]["cases_aos_products_1"] = array (
  'name' => 'cases_aos_products_1',
  'type' => 'link',
  'relationship' => 'cases_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'side' => 'right',
  'vname' => 'LBL_CASES_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


 // created: 2022-11-11 17:43:19
$dictionary['Case']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2022-11-11 17:43:18
$dictionary['Case']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2022-11-11 17:43:18
$dictionary['Case']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2022-11-11 17:43:17
$dictionary['Case']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>