<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
    <script type="text/javascript">
        var OriginTitle = document.title;
            var titleTime;
            document.addEventListener('visibilitychange', function () {
                if (document.hidden) {
                    document.title = '╭(°A°`)╮ 页面崩溃啦 ~';
                    clearTimeout(titleTime);
                }
                else {
                    document.title = '(ฅ>ω<*ฅ) 噫又好啦 ~' + OriginTitle;
                    titleTime = setTimeout(function () {
                        document.title = OriginTitle;
                    }, 1000);
                }
            });
    </script>
</body>
</html>
