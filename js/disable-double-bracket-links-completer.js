wp.hooks.addFilter(
	'editor.Autocomplete.completers',
	'salcode-disable-double-bracket-completer',
	(completers) => completers.filter(
		(completer) => completer.name !== 'links'
	)
);
