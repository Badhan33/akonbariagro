<?php
/**
 * Theme Footer
 */
?>
<div class="footer">
    <div class="container">
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>About Us</h3>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="Send">
            </form>
        </div>
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>Twitter Posts</h3>
            <ul class="w3agile_footer_grid_list">
                <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://lkj.ewr.com</a> alias, ut aut reiciendis.
                    <span>02 days ago</span></li>
                <li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://uiubajaj.com</a> ut aut
                    voluptatibus.<span>03 days ago</span></li>
            </ul>
        </div>
        <div class="col-md-4 agileinfo_footer_grid">
            <h3>Social Media</h3>
            <ul class="agileinfo_social_icons">
                <li><a href="#" class="facebook"><span></span><i>-</i>Facebook</a></li>
                <li><a href="#" class="twitter"><span></span><i>-</i>Twitter</a></li>
                <li><a href="#" class="google"><span></span><i>-</i>Google+</a></li>
                <li><a href="#" class="instagram"><span></span><i>-</i>Instagram</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="w3agile_copy_right">
    <div class="container">
        <p>© <?php echo date( 'Y' ) . ' ' . get_bloginfo( 'title' ); ?> . All Rights Reserved | Design by <a
                    href="https://www.texlabit.com/" target="_blank">Texlab IT</a>
        </p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>