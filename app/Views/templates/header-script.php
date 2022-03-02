<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/img/favicon.jpg'); ?>">
    <title>VVordix</title>
    <link href="<?php echo base_url('/lib/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/lib/ionicons/css/ionicons.min.css" rel="stylesheet'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashforge.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashforge.auth.css'); ?>">
    <?php if(isset($styles)) foreach ($styles as $style) echo '<link rel="stylesheet" href="' . $style . '">'; ?>
</head>