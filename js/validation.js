
  function signup()
  {
   
        var fullname = $("#fullname").val().trim();
        var mobile = $("#mobile").val().trim();
        var emailid = $("#emailid").val().trim();
        var password = $("#password").val().trim();
      
      
      filter  = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
       var sts=true;
       
       if(fullname=="")
       {
           sts=false;
          $("#fullname").css({"border":"2px solid red"});
           $("#fnameerror").text("Please enter Name");
           
       }
       else{
           $("#fullname").css({"border":"2px solid green"});
           $("#fnameerror").text("");
       }
       
        if(mobile==""||mobile.length<10||mobile.length>10||isNaN(mobile))
       {
           sts=false;
           $("#mobile").css({"border":"2px solid red"});
           $("#mobileerror").text("Please enter mobile");
           
       }
       else{
           $("#mobile").css({"border":"2px solid green"});
           $("#mobileerror").text("");
       }
       
       if(emailid=="")
      {
          sts=false;
          $("#emailid").css({"border":"2px solid red"});
          $("#emailerror").text("Please enter Email");
      }
      else if(!filter.test(emailid))
      {
          sts=false;
          $("#emailid").css({"border":"2px solid red"});
          $("#emailerror").text("Invalid email format");
      }
      else
      {
          $("#emailid").css({"border":"2px solid green"});
          $("#emailerror").text("");
      }
      
      if(password=="")
      {
          sts=false;
          $("#password").css({"border":"2px solid red"});
          $("#passworderror").text("Please enter password");
      }
      else
      {
          $("#password").css({"border":"2px solid green"});
          $("#passworderror").text("");
      }
  
       
       if(sts==true)
      {
          $("#form1").submit();
      }	
       
  }

  function loginCheck(){

    var emailid = $("#emailid").val().trim();
    var password = $("#password").val().trim();

    var sts=true;
    filter  = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(emailid=="")
    {
        sts=false;
        $("#emailid").css({"border":"2px solid red"});
        $("#emailerror").text("Please enter Email");
    }
    else if(!filter.test(emailid))
    {
        sts=false;
        $("#emailid").css({"border":"2px solid red"});
        $("#emailerror").text("Invalid email format");
    }
    else
    {
        $("#emailid").css({"border":"2px solid green"});
        $("#emailerror").text("");
    }
    
    if(password=="")
    {
        sts=false;
        $("#password").css({"border":"2px solid red"});
        $("#passworderror").text("Please enter password");
    }
    else
    {
        $("#password").css({"border":"2px solid green"});
        $("#passworderror").text("");
    }
     
    if(sts==true)
    {
        $("#form1").submit();
    }	
  }



