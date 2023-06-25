<form action="../../includes/Services.php">
    <h2>Modifier les prestations</h2>
    <label for="drain" class="col-sm-2 control-label">Vidange<span style="color:red">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="drain" name="drain" class="form-control" required>
    </div>
    <label for="battery" class="col-sm-2 control-label">Batterie<span style="color:red">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="battery" name="battery" class="form-control" required>
    </div>
    <label for="engine" class="col-sm-2 control-label">Moteur<span style="color:red">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="engine" name="engine" class="form-control" required>
    </div>
    <label for="tires" class="col-sm-2 control-label">Pneus<span style="color:red">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="tires" name="tires" class="form-control" required>
    </div>
    <label for="carbody" class="col-sm-2 control-label">Carrosserie<span style="color:red">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="carbody" name="carbody" class="form-control" required>
    </div>
    <div class="col-sm-8 col-sm-offset-2">
        <button class="btn btn-danger" name="submit_services" type="submit" value="Click" onclick="modifyPrestation();">Enregistrer</button>
    </div>
</form>