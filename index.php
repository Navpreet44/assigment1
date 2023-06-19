<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order for pizza delivery from Pizza Hut Canada</title>
  <link rel="stylesheet" href="style.css">
  <ul>
   <li> <a id="shsh" href="view.php">View table</a></li>
    <li><a id="shsh" href="index.php"> Main page</a></li>
</ul>
</head>
<body>
  <header>
    <center>
      <h1>Canadian Pizza</h1>
      <h1>"Eat to live, live for pizza."</h1>
    </center>
  </header>

  <main>
      <center>
        <h1><strong>MENU</strong></h1>
      </center>
      <fieldset>
        <legend><h2><strong>Pizza Size &amp; Crust</strong></h2></legend>
        <strong>
          <select name="size" size="2">
            <option>Select Pizza Size</option>
            <option value="1">Small</option>
            <option value="2">Medium</option>
            <option value="3">Large</option>
            <option value="4">X-Large</option>
          </select>
        </strong>
        <fieldset>
          <legend><strong>Cheeses</strong></legend>
          <input type="radio" name="cheese" value="1" />Mozzarella
          <input type="radio" name="cheese" value="2" />Reduced Fat
          <input type="radio" name="cheese" value="3" />Feta
        </fieldset>
        <fieldset>
          <legend><strong>Sauces</strong></legend>
          <input type="radio" name="sauce" value="1" />Pizza Sauce
          <input type="radio" name="sauce" value="2" />BBQ Sauce
          <input type="radio" name="sauce" value="3" />Garlic Sauce
        </fieldset>
        <fieldset>
          <legend>Special Instructions</legend>
          <textarea name="instructions" rows="3" cols="42"></textarea>
        </fieldset>
        <table>
          <h1><strong>SIZE &amp; PRICE</strong></h1>
          <tr>
            <td>
              <input type="checkbox" name="prize_and_size" value="1" />Small---> $11.54
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="prize_and_size" value="2" />Medium---> $15.65
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="prize_and_size" value="3" />Large--->$33

            
            </table>
      
        <div class="forms2">
          <h1><strong>Topping</strong></h1>
        <fieldset>

         
          <legend>Choose Toppings - $1.79 Each</legend>
          <div class="forms2">
            <input type="checkbox" name="topping" value="1" /> Anchovies<br />
            <input type="checkbox" name="topping" value="2" /> Bacon<br />
            <input type="checkbox" name="topping" value="3" /> Ham<br />
            <input type="checkbox" name="topping" value="4" /> Pepperoni<br />
            <input type="checkbox" name="topping" value="5" /> Salami<br />
            <input type="checkbox" name="topping" value="6" /> Sausage<br />
          </div>
          <div class="forms2">
            <input type="checkbox" name="topping" value="7" /> Broccoli<br />
            <input type="checkbox" name="topping" value="8" /> Green Olives<br />
            <input type="checkbox" name="topping" value="9" /> Green Peppers<br />
            <input type="checkbox" name="topping" value="10" /> Mushrooms<br />
            <input type="checkbox" name="topping" value="11" /> Red Onions<br />
            <input type="checkbox" name="topping" value="12" /> Roasted Garlic<br />
          </div>
        </fieldset>
      </div>
         
        <H1><strong>ABOUT US</strong></H1>
           <fieldset>
          
        <P>Welcome to Canadian Pizza! we serve their signature pan pizza and other dishes<br> including pasta, breadsticks and dessert at dine-in, take-out and delivery chain locations.</P>
            </fieldset>
        <h1><strong>Personal information</strong></h1>
          <div class="form">
            <form method="POST" >
              <p>
                <strong>
                <label for="fname">First Name</label>
                <input type="text" name="name" id="fname">
                  </strong>
              
              </p>
              <p>
                <strong>
                <label for="lname">mobile no</label>
                <input type="text" name="phoneno" id="lname">
                </strong>
                </p>
              
              <p>
                <strong>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                </strong>
              
              </p>
              
              
                
              <input type="submit"  name="submit" value="submit" id="subbt">
          <input type="reset" value="clear" id="subbt">
               
              
               <div class="form-group submit-message">
                <?php
                  require_once('database.php');
                  require_once('validate.php');
                  $valid = new validate();
                  if (isset($_POST) && !empty($_POST)){
                   $lname = $_POST['name'];
                   $fname = $_POST['phoneno'];
                   $email = $_POST['email'];
                   $res = $database->create($fname, $lname, $email);
                 
                   if ($res && $valid->validNumber($fname) && $valid->validEmail($email)){
                     echo "<p>Successfully inserted data</p>";
                   }else{
                     echo "<p>Failed to insert data</p>";
                   }
                 }
                ?>
             </div>
              
      
       
</form>    
    </main>
    
  </body>
</html>