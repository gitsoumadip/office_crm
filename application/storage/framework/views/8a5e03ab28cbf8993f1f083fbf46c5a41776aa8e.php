<!--title-->
<?php echo $__env->make('pages.task.components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!--description-->
<?php echo $__env->make('pages.task.components.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--checklist-->
<?php echo $__env->make('pages.task.components.checklists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!--attachments-->
<?php echo $__env->make('pages.task.components.attachments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!--comments-->
<?php if(config('visibility.tasks_standard_features')): ?>
<div class="card-comments" id="card-comments">
    <div class="x-heading"><i class="mdi mdi-message-text"></i>Comments</div>
    <div class="x-content">
        <?php echo $__env->make('pages.task.components.post-comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--comments-->
        <div id="card-comments-container">
            <!--dynamic content here-->
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /home/elphill/Workdrive/localserver/laravel/GROWCRM/application/resources/views/pages/task/leftpanel.blade.php ENDPATH**/ ?>