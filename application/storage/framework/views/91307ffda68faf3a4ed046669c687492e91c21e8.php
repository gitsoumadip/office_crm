<div class="form-group row">
    <label for="example-month-input" class="col-12 col-form-label text-left"><?php echo e(cleanLang(__('lang.move_to_this_stage'))); ?></label>
    <div class="col-sm-12">
        <select class="select2-basic form-control form-control-sm" id="tasks_status" name="tasks_status">
            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($status->taskstatus_id); ?>"><?php echo e($status->taskstatus_title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div><?php /**PATH /home/elphill/Workdrive/localserver/laravel/GROWCRM/application/resources/views/pages/settings/sections/tasks/modals/move.blade.php ENDPATH**/ ?>