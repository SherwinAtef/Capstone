
<?php

	error_reporting(0);
		
	include("database_config.php");
	$query = $db->prepare("SELECT * FROM roster WHERE role = 'HQ'");
	$query->execute();
	$query2 = $db->prepare("SELECT * FROM roster WHERE role = 'Troops'");
	$query2->execute();
	$query3 = $db->prepare("SELECT * FROM roster WHERE role = 'Elites'");
	$query3->execute();
	$query4 = $db->prepare("SELECT * FROM roster WHERE role = 'Fast Attack'");
	$query4->execute();
	$query5 = $db->prepare("SELECT * FROM roster WHERE role = 'Heavy Support'");
	$query5->execute();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Warhammer 40k Army Builder</title>

<link href="Stylesheet.css" rel="stylesheet"/>
<link href="bootstrap.css" rel="stylesheet"/>
 

<link rel="dns-prefetch" href="//fonts.googleapis.com">
 <link rel="dns-prefoetch" href="//ajax.googleapis.com">

</head>

<body style="background-color:  #eee;">

	<div class="main">
		
		
		<div class="panel panel-default wsbUnitContainerPanel">
		<div >Total Power Level: </div><p id="total"> </p>
		<br/>
		<div class="row">
		
			<div class="col-xs-6">
				<div class="panel-heading wsbUnitContainerHeader"><b>HQ</b>
				<br></div>
				
			</div>
			<div class="col-xs-6 text-right">
				<div class="add-dropdown-wrapper">
					<div class="dropdown">
						<select id="HQDropDownList">
							Add a HQ
							<span class="caret"></span>
								<ul class="dropdown-menu pull-right stay-right" aria-labelledby="addHQDropdown">
										<?php
							while($row=$query->fetch(PDO::FETCH_ASSOC))
							{
								$name=$row['Name'];
								$power=$row['Powerlevel'];
								$id=$row['Id'];
								?>
								<lo>
								<div class="rect">
									
									<p><?php echo $power; ?></p>
									
										<option value=<?php echo $id; ?> ><?php echo $name ,' ', $power ;?></option>
										</lo>
										
								<br><br></div>
						<?php	} ?>
						</ul>
						
						</select>
						
							
							
						
					
					</div>
					<table id="HQrost">
					
					
				</table>
				</div>
			</div>
		</div>
		<div class="panel-body"><ul id="HQPanelBody" class="list-unstyled"></ul></div>
		
	</div>
	<button onclick ="addunitHQ();" style ="display:block;margin:auto;" id = "addHQ" value="addHQ"> Add HQ</button>
	<br>
		<div class="panel panel-default wsbUnitContainerPanel">
		<div class="row">
			<div class="col-xs-6">
				<div class="panel-heading wsbUnitContainerHeader"><b>Troops </b><br/></div>
			</div>
			<div class="col-xs-6 text-right">
				<div class="add-dropdown-wrapper">
					<div class="dropdown">
							<select style="display: inherit" id="TRDropDownList">
							Add a Troop
							<span class="caret"></span>
								<ul class="dropdown-menu pull-right stay-right" aria-labelledby="addTRDropdown" id="addTRDropDownList">
										<?php
							while($row=$query2->fetch(PDO::FETCH_ASSOC))
							{
								$name=$row['Name'];
								$power=$row['Powerlevel'];
								$id=$row['Id'];
								?>
								<lo>
								<div class="rect">
									
									<p><?php echo $power; ?></p>
									
										<option value=<?php echo $id; ?> ><?php echo $name ,' ', $power ;?></option>
										</lo>
								<br><br></div>
						<?php	} ?>
						</ul>
						</select>
							
						</ul>
					</div>
				</div>
				<table id="TRrost">
					
					
				</table>
			</div>
		</div>
		<div class="panel-body"><ul id="TRPanelBody" class="list-unstyled"></ul></div>
	</div>
		<button onclick =" addunitTR();" style ="display:block;margin:auto;" id = "addTR" value="addTR"> Add Troop</button>
		<br>
		<div class="panel panel-default wsbUnitContainerPanel">
		<div class="row">
			<div class="col-xs-6">
				<div class="panel-heading wsbUnitContainerHeader"><b>Elite </b><br/></div>
			</div>
			<div class="col-xs-6 text-right">
				<div class="add-dropdown-wrapper">
					<div class="dropdown">
						<select id="ELTDropDownList">
							Add a Elite 
							<span class="caret"></span>
								<ul class="dropdown-menu pull-right stay-right" aria-labelledby="addELTDropdown" id="addELTDropDownList">
										<?php
							while($row=$query3->fetch(PDO::FETCH_ASSOC))
							{
								$name=$row['Name'];
								$power=$row['Powerlevel'];
								$id=$row['Id'];
								?>
								<lo>
								<div class="rect">
									
									<p><?php echo $power; ?></p>
									
										<option value=<?php echo $id; ?> ><?php echo $name ,' ', $power ;?></option>
										</lo>
								<br><br></div>
						<?php	} ?>
						</ul>
						</select>
					</div>
				</div>
				<table id="ELTrost">
					
					
				</table>
			</div>
		</div>
		<div class="panel-body"><ul id="ELTPanelBody" class="list-unstyled"></ul></div>
	</div>
		<button onclick =" addunitELT();" style ="display:block;margin:auto;" id = "addELT" value="addELT"> Add Elite</button>
		<br>
		<div class="panel panel-default wsbUnitContainerPanel">
		<div class="row">
			<div class="col-xs-6">
				<div class="panel-heading wsbUnitContainerHeader"><b>Fast Attack </b><br/></div>
			</div>
			<div class="col-xs-6 text-right">
				<div class="add-dropdown-wrapper">
					<div class="dropdown">
						<select style="display: inherit" id="FADropDownList">
							Add a Fast Attack
							<span class="caret"></span>
								<ul class="dropdown-menu pull-right stay-right" aria-labelledby="addFADropdown" id="FADropDownList">
										<?php
							while($row=$query4->fetch(PDO::FETCH_ASSOC))
							{
								$name=$row['Name'];
								$power=$row['Powerlevel'];
								$id=$row['Id']
								?>
								<lo>
								<div class="rect">
									
									<p><?php echo $power; ?></p>
									
										<option value=<?php echo $id ?>><?php echo $name , ' ', $power ;?></option>
										</lo>
								<br><br></div>
						<?php	} ?>
						</ul>
						</select>
					</div>
				</div>
				<table id="FArost">
					
					
				</table>
			</div>
		</div>
		<div class="panel-body"><ul id="HSPanelBody" class="list-unstyled"></ul></div>
	</div>
		<button onclick =" addunitFA();" style ="display:block;margin:auto;" id = "addFA" value="addFA"> Add Fast Attack</button>
		<br>
		<div class="panel panel-default wsbUnitContainerPanel">
		<div class="row">
			<div class="col-xs-6">
				<div class="panel-heading wsbUnitContainerHeader"><b>Heavy Support </b><br/></div>
			</div>
			<div class="col-xs-6 text-right">
				<div class="add-dropdown-wrapper">
					<div class="dropdown">
						<select style="display: inherit" id="HSDropDownList">
							Add a Heavy Support
							<span class="caret"></span>
								<ul class="dropdown-menu pull-right stay-right" aria-labelledby="addHSDropdown" id="HSDropDownList">
										<?php
							while($row=$query5->fetch(PDO::FETCH_ASSOC))
							{
								$name=$row['Name'];
								$power=$row['Powerlevel'];
								$id=$row['Id'];
								?>
								<lo>
								<div class="rect">
									
									<p><?php echo $power; ?></p>
									
										<option value=<?php echo $id ?>><?php echo $name, ' ' ;echo $power;?></option>
										</lo>
								<br><br></div>
						<?php	} ?>
						
						
						</ul>
						</select>
					</div>
				</div>
				<table id="HSrost">
					
					
				</table>
				
			</div>
			
		</div>
			<button onclick =" addunitHS();" style ="display:block;margin:auto;margin-top: 1em;" id = "addHS" value="addHS	"> Add Heavy Support</button>
			<br>
		<div class="panel-body"><ul id="heroesPanelBody" class="list-unstyled"></ul></div>
		
	</div>
		<div class="main" style="display:block;margin:auto;">
		
		
		
	<form action="save.php" method="post">
		<input name="liFile" id="liFile" type="text" class="text-input__element loadsave-army-name" maxlength="140" required>
		<button onClick="save();" id="savelist" type="submit">
		save
	</button>
	</form>

	
	
	<button id="loadlist" style="margin-top: 1em" >
		Load
	</button>
	

	</div>
	
	</div>
	
	<script src="./javascript/script.js"></script>
	<script src="./javascript/jquery-3.3.1.slim.min.js.download" ></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./javascript/popper.min.js.download"></script>
    <script src="./javascript/bootstrap.min.js.download"></script>

  
</body>

</html>