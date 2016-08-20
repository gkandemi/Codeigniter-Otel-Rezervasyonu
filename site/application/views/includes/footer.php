<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <h4>Hakkımızda</h4>
                <p><?php echo $contact->about_us; ?></p>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>Bizden Haberdar olun!</h4>
                <p><?php echo $contact->mission; ?></p>
                <form role="form">
                    <div class="form-group">
                        <input name="newsletter" type="text" id="newsletter" value="" class="form-control" placeholder="Please enter your E-mailaddress">
                    </div>
                    <button type="submit" class="btn btn-lg btn-black btn-block">Submit</button>
                </form>
            </div>

            <div class="col-md-3 col-sm-3">
                <h4>Adres</h4>
                <address>
                    <strong><?php echo $contact->title; ?></strong><br>
                    <?php echo $contact->address; ?>
                    <br>
                    <abbr title="Phone">P:</abbr> <a href="#"><?php echo $contact->phone; ?></a><br>
                    <abbr title="Email">E:</abbr> <a href="#"><?php echo $contact->email; ?></a><br>
                    <abbr title="Website">W:</abbr> <a href="#"><?php echo $contact->web; ?></a><br>
                </address>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-6"> &copy; <?php echo date("Y") . " " . $contact->title ?> All Rights Reserved </div>
                <div class="col-xs-6 text-right">
                    <ul>
                        <li><a href="contact-02.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

