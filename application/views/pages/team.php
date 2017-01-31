<div class="jumbotron jumbotron-main jumbotron-fluid flex" style="background-image: url('<?php echo base_url().$images[7]['imageURL']; ?>')">
	<div class="container-fluid fixed-width-container">
		<h1 class="text-center">The Team</h1>
	</div>
</div>
<section>
	<div class="container-fluid fixed-width-container team">
		<div class="team__txt text-center"><?php echo $teamContent; ?></div>
		<div class="team-members flex">
			<?php foreach ($team as $key => $value) { ?>
			<div class="team-member flex flex-col">
				<div class="team-member__pic" style="background-image: url('<?php echo base_url().$value['imageURL']; ?>')"></div>
				<div class="team-member__desc text-center">
					<p class="team-member__name"><?php echo $value['name']; ?></p>
					<p class="team-member__role"><?php echo $value['role']; ?></p>
					<div class="team-member__about"><?php echo $value['description']; ?></div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
