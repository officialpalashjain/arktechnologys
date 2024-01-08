<?php
add_action('admin_menu', 'custom_site_options');
function custom_site_options()
{
    add_theme_page( 'Theme Settings','Theme Settings', 'add_users', 'custom_site_options','custom_site_optionscb');
}
function custom_site_optionscb()
{
    if(isset($_POST['hdnsbmt']))
    {
        extract($_POST);
        global $wpdb;
        update_option( "header_logo", $header_logo );
        update_option( "phone_number", $phone_number );
        update_option( "whatsapp_link", $whatsapp_link);
        update_option( "footer_copyright", $footer_copyright);

        update_option( "contact_Person", $contact_Person);
        update_option( "ac_no", $ac_no);
        update_option( "IFSC_code", $IFSC_code);
        update_option( "bank_name", $bank_name);
        update_option( "phone_pay", $phone_pay);
        update_option( "payment_mode_and_terms", $payment_mode_and_terms);
        update_option( "android_app", $android_app);
        update_option( "iphone_app", $iphone_app);
    }
    $header_logo = get_option("header_logo");
    $phone_number = get_option("phone_number");
    $whatsapp_link = get_option("whatsapp_link");
    $footer_copyright = get_option("footer_copyright");
    $contact_Person = get_option("contact_Person");
    $ac_no = get_option("ac_no");
    $IFSC_code = get_option("IFSC_code");
    $bank_name = get_option("bank_name");
    $phone_pay = get_option("phone_pay");
    $payment_mode_and_terms = get_option("payment_mode_and_terms");
    $android_app = get_option("android_app");
    $iphone_app = get_option("iphone_app");
    ?>
    <div class="wrap">
        <div id="icon-edit" class="icon32"><br/></div>
        <h2>Site Options</h2> 
    </div>
    <div class="custom_theme_options">
            <form action="" method="post" >
                
                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Header Logo:</div>
                    <div class="snglfld">
                        <input type="text" value="<?php echo $header_logo;?>" name="header_logo" />
                        <input type="button" onclick="custom_upload_image(this);" value="Upload" class="button button-primary" />
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Phone Number:</div>
                    <div class="snglfld">
                        <input name="phone_number" value="<?php echo $phone_number; ?>">
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Whatsapp Link:</div>
                    <div class="snglfld">
                        <input name="whatsapp_link" value="<?php echo $whatsapp_link; ?>">
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Footer Copyright:</div>
                    <div class="snglfld">
                        <textarea name="footer_copyright"><?php echo str_replace("\\", '', $footer_copyright); ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Contact Person:</div>
                    <div class="snglfld">
                        <textarea name="contact_Person"><?php echo $contact_Person; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">A/C No.:</div>
                    <div class="snglfld">
                        <textarea name="ac_no"><?php echo $ac_no; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">IFSC Code:</div>
                    <div class="snglfld">
                        <textarea name="IFSC_code"><?php echo $IFSC_code; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Bank Name:</div>
                    <div class="snglfld">
                        <textarea name="bank_name"><?php echo $bank_name; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Phone Pay:</div>
                    <div class="snglfld">
                        <textarea name="phone_pay"><?php echo $phone_pay; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Payment Mode and Terms:</div>
                    <div class="snglfld">
                        <textarea name="payment_mode_and_terms"><?php echo $payment_mode_and_terms; ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Android App:</div>
                    <div class="snglfld">
                        <textarea name="android_app"><?php echo str_replace("\\", '', $android_app); ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Iphone App:</div>
                    <div class="snglfld">
                        <textarea name="iphone_app"><?php echo str_replace("\\", '', $iphone_app); ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <input type="submit" name="submit" value="Save" class="button-primary">
                    <input type="hidden" name="hdnsbmt">
                </div>
                
            </form>
    </div>
<style>
.custom_theme_options{
	width: 100%;
    float: left;
    margin: 0;
    padding: 0;
}

.upldbtn
{
    float: left;
    width:  100%;
    padding: 10px 0;
}
.snglbckrw
{
    width: 100%;
    float: left;
    margin: 5px 0;
    padding: 0;
}
.snglbckrw .sngllbl
{
    width: 150px;
    float: left;
    margin: 0;
    padding: 0;
}

.snglbckrw .snglfld
{
    width: 500px;
    float: left;
    margin: 0;
    padding: 0;
}
.snglbckrw .snglfld input[type="text"], .snglbckrw .snglfld textarea
{
    width: 300px;
    float: left;
}
</style>
    <?php
}
?>