<?php

/*

	===========================

	MODALS

	===========================

*/

function fd_modal_coupon() { echo
    '<div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="couponModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Coupon / Gift Card</h5>
                    <button type="button" class="close fal fa-times" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-5">
                    <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
                        <p>'; esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); echo '</p>

                        <div class="input-group">
                            <input type="text" name="coupon_code" class="input-text form-control" placeholder=" '; esc_attr_e( 'Coupon code', 'woocommerce' ); echo ' " id="coupon_code" value="" />
                            <div class="input-group-append">
                                <button type="submit" class="button" name="apply_coupon" value=" '; esc_attr_e( 'Apply coupon', 'woocommerce' ); echo ' ">'; esc_html_e( 'Apply coupon', 'woocommerce' ); echo '</button>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}
function fd_modal_login() { echo
    '<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="loginTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content px-5 py-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="woocommerce-form woocommerce-form-login login p-0 m-0 border-0" method="post">';

                                do_action( 'woocommerce_login_form_start' );

                                echo'<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="username">'; esc_html_e( 'Email address', 'woocommerce' ); echo'&nbsp;</label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="'; echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; echo'" />
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password">'; esc_html_e( 'Password', 'woocommerce' ); echo'&nbsp;</label>
                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                                </p>';

                                do_action( 'woocommerce_login_form' );

                                echo'<p class="woocommerce-LostPassword lost_password">
                                    <a href="'; echo esc_url( wp_lostpassword_url() ); echo'">'; esc_html_e( 'Lost your password?', 'woocommerce' ); echo'</a>
                                </p>

                                <p class="form-row">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>'; esc_html_e( 'Remember me', 'woocommerce' ); echo'</span>
                                    </label>
                                    '; wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' );
                                echo'</p>
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" style="float:unset;" name="login" value="'; esc_attr_e( 'Log in', 'woocommerce' ); echo'">'; esc_html_e( 'Log in', 'woocommerce' ); echo'</button>';

                                do_action( 'woocommerce_login_form_end' );

                            echo'</form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form method="post" class="woocommerce-form woocommerce-form-register register p-0 border-0"'; do_action( 'woocommerce_register_form_tag' ); echo' >';

                                do_action( 'woocommerce_register_form_start' );

                                if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) :

                                    echo'<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_username">'; esc_html_e( 'Username', 'woocommerce' ); echo'&nbsp;</label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text w-100" name="username" id="reg_username" autocomplete="username" value="'; echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; echo'" />
                                    </p>';

                                endif;

                                echo'<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_email">'; esc_html_e( 'Email address', 'woocommerce' ); echo'&nbsp;</label>
                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text w-100" name="email" id="reg_email" autocomplete="email" value="'; echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; echo'" />
                                </p>';

                                if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) :

                                    echo'<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_password">'; esc_html_e( 'Password', 'woocommerce' ); echo'&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text w-100" name="password" id="reg_password" autocomplete="new-password" />
                                    </p>';

                                else :

                                    echo'<p>'; esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); echo'</p>';

                                endif;

                                do_action( 'woocommerce_register_form' );

                                echo'<p class="woocommerce-FormRow form-row">';
                                    wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' );
                                    echo'<button type="submit" class="woocommerce-Button button" name="register" value="'; esc_attr_e( 'Register', 'woocommerce' ); echo'">'; esc_html_e( 'Register', 'woocommerce' ); echo'</button>
                                </p>';

                                do_action( 'woocommerce_register_form_end' );

                            echo'</form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>';
}