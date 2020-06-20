<footer class="content-footer">
    <div class="container container-custom">
        <div class="footer-main row row-flex">
            <div class="footer-description col-xs-12 col-md-4">
                <h5>The Genius Fix Repairs</h5>
                <p class="footer-description">The Genius Fix mobile workshops are a marvel in their own right, kitted
                    out with all the latest tools and equipment needed to repair your device to the highest possible
                    standard.</p>
            </div>
            <div class="footer-service col-xs-12 col-md-4">
                <h5>Our Service </h5>
                <div class="footer-link-block"><a href="#">Apple Phones Repair </a><a href="#">Samsung Phones
                        Repair </a><a href="#">Book a Repair </a><a href="#">Walk in Repair </a></div>
            </div>
            <div class="footer-newsletter col-xs-12 col-md-4">
                <h5>Our Newsletter </h5>
                <p>Subscribe to our newsletter to receive news & updates. We promise to not spam you, super promise!</p>
                <form class="footer-newsletter-form" onsubmit="return checkValidations()" action="{{url("/email/save")}}" method="post">
                    @csrf
                    <input class="required email" placeholder="Your Email" type="email" value="" name="email"
                           id="mce-email">
                    <button class="btn hvr-bounce-to-right" type="submit"><i class="icon ion-paper-airplane"></i>
                    </button>
                </form>
                <div style="margin-top: 5px!important;">
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="footer-sub-footer"><span>© 2020 Designed by Jsys <i class="fas fa-heart"></i></span></div>
    </div>
</footer>
</div>
</div>
</div>
<script src="{{ asset('js/plugins/vendor.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY6I7UJcrmSP9ltgqE2CqHvn_a0LlRiaI"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://kit.fontawesome.com/ffe1193991.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    function checkValidations() {
        if (document.getElementById('mce-email').value === '' || document.getElementById('mce-email').value === null) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Email cannot be empty!',
            });
            return false;
        }
        return true;
    }
</script>
