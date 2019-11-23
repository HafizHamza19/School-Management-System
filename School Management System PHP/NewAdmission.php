<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
h1{
	background-color:#35BABE;
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
#sign{background-color:#35BABE;
color:black;
border-radius:10px;
width:20%;
line-height:250%;
}
input{
	border-radius:5px;
}
#sign:hover{border:#35BABE;
border-radius:10px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Admissions</title>
</head>

<body background="roots-bt-karachi-concentrate.jpg">
<center><p><h1>Registration</h1></p></center>
<form id="form1" name="form1" method="post" action="Cong.php">
  <p>
    <label for="F name">Your Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="name" id="name" placeholder="Enter Name" />
  </p>
  <p>
    <label for="Fname">Your Father Name</label>
    <input type="text" name="fname" id="Fname"  placeholder="Father name"/>
  </p>
  <p>
    <label for="address">Street Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="address" id="address" placeholder="Adress" />
  </p>
  <p>
    <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="city" size="1" id="city">
        <option selected="selected">Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Hyadrabad</option>
        <option>Quetta</option>
        <option>Others</option>
      </select>
    </label>
  </p>
  <p>
    <label>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="phone" id="phone" placeholder="+92311-7860121" />
      <br />
      <br />
      Date Of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name="dateofbirth" size="1" id="year">
         <option>2000</option>
         <option>2001</option>
         <option>2002</option>
         <option>2003</option>
         <option>2004</option>
         <option>2005</option>
         <option>2006</option>
         <option>2007</option>
         <option>2008</option>
         <option>2009</option>
         <option>2010</option>
         <option>2011</option>
         <option>2012</option>
         <option>2013</option>
         <option>2014</option>
         <option>2015</option>
         <option>2016</option>
         <option>2017</option>
       </select>
       <select name="dateofbirth" size="1" id="month">
        <option >01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>

      <select name="dateofbirth" size="1" id="dateofbirth">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
      
       <br />
    </label>
  </p>
  <table width="200">
    <tr>
    <tr>
      <td>Gender</td>
    </tr>
      <td><label>
        <input name="gender" type="radio" id="Gender_0" value="male" checked="checked" />
        Male</label></td>
   
      <td><label>
        <input name="gender" type="radio" id="Gender_1" value="female" />
        Female</label></td>
    </tr>
    
  </table>
  <p>
    <label>Enter Your Class&nbsp;&nbsp;&nbsp;
      <input type="text" name="class" id="class" placeholder="Enter Class" />
    </label>
  </p>
  <p>
    <label>    </label>
    <label>Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="email" id="email" placeholder="example@domain.com" />
    </label>
  </p>
  <p>
    <label>    </label>
    <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" name="password" id="password" placeholder="*******" />
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="submit" id="sign" value="Sign In" />
    </label>
  </p>
  <p>&nbsp;</p>
  <p><br />
  </p>
  <p>    <br />
</p>
</form>
</body>
</html>
