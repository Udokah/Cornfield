<?php 
ob_start("ob_gzhandler"); // compress html output
$header = array('title' => 'About Us' ,
                'page' => 'about' ,
                'description' => 'Tope M. Agbeyo group managing director and Chief Executive Officer of Cornfield Transnational Limited. A Holder of a Masters Degree in Media and Communication from Birmingham City University, Birmingham, United Kingdom. He established  Cornfield Transnational Limited  and other affiliated companies to cater for the diverse needs of people  in several sectors. The company today is a reflection of his creative, professional and managerial capabilities. ' 
               );

include('inc/header.php') 
?>

 <link rel="stylesheet" href="css/about.css">

<script type="text/javascript">

function ScrollUp(){
    var body = $("html, body");
body.animate({scrollTop:0}, '500', 'swing', function() { 
});
}

    $(document).ready(function(){
        $('.person section').hide();
        $('#company-history').show();
        fullheader() ;

       /* $('.list-item').on('click', function(){
            var href = ' ' ;
             href = $(this).attr('href');
            if(href.length < 5){
                $(this).find('.extend').slideToggle('fast');
            }            
        }); */

        $('.list').find('a').on('click', function(e){
            e.preventDefault();           

           $(this).parent().find('.extend').slideToggle('fast');       

            if(!$(this).hasClass('active')){

            $('.list a').each(function(){
                $(this).removeClass('active');
            });

            $(this).addClass('active');
            var mhref = $(this).attr('href');
            LoadData(mhref)
        }
        });

        $('.people').find('a').on('click', function(e){
            e.preventDefault();
            var mhref = $(this).attr('href');
            LoadData(mhref)
        });


        function LoadData(dataLink){
            $('.people section').hide();
            $(dataLink).fadeIn('fast', function(){
                ScrollUp();
            }); 
        }

    });
</script>

<div class="about-us">

<div class="list">

<ul>
    <li class="list-item"><a href="#excutive-team">executive team</a>
    <ul class="extend">
    <li><a href="#babatope">Mr. Babatope Agbeyo</a></li>
    <li><a href="#femi">Mr. Femi Agoro</a></li>        
    </ul>
    </li>

    <li class="list-item"><a href="#board-of-directors">board of directors</a>
    <ul class="extend">
    <li><a href="#babatope">Mr. Babatope Agbeyo</a></li>
    <li><a href="#femi">Mr. Femi Agoro</a></li>  
    <li><a href="#awoyibi">Mr. Awobiyi Tolulope</a></li> 
    <li><a href="#agbetuyi">Mr. Agbetuyi Michael</a></li>   
    <li><a href="#ajiboye">Mr. Ajiboye David</a></li> 
    <li><a href="#babatola">Babatola Adeagbo & Co.</a></li>       
    </ul>
    </li>

    <li class="list-item"><a href="#our-consultants">our consultants</a>
    <ul class="extend">
    <li><a href="#babatunde">Dr. Babatunde Onabanjo </a></li>
    <li><a href="#benedict">Mr. Benedict Oyeobu </a></li>      
    </ul>
    </li>

    <li class="list-item"><a href="#company-history">company history</a></li>
    <li class="list-item"><a href="#md-message">MD / CEO message</a></li>
   <!-- <li class="list-item"><a href="#mission-statement">mission statement</a></li> -->
    <li class="list-item"><a href="#our-vision">our vision</a></li>

</ul>
    
</div>


<div class="people">

<section id="babatope" class="person">
<div class="info">
<h2>Mr. Babatope Agbeyo</h2>
<h3>Managing Director and Chief Executive Officer</h3>
<p>Tope Agbeyo, a graduate of Obafemi Awolowo University (OAU), and a Master Degree Holder in Media and Communications from Birmingham City University, United Kingdom.
<br>
    Tope is the Managing Director of Cornfield Transnational Limited. He is also the Managing Director of Media Concepts International Limited. Tope formed Cornfield Transnational Limited in 2006 solely as a management company. The company was responsible for sourcing of financial, human and material resources for the effective management and timely execution of project conceived by other companies within the group including Media Concepts International Limited.


</p>
    
</div>

<img src="img/team/md-ceo.png" alt="Babatope Agbeyo">
</section>

<section id="femi" class="person">
<div class="info">
<h2>Mr. Femi Agoro</h2>
<h3>General Manager</h3>
<p>
Femi is a graduate of University of Westminster London graduating with a BA (Hons) in Business Management and Accounting. He has experience in business development, sales and Marketing.
<br>
    Femi is a technology-driven and innovative individual who has a knack for accelerating business growth. He also brings to the table proven experience in intellectual property, registration, infringement and protection. He is also a superb communicator who understands the dynamics of international startup businesses. He is the General Manager of Cornfield Transnational Limited. <br>

</p>
    
</div>

<img src="img/team/femi.png" alt="Femi Agoro">
<div class="clearfix"></div>
</section>

<!-- Next person -->

<section id="awoyibi" class="person">
<div class="info">
<h2>Mr. Awobiyi Tolulope</h2>
<h3>Manager, Project Mangement and Consultation</h3>
<p>
Tolu joined Cornfield Transnational in 2011 as a Project Director. He garnered experience working with the public sector of Lagos State Government in the Public Works Department as a Physical Development Officer with the Lagos State Urban Development Board. He also worked with the Urban Development Bank, from where he moved on to work in Standard Chartered bank, gaining international experience in Project Finance. 
Tolu is a graduate of University of Lagos with a Bachelor of Science Degree in Urban and Regional Planning.

</p>
</div>
<img src="img/team/awobiyi.png" alt="Mr. Awobiyi Tolulope">
<div class="clearfix"></div>
</section>

<!-- Next person -->

<!-- Next person -->

<section id="agbetuyi" class="person">
<div class="info">
<h2>Mr. Agbetuyi Michael</h2>
<h3>Manager, Finance</h3>
<p>
Michael joined Cornfield Transnational Limited in November 2011. He worked for over 22 years with United Bank for Africa (UBA) in several positions as head of cash management, Zonal head and Senior Operations Manager.
Mr. Michael Agbetuyi is a graduate of Computer Science from the University of Ibadan. He also holds a Master in Managerial Psychology.
</p>
</div>
<img src="img/team/agbetuyi.png" alt="Mr. Agbetuyi Michael">
<div class="clearfix"></div>
</section>

<!-- Next person -->

<!-- Next person -->

<section id="ajiboye" class="person">
<div class="info">
<h2>Mr. Ajiboye David</h2>
<h3>Manager, Media and Publications</h3>
<p>
David joined Cornfield Transnational Limited in 2011 as the Chief Media Officer. David Ajiboye is a serial-award winning journalist with over 14 years of experience, spending 12 of those years with the oldest privately-owned newspaper in Nigeria-The Nigerian Tribune Newspaper. <br>
David is a widely travelled journalist, covering events in the USA, UK, Canada, India, Europe, UAE and many parts of African countries. He is the first Nigerian journalist to be accredited to cover the prestigious annual Grammy Awards in Los Angeles. He has won several awards including the Best Entertainment Writer in Africa (London 2009), Journalist of The Year (London 2010), Journalist of the Year Award (Toronto 2011), and Most Proficient Entertainment Writer (Ibadan 2002) etc. <br>
Furthermore, David is a member of the Nigeria Union of Journalist (NUJ) and also an associate member of the Nigerian Institute Of Public Relations (NIPR). 

</p>
</div>
<img src="img/team/ajiboye.png" alt="Mr. Ajiboye David">
<div class="clearfix"></div>
</section>

<!-- Next person -->

<!-- Next person -->

<section id="babatola" class="person">
<div class="info">
<h2>Babatola Adeagbo & Co.</h2>
<h3>Company Secretary and Legal Advisory</h3>
<p>
Due to the great importance that Cornfield attached to legal advices in all its business transaction, Cornfield found it imperative to contract out its legal department to a very competent law firm whose practices cover all legal services and representation. In furtherance of this, Babatola Adeagbo and Co became the handlers of the Cornfield legal matters since 2006 till date after a very competitive bidding with other renowned law firms in the country.<br>
Babatola Adeagbo & Co provides Corporate Profile and Legal services to Cornfield Transnational Limited. This company also offers the following services to Cornfield Transnational Limited:<br>

<ul class="lister">
    <li>Company secretarial practice</li>
    <li>International trade/ foreign investments</li>
    <li>Commercial law</li>
    <li>Intellectual property</li>
</ul>
</p>
</div>
<div class="clearfix"></div>
</section>

<!-- Next person -->
<!-- Next person -->

<section id="babatunde" class="person">
<div class="info">
<h2>Dr. Babatunde Onabanjo</h2>
<h3>Principal Consultant</h3>
<p>
Babatunde started consulting for Cornfield Transnational Limited in 2011. He is an associate professor of Computer Science and Department Head of the division of Business and Computer Science at Atlanta Metropolitan State College, Atlanta. He is also the Vice President of SCLC Henry County, Georgia and the Executive Director of African Diaspora Tourism Award.<br>
Babatunde holds a Bachelor degree in Computer Information Systems and Management (dual degree) from Alabama State University and an MBA from Auburn University with concentration in Information Systems. He also obtained two Master degrees, one in Counselling and the other in Computer Science. He has a terminal degree in Psychological Counseling from Clark Atlanta University.<br>
Furthermore on achievements, Babatunde received an MBA with concentration in Information systems from Auburn University, MSc. in Computer Science and a PhD from Clark Atlanta University in Atlanta, Georgia.

</p>
</div>
<img src="img/team/babatunde.png" alt="Dr. Babatunde Onabanjo">
<div class="clearfix"></div>
</section>

<!-- Next person -->
<!-- Next person -->

<section id="benedict" class="person">
<div class="info">
<h2>Mr Oyeobu Benedict</h2>
<h3>Financial Consultant</h3>
<p>
Benedict joined Cornfield Transnational Limited in 2011. With over 20 years working experience in the banking, mortgage and infrastructural development sectors. He brings to bare upon his work, vast knowledge of the Nigerian financial market including Taxation Management, loans, investment, portfolio management and financial analysis.
Furthermore, he is an associate of the Nigerian Institute of Bankers, Chartered Accountants & Pensions and holds a certificate of the chartered Institute of Marketing in the UK.
Mr. Benedict Oyeobu is a graduate of Olabisi Onabanjo University with a Degree in Banking & Finance. 

</p>
</div>
<img src="img/team/oyeobu.png" alt="Mr Oyeobu Benedict">
<div class="clearfix"></div>
</section>

<!-- Next person -->



<section id="board-of-directors">
<h2>board of directors</h2>

<fieldset class="full">
<div class="inner">
<img src="img/team/md-ceo.png" alt="Babatope Agbeyo">
<div class="holder">
<a href="#babatope">Mr. Babatope Agbeyo</a>
<span>Managing Director and Chief Executive Officer</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<fieldset>
<div class="inner">
<img src="img/team/awobiyi.png" alt="Mr. Awobiyi Tolulope">
<div class="holder">
<a href="#awobiyi">Mr. Awobiyi Tolulope <small>PMP</small></a>
<span>Manager, Project Mangement and Consultation</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<fieldset>
<div class="inner">
<img src="img/team/femi.png" alt="Femi Agoro">
<div class="holder">
<a href="#femi">Mr. Femi Agoro</a>
<span>General Manager</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<div class="clearfix"></div>

<fieldset>
<div class="inner">
<img src="img/team/agbetuyi.png" alt="Mr. Agbetuyi Michael">
<div class="holder">
<a href="#agbetuyi">Mr. Agbetuyi Michael</a>
<span>Manager, Finance</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<fieldset>
<div class="inner">
<img src="img/team/ajiboye.png" alt="Mr. Ajiboye David">
<div class="holder">
<a href="#ajiboye">Mr. Ajiboye David</a>
<span>Manager, Media and Publications</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<div class="clearfix"></div>

<fieldset>
<div class="inner">
<img src="img/team/babatola.png" alt="Babatola Adeagbo & Co.">
<div class="holder">
<a href="#babatola">Babatola Adeagbo & Co.</a>
<span>Company Secretary and Legal Advisory</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<div class="clearfix"></div>

</section>

<section id="excutive-team" style="display:;">

<h2>Executive Team</h2>

<fieldset class="full">
<div class="inner">
<img src="img/team/md-ceo.png" alt="Babatope Agbeyo">
<div class="holder">
<a href="#babatope">Mr. Babatope Agbeyo</a>
<span>Managing Director and Chief Executive Officer</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<fieldset class="full">
<div class="inner">
<img src="img/team/femi.png" alt="Femi Agoro">
<div class="holder">
<a href="#femi">Mr. Femi Agoro</a>
<span>General Manager</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

</section>

<section id="our-consultants" style="display:;">

<h2>our constultants</h2>

<fieldset >
<div class="inner">
<img src="img/team/babatunde.png" alt="Dr. Babatunde Onabanjo">
<div class="holder">
<a href="#babatunde">Dr. Babatunde Onabanjo</a>
<span>Principal Consultant</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

<fieldset >
<div class="inner">
<img src="img/team/oyeobu.png" alt="Mr Oyeobu Benedict">
<div class="holder">
<a href="#benedict">Mr Oyeobu Benedict</a>
<span>Financial Consultant</span>
</div>
<div class="clearfix"></div>
</div>
</fieldset>

</section>

<section id="company-history">

<article>
<h2>Company History</h2>
<p>
    <strong>T</strong>ope Agbeyo, Group Managing Director and Chief Executive Officer of Cornfield Transnational Limited. A Holder of a Master Degree in Media and Communication from Birmingham City University, Birmingham, United Kingdom. He established Cornfield Transnational Limited and other affiliated companies to cater for the diverse needs of people in several sectors. The company today is a reflection of his creative, professional and managerial capabilities. He started the group with the incorporation of Media Concepts International Limited in 2005 as a media production, disc technologies, information technologies and communication company. Under his supervision the company won its first mega project as a public private partnership project in 2005 which is the content production and mass replication of the National Examinations Council (NECO) Examination Ethics  on  Video Compact Discs for candidates sitting for both private and school based Senior Secondary School Examinations in Nigeria. The project was first of its kind in the country and the company's professional commitment and the relevance of the project to the conduct of  Examinations led to other Examination bodies embracing the project .  <br>
 
 The resource requirements of the project led to the incorporation of Cornfield Transnational Limited in 2006 as a firm responsible for outsourcing the financial, human and material requirements for the project to ensure effective management and timely execution. He also saw the need for the separation of technical arm of the company from the core project management department rather than outsourcing such services to external companies to execute. Apart from this, the company was also incorporated to do various types of printing production services which it stopped in order to concentrate more on in-house project management.
In the same year Cherry Properties was also established to serve as a Property Development Company under the management of Cornfield Transnational Limited.

</p>
</article>
    
</section>

<section id="md-message">
<article>
<h2>MD / CEO Message</h2>
<p>
    At Cornfield Transnational, we follow a simple business philosophy which is treating every client as an individual not a number. We want our actions and decision to demonstrate these values. We believe putting our values into practice creates a long lasting relationship and help offer our clients with the best products and services that meets their various need.
</p>
</article>
</section>

<section id="mission-statement">
<article>
    <h2>Mission Statement</h2>
    <p>
        At Cornfield Transnational, we follow a simple business philosophy which is treating every client as an individual not a number. We want our actions and decision to demonstrate these values. We believe putting our values into practice creates a long lasting relationship and help offer our clients with the best products and services that meets their various need.
    </p>
</article>
</section>

<section id="our-vision">
<article>
    <h2>Our Vision</h2>
    <p style="text-align:center;">Our Vision is to make all our brand products and services globally irresistible and indispensable.</p>
</article>
</section>
    
</div>

<div class="clearfix"></div>
    
</div>


        
     <?php require_once 'inc/footer.php' ?>

     <?php ob_flush(); flush() ; ?>