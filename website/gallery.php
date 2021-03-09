<?php
    include('config.php');
    include('includes/header.php');

	$Folk['Orcs'] = 'Orcs!_Badlands_Orcs are a ubiquitous bunch of brutes. Originally from the badlands they have since spread across the entire world. Big, green, and mean the orcs do everything for one singular purpose: War. Might makes right in all cases for them.';
	$Folk['Elves'] = 'Elves_Woodland_Elves are lean humanoids with pointy ears. They live a long life filled with elegance. They like to study the world as it changes, realigning it when needed. Fantastic wizards by the way.';
	$Folk['Dwarves'] = 'Dwarf_Mountain_Dwarves are stout and hardy folk. They treasure, well treasure. Master craftsmen, excellent laborers, and trustworthy pals dwarves are good to be around. That is as long as you are on their good side. Dwarves hold grudges longer than their beards!';
	$Folk['Merfolk'] = 'Merfo_Seafloor_Merfolk are distant cousins of elves that have taken up residence in the sea. They rarely venture onto land instead sticking to themselves underwater. Not very friendly to those disrupting the wildlife.';
	$Folk['Avians'] = 'Avian_Highland_Avians are a mysterious bunch. Mostly sticking to small roving tribes it can be hard to run into them. Each one is well travelled with a bounty of stories to those who get the chance to meet one.';
	$Folk['IronLords'] = 'Lords_Deserts _The Iron lords are the remnants of a race once brought to extinction. In desperation they made a pact transferring their souls into metal bodies. They live eternal lives marred by their ritualised replenishment process. Harvesting vagabond souls.';

?>

<!-- BEGIN GALLERY CONTENT -->
		<div class="gridContainer">
            <header>
                <h1>John Meyer's IT261 Gallery Page</h1>
            </header>
			<div class="galleryBox">
				<table>
					<?php foreach($Folk as $name => $image): ?>
						<tr>
							<td><img class="image" src="images/<?php echo substr($image, 0, 5) ;?>.jpg" alt="<?php echo $name;?>"></td>
							<td><?php echo str_replace('_', ' ', $name);?>
							<td><?php echo substr($image, 6, 8);?></td>
							<td><?php echo substr($image, 15);?></td>
						</tr>
					<?php endforeach ;?>
				</table>
			</div>
			
            <?php include('includes/footer.php')?>
			
		</div>
	</body>
</html>