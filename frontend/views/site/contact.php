

<div id="contact_page" class="inner-page">

    <section id="banner" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/banner/about.jpg">
        <div class="container">
            <div class="banner_caption">
                <h3 class="page_title">Contact us</h3>
                <h3 class="page_sub">Get Intouch</h3>
            </div>
        </div>
        <div class="breadcrumb_sec">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="current"><a href="#!">Contact us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contct_info_sec">
        <div class="container">
            <div class="main_head">
                <div class="sub_head">
                    Contact us
                </div>
                <div class="head">
                    Contact Address
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box address">
                        <div class="title">Address</div>
                        <div class="info_box">
                            <div class="sub">
                                Location
                            </div>
                            <ul>
                                <?= $contact_info->address ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box phone">
                        <div class="title">Contact us</div>
                        <div class="info_box">
                            <div class="sub">
                                Phone No
                            </div>
                            <ul>
                                <?= $contact_info->phone ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box mail">
                        <div class="title">Send Mail</div>
                        <div class="info_box">
                            <div class="sub">
                                E-mail address:
                            </div>
                            <ul>
                                <?= $contact_info->email ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box working">
                        <div class="title">Working Time</div>
                        <div class="info_box">
                            <div class="sub">
                                Working Time
                            </div>
                            <ul>
                                <?= $contact_info->working_time ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form_sec">
        <div class="sec_title">
            get in touch
        </div>
        <div class="row form_row">
            <div class="col-lg-12 form_bg">
                <div class="container">
                    <form id="contact-form" action="" method="post" class="contact-enquiry">
                        <div class="form_title">Fill in the Form</div>.
                        <div class="form_info">Thank you for your early interest in our interior design services, please feel free to reach us using any of the contact information listed below or simply fill the contact form below and we will get back to as soon as possible. </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" name="name" id="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" autocomplete="off" name="email" id="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="phone" class="form-control" autocomplete="off" name="phone" id="phone" placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" name="company" id="company" placeholder="Company" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" autocomplete="off" placeholder="Message" id="message" required="" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-map">
        <iframe src="<?= $contact_info->map_link ?>" width="100%" height="605" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

</div>