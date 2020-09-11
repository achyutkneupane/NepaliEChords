</body>

</html>

<?php
wp_footer();
if ( is_user_logged_in() ) {
    echo '
    <script>
    document.getElementById("TitleBox").style.height = "93vh";
    $(window).trigger("scroll");
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 10) {
            if ($(window).width() < 768) {
                document.getElementById("mainNav").style.top = "0";
            }
            else {
                document.getElementById("mainNav").style.top = "20px";
            }
        } else {
            document.getElementById("mainNav").style.top = "32px";
        }   
        });
    </script>
    ';
}
?>