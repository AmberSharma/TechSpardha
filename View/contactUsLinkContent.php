<div class="panel" id="contactus">
    <h1>Feel free to send us a message</h1>
    <div id="contact_form">
        <form method="post" name="contact" action="#contactus" id="contactUsForm">

            <label for="author">Your Name:</label> <input type="text" id="author" name="name" class="required input_field" />
            <div class="cleaner_h10"></div>

            <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
            <div class="cleaner_h10"></div>
            <label for="phonenumber">PhoneNumber:</label><input type="text" id="phonenum" name="phone" class="validate-email required input_field" />
            <div class="cleaner_h10"></div>
<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
            <div class="cleaner_h10"></div>

            <input type="button" class="submit_btn" name="submit" id="submit" value="Send" onclick="saveContactUs();"/>
            <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

        </form>
    </div>
</div>
