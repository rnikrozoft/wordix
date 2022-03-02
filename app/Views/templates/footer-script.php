<script src="<?php echo base_url('/lib/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('/lib/feather-icons/feather.min.js'); ?>"></script>
<script src="<?php echo base_url('/lib/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

<script src="<?php echo base_url('/assets/js/dashforge.js'); ?>"></script>

<!-- append theme customizer -->
<script src="<?php echo base_url('/lib/js-cookie/js.cookie.js'); ?>"></script>
<?php if(isset($scripts)) foreach ($scripts as $script) echo '<script src="' . $script . '"></script>'; ?>