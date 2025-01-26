<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Address Form</title>
  <link rel="stylesheet" href="add_addrstyle.css">
</head>

<body>
  <div class="container">
    <h1>Add/Edit Address</h1>
    <form id="addressForm">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        <span class="error" id="nameError"></span>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        <span class="error" id="phoneError"></span>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
        <span class="error" id="addressError"></span>
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Enter your city" required>
      </div>

      <div class="form-group">
        <label for="state">State</label>
        <select id="state" name="state" required>
          <option value="">Select your state</option>
          <option value="State1">State 1</option>
          <option value="State2">State 2</option>
          <option value="State3">State 3</option>
        </select>
      </div>

      <div class="form-group">
        <label for="zipcode">Zip Code</label>
        <input type="text" id="zipcode" name="zipcode" placeholder="Enter your zip code" required>
      </div>

      <button type="submit">Save Address</button>
    </form>
  </div>

  <script src="add_addrscript.js"></script>
</body>

</html>