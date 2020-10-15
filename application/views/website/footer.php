<?php //Site Footer 
//First is for large screen and second for small screen
?>
<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href="<?php echo base_url("#contact") ?>" role="button">
            Request your custom software
            <i class="fas fa-envelope ml-2"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/sydewalka/" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://www.facebook.com/Oyeibrahim/" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="https://twitter.com/oyeibrahim/" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="https://twitter.com/sydewalka/" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>

        <!-- <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a> -->

        <a href="https://github.com/oyeibrahim" target="_blank">
            <i class="fab fa-github mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2020 SydeWalKa
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<a href="#" class="back-to-top">
    <i class="fas fa-angle-double-up fa-lg p-3"></i>
</a>

<?php //end Site Footer 
?>












<?php //CDN import commented in localhost 
?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

<?php //On site imports commented on server 
?>
<script src="<?php echo base_url("assets/website/js/jquery-3.5.1.min.js") ?>"></script>
<script src="<?php echo base_url("assets/website/js/jquery.slimscroll.min.js") ?>"></script>

<script src="<?php echo base_url("assets/website/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("assets/website/js/mdb.min.js") ?>"></script>
<script src="<?php echo base_url("assets/website/js/custom_script.js") ?>"></script>
<script src="<?php echo base_url("assets/website/js/bootstrap-show-password.min.js") ?>"></script>



<?php //All site scripts here, also in assets/website/js/custom_script.js 
?>



<script type="text/javascript">
    <?php // -------------------------------------- JQUERY METHODS -------------------------------------- //
    ?>
    $(document).ready(function() {


        <?php // ------------------- GLOBAL Functions here -------------------------- //
        //they apply to all pages that uses this footer
        ?>

        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function() {
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function() {
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function() {
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });


        <?php //Navigate directly to a tab
        ?>
        let selectedTab = window.location.hash;
        $('.nav-link[href="' + selectedTab + '"]').trigger('click');
        $('.nav-item[href="' + selectedTab + '"]').trigger('click');


        <?php //Change Theme 
        ?>
        $('#theme_switch').click(function() {
            if (navigator.onLine) { //if user is connected
                $.get('<?php echo base_url("home/change_theme") ?>', function(data, status) {

                    if (status == "success") {

                        if (data == 1) {
                            //reload
                            location.reload();
                        }

                    }
                }, 'json');
            }
        });


        <?php // ----------------------------- End ------ GLOBAL Functions //
        ?>



    });



    <?php // ------------------------------------ END JQUERY METHODS -------------------------------------- //
    ?>










    <?php // ------------------------------- VANILLA JAVASCRIPT METHODS ------------------------------------- //
    ?>
    <?php // ----------------- USER REGISTRATION PAGE ----------------------- //
    if (@$active == "register") {
    ?>

        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }


        // //works with any select element, get their unique id and make them required
        // //CALL with : onchange="checkSelectRequired(this.id)"
        // function checkSelectRequired(id) {
        //     var element = document.getElementById(id);

        //     //check the value and if nothing is selected, then throw error
        //     if (element.value == "") {

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }



        ///////////////

        // //checks radio button checkbox
        // //label_id is the id of the radio button legend 
        // //name is the radio button own name for all button which is always the same passed in like this 'input[name="the_name"]'
        // //Called on submit and then using a click even on the container like below
        // //NOTE pass in fields like this checkRadioButtonsRequired('legend_id','input[name="the_name"]')
        // function checkRadioButtonsRequired(legend_id, name) {

        //     var legend = document.getElementById(legend_id);

        //     var radios = document.querySelectorAll(name);

        //     //add up if the test PASS and an option has been selected, 
        //     //else remains 0 in which case there is no failed case
        //     var check = 0;

        //     for (var radio of radios) { //iterate over all options

        //         if (radio.checked) { //if the current option is checked then the test pass since only one is need to b selected
        //             check = check + 1; //SUCCESS
        //         }

        //     }

        //     if (check > 0) { //if number has been added to check, then its a passed test

        //         legend.style.color = "#8E84B7";
        //         return true;

        //     } else {

        //         legend.style.color = "red";
        //         return false;

        //     }
        // }

        // ///////////////
        // //Since radio can't use onclick then set onclick on there container and validate
        // // when click happens calling the checkRadioButtonsRequired method
        // var radio_buttons_container = document.getElementById("radio_cont");

        // radio_buttons_container.addEventListener('click', function() {
        //     checkRadioButtonsRequired("gender_legend", "input[name='gender']");
        // }, false);
        // ///////////////



        // //works with any input element exepecting phone number format (+2348000000000)
        // //Just check that their is  Plus in front and the rest are number
        // //get their unique id and make them required
        // //num is the minimum input lenght that is required
        // //CALL with : onkeyup="checkPhoneRequired(this.id)"
        // function checkPhoneRequired(id) {

        //     var element = document.getElementById(id);

        //     var filter = /^\+?([0-9])+$/;

        //     if (!filter.test(element.value)) {

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }


        // //Image select check for size limit
        // //size is the maximum size allowed (in Bytes) Jvascript use Bytes
        // //p_id is the placeholder id //id is image id
        // //CALL with : onchange="checkImageSize(1048576,'p_id',this.id)" // onchange="checkImageSize(1048576,'p_id',this.id)"
        // function checkImageSize(size, p_id, id) {

        //     var element = document.getElementById(id);
        //     var holder = document.getElementById(p_id);

        //     //add up if there is a failed case, else remains 0 in which case there is no failed case
        //     var check = 0;

        //     //only do the check when there is a file so there won't be error
        //     if (element.files[0]) {
        //         //check for file size within max
        //         if (element.files[0].size > size) { //if size above max
        //             //remove the image
        //             element.value = "";
        //             //alert user
        //             holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Selected image bigger than " + (size / 10000) + " MB Please select another";
        //             holder.style.color = "red";
        //             check = check + 1;
        //         } else {
        //             //successful
        //             holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Image Selected : " + element.files[0].name;
        //             holder.style.color = "#8E84B7";
        //         }
        //     }

        //     if (check > 0) { //if there is a failed test

        //         return false;

        //     } else { //if no failed test and check is still zero

        //         return true;

        //     }

        // }

        // //Image select check for required image
        // //p_id is the placeholder id //id is image id
        // //used when form submitted to ensure an image is selected before proceeding
        // function checkImageRequired(p_id, id) {

        //     var element = document.getElementById(id);
        //     var holder = document.getElementById(p_id);

        //     //add up if there is a failed case, else remains 0 in which case there is no failed case
        //     var check = 0;

        //     if (element.files[0]) { //if there is at least a file in the input proceed to next test
        //         //test if filename is in the holder
        //         var test2 = holder.innerHTML.includes(element.files[0].name);

        //         if (test2) { //if the tests pass
        //             holder.style.color = "#8E84B7";
        //         } else {//if fail, the add up and alert
        //             holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
        //             holder.style.color = "red";
        //             check = check + 1;
        //         }
        //     } else { //if no file, then add up and alert
        //         holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
        //         holder.style.color = "red";
        //         check = check + 1;
        //     }


        //     if (check > 0) { //if there is a failed test

        //         return false;

        //     } else { //if no failed test and check is still zero

        //         return true;

        //     }

        // }


        // //works with any input element, get their unique id and check to ensure its a number
        // //CALL with : onkeyup="checkNumberRequired(this.id)"
        // function checkNumberRequired(id) {
        //     var element = document.getElementById(id);

        //     if (isNaN(element.value)) { //ensure its a number

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else if (element.value.length < 1) {

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }


        // //works with any input element, get their unique id and check to ensure its greater than a minimum
        // //num is the minimum input amount that is required
        // //CALL with : onkeyup="checkMinAmountRequired(0.2,this.id)"
        // function checkMinAmountRequired(min, id) {
        //     var element = document.getElementById(id);

        //     if (isNaN(element.value)) { //ensure its a number

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else if (element.value < min) { //check the min

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }

        // //works with any input element, get their unique id and check to ensure its less than a maximum
        // //num is the maximum input amount that is required
        // //CALL with : onkeyup="checkMaxAmountRequired(0.2,this.id)"
        // function checkMaxAmountRequired(max, id) {
        //     var element = document.getElementById(id);

        //     if (isNaN(element.value)) { //ensure its a number

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else if (element.value > max) { //check the max

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }

        // //works with any input element, get their unique id and check to ensure its less than a maximum
        // //and greater than a minimum
        // //min is the minimum input amount that is required
        // //max is the maximum input amount that is required
        // //CALL with : onkeyup="checkMinMaxAmountRequired(0.001, 20,this.id)"
        // function checkMinMaxAmountRequired(min, max, id) {
        //     var element = document.getElementById(id);

        //     if (isNaN(element.value)) { //ensure its a number

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else if (element.value > max) { //check the max

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else if (element.value < min) { //check the min

        //         element.style.borderColor = '#f00';
        //         element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

        //         return false;

        //     } else {

        //         element.style.borderColor = '#8E84B7';
        //         element.style.boxShadow = 'unset';

        //         return true;

        //     }
        // }



        //checks required checkbox
        //label_id is the id of the checkbox label //id is the checkbox own id
        //CALL with : onchange="checkCheckboxRequired('accept_terms_label',this.id)"
        function checkCheckboxRequired(label_id, id) {

            var element = document.getElementById(id);
            var label = document.getElementById(label_id);

            if (element.checked) {

                label.style.color = "#8E84B7";
                return true;

            } else {

                label.style.color = "red";
                return false;

            }
        }


        // show password assist message when password is focused
        //CALL with : onfocus="password_focus()"
        function password_focus() {
            document.getElementById("message").style.display = "block";
        }

        // hide password assist message when password is blurred
        //CALL with : onblur="password_blur()"
        function password_blur() {
            document.getElementById("message").style.display = "none";
        }

        //Password check
        //CALL with : onkeyup="checkPassword(this.id)"
        function checkPassword(id) {

            var myInput = document.getElementById(id);
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var special = document.getElementById("special");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
                check = check + 1;
            }

            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
                check = check + 1;
            }

            var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            if (myInput.value.match(specialCharacter)) {
                special.classList.remove("invalid");
                special.classList.add("valid");
            } else {
                special.classList.remove("valid");
                special.classList.add("invalid");
                check = check + 1;
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
                check = check + 1;
            }

            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                myInput.style.borderColor = '#f00';
                myInput.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else { //if no failed test and check is still zero

                myInput.style.borderColor = '#8E84B7';
                myInput.style.boxShadow = 'unset';

                return true;

            }

        }

        //Confirm Password check , gets the id of main password field and the confirm password id
        function checkConfirmPassword(main_id, this_id) {
            var r_pass = document.getElementById(this_id);

            var pass_val = document.getElementById(main_id).value;
            var r_pass_val = document.getElementById(this_id).value;

            if (pass_val !== r_pass_val) {
                r_pass.style.borderColor = '#f00';
                r_pass.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';
                return false;
            } else {
                r_pass.style.borderColor = '#8E84B7';
                r_pass.style.boxShadow = 'unset';
                return true;
            }
        }

        //Valid Email Address Check
        //CALL with : onkeyup="checkEmail(this.id)"
        function checkEmail(id) {
            var email = document.getElementById(id);
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                email.style.borderColor = '#f00';
                email.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';
                return false;
            } else {
                email.style.borderColor = '#8E84B7';
                email.style.boxShadow = 'unset';
                return true;
            }
        }

        //Registration Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var email_id = document.forms["registerForm"]["remail"].id;
            var f_name_id = document.forms["registerForm"]["f_name"].id;
            var l_name_id = document.forms["registerForm"]["l_name"].id;
            var username_id = document.forms["registerForm"]["username"].id;
            var pass_id = document.forms["registerForm"]["rpass"].id;
            var r_pass_id = document.forms["registerForm"]["rr_pass"].id;
            var accept_terms_id = document.forms["registerForm"]["raccept_terms"].id;
            var captcha_id = document.forms["registerForm"]["captcha"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkEmail(email_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkInputRequired(2, f_name_id)) {
                check = check + 1;
            }
            if (!checkInputRequired(2, l_name_id)) {
                check = check + 1;
            }
            if (!checkInputRequired(2, username_id)) {
                check = check + 1;
            }
            if (!checkPassword(pass_id)) {
                check = check + 1;
            }
            if (!checkConfirmPassword(pass_id, r_pass_id)) {
                check = check + 1;
            }
            if (!checkCheckboxRequired("accept_terms_label", accept_terms_id)) {
                check = check + 1;
            }
            if (!checkInputRequired(7, captcha_id)) {
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

    <?php } // ---------------------------- END ------ USER REGISTRATION PAGE // 
    ?>

    <?php // ----------------- USER LOGIN PAGE ----------------------- //
    if (@$active == "login") {
    ?>


        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }


        //Password check
        //CALL with : onkeyup="checkPassword(this.id)"
        function checkPassword(id) {

            var myInput = document.getElementById(id);

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            var lowerCaseLetters = /[a-z]/g;
            if (!myInput.value.match(lowerCaseLetters)) {
                check = check + 1;
            }

            var upperCaseLetters = /[A-Z]/g;
            if (!myInput.value.match(upperCaseLetters)) {
                check = check + 1;
            }

            var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            if (!myInput.value.match(specialCharacter)) {
                check = check + 1;
            }

            var numbers = /[0-9]/g;
            if (!myInput.value.match(numbers)) {
                check = check + 1;
            }

            if (myInput.value.length < 8) {
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                myInput.style.borderColor = '#f00';
                myInput.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else { //if no failed test and check is still zero

                myInput.style.borderColor = '#8E84B7';
                myInput.style.boxShadow = 'unset';

                return true;

            }

        }

        //Valid Email Address Check
        //CALL with : onkeyup="checkEmail(this.id)"
        function checkEmail(id) {
            var email = document.getElementById(id);
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                email.style.borderColor = '#f00';
                email.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';
                return false;
            } else {
                email.style.borderColor = '#8E84B7';
                email.style.boxShadow = 'unset';
                return true;
            }
        }

        //Login Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var email_id = document.forms["loginForm"]["luseremail"].id;
            var pass_id = document.forms["loginForm"]["lpassword"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkEmail(email_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkPassword(pass_id)) {
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

        //Password recovery Form validation check
        function validateRecoveryForm() {

            //JQUERY show anime button
            $('#anime_call_2').hide();
            $('#anime_btn_2').show();
            //end JQUERY

            var email_id = document.forms["forgotPassword"]["fuseremail"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkEmail(email_id)) { //if not valid, then add up
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert_2").text("Please enter a valid email to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert_2").offset().top
                }, 1000);
                $("#invalid_form_alert_2").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert_2").toggle(500);
                }, 5000);

                $('#anime_btn_2').hide();
                $('#anime_call_2').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

    <?php } // ---------------------------- END ------ USER LOGIN PAGE // 
    ?>



    <?php // ----------------- EMAIL AND GOOGLE AUTH PAGE ----------------------- //
    if (@$active == "login_verify") {
    ?>
        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }

        //Email Auth Form validation check
        function validateEmailAuthForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var eauth_id = document.forms["loginverifyFrom"]["token"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkInputRequired(7, eauth_id)) { //if not valid, then add up
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Enter valid Auth code")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

        //Google Auth Form validation check
        function validateGoogleAuthForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var eauth_id = document.forms["loginverifyFrom"]["token"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkInputRequired(6, eauth_id)) { //if not valid, then add up
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Enter valid Auth code")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }
    <?php } // ---------------------------- END ------ EMAIL AND GOOGLE AUTH PAGE // 
    ?>

    <?php // ----------------- CHANGE PASSWORD PAGE ----------------------- //
    if (@$active == "change_password") {
    ?>


        // show password assist message when password is focused
        //CALL with : onfocus="password_focus()"
        function password_focus() {
            document.getElementById("message").style.display = "block";
        }

        // hide password assist message when password is blurred
        //CALL with : onblur="password_blur()"
        function password_blur() {
            document.getElementById("message").style.display = "none";
        }

        //Password check
        //CALL with : onkeyup="checkPassword(this.id)"
        function checkPassword(id) {

            var myInput = document.getElementById(id);
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var special = document.getElementById("special");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
                check = check + 1;
            }

            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
                check = check + 1;
            }

            var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            if (myInput.value.match(specialCharacter)) {
                special.classList.remove("invalid");
                special.classList.add("valid");
            } else {
                special.classList.remove("valid");
                special.classList.add("invalid");
                check = check + 1;
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
                check = check + 1;
            }

            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                myInput.style.borderColor = '#f00';
                myInput.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else { //if no failed test and check is still zero

                myInput.style.borderColor = '#8E84B7';
                myInput.style.boxShadow = 'unset';

                return true;

            }

        }





        //Confirm Password check , gets the id of main password field and the confirm password id
        function checkConfirmPassword(main_id, this_id) {
            var r_pass = document.getElementById(this_id);

            var pass_val = document.getElementById(main_id).value;
            var r_pass_val = document.getElementById(this_id).value;

            if (pass_val !== r_pass_val) {
                r_pass.style.borderColor = '#f00';
                r_pass.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';
                return false;
            } else {
                r_pass.style.borderColor = '#8E84B7';
                r_pass.style.boxShadow = 'unset';
                return true;
            }
        }




        //Change Password Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var old_pass_id = document.forms["changePassword"]["old_pass"].id;
            var new_pass_id = document.forms["changePassword"]["new_pass"].id;
            var confirm_pass_id = document.forms["changePassword"]["confirm_pass"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkPassword(old_pass_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkPassword(new_pass_id)) {
                check = check + 1;
            }
            if (!checkConfirmPassword(new_pass_id, confirm_pass_id)) {
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

    <?php } // ---------------------------- END ------ CHANGE PASSWORD PAGE // 
    ?>




    <?php // ----------------- RESET PASSWORD PAGE ----------------------- //
    if (@$active == "reset_password") {
    ?>


        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }

        // show password assist message when password is focused
        //CALL with : onfocus="password_focus()"
        function password_focus() {
            document.getElementById("message").style.display = "block";
        }

        // hide password assist message when password is blurred
        //CALL with : onblur="password_blur()"
        function password_blur() {
            document.getElementById("message").style.display = "none";
        }

        //Password check
        //CALL with : onkeyup="checkPassword(this.id)"
        function checkPassword(id) {

            var myInput = document.getElementById(id);
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var special = document.getElementById("special");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
                check = check + 1;
            }

            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
                check = check + 1;
            }

            var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            if (myInput.value.match(specialCharacter)) {
                special.classList.remove("invalid");
                special.classList.add("valid");
            } else {
                special.classList.remove("valid");
                special.classList.add("invalid");
                check = check + 1;
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
                check = check + 1;
            }

            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                myInput.style.borderColor = '#f00';
                myInput.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else { //if no failed test and check is still zero

                myInput.style.borderColor = '#8E84B7';
                myInput.style.boxShadow = 'unset';

                return true;

            }

        }





        //Confirm Password check , gets the id of main password field and the confirm password id
        function checkConfirmPassword(main_id, this_id) {
            var r_pass = document.getElementById(this_id);

            var pass_val = document.getElementById(main_id).value;
            var r_pass_val = document.getElementById(this_id).value;

            if (pass_val !== r_pass_val) {
                r_pass.style.borderColor = '#f00';
                r_pass.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';
                return false;
            } else {
                r_pass.style.borderColor = '#8E84B7';
                r_pass.style.boxShadow = 'unset';
                return true;
            }
        }




        //Change Password Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var vcode_id = document.forms["resetPassword"]["verificationcode"].id;
            var new_pass_id = document.forms["resetPassword"]["newpassword"].id;
            var confirm_pass_id = document.forms["resetPassword"]["r_pass"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkInputRequired(110, vcode_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkPassword(new_pass_id)) {
                check = check + 1;
            }
            if (!checkConfirmPassword(new_pass_id, confirm_pass_id)) {
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

    <?php } // ---------------------------- END ------ RESET PASSWORD PAGE // 
    ?>



    <?php // ----------------- EDIT PROFILE PAGE ----------------------- //
    if (@$active == "edit_profile") {
    ?>

        //JQUERY and VANILLA JS MIX
        //For displaying selected image
        function readIMG(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#custom_upload').change(function() {
            $('#selected_image').show();
            $('#preview1').show();
            readIMG(this);
        });
        //end JQUERY and VANILLA JS MIX


        //Image select check for size limit
        //size is the maximum size allowed (in Bytes) Jvascript use Bytes
        //p_id is the placeholder id //id is image id
        //CALL with : onchange="checkImageSize(1048576,'p_id',this.id)" // onchange="checkImageSize(1048576,'p_id',this.id)"
        function checkImageSize(size, p_id, id) {

            var element = document.getElementById(id);
            var holder = document.getElementById(p_id);

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            //only do the check when there is a file so there won't be error
            if (element.files[0]) {
                //check for file size within max
                if (element.files[0].size > size) { //if size above max
                    //remove the image
                    element.value = "";
                    //alert user
                    holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Selected image bigger than " + (size / 10000) + " MB Please select another";
                    holder.style.color = "red";
                    check = check + 1;
                } else {
                    //successful
                    holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Image Selected : " + element.files[0].name;
                    holder.style.color = "#8E84B7";
                }
            }

            if (check > 0) { //if there is a failed test

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

        // //Image select check for required image
        // //p_id is the placeholder id //id is image id
        // //used when form submitted to ensure an image is selected before proceeding
        // function checkImageRequired(p_id, id) {

        //     var element = document.getElementById(id);
        //     var holder = document.getElementById(p_id);

        //     //add up if there is a failed case, else remains 0 in which case there is no failed case
        //     var check = 0;

        //     if (element.files[0]) { //if there is at least a file in the input proceed to next test
        //         //test if filename is in the holder
        //         var test2 = holder.innerHTML.includes(element.files[0].name);

        //         if (test2) { //if the tests pass
        //             holder.style.color = "#8E84B7";
        //         } else {//if fail, the add up and alert
        //             holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
        //             holder.style.color = "red";
        //             check = check + 1;
        //         }
        //     } else { //if no file, then add up and alert
        //         holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
        //         holder.style.color = "red";
        //         check = check + 1;
        //     }


        //     if (check > 0) { //if there is a failed test

        //         return false;

        //     } else { //if no failed test and check is still zero

        //         return true;

        //     }

        // }

        //Password check
        //CALL with : onkeyup="checkPassword(this.id)"
        function checkPassword(id) {

            var myInput = document.getElementById(id);

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            var lowerCaseLetters = /[a-z]/g;
            if (!myInput.value.match(lowerCaseLetters)) {
                check = check + 1;
            }

            var upperCaseLetters = /[A-Z]/g;
            if (!myInput.value.match(upperCaseLetters)) {
                check = check + 1;
            }

            var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            if (!myInput.value.match(specialCharacter)) {
                check = check + 1;
            }

            var numbers = /[0-9]/g;
            if (!myInput.value.match(numbers)) {
                check = check + 1;
            }

            if (myInput.value.length < 8) {
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                myInput.style.borderColor = '#f00';
                myInput.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else { //if no failed test and check is still zero

                myInput.style.borderColor = '#8E84B7';
                myInput.style.boxShadow = 'unset';

                return true;

            }

        }



        //Change Password Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var image_id = document.forms["editProfile"]["image"].id;
            var password_id = document.forms["editProfile"]["password"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkImageSize(1048576, "placeHolding", image_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkPassword(password_id)) {
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }



    <?php } // ---------------------------- END ------ EDIT PROFILE PAGE // 
    ?>




    <?php // ----------------- KYC VERIFICATION PAGE ----------------------- //
    if (@$active == "kyc_verification") {
    ?>

        //JQUERY and VANILLA JS MIX
        //for showing up new upload interfaces when verification type is changed
        $(function() {
            $("#verify_type").on("change", function(event) {
                event.preventDefault();
                var verify_type = $("#verify_type").val();

                if (verify_type == 'passport') {

                    $("#verify_field").html("<hr>" + uploadGenerator("Passport Cover", "1") + uploadGenerator("Passport Inner", "2") + uploadGenerator("Selfie with Passport", "3") + "<hr>");

                } else if (verify_type == 'driving_license') {

                    $("#verify_field").html("<hr>" + uploadGenerator("Driving License", "1") + uploadGenerator("Selfie with Driving License", "2") + "<hr>");

                } else if (verify_type == 'nid') {

                    $("#verify_field").html("<hr>" + uploadGenerator("Front", "1") + uploadGenerator("Back", "2") + uploadGenerator("Selfie with National ID", "3") + "<hr>");

                } else {
                    $("#verify_field").html();

                }


            });
        });

        function readIMG(input, diplayId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#' + diplayId).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).on('change', '#custom_upload1', function() { //this is how to get onchange of dynamically added content
            $('#cont1').show(); //container to show selected image added dynamically below
            $('#preview1').show(); //img tag that show selected image added dynamically below
            $('#label1').show(); //added dynamically below
            readIMG(this, 'preview1'); //call to function that shows the image
        });

        $(document).on('change', '#custom_upload2', function() { //this is how to get onchange of dynamically added content
            $('#cont2').show();
            $('#preview2').show();
            $('#label2').show();
            readIMG(this, 'preview2');
        });

        $(document).on('change', '#custom_upload3', function() { //this is how to get onchange of dynamically added content
            $('#cont3').show();
            $('#preview3').show();
            $('#label3').show();
            readIMG(this, 'preview3');
        });
        //end JQUERY and VANILLA JS MIX

        //generates the html code for the file uploads dynamically added on verification type change
        function uploadGenerator(name, level) {

            var htmlCode = "<div class='text-center' id='cont" + level + "' style='display:none; margin-top:10px;margin-bottom:10px;'>" +
                "<img id='preview" + level + "' class='img-fluid img-thumbnail' src='#' alt='" + name + "' style='width:400px; display:none;'/>" +
                "<p id='label" + level + "' style='display:none;'><b>" + name.toUpperCase() + "</b></p>" +
                "</div>" +
                "<div class='form-group'>" +
                "<label>" + name + "</label>" +
                "<label for='custom_upload" + level + "' class='custom-file-upload" + level + " col-12' id='placeHolding" + level + "'>" +
                "<i class='fas fa-upload'></i>&emsp;Click here to select " + name + " image" +
                "</label>" +
                "<input type='file' id='custom_upload" + level + "' accept='image/*' name='document" + level + "' onchange=\"checkImageSize(2097152,'placeHolding" + level + "',this.id)\" />" +
                "<small id='imageHelp" + level + "' class='form-text text-muted'>Maximum filesize allowed is 2 MB</small>" +
                "</div>"

            return htmlCode;

        }



        ///////////////

        //checks radio button checkbox
        //label_id is the id of the radio button legend 
        //name is the radio button own name for all button which is always the same passed in like this 'input[name="the_name"]'
        //Called on submit and then using a click even on the container like below
        //NOTE pass in fields like this checkRadioButtonsRequired('legend_id','input[name="the_name"]')
        function checkRadioButtonsRequired(legend_id, name) {

            var legend = document.getElementById(legend_id);

            var radios = document.querySelectorAll(name);

            //add up if the test PASS and an option has been selected, 
            //else remains 0 in which case there is no failed case
            var check = 0;

            for (var radio of radios) { //iterate over all options

                if (radio.checked) { //if the current option is checked then the test pass since only one is need to b selected
                    check = check + 1; //SUCCESS
                }

            }

            if (check > 0) { //if number has been added to check, then its a passed test

                legend.style.color = "#8E84B7";
                return true;

            } else {

                legend.style.color = "red";
                return false;

            }
        }

        ///////////////
        //Since radio can't use onclick then set onclick on there container and validate
        // when click happens calling the checkRadioButtonsRequired method
        var radio_buttons_container = document.getElementById("radio_cont");

        radio_buttons_container.addEventListener('click', function() {
            checkRadioButtonsRequired("gender_legend", "input[name='gender']");
        }, false);
        ///////////////



        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }


        //works with any input element exepecting phone number format (+2348000000000)
        //Just check that their is  Plus in front and the rest are number
        //get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkPhoneRequired(id) {

            var element = document.getElementById(id);

            var filter = /^\+?([0-9])+$/;

            if (!filter.test(element.value)) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }


        //works with any select element, get their unique id and make them required
        //CALL with : onchange="checkSelectRequired(this.id)"
        function checkSelectRequired(id) {
            var element = document.getElementById(id);

            //check the value and if nothing is selected, then throw error
            if (element.value == "") {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }


        //checks required checkbox
        //label_id is the id of the checkbox label //id is the checkbox own id
        //CALL with : onchange="checkCheckboxRequired('accept_terms_label',this.id)"
        function checkCheckboxRequired(label_id, id) {

            var element = document.getElementById(id);
            var label = document.getElementById(label_id);

            if (element.checked) {

                label.style.color = "#8E84B7";
                return true;

            } else {

                label.style.color = "red";
                return false;

            }
        }



        //Image select check for size limit
        //size is the maximum size allowed (in Bytes) Jvascript use Bytes
        //p_id is the placeholder id //id is image id
        //CALL with : onchange="checkImageSize(1048576,'p_id',this.id)" // onchange="checkImageSize(1048576,'p_id',this.id)"
        function checkImageSize(size, p_id, id) {

            var element = document.getElementById(id);
            var holder = document.getElementById(p_id);

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            //only do the check when there is a file so there won't be error
            if (element.files[0]) {
                //check for file size within max
                if (element.files[0].size > size) { //if size above max
                    //remove the image
                    element.value = "";
                    //alert user
                    holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Selected image bigger than " + (size / 10000) + " MB Please select another";
                    holder.style.color = "red";
                    check = check + 1;
                } else {
                    //successful
                    holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;Image Selected : " + element.files[0].name;
                    holder.style.color = "#8E84B7";
                }
            }

            if (check > 0) { //if there is a failed test

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

        //Image select check for required image
        //p_id is the placeholder id //id is image id
        //used when form submitted to ensure an image is selected before proceeding
        function checkImageRequired(p_id, id) {

            var element = document.getElementById(id);
            var holder = document.getElementById(p_id);

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (element.files[0]) { //if there is at least a file in the input proceed to next test
                //test if filename is in the holder
                var test2 = holder.innerHTML.includes(element.files[0].name);

                if (test2) { //if the tests pass
                    holder.style.color = "#8E84B7";
                } else { //if fail, the add up and alert
                    holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
                    holder.style.color = "red";
                    check = check + 1;
                }
            } else { //if no file, then add up and alert
                holder.innerHTML = "<i class='fas fa-upload'></i>&emsp;You MUST select an image.. Click here!";
                holder.style.color = "red";
                check = check + 1;
            }


            if (check > 0) { //if there is a failed test

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }




        //KYC Form validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var f_name_id = document.forms["kycVerify"]["first_name"].id;
            var l_name_id = document.forms["kycVerify"]["last_name"].id;
            // var m_name_id = document.forms["kycVerify"]["middle_name"].id;
            var country_id = document.forms["kycVerify"]["country"].id;
            var phone_id = document.forms["kycVerify"]["phone"].id;
            var city_id = document.forms["kycVerify"]["city"].id;
            var address_id = document.forms["kycVerify"]["address"].id;
            var verify_type_id = document.forms["kycVerify"]["verify_type"].id;
            var card_no_id = document.forms["kycVerify"]["id_number"].id;
            var accept_terms_id = document.forms["kycVerify"]["raccept_terms"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkInputRequired(2, f_name_id)) { //if not valid, then add up
                check = check + 1;
            }
            if (!checkInputRequired(2, l_name_id)) {
                check = check + 1;
            }
            // if (!checkInputRequired(2, m_name_id)) {
            //     check = check + 1;
            // }
            if (!checkRadioButtonsRequired("gender_legend", "input[name='gender']")) { //For radio button
                check = check + 1;
            }
            if (!checkSelectRequired(country_id)) {
                check = check + 1;
            }
            if (!checkPhoneRequired(phone_id)) {
                check = check + 1;
            }
            if (!checkInputRequired(2, city_id)) {
                check = check + 1;
            }
            if (!checkInputRequired(5, address_id)) {
                check = check + 1;
            }

            //Verification type transferred below to help check for images simultaneously

            if (!checkInputRequired(2, card_no_id)) {
                check = check + 1;
            }
            if (!checkCheckboxRequired("accept_terms_label", accept_terms_id)) {
                check = check + 1;
            }

            //at least TWO images must be uploaded //two verification type requires a third image
            //only one requires two images
            //only if the verification type was selected will all image uploads pop up. If it wasn't
            //selected then the DOM won't have the images element and there will be an error
            if (!checkSelectRequired(verify_type_id)) {

                check = check + 1;

            } else { //if selected, then check for images

                if (!checkImageSize(2097152, "placeHolding1", "custom_upload1")) { //image1 size
                    check = check + 1;
                }
                if (!checkImageSize(2097152, "placeHolding2", "custom_upload2")) { //image2 size
                    check = check + 1;
                }

                if (!checkImageRequired("placeHolding1", "custom_upload1")) { //image1 required
                    check = check + 1;
                }
                if (!checkImageRequired("placeHolding2", "custom_upload2")) { //image2 required
                    check = check + 1;
                }

                //only check for third image if document type requires it
                if (document.getElementById(verify_type_id).value == "passport" ||
                    document.getElementById(verify_type_id).value == "nid") {

                    if (!checkImageSize(2097152, "placeHolding3", "custom_upload3")) { //image3 size
                        check = check + 1;
                    }

                    if (!checkImageRequired("placeHolding3", "custom_upload3")) { //image3 required
                        check = check + 1;
                    }
                }


            }


            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Please fill all required fields to proceed")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }


    <?php } // ---------------------------- END ------ KYC VERIFICATION PAGE // 
    ?>



    <?php // ----------------- USER GOOGLE AUTH SETUP PAGE ----------------------- //
    if (@$active == "googleauth") {
    ?>

        //works with any input element, get their unique id and make them required
        //num is the minimum input lenght that is required
        //CALL with : onkeyup="checkInputRequired(7,this.id)"
        function checkInputRequired(num, id) {
            var element = document.getElementById(id);
            //check the lenght
            if (element.value.length < num) {

                element.style.borderColor = '#f00';
                element.style.boxShadow = '0 0 0 0.2rem rgba(255, 0, 0,.25)';

                return false;

            } else {

                element.style.borderColor = '#8E84B7';
                element.style.boxShadow = 'unset';

                return true;

            }
        }

        //Google Auth setup validation check
        function validateForm() {

            //JQUERY show anime button
            $('#anime_call').hide();
            $('#anime_btn').show();
            //end JQUERY

            var gauth_id = document.forms["googleAuth"]["token"].id;

            //add up if there is a failed case, else remains 0 in which case there is no failed case
            var check = 0;

            if (!checkInputRequired(6, gauth_id)) { //if not valid, then add up
                check = check + 1;
            }

            if (check > 0) { //if there is a failed test

                //JQUERY //Display Error message, hide anime button and show normal submit button back

                $("#invalid_form_alert").text("Enter valid Auth code")
                $('html, body').animate({
                    scrollTop: $("#invalid_form_alert").offset().top
                }, 1000);
                $("#invalid_form_alert").toggle();

                setTimeout(function() {
                    $("#invalid_form_alert").toggle(500);
                }, 5000);

                $('#anime_btn').hide();
                $('#anime_call').show();
                //end JQUERY

                return false;

            } else { //if no failed test and check is still zero

                return true;

            }

        }

    <?php } // ---------------------------- END ------ USER GOOGLE AUTH SETUP PAGE // 
    ?>




    <?php // ----------------- HOME PAGE ----------------------- //
    if (@$active == "home_page") {
    ?>

        $('#submit_message').click(function() {
            contact();
        });

        function contact() {
            if ($('#name').val() != "" && $('#name').val() != null &&
                $('#email').val() != "" && $('#email').val() != null &&
                $('#subject').val() != "" && $('#subject').val() != null &&
                $('#message').val() != "" && $('#message').val() != null) {
                if (navigator.onLine) { //if user is connected

                    $('#submit_message').prop('disabled', true);

                    $.post('<?php echo base_url("home/contact_controller/") ?>', {
                            name: "" + $('#name').val(),
                            email: "" + $('#email').val(),
                            subject: "" + $('#subject').val(),
                            message: "" + $('#message').val(),
                            "<?php echo $this->security->get_csrf_token_name(); ?>": "<?php echo $this->security->get_csrf_hash(); ?>"
                        })
                        .done(function(data, status) { //wait till the request is completed
                            if (status == "success") {

                                //convert to JSON since .done can't fetch JSON directly
                                data = JSON.parse(data);

                                if (data == 1) {
                                    $('#name').val("");
                                    $('#email').val("");
                                    $('#subject').val("");
                                    $('#message').val("");

                                    $("#successful_alert").toggle();

                                    setTimeout(function() {
                                        $("#successful_alert").toggle(500);
                                    }, 10000); //10 sec
                                }

                                if (data == -1) {
                                    $("#form_error_alert").toggle();

                                    setTimeout(function() {
                                        $("#form_error_alert").toggle(500);
                                    }, 5000); //5 sec
                                }

                            }
                            $('#submit_message').prop('disabled', false);
                        });
                }
            } else {
                $("#form_error_alert").toggle();

                setTimeout(function() {
                    $("#form_error_alert").toggle(500);
                }, 5000); //5 sec
            }

        }


    <?php } // ---------------------------- END ------ HOME PAGE // 
    ?>








    <?php // ---------------------------- END VANILLA JAVASCRIPT METHODS ------------------------------------- //
    ?>
</script>

<!-- Ending tag for div made for SlimScroll -->
<!-- </div> -->
</body>

</html>