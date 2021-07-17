<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>::Registraion form::</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="validreg.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Registration Form</h2>
  
        <div class="row">
        <div class="col-sm-6">
        <form name="mypage" action="qual.php" method="post"  >

            <div class="form-group">
                <label for="stu_uid">Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
            </div>
            <div class="form-group">
                <label for="cpwd">Confirm Password:</label>
                <input type="password" class="form-control" id="cpwd" placeholder="Enter Confirm Password" name="cpwd">
            </div>


            <label for="gender">Gender:</label>
            <div class="form-group">
            <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio"class="form-check-input" name="gender" value="male">Male
                  </label>
            
                  <label class="radio-check-inline">
                      <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="female">Female
                  </label>
            </div>
        </div>

            <label for="hobby">Hobbies:</label>
            <div class="form-group" >
                <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Singing">Singing
              </label>
              </div>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Reading">Reading
              </label>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Playing">Playing
              </label>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Sleeping">Sleeping
              </label>
            </div>

            <label for="dob">Date of Birth:</label>
            <div class="form-group">
              <div class="row">
                <div class="col">
                <select class="form-control form-control-sm" id="date" name="date">
                  <option selected disabled>Select Date</option>
                  <option >1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                 </div>
                 <div class="col">
                  <select class="form-control form-control-sm" id="month" name="month">
                    <option selected disabled>Select Month</option>
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                  </select>
                   </div>
                   <div class="col">
                    <select class="form-control form-control-sm" id="year" name="year">
                      <option selected disabled>Select Year</option>
                      <option>1997</option>
                      <option>1998</option>
                      <option>1999</option>
                      <option>2000</option>
                      <option>2001</option>
                    </select>
                     </div>
                </div>
                </div>


            <div class="form-group">
                <label for="stu_contact">Contact:</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
            </div>
            <br>
            <input type="submit" class="btn btn-danger" value="Submit" onClick="return CheckData();">
            </form>
            </div>
    </body>
</html>