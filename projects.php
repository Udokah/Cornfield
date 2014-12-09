<?php 
ob_start("ob_gzhandler"); // compress html output
$header = array('title' => 'Projects' ,
                'page' => 'projects' ,
                'description' => 'Tope M. Agbeyo group managing director and Chief Executive Officer of Cornfield Transnational Limited. A Holder of a Masters Degree in Media and Communication from Birmingham City University, Birmingham, United Kingdom. He established  Cornfield Transnational Limited  and other affiliated companies to cater for the diverse needs of people  in several sectors. The company today is a reflection of his creative, professional and managerial capabilities. ' 
               );

include('inc/header.php') 
?>

 <link rel="stylesheet" href="css/projects.css">

<script type="text/javascript">
    $(document).ready(function(){ fullheader() });
</script>



<div class="projects-page">

<h1>our projects</h1>

<div class="item">
    <img src="img/mediaconcept.png">
    <section>
    <h2>Examination ethics on vcd</h2>
    <span>april 2007</span>
    <p>Examination ethics on  video compact disc is a production showing all the rules and regulations that guides the conduct of a particular examination right from the point of registration up till the release of results. It is a way of ensuring that candidates are well  educated and well informed about the do’s and don'ts of the examination body before they sit for the exam. </p>
    </section>
     <div class="clearfix"></div>
</div> 

<div class="item">
    <img src="img/waec.png">
    <section>
    <h2>E-Brochure on VCD</h2>
    <span>September 2009</span>
    <p>In 2009, West African Examination Council (WAEC) the foremost and largest examination body in Africa Commissioned Media Concepts under the management of Cornfield Transnational Limited to produce it's e-brochure on Video Compact Discs for all  candidates sitting for its examination.  As a result of its professional commitment and adherence to quality with primary value in  excellent customer satisfaction, the company has been able to maintain it's clientele since 2005 till date. In 2009, Cornfield introduced the production and supply of examination materials like customized calculators to the Joint Admissions and Matriculation Board, the Examination body responsible for  conducting  entrance examination to all  tertiary institutions in Nigeria. Millions of these were produced and supplied by Cornfield to the Body within three months of its commissioning.</p>
    </section>
     <div class="clearfix"></div>
</div> 

<div class="item">
    <img src="img/police.jpg">
    <section>
    <h2>Nigerian Police Biometrics Central Motor Registry</h2>
    <span>March 2011</span>
    <p>In 2011, Cornfield Transnational Limited recorded another great milestone when it's information and technology concepts for the Police Biometrics Central Motor Registry was approved by the Nigeria Police Force, a twenty five years Public Private Partnership MOU was signed with  Media Concepts, a member of Cornfield Transnational LLC. The company's info-tech department developed and deployed the application. In December 2011 the project was launched and commissioned by  his Excellency <strong>President Goodluck Ebele Jonathan</strong>, the President of the Federal Republic of Nigeria. The successful  launching of the project is as a result of excellent co-operation between partners and associate consultants to Cornfield Transnational Limited under the platform of Media Concepts International Limited.</p>
    </section>
     <div class="clearfix"></div>
</div> 


<div class="item">
    <img src="img/news/kapek.jpg">
    <section>
    <h2>KAPEK MATHEMATICAL INSTRUMENT​</h2>
    <span>​April 2012</span>
    <p>In 2012, Cornfield Transnational started manufacturing KAPEK brand complete  mathematical instrument for the global market. The manufacturing of the mathematical instrument is being executed in partnership with some major Chinese firms. The project is in it's final stage of patent & design documentation and public presentation. The product is to be rolled  out by Cornfield Transnational LLC Atlanta Georgia, USA under the licence of Cornfield Transnational Limited, Nigeria.</p>
    </section>
     <div class="clearfix"></div>
</div> 

<div class="item">
    <img src="img/news/botosoft.png">
    <section>
    <h2>Examination Monitioring System (CIVAMPEMS)</h2>
    <span>​April 2012</span>
    <p>In 2013, Botosoft Technologies another company under the management umbrella of Cornfield developed an application and database  for the management of examination. The application operates on smart card system and hand-held terminal device. Many examination bodies are already signifying their interest in this service because it will help in creating a Candidate Identity Management System and Post Examination Data Management.</p>
    </section>
     <div class="clearfix"></div>
</div> 

<div class="item">
    <img src="img/news/botosoft.png">
    <section>
    <h2>Botosoft Signs Distributorship Agreement</h2>
    <span>​July 2013</span>
    <p>Botosoft Technologies Limited, One of the companies under the umbrella of Cornfield Transnational Limited recently signed a  distributorship agreement with Shenzhen Chainway Information Technology Co. Limited. Chainway is one of the leading professional manufacturers of rugged handheld terminals.  
This agreement offically makes Botosoft Technologies Limited the exclusive distributor of Chainway's Handheld terminals in West Africa.</p>
    </section>
     <div class="clearfix"></div>
</div> 


    
</div>

        
     <?php require_once 'inc/footer.php' ?>

     <?php ob_flush(); flush() ; ?>