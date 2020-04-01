<?php include_once "includes/head.php" ?>

<style>
    .selector {
        width: 100%;
        padding: 4px;
        border: none;
        border-radius: 3px;
        border: 0.5 solid grey;
    }

    .selector:focus {
        width: 100%;
        padding: 4px;
        border: none;
        border-radius: 3px;
        border: 0.5 solid grey;
    }
</style>

<div class="container margin_120_95">
    <div class="main_title">
        <h2>Know your <strong>Health</strong> with Doktor App!</h2>
        <p>start a Session with a Professional Doctor, and know more about your health and how to stay healthy.</p>
    </div>
    <div class="row add_bottom_30">
        <div class="col-lg-4">
            <div class="box_feat" id="icon_3">
                <span></span>
                <h3>General Doctor</h3>
                <p>Need to cosult a specialist in about your medical situation in an Open inclusive conversation? start a session with a general Doctor</p>
                <h3>20, 000/=</h3>

                <div align="center">
                    <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/">
                        <input type="submit" class="btn_1 medium" name="submit" value="Proceed" />
                        <input type="hidden" name="bid" value="219" />
                        <input type="hidden" name="currency" value="UGX" />
                        <input type="hidden" name="amount" value="20000" />
                        <input type="hidden" name="narrative" value="General Consultation " />
                        <input type="hidden" name="reference" value="generalConsultation" />
                        <input type="hidden" name="provider_reference_text" value="Consultation Payment" />
                        <input type="hidden" name="account" value="100712303477" />
                        <input type="hidden" name="return" value="http://localhost/appointment/main/session.php?status=general&unique_transaction_id=0&transaction_reference=0" />
                        <input type="hidden" name="prefilled_payer_email_address" value="" />
                        <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
                        <input type="hidden" name="prefilled_payer_names" value="" />
                        <input type="hidden" name="abort_payment_url" value="" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box_feat" id="icon_3">
                <span></span>
                <h3>Specialized Doctor</h3>
                <p>Select a doctor who has specialized in the field of your interest</p>

                <select name="specialty" id="" class="selector">
                    <option value="none" selected>select specialty</option>
                </select>

                <h3>50, 000/=</h3>

                <div align="center">
                    <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/">
                        <input type="submit" name="submit" class="btn_1 medium" value="Proceed" />
                        <input type="hidden" name="bid" value="218" />
                        <input type="hidden" name="currency" value="UGX" />
                        <input type="hidden" name="amount" value="50000" />
                        <input type="hidden" name="narrative" value="Payment for a Special consultation session" />
                        <input type="hidden" name="reference" value="SpecialConsultation" />
                        <input type="hidden" name="provider_reference_text" value="Confirm payment for Consultation " />
                        <input type="hidden" name="account" value="100712303477" />
                        <input type="hidden" name="return" value="http://localhost/appointment/main/session.php?status=active&unique_transaction_id=0&transaction_reference=0" />
                        <input type="hidden" name="prefilled_payer_email_address" value="" />
                        <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
                        <input type="hidden" name="prefilled_payer_names" value="" />
                        <input type="hidden" name="abort_payment_url" value="" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box_feat" id="icon_3">
                <h3>Book Appointment <small>instead?</small></h3>
                <p>Book an Appointemnt instead, and get to reserve a date to meet your doctor</p>
                <h3>20,000/=</h3>

                <div align="center">
                    <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/">
                        <input type="submit" name="submit" class="btn_1 medium" value="Proceed" />
                        <input type="hidden" name="bid" value="217" />
                        <input type="hidden" name="currency" value="UGX" />
                        <input type="hidden" name="amount" value="20000" />
                        <input type="hidden" name="narrative" value="appointment" />
                        <input type="hidden" name="reference" value="appointmentRef" />
                        <input type="hidden" name="provider_reference_text" value="Appointment With Doctor set" />
                        <input type="hidden" name="account" value="100712303477" />
                        <input type="hidden" name="return" value="https://hsvug.com/appoint/main/?unique_transaction_id=0&transaction_reference=0" />
                        <input type="hidden" name="prefilled_payer_email_address" value="" />
                        <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
                        <input type="hidden" name="prefilled_payer_names" value="" />
                        <input type="hidden" name="abort_payment_url" value="" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    <!-- <p class="text-center"><a href="list.html" class="btn_1 medium">Book Appointment insteadr</a></p> -->

</div>