<div class="row text-center justify-content-center mt-4">
    <div class="col-6">
        <?php
        foreach (range('A', 'Z') as $letter) {
            if (in_array($letter, $_SESSION['guesses'])) {
                // grey button
                echo "<button class='btn btn-secondary disabled alphabetButton' id='$letter'>$letter</button>";
            } else {
                // blue button
                echo "<button class='btn btn-info alphabetButton' id='$letter'>$letter</button>";
            }
        }
        ?>
    </div>
</div>

<!-- <div class="col-auto">
    <select class="form-select" name="guess">
        <?php
        // foreach ($remainingLetters as $letter) {
        //     echo '<option value="' . strtoupper($letter) . '">' . strtoupper($letter) . '</option>';
        // }
        ?>
    </select>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="submit">GUESS</button>
</div> -->