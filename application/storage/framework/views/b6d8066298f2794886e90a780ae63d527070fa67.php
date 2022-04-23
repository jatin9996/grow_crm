<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" id="js-trigger-nav-client">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <!--home-->
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_home'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.home'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/home" aria-expanded="false" target="_self">
                        <i class="ti-home"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.dashboard'))); ?>

                        </span>
                    </a>
                </li>
                <!--home-->


                <!--projects[home]-->
                <?php if(config('visibility.modules.projects')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_projects'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.projects'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(_url('/projects')); ?>" aria-expanded="false" target="_self">
                        <i class="ti-folder"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.projects'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--projects-->


                <!--invoices-->
                <?php if(config('visibility.modules.invoices')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_invoices'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.invoices'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/invoices" aria-expanded="false" target="_self">
                        <i class="ti-receipt"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.invoices'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--invoices-->

                <!--payments-->
                <?php if(config('visibility.modules.payments')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_payments'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.payments'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/payments" aria-expanded="false" target="_self">
                        <i class="sl-icon-credit-card"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.payments'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--payments-->

                
                <!--subscriptions-->
                <?php if(config('visibility.modules.subscriptions')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_subscription'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.subscriptions'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="<?php echo e(url('')); ?>/subscriptions" aria-expanded="false"
                        target="_self">
                        <i class="sl-icon-layers"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.subscriptions'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>

                <!--estimates-->
                <?php if(config('visibility.modules.estimates')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_estimates'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.estimates'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/estimates" aria-expanded="false" target="_self">
                        <i class="sl-icon-calculator"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.estimates'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--estimates-->


                <!--users-->
                <?php if(auth()->user()->is_client_owner): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_contacts'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.users'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/users" aria-expanded="false" target="_self">
                        <i class="sl-icon-people"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.users'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--users-->

                <!--tickets-->
                <?php if(config('visibility.modules.tickets')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_tickets'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.support_tickets'))); ?>">
                    <a class="waves-effect waves-dark" href="<?php echo e(url('')); ?>/tickets" aria-expanded="false" target="_self">
                        <i class="ti-comments"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.support'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--tickets-->

                <!--knowledgebase-->
                <?php if(config('visibility.modules.knowledgebase')): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_kb'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                title="<?php echo e(cleanLang(__('lang.knowledgebase'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="<?php echo e(url('')); ?>/knowledgebase" aria-expanded="false" target="_self"
                        >
                        <i class="sl-icon-docs"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.knowledgebase'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--knowledgebase-->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside><?php /**PATH C:\xampp\htdocs\grow_crm\application\resources\views/nav/leftmenu-client.blade.php ENDPATH**/ ?>