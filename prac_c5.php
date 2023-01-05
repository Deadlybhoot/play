

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form1">
  Enter a decimal number: <input type="text" id="decimal" name="decimal"><br>
  <input type="button" value="Convert to Binary" onclick="convertToBinary()">
</form> 

<script>
function convertToBinary() {
  // Get the decimal number from the form
  let decimal = document.getElementById("decimal").value;

//   Typecasting
  decimal = Number(decimal);
  // Convert the decimal number to a binary number
  let binary = decimal.toString(2);

  // Display the binary number to the user
  alert("The binary equivalent of " + decimal + " is " + binary);
}
</script>

</body>
</html>