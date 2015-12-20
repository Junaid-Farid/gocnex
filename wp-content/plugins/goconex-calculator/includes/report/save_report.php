<?php
function result_report_html() {
    ?>
    <!--- Option form report --->
    <script>
        jQuery(document).ready(function ($) {
            $("#profit_you_need").slider({
                tooltip_position: 'bottom',
                formatter: function (value) {
                    return  "<?php echo get_option('options-label-16-4'); ?> " + value + " <?php echo get_option('options-label-16-5'); ?>";
                }
            });
            $('#sendemail').submit(function (e) {
                $.loader({
                    content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
                });
                var data = {
                    action: 'estimate_email',
                    operation: 'email',
                    id: '<?php echo $_GET['id']; ?>',
                    email: $('#txtUserEmail').val(),
                    your_compnay_name: $('#your_compnay_name').val(),
                    profit_you_need: $('#profit_you_need').val(),
                };
            console.log(data);
                $.ajax({
                    url: scriptParams.ajaxurl,
                    type: 'POST',
                    data: data,
                    success: function (data, textStatus, jqXHR)
                    {
                        $('#txtUserEmail').val('');
                        $('#response').html(data);
                        $.loader('close');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $.loader('close');
                    }
                });
                e.preventDefault();
            });
        });
    </script>
    <div class="row">
        <div class="large-12 columns">
            <div class="entry-content">
                <div class="woocommerce">
                    <div class="row">
                        <div class="xxlarge-6 xlarge-8 large-12 large-centered columns">
                            <form id="sendemail" name="frmResultReport" method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-12 height-120px margin-top-40px no-left-padding">
                                    <div class="col-md-12">
                                        <p class="top-paragraphp text-center">Profit Question</p>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <?php $label = get_option('estimates-label-70'); ?> 
                                            <p class="form-paragraph padding-bottom-10"><?php echo $label; ?></p>
                                            <input name="profit_you_need" type="text" id="profit_you_need" placeholder="Quanity 2" value="50000" data-slider-min="<?php echo get_option('options-label-16-1'); ?>" data-slider-max="<?php echo get_option('options-label-16-2'); ?>" data-slider-step="<?php echo get_option('options-label-16-3'); ?>" data-slider-value="50000">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-80px padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-12 padding-top-15">
                                            <p class="form-paragraph">At what price can you buy GoConex switches to make this profit without increasing your price to the customer?</p>
                                        </div>
                                    </div>
                                    <hr class="margin-top-40px" />
                                </div>
                                <div class="col-md-12 height-120px margin-top-40px no-left-padding">
                                    <div class="col-md-12">
                                        <p class="top-paragraphp text-center">Get your Price + Profit Report</p>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="form-paragraph padding-bottom-30px"> Yes, send a PDF of this report to my email: </p>
                                            <input type="text" name="txtFName" id="txtFName" placeholder="Your first name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtLName" id="txtLName" placeholder="Your last name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="your_compnay_name" id="your_compnay_name" placeholder="Your company name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtUserEmail" id="txtUserEmail" placeholder="Your email address" />
                                        </div>
                                        <div class="col-md-5 col-md-offset-1 btn-report-top">
                                            <input type="submit" name="btnEmailSubmit" id="btnEmailSubmit" value="Get your PDF report"/>
                                        </div>
                                    </div>
                                    <div id="response"></div>
                                    <hr class="margin-top-80px" />
                                </div>
                            </form>
                            <form id="sendemail2" name="frmResultReport" method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-12 height-120px margin-top-40px no-left-padding">
                                    <div class="col-md-12">
                                        <p class="top-paragraphp text-center">Excite Your Home Builder</p>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="form-paragraph"> Set up an invitation message to one of your Home Builder clients:</p>
                                        </div>
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtRecipientEmail" id="txtRecipientEmail" placeholder="Recipient email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtRecipientFN" id="txtRecipientFN" placeholder="Recipient first name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtBldrCompnyName" id="txtBldrCompnyName" placeholder="Home builder company name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="txtYourFN" id="txtYourFN" placeholder="Your first name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtYourPhoneNm" id="txtYourPhoneNm" placeholder="Your phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12   padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-6 padding-top-15">
                                            <input type="text" name="txtYourCmpnyName" id="txtYourCmpnyName" placeholder="Your company name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px  padding-top-20px no-right-padding no-left-padding">                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="form-paragraph"> Send the message: </p>
                                        </div>
                                        <div class="col-md-10 padding-top-15 no-right-padding">
                                            <textarea name="txtMessage" id="txtMessage" placeholder="Hi [recipient first name],

                                                      I have a way for us to share $93,000 in new profit this year. 

                                                      We are looking at changing to new Adaptable Power Control switches – a way to offer Home Buyers switchesthat are flexible to live with and fast to install. 
                                                      - switches adapt to changes in their families
                                                      - portable switches let the Buyers have lighting controls on their furniture or in their cars
                                                      - green conservation from using less material and natural resources in construction

                                                      These features won’t cost you any more. Also, we can profit with Home Buyers purchasing Master Switches, Zone Switches and Portable Remote Switches at very profitable price points.

                                                      This GoConex switch product will improve the way we build homes. It will differentiate your brand. We shouldstart using it this month. Call me at [user’s phone number]. I’d like to talk about trying it in a house.

                                                      Thanks [recipient first name]!

                                                      [your first name]
                                                      [your company name]
                                                      [your phone number]
                                                      [your email address]" rows="23" cols="100"/></textarea>
                                        </div>
                                    </div>
                                </div>                          
                                <div class="col-sm-12 margin-top-40px padding-top-20px btn-contact-form">
                                    <div class="row>">
                                        <div class="col-md-8 col-md-offset-3 padding-top-15">
                                            <input type="text" name="textCaptcha" id="textCaptcha"  class="form-control" placeholder="Captcha test">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 margin-top-40px padding-top-20px btn-contact-form">
                                    <div class="row>">
                                        <div class="col-md-8 col-md-offset-3 padding-top-15">
                                            <input type="submit" name="btnSendThisEmail" id="btnSendThisEmail" value="Send this email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 padding-top-20px btn-contact-form padding-top-20">
                                    <div class="row>">
                                        <div class="col-md-8 col-md-offset-3">
                                            <input type="submit" name="btnReturnToMyAccount" id="btnReturnToMyAccount" value="Return to ‘My Account’" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}