<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">    
    <link rel="icon" href="{{env('APP_URL')}}/img/logo.png">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/style.css">
    <title>Ecom Buyer</title>
    <style>
.termhead{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    color: #fff;
}
.termhead h1{
    font-size: 55px;
}
.hiddenimg{
    display: flex;
    justify-content: center;
    align-items: flex-end;
}
.hiddenimg img{
 width: 100%;
}
.main-container{
    padding-top: 100px;
    padding-bottom: 80px;
}
.bread{
    display: flex;
    align-items: center;
    flex-direction: row;
    font-size: 18px;
}
.bread a{
    color: #a5a4a4;
    text-decoration: none;    
}
.termcontent h3{
    color: var(--main-color);
    font-size: 35px;
    font-weight: 600
}
.termcontent p{
    color: var(--sec-color);
    line-height: 30px;
}
@media only screen and (max-width: 767px){
    .termhead{
        margin-bottom: 40px;
    }
}
    </style>
</head>

<body>
    <a href="#" class="scrollToTop active"><i class="fas fa-angle-double-up"></i></a>
{{-- navbar --}}
    <nav class="navbar" id="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="{{route('user.index')}}">Home</a></li>
                <li><a href="{{route('user.services')}}">Services</a></li>
                <li><a href="{{route('user.process')}}">Processing</a></li>
                <li><a href="{{route('user.about')}}">About us</a></li>               
                <li><a href="{{route('user.contact')}}">Contact</a></li>             
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 90px;background:var(--main-color);">
        <div class="container main-container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12 termhead">
                    <h1 data-aos="fade-left" data-aos-delay="100">Terms & Conditions</h1>
                    <div data-aos="fade-left" data-aos-delay="400" class="bread"><a href="{{route('user.index')}}">Home</a><span class="mx-2">/</span><span>Terms & Conditions</span></div>
                </div>
                <div class="col-lg-5 col-md-5 col-12 hiddenimg">
                    <img data-aos="fade-up"  src="{{env('APP_URL')}}/assets/img/termsimg.png" alt="">
                </div>
            </div>
            
        </div>
    </div>
    <div class="container mt-5">
        <div class="col-xl-12 termcontent">            
            <p class="mb-3" data-aos="fade-up">By accessing and placing an order with Ecom Buyer PVT. LTD.., you confirm that you are in agreement with and bound by the terms of service contained in the Terms & Conditions outlined below. These terms apply to the entire website and any email or other type of communication between you and Ecom Buyer PVT. LTD..</p>
            <p class="mb-3" data-aos="fade-up">Under no circumstances shall Ecom Buyer PVT. LTD.. team be liable for any direct, indirect, special, incidental or consequential damages, including, but not limited to, loss of data or profit, arising out of the use, or the inability to use, the materials on this site, even if Ecom Buyer PVT. LTD.. team or an authorized representative has been advised of the possibility of such damages. If your use of materials from this site results in the need for servicing, repair or correction of equipment or data, you assume any costs thereof.</p>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. will not be responsible for any outcome that may occur during the course of usage of our resources. We reserve the rights to change prices and revise the resources usage policy in any moment.</p>
            <h3 class="mb-3">License</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. grants you a revocable, non-exclusive, non-transferable, limited license to download, install and use the website strictly in accordance with the terms of this Agreement.</p>
            <p class="mb-3" data-aos="fade-up">These Terms & Conditions are a contract between you and Ecom Buyer PVT. LTD.. (referred to in these Terms & Conditions as “Ecom Buyer PVT. LTD..”, “us”, “we” or “our”), the provider of the Ecom Buyer PVT. LTD.. website and the services accessible from the Ecom Buyer PVT. LTD.. website (which are collectively referred to in these Terms & Conditions as the “Ecom Buyer PVT. LTD.. Service”).</p>
            <p class="mb-3" data-aos="fade-up">You are agreeing to be bound by these Terms & Conditions. If you do not agree to these Terms & Conditions, please do not use the Ecom Buyer PVT. LTD.. Service. In these Terms & Conditions, “you” refers both to you as an individual and to the entity you represent. If you violate any of these Terms & Conditions, we reserve the right to cancel your account or block access to your account without notice.</p>
            <h3 class="mb-3"> Meanings</h3>
            <span>For this Terms & Conditions:</span>
            <p class="mb-3" data-aos="fade-up">-Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information.</p>
            <p class="mb-3" data-aos="fade-up"> -Company: when this policy mentions “Company,” “we,” “us,” or “our,” it refers to Ecom Buyer PVT. LTD.., (FF-48Omaxe Arcade, Golf Link-I, Alpha Greater Noida, Gautam Buddha Nagar, Maicha, Uttar Pradesh, India, 201310) that is responsible for your information under this Terms & Conditions.</p>
            <p class="mb-3" data-aos="fade-up"> -Country: where Ecom Buyer PVT. LTD.. or the owners/founders of Ecom Buyer PVT. LTD.. are based, in this case is India</p>
            <p class="mb-3" data-aos="fade-up"> -Device: any internet connected device such as a phone, tablet, computer or any other device that can be used to visit Ecom Buyer PVT. LTD.. and use the services.</p>
            <p class="mb-3" data-aos="fade-up">-Service: refers to the service provided by Ecom Buyer PVT. LTD.. as described in the relative terms (if available) and on this platform.</p>
            <p class="mb-3" data-aos="fade-up">-Third-party service: refers to advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you.</p>
            <p class="mb-3" data-aos="fade-up">-Website: Ecom Buyer PVT. LTD.. site, which can be accessed via this URL: https://ecombuyer.in/</p>
            <p class="mb-3" data-aos="fade-up">-You: a person or entity that is registered with Ecom Buyer PVT. LTD.. to use the Services.</p>
            <h3 class="mb-3">Restrictions</h3>
            <p class="mb-3" data-aos="fade-up">You agree not to, and you will not permit others to:</p>
            <p class="mb-3" data-aos="fade-up"> -License, sell, rent, lease, assign, distribute, transmit, host, outsource, disclose or otherwise commercially exploit the website or make the platform available to any third party.</p>
              <p class="mb-3" data-aos="fade-up">-Modify, make derivative works of, disassemble, decrypt, reverse compile or reverse engineer any part of the website.</p>
              <p class="mb-3" data-aos="fade-up">-Remove, alter or obscure any proprietary notice (including any notice of copyright or trademark) of Ecom Buyer PVT. LTD.. or its affiliates, partners, suppliers or the licensors of the website.</p>
            <h3 class="mb-3">Return and Refund Policy</h3>
            <p class="mb-3" data-aos="fade-up">Thanks for shopping at Ecom Buyer PVT. LTD... We appreciate the fact that you like to buy the stuff we build. We also want to make sure you have a rewarding experience while you’re exploring, evaluating, and purchasing our products.</p>
            <p class="mb-3" data-aos="fade-up">As with any shopping experience, there are terms and conditions that apply to transactions at Ecom Buyer PVT. LTD... We’ll be as brief as our attorneys will allow. The main thing to remember is that by placing an order or making a purchase at Ecom Buyer PVT. LTD.., you agree to the terms along with Ecom Buyer PVT. LTD.. Privacy Policy</p>
            <p class="mb-3" data-aos="fade-up">If, for any reason, You are not completely satisfied with any good or service that we provide, don’t hesitate to contact us and we will discuss any of the issues you are going through with our product.</p>
            <h3 class="mb-3"> Your Suggestions</h3>
            <p class="mb-3" data-aos="fade-up">Any feedback, comments, ideas, improvements or suggestions (collectively, “Suggestions”) provided by you to Ecom Buyer PVT. LTD.. with respect to the website shall remain the sole and exclusive property of Ecom Buyer PVT. LTD..</p>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. shall be free to use, copy, modify, publish, or redistribute the Suggestions for any purpose and in any way without any credit or any compensation to you.</p>
            <h3 class="mb-3">Your Consent</h3>
            <p class="mb-3" data-aos="fade-up">We’ve updated our Terms & Conditions to provide you with complete transparency into what is being set when you visit our site and how it’s being used. By using our website, registering an account, or making a purchase, you hereby consent to our Terms & Conditions.</p>
            <h3 class="mb-3">Links to Other Websites</h3>
            <p class="mb-3" data-aos="fade-up">This Terms & Conditions applies only to the Services. The Services may contain links to other websites not operated or controlled by Ecom Buyer PVT. LTD... We are not responsible for the content, accuracy or opinions expressed in such websites, and such websites are not investigated, monitored or checked for accuracy or completeness by us. Please remember that when you use a link to go from the Services to another website, our Terms & Conditions are no longer in effect. Your browsing and interaction on any other website, including those that have a link on our platform, is subject to that website’s own rules and policies. Such third parties may use their own cookies or other methods to collect information about you.</p>
            <h3 class="mb-3">Cookies</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. uses “Cookies” to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to enhance the performance and functionality of our website but are non-essential to their use. However, without these cookies, certain functionality like videos may become unavailable or you would be required to enter your login details every time you visit the website as we would not be able to remember that you had logged in previously. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies.</p>
            <h3 class="mb-3">Changes To Our Terms & Conditions</h3>
            <p class="mb-3" data-aos="fade-up">If we decide to change our Terms & Conditions, we will post those changes on this page, and/or update the Terms & Conditions modification date below.</p>
            <h3 class="mb-3">Modifications to Our website</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. reserves the right to modify, suspend or discontinue, temporarily or permanently, the website or any service to which it connects, with or without notice and without liability to you.</p>
            <h3 class="mb-3">Updates to Our website</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. may from time to time provide enhancements or improvements to the features/ functionality of the website, which may include patches, bug fixes, updates, upgrades and other modifications (“Updates”).</p>
            <p class="mb-3" data-aos="fade-up">Updates may modify or delete certain features and/or functionalities of the website. You agree that Ecom Buyer PVT. LTD.. has no obligation to (i) provide any Updates, or (ii) continue to provide or enable any particular features and/or functionalities of the website to you.</p>
            <p class="mb-3" data-aos="fade-up">You further agree that all Updates will be (i) deemed to constitute an integral part of the website, and (ii) subject to the terms and conditions of this Agreement.</p>
            <h3 class="mb-3">Third-Party Services</h3>
            <p class="mb-3" data-aos="fade-up">We may display, include or make available third-party content (including data, information, applications and other products services) or provide links to third-party websites or services (“Third- Party Services”).</p>
            <p class="mb-3" data-aos="fade-up">You acknowledge and agree that Ecom Buyer PVT. LTD.. shall not be responsible for any Third-Party Services, including their accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect thereof. Ecom Buyer PVT. LTD.. does not assume and shall not have any liability or responsibility to you or any other person or entity for any Third-Party Services.</p>
            <p class="mb-3" data-aos="fade-up">Third-Party Services and links thereto are provided solely as a convenience to you and you access and use them entirely at your own risk and subject to such third parties’ terms and conditions.</p>
            <h3 class="mb-3">Term and Termination</h3>
            <p class="mb-3" data-aos="fade-up">
                This Agreement shall remain in effect until terminated by you or Ecom Buyer PVT. LTD...</p>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. may, in its sole discretion, at any time and for any or no reason, suspend or terminate this Agreement with or without prior notice.</p>
            <p class="mb-3" data-aos="fade-up">This Agreement will terminate immediately, without prior notice from Ecom Buyer PVT. LTD.., in the event that you fail to comply with any provision of this Agreement. You may also terminate this Agreement by deleting the website and all copies thereof from your computer.</p>
            <p class="mb-3" data-aos="fade-up">Upon termination of this Agreement, you shall cease all use of the website and delete all copies of the website from your computer.</p>
            <p class="mb-3" data-aos="fade-up">Termination of this Agreement will not limit any of Ecom Buyer PVT. LTD.. rights or remedies at law or in equity in case of breach by you (during the term of this Agreement) of any of your obligations under the present Agreement.
            </p>
            <h3 class="mb-3">Copyright Infringement Notice</h3>
            <p class="mb-3" data-aos="fade-up">If you are a copyright owner or such owner’s agent and believe any material on our website constitutes an infringement on your copyright, please contact us setting forth the following information: (a) a physical or electronic signature of the copyright owner or a person authorized to act on his behalf; (b) identification of the material that is claimed to be infringing; (c) your contact information, including your address, telephone number, and an email; (d) a statement by you that you have a good faith belief that use of the material is not authorized by the copyright owners; and (e) the a statement that the information in the notification is accurate, and, under penalty of perjury you are authorized to act on behalf of the owner.</p>
            <h3 class="mb-3">Indemnification</h3>
            <p class="mb-3" data-aos="fade-up">You agree to indemnify and hold Ecom Buyer PVT. LTD.. and its parents, subsidiaries, affiliates, officers, employees, agents, partners and licensors (if any) harmless from any claim or demand, including reasonable attorneys’ fees, due to or arising out of your: (a) use of the website; (b) violation of this Agreement or any law or regulation; or (c) violation of any right of a third party.</p>
            <h3 class="mb-3">No Warranties</h3>
            <p class="mb-3" data-aos="fade-up">The website is provided to you “AS IS” and “AS AVAILABLE” and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, Ecom Buyer PVT. LTD.., on its own behalf and on behalf of its affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the website, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, Ecom Buyer PVT. LTD..provides no warranty or undertaking, and makes no representation of any kind that the website will meet your requirements, achieve any intended results, be compatible or work with any other software, , systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
            <p class="mb-3" data-aos="fade-up">Without limiting the foregoing, neither Ecom Buyer PVT. LTD.. nor any Ecom Buyer PVT. LTD.. provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the website, or the information, content, and materials or products included thereon; (ii) that the website will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the website; or (iv) that the website, its servers, the content, or e-mails sent from or on behalf of Ecom Buyer PVT. LTD.. are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
            <p class="mb-3" data-aos="fade-up">Some jurisdictions do not allow the exclusion of or limitations on implied warranties or the limitations on the applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to you.</p>
            <h3 class="mb-3">Limitation of Liability</h3>
            <p class="mb-3" data-aos="fade-up">Notwithstanding any damages that you might incur, the entire liability of Ecom Buyer PVT. LTD.. and any of its suppliers under any provision of this Agreement and your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by you for the website.</p>
            <p class="mb-3" data-aos="fade-up">To the maximum extent permitted by applicable law, in no event shall Ecom Buyer PVT. LTD.. or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, for loss of data or other information, for business interruption, for personal injury, for loss of privacy arising out of or in any way related to the use of or inability to use the website, third-party software and/or third-party hardware used with the website, or otherwise in connection with any provision of this Agreement), even if Ecom Buyer PVT. LTD.. or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
            <p class="mb-3" data-aos="fade-up">Some states/jurisdictions do not allow the exclusion or limitation of incidental or consequential damages, so the above limitation or exclusion may not apply to you.
            </p>
            <h3>Severability</h3>
            <p class="mb-3" data-aos="fade-up">If any provision of this Agreement is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
            <p class="mb-3" data-aos="fade-up">This Agreement, together with the Privacy Policy and any other legal notices published by Ecom Buyer PVT. LTD.. on the Services, shall constitute the entire agreement between you and Ecom Buyer PVT. LTD.. concerning the Services. If any provision of this Agreement is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of this Agreement, which shall remain in full force and effect. No waiver of any term of this Agreement shall be deemed a further or continuing waiver of such term or any other term, and Ecom Buyer PVT. LTD.. failure to assert any right or provision under this Agreement shall not constitute a waiver of such right or provision. YOU AND Ecom Buyer PVT. LTD.. AGREE THAT ANY CAUSE OF ACTION ARISING OUT OF OR RELATED TO THE SERVICES MUST COMMENCE WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES. OTHERWISE, SUCH CAUSE OF ACTION IS PERMANENTLY BARRED.</p>
            <h3 class="mb-3">Waiver</h3>
            <p class="mb-3" data-aos="fade-up">Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Agreement shall not affect a party’s ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute waiver of any subsequent breach.</p>
            <p class="mb-3" data-aos="fade-up">No failure to exercise and no delay in exercising, on the part of either party, any right or any power under this Agreement shall operate as a waiver of that right or power. Nor shall any single or partial exercise of any right or power under this Agreement preclude further exercise of that or any other right granted herein. In the event of a conflict between this Agreement and any applicable purchase or other terms, the terms of this Agreement shall govern.
            </p>
            <h3 class="mb-3">Amendments to this Agreement</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. reserves the right, at its sole discretion, to modify or replace this Agreement at any time. If a revision is material we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
            <p class="mb-3" data-aos="fade-up">By continuing to access or use our website after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Ecom Buyer PVT. LTD..
            </p>
            <h3 class="mb-3">Entire Agreement</h3>
            <p class="mb-3" data-aos="fade-up">The Agreement constitutes the entire agreement between you and Ecom Buyer PVT. LTD.. regarding your use of the website and supersedes all prior and contemporaneous written or oral agreements between you and Ecom Buyer PVT. LTD..</p>
            <p class="mb-3" data-aos="fade-up">You may be subject to additional terms and conditions that apply when you use or purchase other Ecom Buyer PVT. LTD.. services, which Ecom Buyer PVT. LTD.. will provide to you at the time of such use or purchase.</p>
            <h3 class="mb-3">Updates to Our Terms</h3>
            <p class="mb-3" data-aos="fade-up">We may change our Service and policies, and we may need to make changes to these Terms so that they accurately reflect our Service and policies. Unless otherwise required by law, we will notify you (for example, through our Service) before we make changes to these Terms and give you an opportunity to review them before they go into effect. Then, if you continue to use the Service, you will be bound by the updated Terms. If you do not want to agree to these or any updated Terms, you can delete your account.</p>
            <h3 class="mb-3">Intellectual Property</h3>
            <p class="mb-3" data-aos="fade-up">The website and its entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof), are owned by Ecom Buyer PVT. LTD.., its licensors or other providers of such material and are protected by India and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws. The material may not be copied, modified, reproduced, downloaded or distributed in any way, in whole or in part, without the express prior written permission of Ecom Buyer PVT. LTD.., unless and except as is expressly provided in these Terms & Conditions. Any unauthorized use of the material is prohibited.</p>
            <h3 class="mb-3">Agreement to Arbitrate</h3>
            <p class="mb-3" data-aos="fade-up">This section applies to any dispute EXCEPT IT DOESN’T INCLUDE A DISPUTE RELATING TO CLAIMS FOR INJUNCTIVE OR EQUITABLE RELIEF REGARDING THE ENFORCEMENT OR VALIDITY OF YOUR OR Ecom Buyer PVT. LTD.. INTELLECTUAL PROPERTY RIGHTS. The term “dispute” means any dispute, action, or other controversies between you and Ecom Buyer PVT. LTD.. concerning the Services or this agreement, whether in contract, warranty, tort, statute, regulation, ordinance, or any other legal or equitable basis. “Dispute” will be given the broadest possible meaning allowable under law.</p>
            <h3 class="mb-3">Notice of Dispute</h3>
            <p class="mb-3" data-aos="fade-up">In the event of a dispute, you or Ecom Buyer PVT. LTD.. must give the other a Notice of Dispute, which is a written statement that sets forth the name, address, and contact information of the party giving it, the facts giving rise to the dispute, and the relief requested. You must send any Notice of Dispute via email to: info@ecombuyer.com. Ecom Buyer PVT. LTD.. will send any Notice of Dispute to you by mail to your address if we have it, or otherwise to your email address. You and Ecom Buyer PVT. LTD.. will attempt to resolve any dispute through informal negotiation within sixty (60) days from the date the Notice of Dispute is sent. After sixty (60) days, you or Ecom Buyer PVT. LTD.. may commence arbitration.</p>
            <h3 class="mb-3">Binding Arbitration</h3>
            <p class="mb-3" data-aos="fade-up">If you and Ecom Buyer PVT. LTD.. don’t resolve any Dispute by informal negotiation, any other effort to resolve the dispute will be conducted exclusively by binding arbitration as described in this section. You are giving up the right to litigate (or participate in as a party or class member) all disputes in court before a judge or jury. The dispute shall be settled by binding arbitration in accordance with the commercial arbitration rules of the American Arbitration Association. Either party may seek any interim or preliminary injunctive relief from any court of competent jurisdiction, as necessary to protect the party’s rights or property pending the completion of arbitration. Any and all legal, accounting, and other costs, fees, and expenses incurred by the prevailing party shall be borne by the non-prevailing party.</p>
            <h3 class="mb-3">Submissions and Privacy</h3>
            <p class="mb-3" data-aos="fade-up">In the event that you submit or post any ideas, creative suggestions, designs, photographs, information, advertisements, data or proposals, including ideas for new or improved products, services, features, technologies or promotions, you expressly agree that such submissions will automatically be treated as non-confidential and non-proprietary and will become the sole property of Ecom Buyer PVT. LTD.. without any compensation or credit to you whatsoever. Ecom Buyer PVT. LTD.. and its affiliates shall have no obligations with respect to such submissions or posts and may use the ideas contained in such submissions or posts for any purposes in any medium in perpetuity, including, but not limited to, developing, manufacturing, and marketing products and services using such ideas.</p>
            <h3 class="mb-3">Promotions</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. may, from time to time, include contests, promotions, sweepstakes, or other activities (“Promotions”) that require you to submit material or information concerning yourself. Please note that all Promotions may be governed by separate rules that may contain certain eligibility requirements, such as restrictions as to age and geographic location. You are responsible to read all Promotions rules to determine whether or not you are eligible to participate. If you enter any Promotion, you agree to abide by and comply with all Promotions Rules.</p>
            <p class="mb-3" data-aos="fade-up">Additional terms and conditions may apply to purchases of goods or services on or through the Services, which terms and conditions are made a part of this Agreement by this reference.</p>
            <h3 class="mb-3">Typographical Errors</h3>
            <p class="mb-3" data-aos="fade-up">In the event a product and/or service is listed at an incorrect price or with incorrect information due to typographical error, we shall have the right to refuse or cancel any orders placed for the product and/or service listed at the incorrect price. We shall have the right to refuse or cancel any such order whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled, we shall immediately issue a credit to your credit card account or another payment account in the amount of the charge.</p>
            <h3 class="mb-3">Miscellaneous</h3>
            <p class="mb-3" data-aos="fade-up">If for any reason a court of competent jurisdiction finds any provision or portion of these Terms & Conditions to be unenforceable, the remainder of these Terms & Conditions will continue in full force and effect. Any waiver of any provision of these Terms & Conditions will be effective only if in writing and signed by an authorized representative of Ecom Buyer PVT. LTD... Ecom Buyer PVT. LTD.. will be entitled to injunctive or other equitable relief (without the obligations of posting any bond or surety) in the event of any breach or anticipatory breach by you. Ecom Buyer PVT. LTD.. operates and controls the Ecom Buyer PVT. LTD.. Service from its offices in India. The Service is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation. Accordingly, those persons who choose to access the Ecom Buyer PVT. LTD.. from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable. These Terms & Conditions (which include and incorporate the Ecom Buyer PVT. LTD.. Privacy Policy) contains the entire understanding, and supersedes all prior understandings, between you and Ecom Buyer PVT. LTD.. concerning its subject matter, and cannot be changed or modified by you. The section headings used in this Agreement are for convenience only and will not be given any legal import.</p>
            <h3 class="mb-3">Disclaimer</h3>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. is not responsible for any content, code or any other imprecision.</p>
            <p class="mb-3" data-aos="fade-up">Ecom Buyer PVT. LTD.. does not provide warranties or guarantees.</p>
            <p class="mb-3" data-aos="fade-up">In no event shall Ecom Buyer PVT. LTD.. be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. Ecom Buyer PVT. LTD.. reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice.
            </p>
            <p class="mb-3" data-aos="fade-up">The Ecom Buyer PVT. LTD.. Service and its contents are provided “as is” and “as available” without any warranty or representations of any kind, whether express or implied. Ecom Buyer PVT. LTD.. is a distributor and not a publisher of the content supplied by third parties; as such, Ecom Buyer PVT. LTD.. exercises no editorial control over such content and makes no warranty or representation as to the accuracy, reliability or currency of any information, content, service or merchandise provided through or accessible via the Ecom Buyer PVT. LTD.. Service. Without limiting the foregoing, Ecom Buyer PVT. LTD.. specifically disclaims all warranties and representations in any content transmitted on or in connection with the Ecom Buyer PVT. LTD.. Service or on sites that may appear as links on the Ecom Buyer PVT. LTD.. Service, or in the products provided as a part of, or otherwise in connection with, the Ecom Buyer PVT. LTD.. Service, including without limitation any warranties of merchantability, fitness for a particular purpose or non-infringement of third party rights. No oral advice or written information given by Ecom Buyer PVT. LTD.. or any of its affiliates, employees, officers, directors, agents, or the like will create a warranty. Price and availability information is subject to change without notice. Without limiting the foregoing, Ecom Buyer PVT. LTD.. does not warrant that the Ecom Buyer PVT. LTD.. Service will be uninterrupted, uncorrupted, timely, or error-free.</p>
            <h3 class="mb-3">Contact Us</h3>
            <p class="mb-3" data-aos="fade-up">Don’t hesitate to contact us if you have any questions.</p>
            <p class="mb-3" data-aos="fade-up">-Via Email:  info@ecombuyer.com</p>
        </div>
    </div>
  
    <footer style="background: var(--sec-color)" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 d-flex justify-content-start align-items-start">
                    <img src="{{env('APP_URL')}}/assets/img/nobglogo.png" class="mb-2" alt=""><h1 class="text-white mx-2">Ecom Buyer</h1>
                </div>
                <div class="col-lg-12 col-md-12 col-12 mb-4 col-12 d-flex justify-content-start align-items-center">
                    <ul style="display:flex;flex-direction:row">
                        <li>
                           <a href="{{route('user.about')}}"> About us</a>
                        </li>
                        <li>
                            <a href="{{route('user.terms')}}">Terms</a>
                        </li>
                        <li>
                            <a href="{{route('user.privacy')}}">Privacy</a>
                        </li>
                        <li>
                            <a href="{{route('user.contact')}}">Contact</a>
                         </li>
                    </ul>
                </div>
                <hr style="color: #fff">
                <div class="d-flex justify-content-center align-items-center flex-wrap" class="pb-5">
                    <p style="color: white; margin-top:1rem; margin-bottom: 40px">Copyright © 2024 ECOM BUYER PVT. LTD. </p>
                </div>  
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000, // Duration of animation in milliseconds
                easing: 'ease-in-out', // Easing function for the animation
                once: true // Whether animation should happen only once or every time you scroll up/down to it
            });
        });
    </script>
<script>
    // JavaScript to change navbar background on scroll
    window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.style.backgroundColor = '#fff';     
                navbar.style.boxShadow = '2px 3.464px 24px 0px rgba(106, 105, 194, 0.25)';     
            } else {
                navbar.style.backgroundColor = 'transparent'; 
                navbar.style.boxShadow = 'none'; 
            }
        });
</script>
<script>
     // Scroll Top
     $(document).ready(function() {
            var ScrollTop = $(".scrollToTop");
            $(window).on('scroll', function () {
                if ($(this).scrollTop() < 500) {
                    ScrollTop.removeClass("active");
                } else {
                    ScrollTop.addClass("active");
                }
            });
            $('.scrollToTop').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-GKwjsm0PHG4lJ6bDhUWunlKVm5+3O/qwBhQmBou/5A3rHx2R3YwDt40FQu59kuA4" crossorigin="anonymous"></script>
</body>
</html>