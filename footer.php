<?php
/**
 * Theme Footer
 */

$email     = get_field( 'email', 'option' );
$phone     = get_field( 'phone', 'option' );
$whatsapp  = get_field( 'whatsapp', 'option' );
$copyright = get_field( 'copyright', 'option' );
?>

<div class="mail" id="contact">
    <div class="container">
        <h3 class="head"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact Us</h3>
        <br>
        <div class="agile_mail_grid1">
            <div class="col-md-4 agile_mail_grid1_left">
                <div class="mail_grid1_left1">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <h4>Our Email</h4>
                    <ul>
                        <li>
                            <?php if ( $email ) {
                                echo sprintf( '<i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:%s">%s</a>', $email, $email );
                            } else { ?>
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:akhonbariagro@gmail.com">akhonbariagro@gmail.com</a>
							<?php }?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 agile_mail_grid1_left">
                <div class="mail_grid1_left1">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    <h4>Call Us</h4>
                    <ul>
						<?php if ( $phone ) {
							echo sprintf( '<li><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:%s">%s</a></li>', $phone, $phone );
						} else { ?>
                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:+8801755548444">01886148444</a></li>
						<?php }?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 agile_mail_grid1_left">
                <div class="mail_grid1_left1">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    <h4>WhatsApp</h4>
                    <ul>
						<?php if ( $whatsapp ) {
							echo sprintf( '<li><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;%s</li>', $whatsapp );
						} else { ?>
                            <li><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;01886148444</li>
						<?php }?>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="w3agile_copy_right">
    <div class="container">
        <p>?? <?php echo date( 'Y' ) . ' ' . ( $copyright ? $copyright : get_bloginfo( 'title' ) ); ?> . All Rights Reserved | Design by <a
                    href="https://www.texlabit.com/" target="_blank">Texlab IT</a>
        </p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>