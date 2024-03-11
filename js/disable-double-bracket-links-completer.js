wp.hooks.addFilter(
	'editor.Autocomplete.completers',
	'disable-double-bracket-links-completer',
	(completers) => completers.filter(
		(completer) => completer.name !== 'links'
	)
);
