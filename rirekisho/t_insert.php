<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Add</h1>
    </header>
    <section>
      <h1>Pleace Fill the details</h1>
      <div>
        <form action="insert.php" method="post" enctype="multipart/form-data">
          <p><label for="name">Name: </label><input id="name" type="text" name="name" value=""></p>
            <fieldset>
              <legend>Gender</legend>
              <input id="male" type="radio" name="gender" value="1"><label for="male">Male</label> <input type="radio" id="female" name="gender" value="2"><label for="female">Female</label>
            </fieldset>
          <p>
            <label for="dob">Date of Birth: </label><input id="dob" type="date" name="dob" value="">
          </p>
          <p>
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows='3' cols='60'></textarea><br>
          </p>
          <fieldset>
            <legend>Subjects</legend>
            <input id="nihongo" type="checkbox" name="subjects[]" value="1"><label for="nihongo">Japanese</label><input id="mathematics" type="checkbox" name="subjects[]" value="2"><label for="mathematics">Mathematics</label> <input type="checkbox" name="subjects[]" value="4" id="science"><label>Science</label>
          </fieldset>
          <p>
            <label for="image">Image:<label>
            <input id="image" type="file" name="image">
          </p>

          <p>
            <input type="submit" name="submit" value="Add">
          </p>
        </form>
      </div>
   </section>
  </body>

  <script>

  </script>

</html>
