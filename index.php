<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
	  <link rel="stylesheet" href="css/RegisterationStyles.css" />
	  <link rel="stylesheet" href="css/loading.css" />
  </head>
   <body onload="myFunction()">
  
		<div id="loading"></div>
        <h4><u>Government Polytechnic Aadampur, Tarabganj, Gonda</u></h4>
    <img class="logo" src="img/collegeLogo.png">
		
    <h2>Registration Form For ID Card</h2>
    <p>Please fill out this form with the required information</p>
    <form method="post" action="submit.php" enctype="multipart/form-data">

      <fieldset>
        <label><input type="text" name="enroll" placeholder="Enrollment Number" minlength="15" maxlength="15" required autocomplete="off"/></label>
        <label><input type="text" name="name" placeholder="Full Name" maxlength="30" required autocomplete="off"/></label>
        <label class="dob">
            <select name="dd" required>
              <option value="">--Day--</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
          </select>
          <select name="mm" required>
              <option value="">--Month--</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
          </select>
          <select name="yyyy" required>
              <option value="">--Year--</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
          </select>
        </label>
        <label><input type="email" name="email" placeholder="E-Mail ID" required autocomplete="off"/></label>
        <label><input type="text" name="fname" placeholder="Father Name" maxlength="50" required autocomplete="off"/><h6 style="color:black;">*Plese enter name without any title</h6></label>
        <label><input type="text" name="contact" placeholder="Contact Number"  minlength="10" maxlength="10" required autocomplete="off" onkeyup="numbersOnly(this)"/></label>
        <label><textarea name="address" rows="5" cols="30" placeholder="Your Full Address" required autocomplete="off"></textarea></label>
        <label><input type="text" name="session"  placeholder="Session like as: 2020-23" maxlength="7" required autocomplete="off"/></label>
      </fieldset>

      <fieldset>
        <label><input type="radio" name="class" class="inline" value="First Year" required/> First Year</label>
        <label><input type="radio" name="class" class="inline" value="Second Year" required/> Second Year</label>
        <label><input type="radio" name="class" class="inline" value="Third Year" required/> Third Year</label>
      </fieldset>

      <fieldset>
        <label><input type="radio" name="branch" class="inline" value="Computer Science & Engineering" required/> Computer Science & Engineering</label>
        <label><input type="radio" name="branch" class="inline" value="Mechanical Engineering (Automobile)" required/> Mechanical Engineering (Automobile)</label>
        <label><input type="radio" name="branch" class="inline" value="Mechanical Engineering (Production)" required/> Mechanical Engineering (Production)</label>
      </fieldset>

      <fieldset>
        <label>Upload your passport size photo: <input type="file" name="imageFile"  required autocomplete="off"/><h6 style="color:black;">*Plese upload only JPG & PNG files</h6></label>
      </fieldset>

      <fieldset>
        <label>How did you hear about this technology?
          <select name="referrer" required autocomplete="off">
            <option value="">--select one--</option>
            <option value="College Website">College Website</option>
            <option value="Your Teachers">Your Teachers</option>
            <option value="Your Seniors">Your Seniors</option>
            <option value="Your Collegeous">Your Collegeous</option>
            <option value="Other">Other</option>
          </select>
        </label>
      </fieldset>

      <fieldset>  
        <label>
          <input type="checkbox" name="terms" class="inline" required /> I accept the <a href="idCardTermsCondition.php">terms and conditions.</a>
			  </label>
      </fieldset>

      <input id="play" type="submit" name="submit" value="Sign Up" />
    </form>

    <audio>
			<source src="audio/button.mp3" type="audio/mp3">
		</audio>
		<script type="text/javascript" src="js/music.js"></script>
	
	<script type="text/javascript" src="js/loading.js"></script>

  <script type="text/javascript">
        function numbersOnly(input){
          var num = /[^0-9]/gi;
          input.value = input.value.replace(num,"");
        }
  </script>
	
  </body>
</html>