<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.bot{margin-bottom:250%;}
.bott{margin-bottom:150%}
#border{
border-radius:10px;
border-color:#35BABE;	
	
}
a{
	
	background-color:#35BABE;
	display:block;
	text-decoration:none;

border:1px outset #35BABE;

border-radius:10px;
color:white;
	
}

.active{
background-color:#09F;
	display:block;
	text-decoration:none;
line-height:2.5;
border:1px outset #35BABE;
border-radius:10px;
color:white;
}
#back a:hover{
	background-color:#35BABE;
	display:block;
	text-decoration:none;
line-height:2.5;
border:1px outset #35BABE;

border-radius:10px;
color:white;
	}

	#bac a:hover{
		background-color:#35BABE;
	display:block;
	text-decoration:none;
border-top:1px solid blue;
border-bottom:1px solid blue;

	}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Management System</title>
</head>

<body background="roots-bt-karachi-concentrate.jpg" alink="#CC3300">
<table width="100%" height="1119" border="0">
  <tr>
    <th width="21%" height="158" scope="col"><h1 id="bac">
    <a href="Index.php">School Management System</a></h1></th>
    <th width="62%" scope="col"><table width="100%" id="back">
      <tr>
        <th width="17%" scope="col"><h3><a class="active" href="Index.php">Home</a></h3></th>
        <th width="17%" scope="col"><h3><a href="Gallary.php">Gallery</a></h3></th>
        <th width="17%" scope="col"><h3><a href="News.php">News</a></h3></th>
        <th width="17%" scope="col"><h3><a href="AboutUs.php">About Us</a></h3></th>
        <th width="17%" scope="col"><h3><a href="ContactUs.php">Contact Us</a></h3></th>
 
      </tr>
    </table></th>
    <th width="17%" scope="col"><a href="NewAdmission.php"><img src="admission.gif" width="268" height="156" alt="Not Found" /></a></th>
  </tr>
  <tr>
    <th height="720" scope="row"><table width="100%" class="bott" id="back">
      <tr>
        <th height="40" scope="col"><h3><a href="#">Campuse</a></h3></th>
      </tr>
      <tr>
        <th height="40" scope="row"><h3><a href="#">Admissions</a></h3></th>
      </tr>
      <tr>
        <th height="40" scope="row"><h3><a href="#"> Time Tables</a></h3></th>
      </tr>
      <tr>
        <th height="40" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th height="40" scope="row">&nbsp;</th>
      </tr>
      <tr>
        <th height="40" scope="row">&nbsp;</th>
      </tr>
    </table> </th>
    <td><div style="float:left;"><?php include("nnn.php"); ?></div></td>
    <td><table width="100%"  class="bot" >
      <tr>
        <th scope="col"><form id="form1" name="form1" method="post" action="loginreg.php">
          <p>
            <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="email" name="email" id="email" />
            </label>
          </p>
          <p>
            <label>Password
              <input type="password" name="password" id="pass" />
            </label>
          </p>
          <p>
            <input type="submit" name="login" id="log" value="Log In" />
          </p>
        </form></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <th height="201" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
