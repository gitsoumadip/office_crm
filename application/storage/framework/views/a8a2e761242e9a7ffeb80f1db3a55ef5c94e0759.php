<div class="form-group row">
    <label class="col-sm-12 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.category_users'))); ?></label>
    <div class="col-sm-12">
        <select name="users" id="users"
            class="form-control form-control-sm select2-basic select2-multiple select2-tags select2-hidden-accessible"
            multiple="multiple" tabindex="-1" aria-hidden="true">
            <!--current-->
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $current): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $current_users[] = $current->categoryuser_userid; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--/#array of assigned-->
            <!--users list-->
            <?php $__currentLoopData = config('system.team_members'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>" <?php echo e(runtimePreselectedInArray($user->id ?? '', $current_users ?? [])); ?>><?php echo e($user->full_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--/#users list-->
        </select>
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-12">
        <div class="alert alert-info"><h5 class="text-info"><i class="sl-icon-info"></i> <?php echo app('translator')->get('lang.info'); ?></h5><?php echo app('translator')->get('lang.category_team_info'); ?></div>
    </div>
</div><?php /**PATH /home/elphill/Workdrive/localserver/laravel/GROWCRM/application/resources/views/pages/categories/modals/team.blade.php ENDPATH**/ ?>