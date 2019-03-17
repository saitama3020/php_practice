<?php 

if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}

?>


<!DOCTYPE html>
<html>
<body>
    <form action="" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" id="name" name="username">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="beer">Beer: </label>
            <select name="beer[]" id="beer" multiple>
                <option value="warthog">Warthog</option>
                <option value="guinness">Guinness</option>
                <option value="stuttgarter">Stuttgarter</option>
            </select>
        </div>
        <input type="image" src="image.gif" name="submit">
    </form>
</body>
</html>

