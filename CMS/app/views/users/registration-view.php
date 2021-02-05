<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

       
        /*------------------------------------------------------------------------------------------------------------*/
.container-fulid{
  position: relative;
  text-align: center;
  color: white;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
 
}
#centered{
position: absolute;
  top: 43%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  
}
.centered a{
    color:white;
    background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  width: 100%;
}
#centered h1{
    color: white;
}
       
        
        .form-control{
            border-radius: 25px;

        }
       
            .form-select{
            border-radius: 25px;
  
        }
        .form{
          padding-left:20%;
        }
        .input-group-text
        {
            border-radius: 25px;

        }
        .aaa {
    border: 2px solid black;
    background-color: white;
    color: black;
    border-radius: 25px;
    cursor: pointer;
  }
  
 /* Blue */
.info {
    border-color: #2196F3;
    color: dodgerblue
  }
  
  .info:hover {
    background: #2196F3;
    color: white;
  }
    </style>

<!--------------------------------------------------header image-------------------------------------------------->

<section>
    <div class="container-fulid">
        <img src="assets/frontend/img/bg_1.jpg" alt="Snow" style="width:100%; height: 500px;  opacity: .4;
        background:linear-gradient(to right, #d6471c 0%, #d37a32 0%, #f64316 100%);">
        <div id="centered">
            <h1>About Us</h1>
        </div>
        <div class="centered"><a href="?">Home<span><a href="index.php?module=users&action=register">/Registration</a></span></a></div>
    </div>
</section>

<!------------------------------------------------header image end------------------------------------------------------------------------>

<!-- -------------------------Registration starts----------------- -->
<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/images/brand/bootstrap-logo.svg" alt="" width="72"
                 height="57">
            <h2 >Registration form</h2>
            <p class="lead"></p>
        </div>
        
        <div class="form row g-3">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Student Details</h4>
                <form class="needs-validation" novalidate action="?module=users&action=register" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your First Name"
                                   value="" required maxlength="10">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                            <input type="hidden" name="token" value="<?php echo $token;?>">
                        </div>

                        <div class="col-sm-6">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name"
                                   value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="user_name" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="user_name" id="user_name"
                                       placeholder="user_name" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="password" required>
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="1234 Main St">
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="Mobile" class="form-label">Mobile <span class="text-muted"></span></label>
                            <input type="number" class="form-control" name="mobile" id="mobile"
                                   placeholder="mobile number">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" name="country" id="country">
                                <option value="">Choose</option>
                                <option value="india">india</option>
                                <option value="japan">japan</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" name="state" id="state">
                                <option value="">Choose...</option>
                                <option value="up">up</option>
                                <option value="mp">mp</option>

                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="course[]" value="btech" id="course">
                        <label class="form-check-label" for="same_address">btech
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="course[]" value="bca" id="course">
                        <label class="form-check-label" for="save-info">bca</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">gender</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="gender" name="gender" type="radio" value="male" class="form-check-input">
                            <label class="form-check-label" for="credit">male</label>
                        </div>
                        <div class="form-check">
                            <input id="gender" name="gender" type="radio" value="female" class="form-check-input">
                            <label class="form-check-label" for="debit">female</label>
                        </div>
                        <!-- <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div> -->
                    </div>

                    <!--   <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Name on card</label>
                            <input type="text" class="form-control" name="cc-name" id="cc-name" placeholder="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>

                         <div class="col-md-6">
                            <label for="cc-number" class="form-label">Credit card number</label>
                            <input type="text" class="form-control" name="cc-number" id="cc-number" placeholder="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div> -->

                    <!-- <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Expiration</label>
                            <input type="text" class="form-control" name="cc-expiration" id="cc-expiration"
                                placeholder="">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div> -->

                    <!-- <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>-->

                    <hr class="my-4">

                    <button class="aaa w-100 btn btn-primary btn-lg" type="submit" name="submit"
                            value="register">Register</button><br><br>
                    <a class="aaa btn info" href="?module=users&action=login">Login</a>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2020 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="app/views/users/form-validation.js"></script>