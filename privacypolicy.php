<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
date_default_timezone_set("Asia/Kolkata");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ privacy policy</title>
<link rel="icon" type="image/x-icon" href="css/favicon.ico" />
<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon" />
	<style>
		body {
		 -webkit-user-select: none;  /* Chrome all / Safari all */
		 -moz-user-select: none;     /* Firefox all */
		 -ms-user-select: none;      /* IE 10+ */

		  /* No support for these yet, use at own risk */
		 -o-user-select: none;
		user-select: none;          
		}
	</style>
	<script language="javascript">
		document.onmousedown=disableclick;
		status="Right Click Disabled";
		Function disableclick(event)
		{
		  if(event.button==2)
		   {
			 alert(status);
			 return false;    
		   }
		}
	</script>
	<script language="JavaScript">
			document.onkeypress = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
			document.onmousedown = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
		document.onkeydown = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
	</script>
</head>
<body>
    <div id="ppHeader">
        <h1 class="f500 text-center"><img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/logo1_zpszklmipcb.png" style="height:50px">&nbsp;&nbsp;<span id="website-name">Otakud.in</span> Privacy Policy</h1>
        <h4 class="text-center">Use these quick links to jump to the different sections below.</h4>
    </div>

    <style title="ppStyle" type="text/css">

    #ppHeader
    {
        font-family:verdana;
        text-transform:capitalize;
    }

    #ppBody
    {
        font-size:11pt;
        width:100%;
        margin:0 auto;
        font-family:arial!important;
    }

    #ppBody a
    {
        text-decoration:none;

    }
    #website-name {
        text-transform:capitalize;
    }

    .grayText {
        background-color:#E9F6FB;
        border:1px solid #dddddd;
        border-radius:4px;
        padding: 5px 15px;
    }
    .blueText {
        background-color:#E9F6FB;
        border:1px solid #dddddd;
        border-radius:4px;
        padding: 5px 15px;
    }
    .innerText {
        padding: 0 40px;

    }

    .col-2 {
        width:15.5%;
        float:left;
        display:block;
        margin:0 5px;
    }

    .col-4 {
        width:100%;
        float:left;
        display:block;
        position:relative;
        left:0px!Important;

    }
    .col-8 {

        display:none;

    }

    .col-12 {
        width:100%;
        float:left;
        display:block;
    }

    .gen-text-center {
        text-align:center;
    }

    .gen-text-left {
        text-align:left;
    }

    .quick-links {
        padding:8px 0;
        background:#E9F6FB;
        border:1px solid #dddddd;
        border-radius:5px;
        margin:1px 0;
    }
    .quick-links2 {
        padding:8px 0;
        background:#E9F6FB;
        border-radius:5px;
        margin:1px 0;
        border:1px solid #dddddd;
    }
    .gen-quick-links {
        line-height:0.5;
        color:#000000;
        font-size:12px;
    }
    .quick-links:hover  {
        background:#eeeeee;
    }
    .quick-links2:hover  {
        background:#eeeeee;
    }

    .text-center {
        text-align: center;
    }

    @media screen and (max-width: 1200px) {
        .col-2 {
            width:13.2%;
            float:left;
            display:block;
            margin:0 15px;
        }
        .col-8 {
            display:none;
        }
        .col-4 {
            width:100%;
            position:relative;
            left:0px!Important;
        }
        .caloppa-pad,
        .coppa-pad {
            padding:5px 0;

        }
        #ppBody {
            width:auto;

        }
    }

    @media screen and (max-width: 1000px) {
        .col-2 {
            width:13%;
            float:left;
            display:block;
            margin:0 15px;
        }

    }

    @media screen and (max-width: 900px) {
        .col-2 {
            width:46%;
            float:left;
            display:block;
            margin:0 15px;
        }

    }

    @media screen and (max-width: 800px) {
        .col-2 {
            width:43%;
            float:left;
            display:block;
            margin:0 15px;
        }
    }
    @media screen and (max-width: 450px) {
        .col-2 {
            width:40%;
            float:left;
            display:block;
            margin:0 15px;
        }
    }
</style><div id='ppBody'><div class='ppConsistencies'><div class='col-2'>
            <div class="quick-links text-center"><a href="#infoCo" id="informationCollection" class="gen-quick-links">Information Collection</a></div>
        </div><div class='col-2'>
            <div class="quick-links text-center"><a href="#infoUs" id="informationUsage" class="gen-quick-links">Information Usage</a></div>
        </div><div class='col-2'>
            <div class="quick-links text-center"><a href="#infoPro" id="informationProtection" class="gen-quick-links">Information Protection</a></div>
        </div><div class='col-2'>
            <div class="quick-links text-center"><a href="#coUs" id="cookieUsage" class="gen-quick-links">Cookie Usage</a></div>
        </div><div class='col-2'>
            <div class="quick-links text-center"><a href="#trDi" id="thirdPartyDisclosure" class="gen-quick-links">3rd Party Disclosure</a></div>
        </div><div class='col-2'>
            <div class="quick-links text-center"><a href="#trLi" id="thirdPartyLinks" class="gen-quick-links">3rd Party Links</a></div>
        </div><div class='col-2'></div></div><div style='clear:both;height:10px;'></div><div class='ppConsistencies'><div class='col-2'>
            <div class="col-12 quick-links2 gen-text-center"><a href="#gooAd" id="googleAdwords" class="gen-quick-links"><b>Google AdSense</b></a></div>
        </div><div class='col-2'>
            <div class="col-12 quick-links2 gen-text-center"><a href="#ftcFip" id="ftcFairInformationPractices" class="gen-quick-links">
                    <b>Fair Information Practices</b>
                    <div class="col-8 gen-text-left gen-xs-text-center" style="font-size:12px;position:relative;left:20px;">Fair information<br> Practices</div>
                </a></div>
        </div><div class='col-2'>
            <div class="col-12 quick-links2 gen-text-center coppa-pad"><a href="#coppAct" id="coppaAct" class="gen-quick-links">
                    <b>COPPA</b>

                </a></div>
        </div><div class='col-2'>
            <div class="col-12 quick-links2 quick4 gen-text-center caloppa-pad"><a href="#calOppa" id="caloppaAct" class="gen-quick-links">
                    <b>CalOPPA</b>

                </a></div>
        </div><div class='col-2'>
            <div class="quick-links2 gen-text-center"><a href="#ourCon" id="ourContactInformation" class="gen-quick-links"><b>Our Contact Information</b></a><br></div>
        </div></div><div style='clear:both;height:10px;'></div><hr />
<div class='innerText'>This privacy policy has been compiled to better serve those who are concerned with how their 'Personally identifiable information' (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.<br></div><span id='infoCo'></span><br><div class='grayText'><strong>What personal information do we collect from the people that visit our blog, website or app?</strong></div><br /><div class='innerText'>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number  or other details to help you with your experience.</div><br><div class='grayText'><strong>When do we collect information?</strong></div><br /><div class='innerText'>We collect information from you when you register on our site, place an order, subscribe to a newsletter, respond to a survey, fill out a form  or enter information on our site.</div><br><span id='infoUs'></span><br><div class='grayText'><strong>How do we use your information? </strong></div><br /><div class='innerText'> We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:<br><br></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To improve our website in order to better serve you.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To allow us to better service you in responding to your customer service requests.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To administer a contest, promotion, survey or other site feature.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To send periodic emails regarding your order or other products and services.</div><span id='infoPro'></span><br><div class='grayText'><strong>How do we protect visitor information?</strong></div><br /><div class='innerText'>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.<br><br></div><div class='innerText'>We use regular Malware Scanning.<br><br></div><div class='innerText'>We do not use an SSL certificate</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> We do not need an SSL because:</div><div class='innerText'>We store information of our users in database which is encrypted and double hashed no one can decode the credentials and user information untill and unless some one invents a correct technique for decoding md5 hash.</div><span id='coUs'></span><br><div class='grayText'><strong>Do we use 'cookies'?</strong></div><br /><div class='innerText'>Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the site's or service provider's systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</div><div class='innerText'><br><strong>We use cookies to:</strong></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Help remember and process the items in the shopping cart.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Understand and save user's preferences for future visits.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third party services that track this information on our behalf.</div><div class='innerText'><br>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser's Help menu to learn the correct way to modify your cookies.<br></div><br><div class='innerText'>If you disable cookies off, some features will be disabled It won't affect the users experience that make your site experience more efficient and some of our services will not function properly.</div><br><div class='innerText'>However, you can still place orders .</div><br><span id='trDi'></span><br><div class='grayText'><strong>Third Party Disclosure</strong></div><br /><div class='innerText'>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. <br><br> However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses. </div><span id='trLi'></span><br><div class='grayText'><strong>Third party links</strong></div><br /><div class='innerText'>We do not include or offer third party products or services on our website.</div><span id='gooAd'></span><br><div class='blueText'><strong>Google</strong></div><br /><div class='innerText'>Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en <br><br></div><div class='innerText'>We have not enabled Google AdSense on our site but we may do so in the future.</div><span id='calOppa'></span><br><div class='blueText'><strong>California Online Privacy Protection Act</strong></div><br /><div class='innerText'>CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy.  The law's reach stretches well beyond California to require a person or company in the INDIA (and conceivably the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy. -  See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf<br></div><div class='innerText'><br><strong>According to CalOPPA we agree to the following:</strong></div><div class='innerText'>Users can visit our site anonymously</div><div class='innerText'>Once this privacy policy is created, we will add a link to it on our home page, or as a minimum on the first significant page after entering our website.</div><div class='innerText'>Our Privacy Policy link includes the word 'Privacy', and can be easily be found on the page specified above.</div><div class='innerText'><br>Users will be notified of any privacy policy changes:</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> On our Privacy Policy Page</div><div class='innerText'>Users are able to change their personal information:</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> By emailing us</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> By calling us</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> By logging in to their account</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> By chatting with us or sending us a ticket</div><div class='innerText'><br><strong>How does our site handle do not track signals?</strong></div><div class='innerText'>We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place. </div><div class='innerText'><br><strong>Does our site allow third party behavioral tracking?</strong></div><div class='innerText'>It's also important to note that we do not allow third party behavioral tracking</div><span id='coppAct'></span><br><div class='blueText'><strong>COPPA (Children Online Privacy Protection Act)</strong></div><br /><div class='innerText'>When it comes to the collection of personal information from children under 13, the Children's Online Privacy Protection Act (COPPA) puts parents in control.  The Federal Trade Commission, the nation's consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online.<br><br></div><div class='innerText'>We do not specifically market to children under 13.</div><span id='ftcFip'></span><br><div class='blueText'><strong>Fair Information Practices</strong></div><br /><div class='innerText'>The Fair Information Practices Principles form the backbone of privacy law in the INDIA and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.<br><br></div><div class='innerText'><strong>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:</strong></div><div class='innerText'>We will notify the users via email</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Within 1 business day</div><div class='innerText'>We will notify users via phone call</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Other</div><div class='innerText'>If user does not respond to email</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Within 1 business day</div><div class='innerText'><br>We also agree to the individual redress principle, which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or a government agency to investigate and/or prosecute non-compliance by data processors.</div><span id='canSpam'></span><br><div class='blueText'><strong>CAN SPAM Act</strong></div><br /><div class='innerText'>The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.<br><br></div><div class='innerText'><strong>We collect your email address in order to:</strong></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Send information, respond to inquiries, and/or other requests or questions.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Process orders and to send information and updates pertaining to orders</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> We may also send you additional information related to your product and/or service.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Market to our mailing list or continue to send emails to our clients after the original transaction has occurred</div><div class='innerText'><br><strong>To be in accordance with CANSPAM we agree to the following:</strong></div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> NOT use false, or misleading subjects or email addresses</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Identify the message as an advertisement in some reasonable way</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Include the physical address of our business or site headquarters</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Monitor third party email marketing services for compliance, if one is used.</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Honor opt-out/unsubscribe requests quickly</div><div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Allow users to unsubscribe by using the link at the bottom of each email</div><div class='innerText'><strong><br>If at any time you would like to unsubscribe from receiving future emails, you can email us at</strong></div><div class='innerText'>unsubscribe@otakud.in and we will promptly remove you from <strong>ALL</strong> correspondence.</div><br><span id='ourCon'></span><br><div class='blueText'><strong>Contacting Us</strong></div><br /><div class='innerText'>If there are any questions regarding this privacy policy you may contact us using the information below.<br><br></div><div class='innerText'>otakud.in</div><div class='innerText'>andhrapradesh</div><div class='innerText'>visakhapatnam 530046 </div><div class='innerText'>india</div><div class='innerText'>info@otakud.in</div><div class='innerText'>7794840555</div><div class='innerText'><br>Last Edited on <?php echo date('r') ?></div></div>
</body>
</html>