<?php
	include("connect.php");
	if(isset($_POST['name']) && $_POST['name']!==" "){
		$name=$_POST['name'];
		$contactnumber=$_POST['mobile'];
		$pswd=$_POST['pass'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$skill=$_POST['skills'];
		$ins = "insert into tableset(name,mobile,password,email,gender,skills)VALUES('$name','$contactnumber','$pswd','$email','$gender','$skill')";
		//echo "$ins";
		$que = mysqli_query($conn,$ins);
		//echo $que;
		if($que)
			{
			//echo "sucess";
			}
		else {
			echo mysqli_error($conn);
		     }
		/* echo "$name";
		echo "<br>";
		echo "$contactnumber";
		echo "<br>";
		echo "$email"; */
	}

?>
<html>
	<body>
		<center>
		<h1>Registration form</h1>
			<form action="#" method="post"  name="form" id="formid">
				Name:<input type="text" name="name"/></br></br>
					<span id="usename" style="color:red"></span></br></br>
				Mobile:<input type="number" id="mobile" name="mobile"/></br></br>
					<span id="mob" style="color:red"></span></br></br>
				password:<input type="password" id="pass" name="pass"/></br></br>
					<span id="passw" style="color:red"></span></br></br>
				Email:<input type="email" id="email" name="email"/></br></br>
					<span id="emil" style="color:red"></span></br></br>
				geneder :female<input type="radio" name="gender" value="female" id="gender"/>
						male<input type="radio"  name="gender" value="male" id="gender" /></br></br>
						<span id="gen" style="color:red"></span></br></br>
				uploadfile:<input type="file" id="file" name="file"/></br></br>
				skills: html<input type="checkbox" value="html" id="skills" name="skills"/>
						php<input type="checkbox" value="php" id="skills" name="skills"/></br></br>
						<span id="skll" style="color:red"></span></br></br>
				couse:<select name="course">
					<option value="sd">sd</option>
					<option value="wd">wd</option>
					<option value="ac">ac</option>
					</select>
					</br></br>
					<input type="button" value="submit" id="sid" onclick="abc()"/>
			</form>
		</center>


		<script>
		function abc(){

           var flag = true;
			   var x = document.forms["form"]["name"].value;
			   //alert("x");

				var mobilenum = document.getElementById('mobile').value;
				//alert("x");
			
			
				var pwd = document.getElementById('pass').value;
				var email = document.getElementById('email').value;
				//var y = document.forms["form"]["gender"].value;
				//var z = document.forms["form"]["skills"].value;
			      var y = document.getElementById('gender').value;
			      var z = document.getElementById('skills').checked;
				 //alert(y);
			
			 if(x == ""){
			//alert("plz fill the name");
			//return false;
			document.getElementById('usename').innerHTML="please enter the name";
			flag = false;
			} 
			else{
				document.getElementById('usename').innerHTML="";
			}
			
				if(mobilenum == ""){
				//alert("plz fill the contact number");
				//return false;
				document.getElementById('mob').innerHTML="plz enter mobile number";
				flag = false;
					}
					
					var mobilepattern = /^\d{10}$/;
					  //alert(mobilenum);
					if(!mobilenum.match(mobilepattern))	
				   {
				   document.getElementById('mob').innerHTML="your must enter 10 digits number";
				   flag = false;
                   }
				  else{
					  document.getElementById('mob').innerHTML="";
				      } 
				
			
						if(pwd == ""){
						//alert("plz fill the password");
						//return false;
						document.getElementById('passw').innerHTML="plz enter password ";
						flag = false;
						}
						
						
						var pswreg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
						if(!pwd.match(pswreg))
						{
						document.getElementById('passw').innerHTML="6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
						flag = false;
						}
						else{
							  document.getElementById('passw').innerHTML="";
							} 
						
						
				
								 if(email == ""){
								//alert("plz fill the contact email");
								//return false;
								document.getElementById('emil').innerHTML="plz enter email ";
								flag = false;
								}
								
								var emailreg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
								if(!email.match(emailreg))
								{
								document.getElementById('emil').innerHTML="enter validate domain specific email address";
								flag=false;
								}
								else{
									document.getElementById('emil').innerHTML="";
								}
								
									
								if((form.gender[0].checked==false) && (form.gender[1].checked==false))
								{ 
									var y = document.getElementById("gen").innerHTML = "you must select your gender";
                                 	flag = false;
								}else{
										document.getElementById('gen').innerHTML = "";
								}
									
									
								if((form.skills[0].checked==false) &&(form.skills[1].checked==false))
								{
                                 var z = document.getElementById("skll").innerHTML="you must select your skills";
                                 flag=false;
								}
                                else{
	                             document.getElementById('skll').innerHTML = "";
                                   }	
									
									
									if(flag==true)              

			{
				document.getElementById("formid").submit();
			}
				
		}


			</script>
    </body>
</html>

