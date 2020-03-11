<?php
@session_start();
if (!empty($_GET['affId'])) {
    $_SESSION['AFFID'] = $_GET['affId'];
}
if (!empty($_GET['c1'])) {
    $_SESSION['C1'] = $_GET['c1'];
}
$query_string = $_SERVER['QUERY_STRING'];

// URL
$url = 'https://truthaboutfungus.com/';
// Dates
$expDate = new DateTime('2020-03-18T23:59:59-05:00', new DateTimeZone('America/New_York'));
$currentDate = new DateTime();
if ($expDate->getTimestamp() <= $currentDate->getTimestamp()) {
    // header("Location: ".$url."offer-expired");
}
?>

<script>
    // to make sure exp date is correct
    console.log('<?= $url ?>offer-expired');
    console.log("Exp Date: ", new Date(<?= $expDate->getTimestamp() * 1000 ?>));
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="robots" content="noimageindex">
    <link rel="shortcut icon" type="image/png" href="../imgs/favicon.png" />
    <title>Clear Nails Plus</title>
    <style id="loadfont">
        >>>include('./header_styles.html')
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K47X7SX');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K47X7SX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-logo">
            <img src="img/CNP_logo-min.png" alt="">
        </div>
        <div class="header-menu">
            <a href="">HOME</a>
            <a onclick="scrollto()">INGREDIENTS</a>
            <a onclick="scrollto()">TESTIMONIALS</a>
            <a onclick="FAQscroll()">FAQ</a>
            <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">ORDER</a>
        </div>
    </header>

    <!-- banner -->
    <div class="banner-wrapper">
        <div class="banner-top">
            <h1 class="bold text-shadow">Don’t Rely On Irish&nbspLuck Against Nail&nbspFungus</h1>
        </div>
        <div class="banner-middle">
            <div class="banner-middle__wrapper">
                <div class="banner-middle__left">
                    <h4 class="text-shadow">Eradicate Your Fungal Infections</h4>
                    <h3 class="text-shadow">With Our Exclusive St Patrick</h3>
                    <h2 class="text-shadow">Over 50% Off Sale!</h2>
                    <div class="banner-block">
                        <p>Sale Valid Until March 18th, 2020<br>11.59pm (Pacific)</p>
                    </div>
                </div>
                <div class="banner-middle__right">
                    <img src="img/VL_bottle1.png" alt="">
                </div>
                <img src="img/sparkles.png" class="head-circle" alt="">
            </div>
        </div>
        <div class="banner-bot" style="text-transform:uppercase">
            Scroll Down and Grab Your Leap Day Fungus Fighting Package…<br>
            Before Remaining Stocks Run Out
        </div>
    </div>
    <!-- end BANNER -->

    <div class="timer-line"></div>
    <!-- TIMER -->
    <div class="timer">

        <div class="timer-row">

            <div class="timer-days">
                <div class="timer-digits">
                    <!-- <span></span> -->
                    <span>0</span>
                </div>
                <p>DAYS</p>
            </div>
            <div class="timer-hours">
                <div class="timer-digits">
                    <!-- <span></span> -->
                    <span>0</span>
                </div>
                <p>HOURS</p>
            </div>
        </div>

        <!-- <br class="mobile-650px" /> -->

        <div class="timer-row">
            <div class="timer-minutes">
                <div class="timer-digits">
                    <!-- <span></span> -->
                    <span>0</span>
                </div>
                <p>MINUTES</p>
            </div>
            <div class="timer-seconds">
                <div class="timer-digits">
                    <!-- <span></span> -->
                    <span>0</span>
                </div>
                <p>SECONDS</p>
            </div>
        </div>
    </div>
    <!-- end TIMER -->



    <!-- DISCOUNT -->
    <div class="discount">
        <div class="triangle triangle-white"></div>
        <div class="discount-text">
        Celebrate however you want to this Paddy’s day, while keeping yourself protected against the REAL cause of your Nail Fungus – at a <strong><u>massive discount.</u></strong><br><br>

            Remember, <strong>Clear Nails Plus</strong> works by turbo-charging your immune system to fight your fungal
            infections from the inside out…<br><br>

            Meaning it doesn’t just eradicate every trace of fungus from your yellowed, cracked and unsightly nails and skin…<br><br>

            By continuing to take it – <strong><u>you’ll keep yourself protected from future re-infection.</u></strong><br><br>

            Until the <strong>18th of March</strong>, I’m offering my breakthrough <strong>Clear Nails Plus</strong> at a <strong>huge</strong> discount…<br><br>

            <u>Exclusively to previous customers like you.</u><br><br>

            Stock up, and see <strong>Clear Nails Plus</strong> flush every trace of fungal infection from your body…<br><br>

            Watch your nails grow clearer and pinker every day…<br><br>

            And regain that confidence that you once had…<br><br>

            Before you started feeling like you had to keep yourself covered up so no-one would notice.<br><br>

            Skeptical?<br><br>

            I’ll take care of that too – how does zero risk to you or your money sound?<br><br>

            Stock up on as much <strong>Clear Nails Plus</strong> as you want…<br><br>

            With up to <strong>51.4% discount off</strong> retail when you pick the 6-bottle package (with free shipping!)…<br><br>

            And if at any point in the next 6 months you’re not completely over-the-moon with the results – you get every penny back, no questions asked… <strong>without even having to send the bottles back!</strong><br><br>

            All sound too good to be true?<br><br>

            OK – Here’s the catch:<br><br>

            I’m only able to offer this massive discount <u>while stocks last</u>.<br><br>

            Like I said, my warehouse guy messed up the order, and we have WAY more <strong>Clear Nails Plus</strong> than we can store…<br><br>

            But because <strong>Clear Nails Plus</strong> is so effective at eliminating nail fungus from the root, it’s incredibly
            popular…<br><br>

            So, I <strong>always</strong> end up selling out.<br><br>

            Add in the fact that this time you can get it for less than half the retail price…<br><br>

            You can imagine these extra stocks won’t last very long…<br><br>

            <h4>THE BAD NEWS IS:</h4>
            <h5><u>I’m only able to offer this incredible discount until the batch in my warehouse is gone.</u></h5><br>

            So even though this sale is valid until Midnight Pacific Time on <strong>March 18th</strong>…<br><br>

            There’s a good chance you might click on the link below before…<br><br>

            And be met with an “EXPIRED” message!<br><br>

            If that happens…<br><br>

            <strong>Then it’s too late, and I’ve already run out.</strong><br><br>

            So don’t leave it too long…<br><br>

            Invest in clearing out your fungal infection once and for all…<br><br>

            Invest in restoring your confidence, your self-esteem and feeling free from the stubborn torment of nail fungus…<br><br>

            Invest in <strong>Clear Nails Plus</strong> today…<br><br>

            And you’ll thank yourself for it one day real soon!<br><br><br>



            <div class="destroy-button-wrapper button-pc">
                <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">
                    <img src="img/buy-now-button.png" alt="">
                </a>
            </div>
            <div class="destroy-button-wrapper button-mob">
                <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">
                    <p>Click the yellow <strong>"Yes! Buy Now"</strong> button below to get started and choose your special re-order package at up to 51.4% off retail!</p>
                    <img src="img/buy-now-button-mob.png" alt="">
                </a>
            </div>

        </div>

    </div>
    <!-- end DISCOUNT -->


    <!-- DESTROY -->
    <div class="destroy">
        <div class="destroy-head">
            <span class="blue-color extra-bold">Clear Nails Plus</span> - Destroy Nail Fungus From The Inside-Out
        </div>
        <p class="destroy-subhead">This Potent Probiotic Formula Provides The Perfect Mix of Anti-Fungal "Good" Bacteria That
            Helps You:
        </p>

        <div class="destroy-list">
            <p><img src="img/Icon1.png" alt=""> Supercharge the immune system to shield from future fungal attacks </p>
            <p><img src="img/Icon2.png" alt=""> Effortlessly wipe out nail and skin fungal infections fast </p>
            <p><img src="img/Icon3.png" alt=""> Reclaim healthy, pink nails and silky-smooth skin</p>
            <p><img src="img/Icon4.png" alt=""> Reverse and repair your damaged skin and nails</p>
        </div>

        <div class="cnphealth-button-wrapper">
            <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">
                <div class="cnphealth-button">YES! BUY NOW</div>
            </a>
        </div>
    </div>

    <!-- end DESTROY -->


    <!-- CNP DESCRIPTION -->
    <div class="cnpdescription-wrapper">
        <div class="cnpdescription">
            <div class="cnpdescription-top">
                <div class="cnpdescription-top__img"><img src="" alt="cnp"></div>
                <div class="cnpdescription-top__text">
                    <h2 class="cnpdescription-top__text--header blue-color">Why is Clear Nails Plus? </h3>
                        <p>
                            <h3>A Quick and 100% Natural Way To Defeat Your Fungal Infection For Good</h3> <br>
                            <b>Clear Nails Plus</b> is the only natural health supplement to combine the power of potent probiotics
                            with the incredible healing properties of Turmeric, packed inside one outstanding solution to
                            neutralize fungal infections and supercharge your overall health and wellbeing.
                        </p>
                </div>
            </div>

            <div class="cnpdescription-bottom">
                <h2 class="cnpdescription-bottom__text--header blue-color">Here's How It Works:</h3>
                    <p>
                        As you know, fungus is a more advanced form of bacteria. That means it’s possible for the body to destroy both internal and external
                        signs of fungus, but only if the immune system is operating at an extremely high level of efficiency.
                        <br><br>
                        Clear Nails Plus works by supporting a strong and healthy immune system, so that your body can destroy the fungal bacteria on the inside
                        and the out. With 7 super-probiotics, along with premium-grade Turmeric, this one-of-a-kind solution works to clear up fungus fast!
                    </p>
            </div>
        </div>
    </div>

    <!-- end CNP DESCRIPTION -->

    <!-- CNP HEALTH -->
    <div class="cnphealth">
        <h2 class="cnphealth-header blue-color">Who Is <span class="extra-bold">Clear Nails Plus</span> So incredibly Important For Our Health?</h2>
        <div class="cnphealth-top">
            <span class="cnphealth-top__text">
                As the Center for Disease Control has warned numerous
                times in the past, dangerous and potentially life-threatening
                fungal spores infest the air we breathe. Along with the
                Standard Western Diet, and the infected areas we touch
                on a regular basis, our bodies are under constant threat…
                <br><br>
                And It Needs All The Help It Can Get!
                <br><br>
                Once you increase your intake of these powerful probiotics,
                your body will be empowered by Mother Nature herself to
                fight back against relentless threats of future fungal infections.
            </span>
            <div class="cnphealth-top__img">
                <img src="" alt="">
            </div>
        </div>
        <div class="cnphealth-button-wrapper">
            <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">
                <div class="cnphealth-button">YES! BUY NOW</div>
            </a>
        </div>

        <h2 class="cnphealth-header blue-color"><span class="extra-bold">Clear Nails Plus </span>Succeeds When All Else Fails</h2>
        <div>
            The sad truth is that most of today’s anti-fungal “solutions” are simply not effective against advanced forms of fungi. The fact is, most products don’t contain the proper ingredients in the correct dosage. Many “topicals” aren’t nearly as potent as they need to be. And nearly all supplements today, whether for fungus or for tinnitus, don’t contain ingredients that come from proven sources!
            <br><br>
            Due to extensive research and a firm understanding of how fungus infects and spreads through your body, Clear Nails Plus targets the ROOT of the problem while giving you a number of powerful health benefits:
            <br><br>
        </div>
        <div class="cnphealth-list">
            <p><img src="img/check-mark_min.png" alt=""> Eradicate fungal infections fast and protect against future threats </p>
            <p><img src="img/check-mark_min.png" alt="">Revitalize your body with incomparable energy and vitality </p>
            <p><img src="img/check-mark_min.png" alt="">Protect your internal organs from a host of conditions </p>
        </div>
    </div>
    <!-- end CNP HEALTH -->

    <!-- INSIDE -->
    <div class="inside-wrapper" id="ingr">
        <div class="inside">
            <h2 class="inside-header blue-color">Here's Exactly What's Inside <span class="extra-bold">Clear Nails Plus</span></h2>
            <div class="inside-block">
                <div class="inside-block__text">
                    <h3>Bacillus Subtillis: </h3>
                    Folks around the world have used this fungus fighter for generations to protect
                    against sickness and support the immune system. For example, in a 2015 study
                    published in <b><i>The Journal of Immunity and Aging</i></b>, when one hundred people
                    between the ages of 60-74 took the probiotic Bacillus Subtilis daily, they showed
                    a “dramatically decreased frequency in infections” – leading researchers to
                    conclude supplementation with Bacillus Subtilis is a “safe effective way to
                    stimulate immune responses in elderly subjects.”
                </div>
                <div class="inside-block__img one">
                    <img src="" alt="">
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__img two">
                    <img src="" alt="">
                </div>
                <div class="inside-block__text">
                    <h3>Turmeric Curcumim: </h3>
                    Turmeric is what gives curry its yellow color, and it’s also routinely added to
                    mustard for the same reason. Yet while turmeric is great as a flavoring, where it really shines is as
                    one of the most powerful anti-fungal ingredients known to man. In fact, one study from
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__text">
                    <h3>Lactobacillus Plantarum: </h3>
                    This potent probiotic has been shown in studies to produce it’s own natural antibiotics that target
                    “bad bacteria,” while leaving healthy gut bacteria intact.In a recent double-blind and placebo controlled
                    study of people with irritable bowel syndrome, 95% of people who took Lactobacillus Plantarum saw a
                    reduction in their IBS. But even more importantly, Lactobacillus Plantarum is proven to fight fungal
                    and bacterial infections, strengthen the immune system, and accelerate healing of the skin!
                </div>
                <div class="inside-block__img three">
                    <img src="" alt="">
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__img four">
                    <img src="" alt="">
                </div>
                <div class="inside-block__text">
                    <h3>Lactobacillus Rhamnosus:</h3>
                    There are over 400 studies showing that this probiotic improves our immune systems. It has also been
                    shown to prevent eczema and stop dermatitis. And it’s been proven to prevent bacteria and fungus
                    from accumulating in the body, while dramatically reducing inflammation.
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__text">
                    <h3>Bifidobacterium Longum: </h3>
                    Bifidobacterium Longum is yet another powerful probiotic that has been shown to increase immune healthy and fight
                    fungal infections. It’s also been found to produce its own natural antibiotics that destroy bad bacteria inside
                    of you, and to prevent infections.
                </div>
                <div class="inside-block__img five">
                    <img src="" alt="">
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__img six">
                    <img src="" alt="">
                </div>
                <div class="inside-block__text">
                    <h3>Lactobacillus Casei: </h3>
                    Lactobacillus Casei is often referred to as a “superstar” probiotic. It’s been shown to inhibit viral and
                    fungal infections, stimulate the immune system in the elderly, kill unhealthy bacteria inside the human body,
                    and even protect against asthma.
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__text">
                    <h3>Bifidobacterium Breve: </h3>
                    By now you can probably guess what Bifidobacterium Breve is good at, as it’s been shown to “suppress the fungus
                    Candida” and to “stimulate the immune system.” It also has been shown to reduce irritable bowel syndrome and to
                    increase digestion!
                </div>
                <div class="inside-block__img seven">
                    <img src="" alt="">
                </div>
            </div>

            <div class="inside-block">
                <div class="inside-block__img eight">
                    <img src="" alt="">
                </div>
                <div class="inside-block__text">
                    <h3>Lactobacillus Acidophilus</h3>
                    Lactobacillus Acidophilus was discovered by Noble Prize winning scientist Llya Metchnikoff. And has been
                    shown to improve blood pressure and cholesterol, fight viral, bacterial, and fungal infections, repair leaky gut,
                    and stop respiratory infections.
                </div>
            </div>

        </div>
    </div>
    <!-- end INSIDE -->

    <!-- RISK FREE -->
    <div class="riskfree">
        <h2 class="riskfree-header blue-color">Try <span class="extra-bold">Clear Nails Plus</span> Risk Free!</h2>
        <div class="riskfree-guarantee__wrapper">
            <div class="riskfree-guarantee">
                <div class="riskfree-guarantee__text">
                    Clear Nails Plus comes with a 180 day, 100% Money Back Guarantee. That means
                    if you change your mind about this decision at any point in the next 180 days – all
                    you need to do is contact us at 855 701-2218 or support@truthaboutfungus.com,
                    and we will refund your purchase. No questions asked!
                </div>
                <div class="riskfree-guarantee__img">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end RISK FREE -->


    <div class="cnphealth-button-wrapper">
        <a href="/DiscountOfferNS/Step1.php?<?php echo $query_string; ?>">
            <div class="cnphealth-button">YES! BUY NOW</div>
        </a>
    </div>

    <!-- QUESTIONS -->
    <div class="questions" id="FAQscroll">
        <h2 class="questions-header blue-color">Frequently Asked Questions:</h2>
        <br>
        <br>
        <p>Here are the most common questions we receive about Clear Nails Plus, along with the answers to help you out!</p>
        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                1. How does Clear Nails Plus Work Again?
            </div>
            <div class="questions-question__text">
                So as I mentioned, my major breakthrough was realizing that fungus is simply a more advanced form of bacteria.
                <br><br>
                This means that it’s entirely possible for your body to destroy both your internal and external fungal
                infections…
                <br><br>
                But in order for that to happen…
                <br><br>
                Your immune system needs to be operating at an extremely high level of efficiency.
                <br><br>
                Sounds easy, but it’s not.
                <br><br>
                The truth is that as we get older…
                <br><br>
                Our immune systems become weaker and weaker.
                <br><br>
                As a result the fungal spores that our attacking our bodies through the air…
                <br><br>
                As well as through the foods we eat…
                <br><br>
                And all of the infected surfaces we touch…
                <br><br>
                Begin to run rampant.
                <br><br>
                They’ll poison our bloodstream and spread to our organs and even our brains.
                <br><br>
                Plus they’ll also appear on our body’s surface, creating those yellow, crumbly fungus infested nails…
                <br><br>
                As well as rashes on our skin and our scalp.
                <br><br>
                Clear Nails Plus works by supporting a strong, healthy immune system…
                <br><br>
                So that your body can naturally destroy the fungal bacteria that’s both inside and outside.
                <br><br>
                Specifically it uses 7 super-probiotics, along with turmeric, that have all been proven to support a healthy immune system…
                <br><br>
                And to have antifungal, antiviral, and anti-infection qualities.
                <br><br>
                This makes Clear Nails Plus the only fungus-destroying product of its kind…
                <br><br>
                A solution that’s proven to work even when everything else has failed.
            </div>
        </div>

        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                2. Can I take Clear Nails Plus even if I have allergies or also take other supplements?
            </div>
            <div class="questions-question__text">
                Yes.
                <br><br>
                In fact, because the ingredients have been shown to support the immune system…
                <br><br>
                Clear Nails Plus is actually a powerful anti-allergy solution as well.
                <br><br>
                It may help reduce allergies, while also protecting from the cold, the flu, and other viruses and
                infections…
                <br><br>
                And because the ingredients inside Clear Nails Plus are specifically targeted towards improving the
                good bacteria in your gut…
                <br><br>
                It’s 100% safe to take with other supplements, as long as you follow the directions.

            </div>
        </div>
        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                3. Why haven’t I heard of this powerful probiotic solution before?
            </div>
            <div class="questions-question__text">
                So far more than 18,000 Americans have used Clear Nails Plus with powerful results.
                <br><br>
                I’ve already had a lot of interest from major newspapers and media outlets about Clear Nails Plus…
                <br><br>
                Especially since more than 18,000 Americans have used it to help both their internal and external fungus.
                <br><br>
                So far though I’ve chosen to try and keep this breakthrough “underground”…
                <br><br>
                Because the last thing I want is to get even higher up on big pharma’s hit list.
                <br><br>
                Antifungal products are a $13 billion a year industry…
                <br><br>
                And the pharma lawyers will stop at nothing to silence me.
                <br><br>
                I’m already dealing with potential lawsuits every single day…
                <br><br>
                And the last thing I want is to raise an even higher profile.


            </div>
        </div>
        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                4. Who is Clear Nails Plus For?
            </div>
            <div class="questions-question__text">
                Clear Nails Plus is for ANYONE who suffers from internal or external fungus.
                <br><br>
                It’s also a great choice for diabetics…
                <br><br>
                Because the ingredients inside have been shown to help support healthy insulin production…
                <br><br>
                And even fight diabetes.
                <br><br>
                Additionally there are zero side effects, and you can take it with other supplements.

            </div>
        </div>

        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                5. What happens once I click the “Buy Now” button on this page?
            </div>
            <div class="questions-question__text">
                Once you choose your package below, you’ll go to my 100% secure checkout page.
                <br><br>
                Then just enter your payment information and place your order.
                <br><br>
                After that you’ll receive Clear Nails Plus in the next 5 business days…
                <br><br>
                Which means you’re less than a week away from making your fungus a distant memory.
            </div>
        </div>

        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                6. This sounds incredible! But I’m afraid it won’t work for me. Can you remind me about your guarantee?
            </div>
            <div class="questions-question__text">
                Absolutely.
                <br><br>
                Clear Nails Plus comes with a 180 Day, 100% Money Back Guarantee.
                <br><br>
                That means you order Clear Nails Plus today…
                <br><br>
                Then have a full 6 months to decide if it’s right for you.
                <br><br>
                If you’re like the 18,000+ people who have used Clear Nails Plus already…
                <br><br>
                Then you will be THRILLED with the results.
                <br><br>
                But if you’re not for any reason…
                <br><br>
                Simply call or email my customer service team…
                <br><br>
                And we’ll refund your investment with zero questions asked.
                <br><br>
                The best part?
                <br><br>
                You don’t even need to go through the hassle of sending the bottles back.
                <br><br>
                This all means you truly have nothing to lose today when you get started.
            </div>
        </div>

        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                7. How long will Clear Nails Plus be available?
            </div>
            <div class="questions-question__text">
                That’s hard to say.
                <br><br>
                My hope is that Clear Nails Plus will make fungal infections a distant memory…
                <br><br>
                But because Big Pharma is FURIOUS about this breakthrough…
                <br><br>
                And is spending millions of dollars on legal fees to try and silence me…
                <br><br>
                It’s uncertain if I’ll be able to fight them off forever.
                <br><br>
                That’s why it is important you get Clear Nails Plus today…
                <br><br>
                Especially since it comes with a 180 Day, 100% Money Back Guarantee…
                <br><br>
                Which means there’s zero risk to you.

            </div>
        </div>

        <div class="questions-question">
            <div class="questions-question__header">
                <img src="img/arrow-right_min.png" alt="">
                8. Alright I really want Clear Nails Plus! What do I do now?
            </div>
            <div class="questions-question__text">
                This part is simple!
                <br><br>
                Just click one of the buttons below and choose your package.
                <br><br>
                Then complete your order…
                <br><br>
                And Clear Nails Plus will be in your hands in just five business days from now.
                <br><br>
                Plus there’s no risk because of my iron-clad 180-day guarantee!
                <br><br>
                This presentation is now ending…
                <br><br>
                And I want to say thank you for sticking with me all the way until the end…
                <br><br>
                Go ahead and choose your package now…
                <br><br>
                Take Clear Nails Plus as directed for at least 30 days…
                <br><br>
                And I cannot wait to hear about your success story!

            </div>
        </div>
    </div>
    <!-- end QUESTIONS -->

    <!-- FOOTER -->

    <div class="linkBlock">
        <a href="/privacypolicy/" target="_blank">Privacy</a> /
        <a href="/disclaimer/" target="_blank" style="display:<?= $styleD; ?>;" class="disclaimer">Disclaimer</a> <span class="disclaimer" style="display:<?= $styleD; ?>;">/</span>
        <a href="/terms/" target="_blank">Terms</a> /
        <a href="/studies/" target="_blank">Studies</a> /
        <a href="/contact/" target="_blank">Contact Us</a> /
        <a href="/spampolicy/" target="_blank">Anti Spam-policy</a>
        <!-- <a href="/vsl/shipping/" target="_blank">Shipping</a>  -->
    </div>

    <div style="text-align:center;color: #666;">Copyright © Clear Nails Plus 2020. All Rights Reserved</div>


    <div class="footer">All statements and results presented on this website are for informational purposes only. They are not specific medical advice
        for any individual. Neither the website, nor product should substitute medical advice given by a certified health professional. If you have a health
        problem, or you have sensible allergies, are pregnant or diagnosed with chronic conditions, it is strongly recommended that you consult your doctor
        immediately and before taking any pills or supplements.<br><br>
        The statements presented here have not been evaluated by the Food and Drug Administration. The content of this website and the product should not
        substitute medical advice from a health professional. If you have a health problem, speak to your doctor or a health professional immediately
        about your condition. Individual results may vary depending on the case. Read more <a href="/studies/" target="_blank">here</a>.
    </div>
    <!-- end FOOTER -->
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
        function FAQscroll() {
            var top1 = $("#FAQscroll").offset().top;
            $("body,html").animate({
                scrollTop: top1
            }, 3000);
        }

        function scrollto() {
            var top1 = $("#ingr").offset().top;
            $("body,html").animate({
                scrollTop: top1
            }, 3000);
        }

        var remain_bv = (new Date("2020-03-18T23:59:59-05:00") - new Date()) / 1000;
        // console.log("Exp Date: " + new Date("2019-07-05T23:59:59-04:00"))
        // $('.timesTest').html(new Date("2019-06-09T23:59:59-04:00"));
        function parseTime_bv(timestamp) {
            if (timestamp < 0) timestamp = 0;

            var days = Math.floor((timestamp / 60 / 60) / 24);
            var hours = Math.floor(timestamp / 60 / 60 - days * 24);
            var mins = Math.floor((timestamp / 60 - days * 24 * 60 - hours * 60));
            var secs = Math.floor((timestamp - days * 24 * 60 * 60 - hours * 60 * 60 - mins * 60));

            // console.log(days, hours, mins, secs);
            // console.log(new Date("2019-05-20T03:59:59Z"))

            // if(String(days).length > 1) {
            $('.timer-days span:first-child').text(Math.floor(days));
            // $('.timer-days span:last-child').text(days%10);
            // } else {
            //     $('.timer-days span:first-child').text(0);
            //     $('.timer-days span:last-child').text(days);
            // }
            // if(String(hours).length > 1) {
            $('.timer-hours span:first-child').text(Math.floor(hours));
            // $('.timer-hours span:last-child').text(hours%10);

            // } else {
            //     $('.timer-hours span:first-child').text(0);
            //     $('.timer-hours span:last-child').text(hours);
            // }
            // if(String(mins).length > 1) {
            $('.timer-minutes span:first-child').text(Math.floor(mins));
            // $('.timer-minutes span:last-child').text(mins%10);

            // } else {
            //     $('.timer-minutes span:first-child').text(0);
            //     $('.timer-minutes span:last-child').text(mins);
            // }
            // if(String(secs).length > 1) {
            $('.timer-seconds span:first-child').text(Math.floor(secs));
            // $('.timer-seconds span:last-child').text(secs%10);

            // } else {
            //     $('.timer-seconds span:first-child').text(0);
            //     $('.timer-seconds span:last-child').text(secs);
            // }
        }

        $(document).ready(function() {
            $('.discount').css({
                'background': 'url("img/VL_discount_bg.jpg")',
                'background-size': 'cover'
            });
            $('.buynow-button-wrapper img').attr('src', 'img/buy-now-btn.png');
            $('.cnpdescription-top__img img').attr('src', 'img/CNP_bottle_min.png');
            $('.cnphealth-top__img img').attr('src', 'img/lungs-min.png');

            $('.inside-block__img.one img').attr('src', 'img/bacillus-subtilis1-min.png');
            $('.inside-block__img.two img').attr('src', 'img/turmeric-min.png');
            $('.inside-block__img.three img').attr('src', 'img/lactobacillus-min.png');
            $('.inside-block__img.four img').attr('src', 'img/lactobacillus2-min.png');
            $('.inside-block__img.five img').attr('src', 'img/bifido-min.png');
            $('.inside-block__img.six img').attr('src', 'img/casei-min.png');
            $('.inside-block__img.seven img').attr('src', 'img/breve-min.png');
            $('.inside-block__img.eight img').attr('src', 'img/acido1-min.png');

            $('.riskfree-guarantee__img img').attr('src', 'img/seal.png');
            setInterval(function() {
                remain_bv = remain_bv - 1;
                parseTime_bv(remain_bv);
            }, 1000);
        })
    </script>

    <script>
        $(".questions-question__header").click(function() {
            $(this).next().slideToggle();
        });

        $('#loadfont').prepend(`
            @font-face{
                font-family:HelveticaNeueLTStd;
                src:url(fonts/HelveticaNeueLTStd-BdCn.otf) format("opentype")
            }
            @font-face{
                font-family:MYRIADPRO-BOLDCOND;
                src:url(fonts/MYRIADPRO-BOLDCOND.OTF) format("opentype")
            }
            @font-face{
                font-family:MYRIADPRO-BOLD;
                src:url(fonts/MYRIADPRO-BOLD.OTF) format("opentype")
            }
            @font-face{
                font-family:MYRIADPRO-BOLDCOND;
                src:url(fonts/MyriadPro-BoldCond.otf) format("opentype")
            }
            @font-face{
                font-family:MYRIADPRO-BOLDCOND;
                src:url(fonts/MyriadPro-BoldCond.otf) format("opentype")
            }
            @font-face{
                font-family:MYRIADPRO-BOLDIT;
                src:url(fonts/MyriadPro-BoldIt.otf) format("opentype")
            }
            @font-face{
                font-family:Dulcelin;
                src:url(fonts/Dulcelin.otf) format("opentype")
            }
            @font-face{
                font-family:arlrdbd;
                src:url(fonts/arlrdbd.ttf)
            }

            @font-face{font-family:'Bookman Old Style';src:url(fonts/BOOKOSB.TTF)}
            @font-face{font-family:'Open Sans';font-style:normal;font-weight:400;font-display:swap;src:local('Open Sans Regular'),local(OpenSans-Regular),url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;font-display:swap;src:local('Open Sans SemiBold'),local(OpenSans-SemiBold),url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;font-display:swap;src:local('Open Sans Bold'),local(OpenSans-Bold),url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;font-display:swap;src:local('Open Sans ExtraBold'),local(OpenSans-ExtraBold),url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
        `)
    </script>

</body>

</html>