<?php
header('Content-type: application/json');

function getTxt($sigla)
{
    if(!$sigla || $sigla == ''){
        $sigla = 'BTC';
    }

    $txt = '<div class="row faq-section">';

    $data = [
        'BTC' => [
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">How do I use the license that I got with my purchase?</h4>
                    <p>You will receive a code in your order receipt. You do not need to insert it anywhere. Please
                            keep it in your records for any future inquiry from us. If you create a client project, you
                            can either keep this code or you can send us an email using our <a class="text-dark fw-bold text-underline" href="https://themesberg.com/contact">contact
                                page</a>, and we will transfer the license to your client, provided that they have an
                            account on our website.
                    </p>
                </div>
            </div>',
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">What is the difference between the Freelancer/Company/Enterprise licenses?</h4>
                    <p>
                        The Freelancer license is aimed at people who work on their own. It grants you the right to
                        use the purchased product only for one project (either yours or for a client).
                    </p>
                    <p>
                        The Company license is aimed at agencies or larger teams. It grants you the right to create
                        other licensed products base on the template that you purchase from us.
                    </p>
                    <p>
                        The Enterprise license is aimed at large companies with multiple projects. It grants you the
                        right to create any kind of software, SaaS, digital products and sell them.
                    </p>
                    <p>
                        All the differences between the types of licenses are <a class="text-dark fw-bold text-underline" href="https://themesberg.com/licensing">available
                                here</a>.
                    </p>
                </div>
            </div>',
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">Will I get an update to Bootstrap 5 for the Bootstrap 4 themes?</h4>
                    <p>
                        Although two of the products (Pixel Pro and Volt Pro) are already available in Bootstrap 5,
                        we will update all of the themes in this Cyber Monday promotion to Bootstrap 5 in the next 6
                        months for free.
                    </p>    
                </div>
            </div>',
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">Are the themes available with only classic CSS and without Sass as well?</h4>
                    <p>
                        Yes, they are. Each theme has a <code class="text-dark fw-bold">html&amp;css</code> folder
                        which contains the theme with classic HTML, CSS, and Javascript files.
                    </p>
                </div>
            </div>',
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">Do these themes work with Wordpress?</h4>
                    <p>
                        These products are not Wordpress themes, however, they can be integrated in Wordpress by an
                        experienced web developer.
                    </p>
                </div>
            </div>',
            '<div class="col-12 col-md-6">
                <div class="mb-5">
                    <h4 class="h5">Are the images, fonts, and icons free to use?</h4>
                    <p>
                        The images, fonts, icons and every other creative element for each theme can be freely used
                        in your project under our licensing terms.
                    </p>
                </div>
            </div>',
        ],
        'XRP' => '',
        'ETH' => '',
        'CNY' => '',
        'JPY' => '',
        'LTC' => '',
        'ARS' => '',
        'GBP' => '',
        'EUR' => '',
        'USD' => '',
    ];

    foreach($data[$sigla] as $t){
        $txt .= $t;
    }

    echo json_encode($txt);
}
getTxt($_POST['sigla']);
