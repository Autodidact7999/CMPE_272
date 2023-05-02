<section class="hire-me r-p" id="hire-id">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">
                    Contact Us
                </h2>
                <section class="business-talking fullsize" id="contacts">
	<div class="container">
    <section class="main-section contact" id="contact">
        	<div class="contact-subtitle">
            	<?php 
                $contacts = fopen("txt/contacts.txt", "r");
                while(($line=fgets($contacts))!==false){
                    echo $line;
                    echo "<br/>";
                }
                fclose($contacts)
                ?>
            </div>
        	
        
</section>