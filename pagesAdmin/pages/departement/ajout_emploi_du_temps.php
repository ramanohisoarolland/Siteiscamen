
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="icon" href="images/logo.jpg">
	<style>
        .content{
	margin-left: 0rem;
	top: 0;
	}

</style>
    <?php
    include('header.php');
    ?>
	<form action="action.php" method="post">
		<div class="container col-md-12">
			<div class="d-flex" style="justify-content: space-between;">
				<div class="form-group" style="margin-left: 23rem;">
					<label for="">votre Departements</label>
					<select name="filiere" id="" class="form-control col-md-8" style="width: 30rem; height: 3.4rem;">
						<option value=""></option>	
						<option value="ecotourisme">ECOTOURISME</option>	
						<option value="gestion">GESTION</option>	
						<option value="paramedicaux">PARAMEDICAUX</option>	
						<option value="pedagogique">PEDAGOGIQUE</option>	
						<option value="informatique">INFORMTIQUE</option>	
					</select>
				</div>
				<div class="form-group">
					<label for="">Niveaux</label>
					<select name="niveau" id="" class="form-control col-md-8" style="width: 30rem; height: 3.4rem;">
						<option value=""></option>	
						<option value="licence1">LICENCE 1</option>	
						<option value="licence2">LICENCE 2</option>	
						<option value="licence3">LICENCE 3</option>	
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-9" style="margin-left: 20rem;">
			<table class="table ">
				<thead>
					<tr>
						<th>Heure</th>
						<th>Lundi</th>
						<th>Mardi</th>
						<th>Mercredi</th>
						<th>Jeudi</th>
						<th>Vendredi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<select name="heure" id="" class="form-control" style="width: 15rem; height: 3.4rem;">
								<option value="7h-9h">7h-9h</option>
							</select>
						</td>
						<td><input type="text" name="lundi" class="form-control"></td>
						<td><input type="text" name="mardi" class="form-control"></td>
						<td><input type="text" name="mercredi" class="form-control"></td>
						<td><input type="text" name="jeudi" class="form-control"></td>
						<td><input type="text" name="vendredi" class="form-control"></td>
					</tr>	
					<tr>
						<td>
							<select name="heure1" id="" class="form-control" style="width: 15rem; height: 3.4rem;">
								<option value="9h-11h">9h-11h</option>
							</select>
						</td>
						<td><input type="text" name="lundi1" class="form-control"></td>
						<td><input type="text" name="mardi1" class="form-control"></td>
						<td><input type="text" name="mercredi1" class="form-control"></td>
						<td><input type="text" name="jeudi1" class="form-control"></td>
						<td><input type="text" name="vendredi1" class="form-control"></td>
					</tr>	
					<tr>
						<td>
							<select name="heure2" id="" class="form-control" style="width: 15rem; height: 3.4rem;">
								<option value="14h-16h">14h-16h</option>
							</select>
						</td>
						<td><input type="text" name="lundi2" class="form-control"></td>
						<td><input type="text" name="mardi2" class="form-control"></td>
						<td><input type="text" name="mercredi2" class="form-control"></td>
						<td><input type="text" name="jeudi2" class="form-control"></td>
						<td><input type="text" name="vendredi2" class="form-control"></td>
					</tr>	
					<tr>
						<td>
							<select name="heure3" id="" class="form-control" style="width: 15rem; height: 3.4rem;">
								<option value="16h-18h">16h-18h</option>
							</select>
						</td>
						<td><input type="text" name="lundi3" class="form-control"></td>
						<td><input type="text" name="mardi3" class="form-control"></td>
						<td><input type="text" name="mercredi3" class="form-control"></td>
						<td><input type="text" name="jeudi3" class="form-control"></td>
						<td><input type="text" name="vendredi3" class="form-control"></td>
					</tr>				
				</tbody>
			</table>
			<div class="container" style="margin-left: 8rem;">
				<input type="submit"	class="btn btn-lg btn-primary" name="enregistrer" value="Enregistrer">
			</div>
		</div>

	</form>
</div>
</div>