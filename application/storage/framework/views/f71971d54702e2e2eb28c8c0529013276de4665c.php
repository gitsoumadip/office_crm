<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--each row-->
<tr id="tag_<?php echo e($tag->tag_id); ?>">
    <td class="tags_col_date">
        <?php echo e(runtimeDate($tag->tag_created)); ?>

    </td>
    <td class="tags_col_title"><?php echo e($tag->tag_title); ?></td>
    <td class="tags_col_creator">
        <img src="<?php echo e(getUsersAvatar($tag->avatar_directory, $tag->avatar_filename)); ?>" alt="user"
            class="img-circle avatar-xsmall">
        <?php echo e($tag->first_name ?? runtimeUnkownUser()); ?>

    </td>
    <td class="tags_col_resourcetype">
        <?php echo e(runtimeLang($tag->tagresource_type)); ?>

    </td>
    <td class="tags_col_amount">
        <?php if($tag->tagresource_id == 0): ?>
        ---
        <?php else: ?>
        <?php echo e($tag->tagresource_id); ?>

        <?php endif; ?>
    </td>
    <td class="tags_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="<?php echo e(urlResource('/tags/'.$tag->tag_id.'/edit')); ?>" data-loading-target="commonModalBody"
                data-modal-title="<?php echo e(cleanLang(__('lang.edit_tag'))); ?>" data-action-url="<?php echo e(urlResource('/tags/'.$tag->tag_id)); ?>"
                data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request"
                data-action-ajax-loading-target="tags-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="<?php echo e(cleanLang(__('lang.delete_tag'))); ?>" data-confirm-text="<?php echo e(cleanLang(__('lang.are_you_sure'))); ?>"
                data-ajax-type="DELETE" data-url="<?php echo e(url('/')); ?>/tags/<?php echo e($tag->tag_id); ?>">
                <i class="sl-icon-trash"></i>
            </button>
        </span>
        <!--action button-->
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--each row--><?php /**PATH /home/elphill/Workdrive/localserver/laravel/GROWCRM/application/resources/views/pages/tags/components/table/ajax.blade.php ENDPATH**/ ?>