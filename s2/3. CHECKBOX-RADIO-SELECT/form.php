
<form method="post" action="process.php">
    <div class="mb-3">
        <select  class="form-control" name="option">
            <option selected disabled   name="option">Choose province</option>
            <option value="Banteay Mean Chey" name="option">Banteay Mean Chey</option>
            <option value="Battambang" name="option">Battambang</option>
            <option value="Siem Riep" name="option">Siem Riep</option>
            <option value="Prey Veng" name="option">Prey Veng</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" value="HTML" name="checkbox[]">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" value="CSS" name="checkbox[]">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" value="JavaScript" name="checkbox[]">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" value="PHP" name="checkbox[]">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female" value="Female" name="gender">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" id="Male" value="Male" name="gender">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>