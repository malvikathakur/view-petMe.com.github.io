function validation1()
{
    var name = document.myForm.name.value;
    var email = document.myForm.email.value;
    var phone = document.myForm.phone.value;
    var username = document.myForm.usrnm.value;
    var npass = document.myForm.pswd.value;
    var cpass = document.myForm.pswd1.value;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    var i = 0;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var reg_pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$/;
    var valid_name = /^[A-Za-z]+$/;
    var valid_phone = /^[0-9]{10}$/;
    if(!name.match(valid_name))
    {
      alert("Enter your first name only");
      return false;
    }
    if(name == "" || name == "null")
    {
      alert("Name should not be empty");
      return false;
    }
    if(!email.match(mail))
    {
      alert("Enter valid email");
      return false;
    }
    if(email == "" || email == "null")
    {
      alert("Email should not be empty");
      return false;
    }
    if(!phone.match(valid_phone))
    {
      alert("Enter valid phone number(10 digits)");
      return false;
    }
    if(phone == "" || phone == "null")
    {
      alert("Phone number should not be empty");
      return false;
    }
    if(!username.match(valid_name))
    {
      alert("Enter valid username(without any space)");
      return false;
    }
    if(username == "" || username == "null")
    {
      alert("username should not be empty");
      return false;
    }
    if(!npass.match(reg_pass))
    {
      alert("Enter valid password, which contains Uppercase, lowercase and special char(only 4-20 characters)");
      return false;
    }
    if(npass == "" || npass == null || cpass == "" || cpass == null)
    {
      alert("password should not be empty");
      return false;
    }
    if (!npass.match(cpass))
    {
      alert("password and retype password not matching");
      return false;
    }
    return true;
}
