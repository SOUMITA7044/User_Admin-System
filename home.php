<?php 
require_once('connection.php');
require_once('header.php'); ?>
<style>


      .br{
       width:100%;
       position:absolute;
       z-index:-1;
       opacity:0.3;
       height: 100% 100%;
       background-attachment: fixed;
     
  
      }
      
    .abut{
      margin-left:10px;
    }
    .abut p{
      font-size: 20px;
      color: solid rgb(14, 1, 1);
    }
   .abut h4{
    font-size: 28px;
    color:#4646c5;
    font-family: 'Allan';

   }

.who h3{
  font-size: 28px;
  color:#4646c5;
  font-family: 'Allan';
} 
.who p{
  font-size: 15px;
  color: solid rgb(14, 1, 1);
}
.who ul li{
  font-size: 18px;
  color: solid rgb(14, 1, 1);
}
.nxt h4
{
  font-size: 28px;
  color:#4646c5;
  font-family: 'Allan';

}
.nxt p{
  font-size: 20px;
  color: solid rgb(14, 1, 1);
}

section {
  width: 100%;
  display: inline-block;
  height: 60vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <title>Home page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
    <img class="br" src="img.jpeg" alt="inside">
    <div class="container">
     <div class="row">
        <div class="abut">
         <div class="col-xs-7">
           
         <h4>ABOUT US</h4>
            <P>
               <strong>Sportix India Web Develoment Pvt Ltd </strong>is one of the best and 
                fastest growing Website Design Company in Kolkata, India. Being a 
                leading web design and development company based in Kolkata, that 
                offers service of Website Design and Development, Ecommerce Website
                Design ( Online Shopping Systems ), Content Management System (CMS),
                Responsive Website Design ( Mobile Friendly Design).
                       <strong>Sportix India Web Development Pvt Ltd</strong> has been
                providing the best and cost effective web solutions to the clients
                all over the world since its inception. We have lots of experience
                in design of Business, Corporates, School, College, NGO, Society, 
                Real-estate, Health, Travel, Hotel, Government websites and much 
                more. Our professional designers are always ready to give your
                imagination a sensible look.
                        We also provide Web Hosting, Domain Name Registration, 
                Bulk SMS Service, Dedicated Server, VPS Hosting, Email 
                Hosting, SSL certificate at affordable price.
                        We provide premium services to enhance your web presence. 
                Whether you are launching your business for the first time or for
                enhancing your company’s present situation, Incrementer Technology 
                Solutions Pvt Ltd is there for all your web related issues.</P>
            </div>
        </div>
        <div class="who">
        <div class="col-xs-4">
            <img class="sm" src="img2.png" alt="small" height="300px" width="400px">
             <h3>Who can Consult Us?</h3>
             <strong><p>Sportix India Web Development Pvt. Ltd. welcomes all 
                business to consult us for complete online marketing support.</p></strong>
                <ul>
                   <li>Small Scale Industries</li> 
                   <li>National/International Businesses</li>
                   <li>Local Businesses</li>
                   <li>Private & Government Services</li>
                   <li>Retailers</li>
                   <li>Hospitality Industries</li> 
                   <li>Healthcare Industries</li> 

                </ul>
            </div>
        </div>
        <div class="nxt">
            <div class="col-xs-6">
              <h4>NEXT STEPS</h4>
              <p>The business plan elaborates on crucial points like the
                 concept (services incl. range of systems and programming 
                 languages, and the related operational procedures, USP, 
                 company vision), provides an overview of the market situation 
                 (competitive but with still increasing demand), as well as a
                  risk analysis. It also gives information regarding  potential 
                  business partners (an existing network of independent contractors)
                 the marketing plan and financing.</p>
            </div>
        </div>
        </div>
    </div>
   
</body>
   

</body>
</html>
<?php require_once('footer.php'); ?>