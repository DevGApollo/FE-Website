
<div class="sticklist">
    <button class="open-close-arrow">
      <span class="open-arrow"><i class="fa fa-chevron-right"></i></span>
      <span class="close-arrow"><i class="fa fa-chevron-left"></i></span>
    </button>
    <ul>
      <li class="none-li inquiery-icon  imgnone">
        <a href="#" class="click1">
          <span class="icon1"> <i class="fa fa-envelope"></i></span> <span class="btn-text"> Send Inquiry</span>
        </a>
      </li>
      <li class="download-pdf none-li inquiery-icon  imgnone">
        <a href="download.php"  >
          <span class="icon"> <i class="fa fa-file-pdf-o"></i></span> <span class="btn-text">Catalogue</span>
        </a>
      </li>

    </ul>
  </div>
  <div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload">
    <div class="modal-dialog modal-lg">
      <input type="hidden" id="ispopupopen" value="1">
      <div class="modal-content">
        <div class="modal-body stick_popup">
          <h5 class="modal-title">Get Your Free Quote…!</h5>
          <div class="stick_close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
          <div class="row mt-40">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="logo-wrapper">
                <img src="images/footer-logo-orange.png">
                <button class="btn-modal-gra">
                  <a class="content-p" href="mailto:info@apollo.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@apollo.co.in' });">info@apollo.co.in</a> <br> <a class="content-p" href="tel:+917926444597" onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+917926444597' });">+91 79-26444597</a>
                </button>
              </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">


              <div class="widget footer-widgets tag-widget">
                <input id="inquiery-model" value="<?=$_COOKIE['inquierymodel'];?>" type="hidden" />
                <input id="isloadopenmodel" value="<?=$_COOKIE['isloadopenmodel'];?>" type="hidden" />

                <input name="junk_trap" class="junk_trap" type="hidden" />

                <form class="form-horizontal form1" action="quick_action.php" method="post" novalidate="novalidate">
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="name" id="name" type="text" placeholder="Name" class="form-control">

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                    <input name="cname" id="cname" type="text" placeholder="Company Name" class="form-control">
                    </div>
                  </div>

                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">

                    </div>
                  </div>
                  <div class="form-group has-feedback class-feedback">

                    <div class="col-md-12">

                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 mybottom">

                          <select id="country" name="country" class="form-control" style="color: #999;"></select>

                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                          <select name="code" id="state" class="form-control" style="padding-right: 0;color: #999;">
                          <option value="91">+91</option>
                          </select>

                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                                         <select name="department" class="selectstyle form-control" id="department" aria-required="true" >
                                            <option value="">Select Department</option>
                                            <option value="sales">Sales</option>
                                            <option value="customer service">Customer Service</option>
                                            <option value="purchase">Purchase</option>
                                            <option value="human resources">Human Resources</option>
                                            <option value="investor relation">Investor Relation</option>
                                        </select>

                    </div>
                  </div>

                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15" minlength="10" class="form-control number21">

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" id="message" placeholder="Requirement"></textarea>

                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-8 col position-relative">
                          <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">

                        </div>
                        <div class="col-md-4 col">
                          <img src="captcha.php" class="capside">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="col-md-12 col-sm-3 col-xs-12">
                      <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                    </div>
                  </div>
                </form>

              </div>

            </div>

          </div>

        </div>

        <div class="clearfix"></div>

      </div>

      <div class="clearfix"></div>

    </div>

    <div class="clearfix"></div>

  </div>


  
<!-- catelog model -->
<div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload1">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">

      <div class="modal-body ">
        <h5 class="modal-title">Catalogue Request Form…!</h5>
        <div class="stick_close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
        <div class="row mt-40">
          <div class="col-md-5 col-sm-12 col-xs-12 px-0">
          <div class="logo-wrapper">
                <img src="images/footer-logo-orange.png">
                <button class="btn-modal-gra">
                  <a class="content-p" href="mailto:info@apollo.co.in" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'info@apollo.co.in' });">info@apollo.co.in</a> <br> <a class="content-p" href="tel:+917926444597" onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+917926444597' });">+91 79-26444597</a>
                </button>
              </div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 px-0">
            <div class=" footer-widgets tag-widget formtop">
              <form class="form-horizontal form2" action="cat_action.php" method="post">
                <div class="form-group has-feedback">
                  <div class="col-md-12">
                    <input name="name" id="name2" type="text" placeholder="Name" class="form-control">

                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="col-md-12">
                  <input name="cname" id="name" type="text" placeholder="Company Name" class="form-control">

                  </div>
                </div>
                
                <div class="form-group has-feedback">
                  <div class="col-md-12">
                    <input name="email" id="email2" type="text" placeholder="E-Mail Address" class="form-control">

                  </div>
                </div>
                <div class="form-group has-feedback class-feedback">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                          <select id="country1" name="country" class="form-control" ></select>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                          <select name="code" id="state1" class="form-control" style="padding-right: 0;color: #999;">
                          <option value="91">+91</option>
                          </select>
                        </div>

                      </div>

                    </div>

                  </div>
                <div class="form-group has-feedback">
                  <div class="col-md-12">
                    <input name="number" id="number2" type="tel" placeholder="Phone" maxlength="10" minlength="10" class="form-control number21">

                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8 position-relative">
                        <input name="captcha" id="captcha2" placeholder="Captcha Code" class="form-control" type="text">

                      </div>
                      <div class="col-md-4">
                        <img src="captcha.php" class="capside">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                      <input type="hidden" id="pt" name="path" value="">
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="col-md-12 col-sm-3 col-xs-12">
                    <input name="submit2" id="submit2" class="submit submitbutton" type="submit" value="Download Now">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end catelog model -->
  <!-- End My Model -->

  <div class="footer-box" style="display: none;">
    <div class="book-app" style="background:#f6853b;" id="req-apnmt2">
      <a class="nav_up click1" href="javascript:;" style="color:#FFF; font-size:12px;font-weight:600;"><i class="fa fa-envelope" style="margin-right: 5px;"></i> Enquire Now</a>
    </div>
    <div class="book-app" style="background: #2858a4;">
    <a class="nav_up" href="download.php"  style="color:#FFF; font-size:12px;font-weight:600;"><i class="fa fa-file-pdf-o" style="margin-right: 5px;"></i> Catalogue</a>
    </div>
  </div>


  <!-- End My Model -->