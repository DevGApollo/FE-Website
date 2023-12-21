<?php include("header.php"); ?>

<section class="contact-section">


    <!-- Event snippet for thankyou page conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-840463581/JotMCIzfoHsQ3enhkAM'
      });
    </script>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-xs-12">


                    <div class="contact-address1">
                        <div class="">
                            <div class="contact-box">
                                <div class="contact-box-title-main">
                                    <div class="contact-box-title">Department</div>
                                </div>
                                <div class="contact-box-content-2">

                                    <div class="clearfix"></div>
                                    <div class="text-left cstm-a width-full">
                                        <a href="javascript:;" class=" btn-cstm text-center click1">&nbsp; Careers </a>
                                        <a href="javascript:;" class=" dwnld-pdf click1 btn-cstm  text-center">&nbsp;
                                            Investor Relations
                                        </a>
                                        <a href="javascript:;" class=" btn-cstm text-center click1">&nbsp; Sales
                                            Inquiry </a>
                                        <a href="javascript:;" class=" dwnld-pdf click1 btn-cstm  text-center">&nbsp;
                                            Service & Spares
                                            Management </a>
                                        <a href="javascript:;" class=" dwnld-pdf click1 btn-cstm  text-center">&nbsp;
                                            Vendor Development
                                        </a>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="contact-address1">
                        <div class="contact-box">

                            <div class="contact-inquiry w3ls-login box box--big">


                                <h2 style="text-align: center;">Thankyou Catalogue Download</h2>
                                <a id="lnnk" href='PDF/<?php echo $_REQUEST['varname']; ?>'
                                   style="display:block; color: #0081b8;" target="_blank" download>
                                    <!-- <div class="message" style="display:block;margin:100px 0 13px;text-align:center"><img src="images/download_gif.gif"  class="center-block" style="width: auto;">Click Here For Your  Requested Catalogue Download</div> -->
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<div class="clearfix"></div>


<?php include("footer.php"); ?>
<script>
  // var hreff = $("#lnnk").attr('href');
  // setTimeout(
  //   function() {
  // window.location = hreff;
  //   }, 5000);
  jQuery(document).ready(function ($) {

    $('#lnnk').each(function () {
      var pdf = $(this);
      setTimeout(function () {
        window.location = pdf.attr('href');
      }, 2000);
    });
  });
</script>
