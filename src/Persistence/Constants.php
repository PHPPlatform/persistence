<?php

namespace PhpPlatform\Persistence;

interface Constants {
	const VALUE            = "VALUE";
	
	const OPERATOR_LIKE    = "LIKE";
	const OPERATOR_EQUAL   = "=";
	const OPERATOR_NOT_EQUAL = "!=";
	const OPERATOR_LT      = "<";
	const OPERATOR_GT      = ">";
	const OPERATOR_LTE     = "<=";
	const OPERATOR_GTE     = ">=";
	const OPERATOR_BETWEEN = "BETWEEN";
	const OPERATOR_IN      = "IN";
	
	const SORTBY_ASC       = "ASC";
	const SORTBY_DESC      = "DESC";
}