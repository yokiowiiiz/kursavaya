<div class=''>
	<div class=''>
		<div class=''>
		</div>
	</div>
	<div class=''>
	</div>
	<div class=''>
		<div class='version-tx1-package darkmode-txt'>
			<span>
				<span class='version-buildversion'>
					<?php
					if (isset($build))
						printf("Build %s", $build->version);
					else
						printf("");
					?>
				</span>
			</span>
		</div>
		<div class=''>
			<span>
				<span class=''>
					<?php
					if (isset($build))
						printf("This build was released on %s", $build->fulldate);
					else
						printf("");
					?>
				</span>
			</span>
		</div>
		<div class=''>
			<div class=''>
				<div class='version-ico-git' style="background: url() center left / 24px no-repeat;">
				</div>
				<?php
				if (isset($build))
					printf("Pull Request <a href=\"%s\" target=\"_blank\">#%d</a>",
						   $build->get_url_pr(),
						   $build->pr);
				else
					printf("");
				?>
			</div>
			<div class='t'>
				<div class='version-ico-git' style="background: url() center left / 24px no-repeat;">
				</div>
				<?php
				if (isset($build))
					printf("Commit <a href=\"%s\" target=\"_blank\">%s</a>",
						   $build->get_url_commit(),
						   $build->get_commit_short());
				else
					printf("");
				?>
			</div>
			<div class=''>
				<div class='version-ico-git' style="background: url() center left / 24px no-repeat;">
				</div>
				<?php
				if (isset($build))
					printf("Submitted by <a href=\"%s\" target=\"_blank\">%s</a>",
						   $build->get_url_author(),
						   $build->author);
				else
					printf("");
				?>
			</div>
		</div>
	</div>
</div>