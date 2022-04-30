<?php require("view_header.php"); ?>
<script src="../script.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<label for="Chineese">Choose an option:</label>
<form method="post">
  <select name="food" id="food">
    <option value="wonton">Wonton</option>
    <option value="teriyaki">Chicken teriyaki</option>
    <option value="kungpao">Kung Pao Chicken</option>
    <option value="garlic">Garlic Chicken</option>
  </select>

  <label for="amount">Quantity</label>
  <select name="amount" id="food">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select><br>
  <button type="submit">Add to cart</button>
</form>

<?php

if(isset($_POST['food']) && file_exists('data.json')) 
{
   if(
        file_put_contents('data.json', '[
            {
                "food": "'.$_POST['food'].'",
                "amount": '.$_POST['amount'].'
            }
        ]') && 
        file_put_contents('../history.json', file_get_contents('../history.json').'
          {
              "food": "'.$_POST['food'].'",
              "amount": '.$_POST['amount'].'
          },')
      )
    echo "<label class='text-success'>File Appended Success fully</p>";
}
?>