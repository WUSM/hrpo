<?php
// Required for mobile nav on Event Organiser search results page.
// I'd prefer to have this in the WUSM Event Organiser Skin plugin.
if (isset($_GET['post_type']) && $_GET['post_type'] == 'event' && is_search()) {
    ?>
        </div>
    </div>
<?php
}
?>

<footer>

    <?php include_once(get_stylesheet_directory() . '/site-footer.php') ?>

    <div id="wusm-footer">

        <div class="wrapper clearfix">

            <div id="wusm-footer-left">
                <a id="footer-logo" onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://wustl.edu/']);" href="http://wustl.edu/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/wustl-logo-footer.png" alt="Washington University School of Medicine in St. Louis"></a>
                <div id="copyright">&copy; Washington University in St. Louis<br>One Brookings Drive, St. Louis, MO 63130</div>
            </div>

            <div id="wusm-footer-right">
                <div id="wusm-social">
                    <a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Facebook']);" id="wusm-facebook" title="Facebook" href="https://www.facebook.com/wustl"></a><a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Twitter']);" id="wusm-twitter" title="Twitter" href="https://twitter.com/WUSTL"></a><a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','Google+']);" id="wusm-google-plus" title="Google+" href="https://plus.google.com/+WUSTL"></a>
                </div>

                <nav>
                    <a class="first-child" onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://emergency.wustl.edu']);" href="http://emergency.wustl.edu">Emergency</a>
                    <a onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://www.wustl.edu/policies/']);" href="http://www.wustl.edu/policies/">Policies</a>
                    <a class="last-child" onclick="javascript:_gaq.push(['_trackEvent','wusm-footer','http://news.wustl.edu/']);" href="http://news.wustl.edu/">News</a>
                </nav>
            </div>

        </div>

    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>