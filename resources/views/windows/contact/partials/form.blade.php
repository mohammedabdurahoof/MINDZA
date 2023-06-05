<div class="contact-from mt-30">
    <div class="section-title">
        <h5>Contact Us</h5>
        <h2>Keep in touch</h2>
    </div>
    <!-- section title -->
    <div class="main-form pt-45">
        <form id="contact-form" action="contact.php" method="post" data-toggle="validator">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-form form-group">
                        <input name="name" type="text" placeholder="Your name"
                            data-error="Name is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- single form -->
                </div>
                <div class="col-md-6">
                    <div class="single-form form-group">
                        <input name="email" type="email" placeholder="Email"
                            data-error="Valid email is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- single form -->
                </div>
                <div class="col-md-6">
                    <div class="single-form form-group">
                        <input name="subject" type="text" placeholder="Subject"
                            data-error="Subject is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- single form -->
                </div>
                <div class="col-md-6">
                    <div class="single-form form-group">
                        <input name="phone" type="text" placeholder="Phone"
                            data-error="Phone is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- single form -->
                </div>
                <div class="col-md-12">
                    <div class="single-form form-group">
                        <textarea name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- single form -->
                </div>
                <p class="form-message"></p>
                <div class="col-md-12">
                    <div class="single-form">
                        <button type="submit" class="main-btn">Send</button>
                    </div>
                    <!-- single form -->
                </div>
            </div>
            <!-- row -->
        </form>
    </div>
    <!-- main form -->
</div>