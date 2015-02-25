<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "Denne :attribute skal accepteres.",
	"active_url"           => "Dette :attribute er ikke en gyldig URL.",
	"after"                => "Dette :attribute skal være en dato efter :date.",
	"alpha"                => "Dette :attribute må kun indeholde bogstaver.",
	"alpha_dash"           => "Dette :attribute må kun indeholde bogstaver, tal, og bindestreg.",
	"alpha_num"            => "Dette :attribute må kun indeholde bogstaver og tal.",
	"array"                => "Dette :attribute skal være en array.",
	"before"               => "Dette :attribute skal være en dato før :date.",
	"between"              => array(
		"numeric" => "Dette :attribute skal være mellem :min og :max.",
		"file"    => "Denne :attribute skal være mellem :min og :max kilobytes.",
		"string"  => "Dette :attribute skal være mellem :min og :max karakterer.",
		"array"   => "Dette :attribute skal være mellem :min og :max ting.",
	),
	"boolean"              => "Dette :attribute felt skal være sandt eller falsk.",
	"confirmed"            => "Denne :attribute konfirmation matcher ikke.",
	"date"                 => "Dette :attribute er ikke en gyldig dato.",
	"date_format"          => "Dette :attribute passer ikke i formatet :format.",
	"different"            => "Denne :attribute og :other skal være forskellige.",
	"digits"               => "Dette :attribute skal være :digits tal langt.",
	"digits_between"       => "Dette :attribute skal være mellem :min og :max tal langt.",
	"email"                => "Dette :attribute skal være en gyldig email adresse.",
	"exists"               => "Denne valgte :attribute er ugyldig.",
	"image"                => "Dette :attribute skal være et billede.",
	"in"                   => "Dette valgte :attribute er ugyldig.",
	"integer"              => "Dette :attribute skal være et lige tal.",
	"ip"                   => "Dette :attribute skal være en gyldig IP adresse.",
	"max"                  => array(
		"numeric" => "Dette :attribute må ikke være større end :max.",
		"file"    => "Dette :attribute må ikke fylde mere end :max kilobytes.",
		"string"  => "Dette :attribute må ikke være større end :max karakterer.",
		"array"   => "Dette :attribute må ikke have flere end :max ting.",
	),
	"mimes"                => "Dette :attribute skal være en fil af typen: :values.",
	"min"                  => array(
		"numeric" => "Dette :attribute skal være mindst :min.",
		"file"    => "Dette :attribute skal være mindst :min kilobytes.",
		"string"  => "Dette :attribute skal være mindst :min karakterer.",
		"array"   => "Dette :attribute skal være mindst :min ting.",
	),
	"not_in"               => "Denne valgte :attribute er ugyldig.",
	"numeric"              => "Dette :attribute skal være et nummer.",
	"regex"                => "Dette :attribute format er ugyldigt.",
	"required"             => "Dette :attribute felt kræves.",
	"required_if"          => "Dette :attribute felt kræves når :other er :value.",
	"required_with"        => "Dette :attribute felt kræves når :values er der.",
	"required_with_all"    => "Dette :attribute felt kræves når :values er der.",
	"required_without"     => "Dette :attribute felt kræves når :values ikke er der.",
	"required_without_all" => "Dette :attribute felt kræves når ingen af :values er tilstede.",
	"same"                 => "Denne :attribute og :other skal være ens.",
	"size"                 => array(
		"numeric" => "Dette :attribute skal være :size.",
		"file"    => "Dette :attribute skal være :size kilobytes.",
		"string"  => "Dette :attribute skal være :size karakterer.",
		"array"   => "Dette :attribute skal indeholde :size ting.",
	),
	"unique"               => "Dette :attribute er allerede blevet taget.",
	"url"                  => "Dette :attribute format er ugyldigt.",
	"timezone"             => "Dette :attribute skal være en gyldig zone.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
