<%-- 
    Document   : register
    Created on : Apr 20, 2017, 9:57:47 AM
    Author     : ASUS
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    
    
    
      <div class="container">
          <form class="form-signin" action="Register" method="POST">

    <div class="mdl-textfield mdl-js-textfield">
            <input name="firstName" class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">First Name</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="middleName" class="mdl-textfield__input" type="text" id="sample2">
            <label class="mdl-textfield__label" for="sample2">Middle Name</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="lastName" class="mdl-textfield__input" type="text" id="sample3">
            <label class="mdl-textfield__label" for="sample3">Last Name</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="initials" class="mdl-textfield__input" type="text" id="sample4">
            <label class="mdl-textfield__label" for="sample4">Initials</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="addressLine1" class="mdl-textfield__input" type="text" id="sample5">
            <label class="mdl-textfield__label" for="sample5">Address Line 1</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="addressLine2" class="mdl-textfield__input" type="text" id="sample6">
            <label class="mdl-textfield__label" for="sample6">Address Line 2</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="addressLine3" class="mdl-textfield__input" type="text" id="sample7">
            <label class="mdl-textfield__label" for="sample7">Address Line 3</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="dateOfBirth" class="mdl-textfield__input" type="text" id="sample13">
            <label name="" class="mdl-textfield__label" for="sample13">Date of Birth</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="email" class="mdl-textfield__input" type="text" id="sample8">
            <label class="mdl-textfield__label" for="sample8">Email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="mobileNo" class="mdl-textfield__input" type="text" id="sample9">
            <label class="mdl-textfield__label" for="sample9">Mobile No.</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="homeNo" class="mdl-textfield__input" type="text" id="sample10">
            <label class="mdl-textfield__label" for="sample10">Home No.</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="passportID" class="mdl-textfield__input" type="text" id="sample11">
            <label class="mdl-textfield__label" for="sample11">Passport ID</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="NIC" class="mdl-textfield__input" type="text" id="sample12">
            <label class="mdl-textfield__label" for="sample12">NIC</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input name="password" class="mdl-textfield__input" type="text" id="sample13">
            <label name="" class="mdl-textfield__label" for="sample13">Password</label>
        </div>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            
          </form>
        </div> <!-- /container -->
    
</html>
