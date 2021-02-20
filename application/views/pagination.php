<?php 
	$pages = ceil($pagination['total'] / $pagination['limit']);
	$page = $this->input->get('page') ? $this->input->get('page') : 1;
?>
<?php if($pagination['total'] > $pagination['limit']): ?>

<table border="0">
	<tr>
		<?php if ($page != 1): ?>
			<td>
				<a class="page-link" href="<?php if($page != 1) echo '?page=' . strval($page - 1) ?>" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
				</a>
			</td>
		<?php endif ?>
		<?php if ($page <= $pagination['limit']): ?>
			<td>
				<a class="page-link" href="<?php if($page != $pages) echo '?page=' . strval($page + 1) ?>" aria-label="Next">
					<span class="sr-only">Next</span>
					<span aria-hidden="true">&raquo;</span>
				</a>
			</td>
		<?php endif ?>
	</tr>
	
</table>
<?php endif ?>