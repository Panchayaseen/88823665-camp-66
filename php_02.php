<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">Number (1-100)</h1>
            <?php
            for($i = 1; $i <= 100; $i++) {
                $type = ($i % 2 === 0) ? 'Even' : 'Odd';
                ?>
                <div class="row mb-2">
                    <div class="h4 col text-end">Number : <?php echo $i; ?></div>
                    <div class="h4 col text-start"><?php echo $type; ?></div>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>