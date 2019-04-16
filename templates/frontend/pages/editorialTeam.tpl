{**
 * templates/frontend/pages/editorialTeam.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the editorial team.
 *
 * @uses $currentJournal Journal The current journal
 *}
{include file="frontend/components/header.tpl" pageTitle="plugins.themes.bootstrapChild.editorial.title"}

<div id="main-content" class="page page_editorial_team">

	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="plugins.themes.bootstrapChild.editorial.title"}

	{* Page Title *}
	<div class="page-header">
		<h1>{translate key="plugins.themes.bootstrapChild.editorial.title"}</h1>
	</div>
	{* /Page Title *}

	{$currentJournal->getLocalizedSetting('editorialTeam')}
</div><!-- .page -->

{include file="common/frontend/footer.tpl"}
