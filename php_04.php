<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
        <h1 class="text-center">Even or Odd Checker</h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="startNumber" class="form-label">Start Number</label>
                    <input name="start" type="number" class="form-control" id="startNumber" placeholder="Enter start number" required>
                </div>
                <div class="mb-3">
                    <label for="endNumber" class="form-label">End Number</label>
                    <input name="end" type="number" class="form-control" id="endNumber" placeholder="Enter end number" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Check Numbers</button>
                </div>
            </form>

            <?php
            if (isset($_POST['start']) && isset($_POST['end'])) {
                $start = (int)$_POST['start'];
                $end = (int)$_POST['end'];

                if ($start <= $end) {
                    echo "<h2 class='text-center mt-4'>From $start to $end</h2>";
                    for ($i = $start; $i <= $end; $i++) {
                        $type = ($i % 2 === 0) ? 'Even' : 'Odd';
                        ?>
                        <div class="row mb-2">
                            <div class="h4 col text-end">Number <?php echo $i; ?> :</div>
                            <div class="h4 col text-start"> <?php echo $type; ?></div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='alert alert-danger mt-4 text-center'>Eror</div>";
                }
            }
            ?>
        </div>
    </body>
</html>