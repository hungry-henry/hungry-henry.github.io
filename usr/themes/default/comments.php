<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('暂无评论，快来抢沙发'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>

        <?php $comments->listComments(); ?>

        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <h3 id="response"><?php _e('添加新评论'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    <p><?php _e('登录身份: '); ?><a
                            href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                    </p>
                    <p>
                    <label for="textarea" class="required"><?php _e('内容'); ?></label>
                    <textarea rows="8" cols="50" name="text" id="textarea" class="textarea"
                              required><?php $this->remember('text'); ?></textarea>
                </p>
                <p>
                    <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
                </p>
                <?php else: ?>
                    <p>请<a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>后评论</p>
                <?php endif; ?>
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
