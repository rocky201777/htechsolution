<!DOCTYPE html>
<html>
	<head>
		<title>email</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
         <div class="container-fluid mt-5">
      <form class="text-danger" style="font-weight: bold;" method="post" action="process_contact.php">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for=name>Name</label>
              <input type="text" name="name" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=email>Email</label>
              <input type="email" name="email" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=subject>Subject</label>
              <input type="text" name="subject" id="" value="" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=comment>Comment</label>
              <textarea name="comments" id="" cols="20" rows="10" class="form-control" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit" id="" value="">Send Email</button>
          </div>
        </div>
      </form>
    </div>
	</body>
</html>
