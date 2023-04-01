
<?php $__env->startSection('settings-page'); ?>
<!--settings-->
<form class="form">
    <!--allow editing sugbject-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.allow_editing_of_ticket_subject'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_tickets_edit_subject" name="settings_tickets_edit_subject"
                class="filled-in chk-col-light-blue"
                <?php echo e(runtimePrechecked($settings['settings_tickets_edit_subject'] ?? '')); ?>>
            <label for="settings_tickets_edit_subject"></label>
        </div>
    </div>
    <!--allow editing body-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label"><?php echo e(cleanLang(__('lang.allow_editing_of_ticket_message'))); ?></label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_tickets_edit_body" name="settings_tickets_edit_body"
                class="filled-in chk-col-light-blue" <?php echo e(runtimePrechecked($settings['settings_tickets_edit_body'] ?? '')); ?>>
            <label for="settings_tickets_edit_body"></label>
        </div>
    </div>
    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request" data-url="/settings/tickets"
            data-loading-target="" data-ajax-type="PUT" data-type="form" data-on-start-submit-button="disable"><?php echo e(cleanLang(__('lang.save_changes'))); ?></button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elphill/Workdrive/localserver/laravel/GROWCRM/application/resources/views/pages/settings/sections/tickets/page.blade.php ENDPATH**/ ?>