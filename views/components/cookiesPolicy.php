<link rel="stylesheet" href="../../assets/css/components/cookies-policy.css">

<?php
if(isset($_COOKIE['bannerCookies'])) {
    $acceptCookie = json_decode($_COOKIE['bannerCookies']);

    if($acceptCookie->isCookies == 'No') { ?>

        <div class="cookie-consent-banner d-block" id="cookiesBanner">
            <div class="cookie-consent-banner__inner">
                <div class="cookie-consent-banner__copy">
                    <div class="cookie-consent-banner__header">THIS WEBSITE USES COOKIES</div>
                    <div class="cookie-consent-banner__description">We use cookies to personalise content and ads,
                        to provide social media features and to analyse our traffic. We also share information about
                        your use of our site with our social media, advertising and analytics partners who may combine
                        it with other information that you’ve provided to them or that they’ve collected from your use
                        of their services. You consent to our cookies if you continue to use our website.
                    </div>
                </div>

                <div class="cookie-consent-banner__actions">
                    <button type="button" class="cookie-consent-banner__cta" id="cookiesOk" onclick="cookiesSet('accept')">
                        OK
                    </button>

                    <button type="button" class="cookie-consent-banner__cta cookie-consent-banner__cta--secondary"
                            id="cookiesDecline" onclick="cookiesSet('decline')">
                        Decline
                    </button>
                </div>
            </div>
        </div>

    <?php }
} else { ?>

    <div class="cookie-consent-banner" id="cookiesBanner">
        <div class="cookie-consent-banner__inner">
            <div class="cookie-consent-banner__copy">
                <div class="cookie-consent-banner__header">THIS WEBSITE USES COOKIES</div>
                <div class="cookie-consent-banner__description">We use cookies to personalise content and ads, to
                    provide social media features and to analyse our traffic. We also share information about your use
                    of our site with our social media, advertising and analytics partners who may combine it with other
                    information that you’ve provided to them or that they’ve collected from your use of their services.
                    You consent to our cookies if you continue to use our website.
                </div>
            </div>

            <div class="cookie-consent-banner__actions">
                <button type="button" class="cookie-consent-banner__cta" id="cookiesOk" onclick="cookiesSet('accept')">
                    OK
                </button>

                <button type="button" class="cookie-consent-banner__cta cookie-consent-banner__cta--secondary"
                        id="cookiesDecline" onclick="cookiesSet('decline')">
                    Decline
                </button>
            </div>
        </div>
    </div>

<?php
}
?>

<script src="../../assets/js/components/cookiesPolicy.js"></script>