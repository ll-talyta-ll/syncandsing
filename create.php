<label for="data_nascimento">Data de nascimento:</label>
<input type="date" class="form-control" id="data_nascimento" name="data_nascimento" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" required>
