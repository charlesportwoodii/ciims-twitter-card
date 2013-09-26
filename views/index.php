<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.$asset; ?>/css/card.css" />
<div id="<?php echo $model->scriptName; ?>" data-attr-id="<?php echo $model->id; ?>">
	<div class="card-header">
		<div class="title pull-left">Twitter Stats</div>
		<div class="title pull-right" id="user">@<?php echo Cii::get($model->username, null); ?></div>
		<div class="clearfix"></div>
	</div>
	<div class="card-body">
		<div class="user-info">
			<img class="user-image rounded-img" src="data:null" />
			<span class="name"></span>
		</div>
		<div class="details pull-right">
			<div class="section">
				<span class="count" id="followers"></span>
				<span>Followers</span>
			</div>
			<div class="section">
				<span class="count" id="tweets"></span>
				<span>Tweets</span>
			</div>
			<div class="section">
				<span class="count" id="following"></span>
				<span>Following</span>
			</div>
		</div>
	</div>
</div>
