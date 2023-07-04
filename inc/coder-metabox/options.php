<?php 
$box = new CoderMetaBox();
$box->id ="post_option_1";
$box->type ="teams";
$box->name ="Team Member Designation";

$prefix = 'cits_';
$box->coder_meta_fields = array(
    array(
        'label'=> 'Designation',
        'desc'  => 'Here type your Designation.',
        'id'    => $prefix.'Designation',
        'type'  => 'text'
    )
);

;
