<?php include '../view/header.php'; ?>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Content/css/a.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="dist/jquery.simple-popup.settings.css" rel="stylesheet" type="text/css" />


</head>
<body>

	<fieldset>
        <center><h3><b><font color = "#4CAF50">Add New To-Do Item - TO DO LIST</h3></b></center>
		 <div class="container">


            <div class="form-group">

		<form action = "index.php" class = "form-signin" method = "post"> 
			<input type="hidden" name="action" value="add_item">
			<input type="hidden" name="id" value="<?php echo $edit['id']; ?>">

			<p>Start Date:</p>
			<input type = date id = "createddate" class = "form-control" placeholder = "Enter Start Date" name = "createddate" value = "<?php echo date('Y-m-d', strtotime($edit['createddate'])); ?>" /><br>

			<p>Message:</p>
			<input type = text id = "message" class = "form-control" placeholder = "Enter Message" name = "message" value = "<?php echo $edit['message']; ?>"/><br>

			<p>Due Date:</p>
			<input type = date id = "duedate" class = "form-control" placeholder = "Enter Due Date" name = "duedate" value = "<?php echo date('Y-m-d', strtotime($edit['duedate'])); ?>"/><br>

			<?php if($edit['id'] == NULL) :?>
      	<center><input type="submit" button class="button button1" value="Add Item"> <br></center>
				

			<?php else :?>
				<center><input type="submit" button class="button button1" value="Save Item"> <br></center>
			
			<?php endif; ?>
			<a class="link2" href="index.php"> Go back </a>
		</form>	


</body>

</html>

<?php include '../view/footer.php'; ?>