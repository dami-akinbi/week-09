<div class="p-2 text-end">
    <a href="#">
        <i data-toggle="tooltip" data-placement="bottom" title="Click to change category." class="fas <?php echo $_SESSION['icon']; ?> fa-2x"></i>
    </a>
</div>

<div id="box">
    <form action="functions.php" class="form form-inline col-6" method="POST">
        <legend>Select word list category:</legend>
        <div class="form-group">
            <select name="wordListCategory" id="" class="form-select">
                <option value="fruits" <?php if (getCategory() == "fruits") echo "selected"; ?>>Fruits</option>
                <option value="vegetables" <?php if (getCategory() == "vegetables") echo "selected"; ?>>Vegetables</option>
                <option value="science" <?php if (getCategory() == "science") echo "selected"; ?>>Science</option>
                <option value="lhb" <?php if (getCategory() == "lhb") echo "selected"; ?>>LHB First Names</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2" name="selectCategory">Submit</button>
    </form>
</div>

<?php
// if (getCategory() == "fruits") echo "selected";
?>