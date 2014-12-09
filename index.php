<?php 
ob_start("ob_gzhandler"); // compress html output
$header = array('title' => 'Cornfield Transnational Limited' ,
                'page' => 'home' ,
                'description' => 'Tope M. Agbeyo group managing director and Chief Executive Officer of Cornfield Transnational Limited. A Holder of a Masters Degree in Media and Communication from Birmingham City University, Birmingham, United Kingdom. He established  Cornfield Transnational Limited  and other affiliated companies to cater for the diverse needs of people  in several sectors. The company today is a reflection of his creative, professional and managerial capabilities.'
               );

include('inc/header.php') 
?>

        <div class="news-deck">

        <div class="title">
        <h2>Recent Projects</h2>
        <span>Latest announcements about our products and services.</span>
            
        </div>

        <div class="topics">

        <div class="slider">

        <div class="item">
            <a href="./projects">kapek mathematical instrument</a>
            <span>april 1st, 2012</span>
            <p>In 2012 Cornfield Transnational started the manufacturing of KAPEK brand complete mathematical instrument for the global market...</p>
        </div>

        <div class="item">
             <a href="./projects">examination monitoring system (CIVAMPEMS)</a>
            <span>january 31st, 2013</span>
            <p>In 2013 Botosoft technologies, another company under the management umbrella of Cornfield developed an application and data...</p>
        </div>

        <div class="item">   
             <a href="./projects">Nigerian Police Biometrics Central Motor Registry</a>
             <span>March 2011</span>
            <p>In 2011 Cornfield Transnational Ltd recorded another great milestone when it's information and technology concepts... </p>
        </div>

        <div class="item">
            <a href="./projects">botosoft signs distributorship agreement</a>
            <span>july 25, 2013</span>
            <p>Botosoft Technologies Limited, one of the companies under the umbrella of Cornfield Transnational...</p>
        </div>

        <div class="clearfix"></div>

        </div>

        <div class="opaque">
        </div>

        <div class="mover">
        <a href="" class="arrows left"></a>
        <a href="" class="arrows right"></a>        
        </div>
            
        </div>
            <div class="clear"></div>
        </div>


        <!-- Affiliates come here -->

        <div class="affiliates">
        <h2>Subsidiaries</h2>

        <ul>
            <li><a href="http://botosoftechnologies.com/"><img src="img/news/botosoft.png" /></a></li>
            <li><a href="http://www.mediaconceptsltd.com/"><img src="img/mediaconcept.png" /></a></li>
        </ul>      
            
        </div>

     <?php require_once 'inc/footer.php' ?>

     <?php ob_flush(); flush() ; ?>