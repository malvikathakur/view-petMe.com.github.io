;function validation()
{
    var fname = document.myForm.usrnm.value;
    var pass = document.myForm.pswd.value;
    var i = 0;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var reg_pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$/;
    var valid_fname = /^[A-Za-z]+$/;
    if(!fname.match(valid_fname))
    {
      alert("Enter valid name");
      return false;
    }
    if(fname == "" || fname == "null")
    {
      alert("name should not be empty");
      return false;
    }
    if(!pass.match(reg_pass))
    {
      alert("Enter valid password, which contains Uppercase, lowercase and special char");
      return false;
    }
    if(pass == "" || pass == null || rpass == "" || rpass == null)
    {
      alert("password should not be empty");
      return false;
    }
    if (!pass.match(rpass))
    {
      alert("password and retype password not matching");
      return false;
    }
       return true;
     }
