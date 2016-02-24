<?php $view->script('contact', 'contact:js/adminIndex.js', 'vue') ?>

<div class="uk-form uk-form-horizontal uk-width-1-1" id="emails">
	<div class="uk-alert" v-if="!emails.length">{{ 'No entries' | trans }}</div>
	<ul class="uk-list uk-list-line" v-if="emails.length">
		<li class="uk-text-large" v-for="entry in emails">
			<div class="uk-width-medium-1-1">
			    <div class="uk-panel uk-panel-box">
					<div class="uk-panel-badge uk-badge">{{ entry.date }}</div>
					<h3 class="uk-panel-title">{{ entry.name }} | {{ entry.email }}</h3>
					{{ entry.message }}
				</div>
			</div>
        </li>
    </ul>
</div>
