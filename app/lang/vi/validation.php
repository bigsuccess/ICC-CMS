<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"         => ":attribute must be accepted.",
	"active_url"       => ":attribute không phải là URL hợp lệ.",
	"after"            => ":attribute phải là một ngày trước :date.",
	"alpha"            => ":attribute chỉ chứa các ký tự.",
	"alpha_dash"       => ":attribute chỉ chứa ký tự, số, và gạch dưới.",
	"alpha_num"        => ":attribute chỉ chứa ký tự và số.",
	"array"            => ":attribute phải là một mảng.",
	"before"           => ":attribute phải là một ngày sau :date.",
	"between"          => array(
		"numeric" => ":attribute trong khoảng :min và :max.",
		"file"    => ":attribute trong khoảng :min và :max Kb.",
		"string"  => ":attribute trong khoảng :min và :max ký tự.",
		"array"   => ":attribute trong khoảng :min và :max chỉ mục.",
	),
	"confirmed"        => ":attribute không trùng nhau.",
	"date"             => ":attribute không phải ngày hợp lệ.",
	"date_format"      => ":attribute định đạng không phù hợp :format.",
	"different"        => ":attribute và :other phải khác nhau.",
	"digits"           => ":attribute phải :digits chữ số.",
	"digits_between"   => ":attribute trong khoảng :min and :max chữ số.",
	"email"            => "Định dạng :attribute  không hợp lệ.",
	"exists"           => "lựa chọn :attribute không hợp lệ.",
	"image"            => ":attribute phải đúng định dạng ảnh.",
	"in"               => "lựa chọn :attribute không hợp lệ.",
	"integer"          => ":attribute phải là một số nguyên.",
	"ip"               => ":attribute phải là IP hợp lệ.",
	"max"              => array(
		"numeric" => ":attribute không vượt quá :max.",
		"file"    => ":attribute không vượt quá :max Kb.",
		"string"  => ":attribute không vượt quá than :max ký tự.",
		"array"   => ":attribute không vượt quá :max chỉ mục.",
	),
	"mimes"            => ":attribute phải đúng định dạng file :values.",
	"min"              => array(
		"numeric" => ":attribute không được nhỏ hơn :min.",
		"file"    => ":attribute không được nhỏ hơn :min Kb.",
		"string"  => ":attribute không được nhỏ hơn :min ký tự.",
		"array"   => ":attribute không được nhỏ hơn :min chỉ mục.",
	),
	"not_in"           => "lựa chọn :attribute không hợp lệ.",
	"numeric"          => ":attribute phải là một số.",
	"regex"            => ":attribute định dạng không đúng.",
	"required"         => ":attribute không được bỏ trống.",
	"required_if"      => ":attribute bắt buộc khi :other là :value.",
	"required_with"    => ":attribute bắt buộc khi :values là hiện tại.",
	"required_without" => ":attribute bắt buộc khi :values không phải hiện tại .",
	"same"             => ":attribute và :other phải phù hợp.",
	"size"             => array(
		"numeric" => ":attribute phải là :size.",
		"file"    => ":attribute phải là :size kilobytes.",
		"string"  => ":attribute phải là :size characters.",
		"array"   => ":attribute phải là :size items.",
	),
	"unique"           => ":attribute đã tồn tại.",
	"url"              => ":attribute định dạng không hợp lệ.",

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

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
