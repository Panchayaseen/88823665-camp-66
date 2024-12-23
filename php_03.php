<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
        <h1 class="text-center">สูตรคูณ</h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="tableNumber" class="form-label">Enter a Number</label>
                    <input name="tableNumber" type="number" class="form-control" id="tableNumber" placeholder="Enter a number" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Enter</button>
                </div>
            </form>

            <?php
            if (isset($_POST['tableNumber'])) {
                $number = (int)$_POST['tableNumber'];
                echo "<h2 class='text-center mt-4'>สูตรคูณแม่ $number</h2>";
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    ?>
                    <div class="row mb-2">
                        <div class="h4 col text-end"><?php echo "$number x $i ="; ?></div>
                        <div class="h4 col text-start"> <?php echo $result; ?></div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </body>
</html>