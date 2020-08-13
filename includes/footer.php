<footer id="footer" class="wrapper-footer">
    <div class="footer reduced">
        <div class="wrap-footer">
            
            <div class="widget">
                <div class="footer__item">
                    <img src="images/logo-cta.jpg" alt="logo-footer">
                    <p class="footer__copy">
                        © 2020, N&H Bus Cameroun. All rights reserved.<br>Powered by <a href="https://" target="_blank" rel="noopener noreferrer">N&H Bus</a>
                    </p>
                </div>
            </div>

            <div class="widget">
                <div class="footer__item">

                    <h3 class="footer__title">Useful links</h3>
                    <div class="widget-content">
                        <div class="widget-text">
                            <ul class="footer__menu">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">Terms & condition</a></li>
                                <li><a href="#">Affiliates</a></li>
                            </ul>
                        </div>

                        <div class="widget-text">
                            <ul class="footer__menu">
                                <li><a href="#">FAQ </a></li>
                                <li><a href="#">How it works</a></li>
                                <li><a href="#">Why choose us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget">
                <div class="footer__item">

                    <h3 class="footer__title">Contact</h3>
                    <p class="newstext">Contact us for any problem.</p>
                    <div role="form" class="" id="" lang="en" dir="ltr">
                        <form action="" method="post" class="footer-form" novalidate="novalidate">
                            <div class="cell v-bottom">
                                <input type="text" name="" value="" size="40" class="cus-input" aria-required="true" aria-invalid="false" placeholder="E-mail">
                            </div>
                            <div class="cell v-bottom">
                                <input type="submit" value="Subscribe" class="submit custom-btn primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>

<script type="text/javascript">  
function googleTranslateElementInit() {  
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element' 
    );  
}  
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>  

<script type="text/javascript">

    $(document).ready(function(){
        $('body').attr("id","page");
            var anchorName = document.location.hash.substring(1);
            if(anchorName ){
                $('html, body').animate({
                scrollTop:$("#"+anchorName).offset().top-85
                }, 500);
            }
            $('a[href^="#"]').click(function(){
                var the_id = $(this).attr("href");

                $('html, body').animate({
                scrollTop:$(the_id).offset().top-85
            }, 500);
            return false;
        });

    });


</script>