<div class="row">
	<div class="col-12 text-center">
		<div class="btn-group switch">
			<a href="#" class="btn <?php echo ($opened = !$this->config->nf_maintenance) ? 'btn-success' : 'btn-light' ?>"><?php echo icon($opened ? 'fas fa-toggle-on' : 'fas fa-toggle-off').' '.$this->lang('Open') ?></a>
			<a href="#" class="btn <?php echo !$opened ? 'btn-danger' : 'btn-light' ?>"><?php echo icon(!$opened ? 'fas fa-toggle-on' : 'fas fa-toggle-off').' '.$this->lang('Closed') ?></a>
		</div>
	</div>
</div>
