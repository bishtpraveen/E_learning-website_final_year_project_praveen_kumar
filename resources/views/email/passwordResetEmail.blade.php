<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Mail</title>
</head>
<body>
 <h3 style="color: green;" >this is a system generated mail 
 <span style="color: orange;">Just need to verify email</span> 
 </h3> 
 <h4>Please <a href="{{url('reset_password',[$token])}}">click Here</a>to reset your password </h4> 

</body>
</html>