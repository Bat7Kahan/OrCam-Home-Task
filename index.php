<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OrCam Home Task</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="jquery-3.6.0.js"></script>
        <script src="script.js" defer></script>
    </head>
    <body>
       <div class="container">
        <form id="user_information_form">
            <div class="card">
                <div class="form-header" style="margin-top: 10px; text-align: center; font-size: 20px; font-weight: 800;">User Information Form</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">First Name:<span class="text-danger">*</span></label>
                        <input type="text" name="first_name" id="first_name" class="form-control form_data"/>
                        <span id="first_name_error" class="error text-danger" aria-live="polite"></span>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:<span class="text-danger">*</span></label>
                        <input type="text" name="last_name" id="last_name" class="form-control form_data"/>
                        <span id="last_name_error" class="error text-danger" aria-live="polite"></span>
                    </div>
                    <div class="form-group">
                        <label for="country">Country:<span class="text-danger">*</span></label>
                        <input type="text" name="country" id="country" class="form-control form_data"/>
                        <span id="country_error" class="error text-danger" aria-live="polite"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone #:<span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control form_data"/>
                        <span id="phone_error" class="error text-danger" aria-live="polite"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:<span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control form_data" />
                        <span id="email_error" class="error text-danger" aria-live="polite"></span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <span id="message"></span>
    </div> 
  </body>
  <?php include 'register.php';?>
</html>
