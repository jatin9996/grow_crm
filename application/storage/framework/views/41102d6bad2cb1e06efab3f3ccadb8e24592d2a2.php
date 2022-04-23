<!--ALL THIRD PART JAVASCRIPTS-->
<script src="grow_crm/public/vendor/js/vendor.footer.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--nextloop.core.js-->
<script src="grow_crm/public/js/core/ajax.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--MAIN JS - AT END-->
<script src="grow_crm/public/js/core/boot.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--EVENTS-->
<script src="grow_crm/public/js/core/events.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--CORE-->
<script src="grow_crm/public/js/core/app.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--BILLING-->
<script src="grow_crm/public/js/core/billing.js?v=<?php echo e(config('system.versioning')); ?>"></script>

<!--project page charts-->
<?php if(@config('visibility.projects_d3_vendor')): ?>
<script src="grow_crm/public/vendor/js/d3/d3.min.js?v=<?php echo e(config('system.versioning')); ?>"></script>
<script src="grow_crm/public/vendor/js/c3-master/c3.min.js?v=<?php echo e(config('system.versioning')); ?>"></script>
<?php endif; ?>

<!--form builder-->
<?php if(@config('visibility.web_form_builder')): ?>
<script src="grow_crm/public/vendor/js/formbuilder/form-builder.min.js?v=<?php echo e(config('system.versioning')); ?>"></script>
<script src="grow_crm/public/js/webforms/webforms.js?v=<?php echo e(config('system.versioning')); ?>"></script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\grow_crm\application\resources\views/layout/footerjs.blade.php ENDPATH**/ ?>