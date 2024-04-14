<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $Destination = $_POST["Destination"];
    $Check_In = $_POST["Check_In"];
    $Check_Out = $_POST["Check_Out"];

    // Rediriger l'utilisateur vers une page de confirmation ou afficher un message de succès
    header("Location: confirmation.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="style1.css"> <!-- Assurez-vous d'avoir un fichier CSS pour la mise en forme -->
</head>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Now</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="booking-form-w3layouts">
   <!-- Form starts here -->
   <form action="#" method="post">
      <h2 class="sub-heading-agileits">BOOK NOW</h2>
      <div class="main-flex-w3ls-sectns">
         <div class="field-agileinfo-spc form-w3-agile-text1">
            <select class="form-control">
               <option>From</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
            </select>
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text2">
            <select class="form-control">
               <option>To</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
               <option value="Lorem Ipsum">Lorem Ipsum</option>
               <option value="Adipiscing">Adipiscing</option>
            </select>
         </div>
      </div>
      <div class="main-flex-w3ls-sectns">
         <div class="field-agileinfo-spc form-w3-agile-text1">
            <select class="form-control">
               <option>Preferred Airline</option>
               <option value="American Airline">American Airline</option>
               <option value="Delta Airlines">Delta Airlines</option>
               <option value="Frontier Airline">Frontier Airline</option>
               <option value="Jet Blue">Jet Blue</option>
               <option value="Southwest Airlines">Southwest Airlines</option>
            </select>
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text2">
            <select class="form-control">
               <option>Preferred Seating</option>
               <option value="Window">Window</option>
               <option value="Aisle">Aisle</option>
               <option value="Special">Special (Request note below)</option>
            </select>
         </div>
      </div>
      <div class="main-flex-w3ls-sectns">
         <div class="field-agileinfo-spc form-w3-agile-text1">
            <input id="datepicker" name="Text" type="text" placeholder="Departure Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text2">
            <input type="text" id="timepicker" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Departure Time" value="" onkeypress="return false;">
         </div>
      </div>
      <div class="triple-wthree">
         <div class="field-agileinfo-spc form-w3-agile-text11">
            <select class="form-control">
               <option value="">Adult(12+ Years)</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5+</option>
            </select>
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text22">
            <select class="form-control">
               <option value="">Children(2-11 Years)</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5+</option>
            </select>
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text33">
            <select class="form-control">
               <option value="">Infant(under 2Years)</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5+</option>
            </select>
         </div>
      </div>
      <div class="radio-section">
         <h3>Select your Fare</h3>
         <ul class="radio-buttons-w3-agileits">
            <li>
               <input type="radio" id="a-option" name="selector1">
               <label for="a-option">One Way</label>
               <div class="check"></div>
            </li>
            <li>
               <input type="radio" id="b-option" name="selector1">
               <label for="b-option">Round-Trip</label>
               <div class="check">
                  <div class="inside"></div>
               </div>
            </li>
         </ul>
         <div class="clear"></div>
      </div>
      <div class="main-flex-w3ls-sectns">
         <div class="field-agileinfo-spc form-w3-agile-text1">
            <input id="datepicker1" name="Text" type="text" placeholder="Check_In" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text2">
            <input type="text" id="timepicker1" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Check_Out" value="" onkeypress="return false;">
         </div>
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text">
         <textarea name="Message" placeholder="Any Message..."></textarea>
      </div>
      <h3 class="sub-heading-agileits">Personal Details</h3>
      <div class="main-flex-w3ls-sectns">
         <div class="field-agileinfo-spc form-w3-agile-text1">
            <input type="text" name="Name" placeholder="Full Name" required="">
         </div>
         <div class="field-agileinfo-spc form-w3-agile-text2">
            <input type="text" name="Phone no" placeholder="Phone Number" required="">
         </div>
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text">
         <input type="email" name="Email" placeholder="Email" required="">
      </div>
      <div class="clear"></div>
      <input type="submit" value="Submit" ><a href="confirmation.php"><i class="fas fa-user" id="book-btn"></i></a>
      <input type="reset" value="Clear Form">
      <div class="clear"></div>
   </form>
   <!--// Form starts here -->
</div>

</body>
</html>
