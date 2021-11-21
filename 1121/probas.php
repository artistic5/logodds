<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'8, 1, 2, 3, 13, 12, 11, 9, 10, 14, 5, 7, 4, 6',
		'Poor man\'s bet' ,
			'Win' => '4, 6, 10, 11, 13',
			'Qin' => '8 X 4, 6, 10, 11, 13',
		'Qin/Tce|Trio/F4' ,
			'4, 6, 10, 11, 13',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 8, 11, 13',
		'Qin($20)' ,
			'8, 1, 2, 3',
		'Qpl($30)' ,
			'8 X 1, 3, 12',
		'Qpl($20)' ,
			'2 X 1, 3, 12',
		'Qpl, Qin($10)' ,
			'8, 1, 2 X 14, 5, 7',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'8, 1, 2 X 10, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'4, 3, 14, 9, 1, 13, 2, 7, 6, 10, 11, 12, 8, 5',
		'Poor man\'s bet' ,
			'Win' => '2, 5, 6, 10, 11',
			'Qin' => '4 X 2, 5, 6, 10, 11',
		'Qin/Tce|Trio/F4' ,
			'2, 5, 6, 10, 11',
		'Qin($10), Tce($1)' ,
			'2, 3, 4, 6, 9, 13, 14',
		'Qin($20)' ,
			'4, 3, 14, 9',
		'Qpl($30)' ,
			'4 X 3, 14, 9',
		'Qpl($20)' ,
			'13 X 3, 14, 9',
		'Qpl, Qin($10)' ,
			'4, 3, 14, 13 X 7, 12, 5',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'4, 3, 14, 13 X 10, 11, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'8, 4, 2, 1, 3, 5, 7, 6',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6, 8',
			'Qin' => '8 X 2, 4, 6, 8',
		'Qin/Tce|Trio/F4' ,
			'2, 4, 6, 8',
		'Qin($10), Tce($1)' ,
			'1, 2, 4, 6, 8',
		'Qin($20)' ,
			'8, 4, 2, 1',
		'Qpl($30)' ,
			'8 X 1, 3, 5',
		'Qpl($20)' ,
			'4 X 1, 3, 5',
		'Qpl, Qin($10)' ,
			'8, 4, 2 X 3, 5, 7',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'8, 4, 2 X 4, 2, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'10, 8, 2, 11, 5, 1, 6, 9, 14, 7, 4, 3, 13, 12',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6, 11, 12',
			'Qin' => '10 X 2, 4, 6, 11, 12',
		'Qin/Tce|Trio/F4' ,
			'2, 4, 6, 11, 12',
		'Qin($10), Tce($1)' ,
			'2, 8, 10, 11',
		'Qin($20)' ,
			'10, 8, 2, 11',
		'Qpl($30)' ,
			'10 X 5, 1, 9',
		'Qpl($20)' ,
			'8 X 5, 1, 9',
		'Qpl, Qin($10)' ,
			'10, 8, 2 X 7, 3, 12',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'10, 8, 2 X 6, 4, 13',
	],
	'5' => [
		/**
		Race 5
		*/
		'5, 6, 7, 8, 3, 11, 10, 12, 4, 13, 9, 1, 14, 2',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 9, 12',
			'Qin' => '5 X 1, 2, 3, 9, 12',
		'Qin/Tce|Trio/F4' ,
			'1, 2, 3, 9, 12',
		'Qin($10), Tce($1)' ,
			'3, 5, 6, 7, 8, 12',
		'Qin($20)' ,
			'5, 6, 7, 8',
		'Qpl($30)' ,
			'5 X 6, 8, 11',
		'Qpl($20)' ,
			'7 X 6, 8, 11',
		'Qpl, Qin($10)' ,
			'5, 6, 7 X 4, 13, 2',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'5, 6, 7 X 9, 1, 14',
	],
	'6' => [
		/**
		Race 6
		*/
		'9, 2, 10, 3, 6, 8, 1, 7, 4, 5',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 5, 7',
			'Qin' => '9 X 1, 3, 5, 7',
		'Qin/Tce|Trio/F4' ,
			'1, 3, 5, 7',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 7, 9, 10',
		'Qin($20)' ,
			'9, 2, 10, 3',
		'Qpl($30)' ,
			'9 X 2, 10, 6',
		'Qpl($20)' ,
			'3 X 2, 10, 6',
		'Qpl, Qin($10)' ,
			'9, 2, 10, 3 X 6, 8, 4',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'9, 2, 10, 3 X 1, 7, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'5, 4, 2, 7, 6, 1, 3',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 5, 7',
			'Qin' => '5 X 1, 3, 5, 7',
		'Qin/Tce|Trio/F4' ,
			'1, 3, 5, 7',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 4, 5, 7',
		'Qin($20)' ,
			'5, 4, 2, 7',
		'Qpl($30)' ,
			'5 X 4, 2, 6',
		'Qpl($20)' ,
			'7 X 4, 2, 6',
		'Qpl, Qin($10)' ,
			'5, 4, 2, 7 X 4, 2, 6',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'5, 4, 2, 7 X 7, 1, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'4, 1, 5, 2, 3, 7, 6',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6',
			'Qin' => '4 X 2, 4, 6',
		'Qin/Tce|Trio/F4' ,
			'2, 4, 6',
		'Qin($10), Tce($1)' ,
			'1, 2, 4, 5, 6',
		'Qin($20)' ,
			'4, 1, 5, 2',
		'Qpl($30)' ,
			'4 X 1, 5, 3',
		'Qpl($20)' ,
			'2 X 1, 5, 3',
		'Qpl, Qin($10)' ,
			'4, 1, 5, 2 X 5, 3, 7',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'4, 1, 5, 2 X 4, 2, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'3, 9, 2, 5, 4, 6, 10, 7, 8, 11, 1',
		'Poor man\'s bet' ,
			'Win' => '1, 5, 7, 9',
			'Qin' => '3 X 1, 5, 7, 9',
		'Qin/Tce|Trio/F4' ,
			'1, 5, 7, 9',
		'Qin($10), Tce($1)' ,
			'2, 3, 5, 7, 9',
		'Qin($20)' ,
			'3, 9, 2, 5',
		'Qpl($30)' ,
			'3 X 2, 4, 6',
		'Qpl($20)' ,
			'9 X 2, 4, 6',
		'Qpl, Qin($10)' ,
			'3, 9, 2 X 10, 8, 11',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'3, 9, 2 X 5, 7, 1',
	],
	'10' => [
		/**
		Race 10
		*/
		'6, 9, 1, 3, 11, 8, 5, 2, 7, 14, 4, 10, 13, 12',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 8, 10, 12',
			'Qin' => '6 X 2, 4, 8, 10, 12',
		'Qin/Tce|Trio/F4' ,
			'2, 4, 8, 10, 12',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 6, 8, 9, 11',
		'Qin($20)' ,
			'6, 9, 1, 3',
		'Qpl($30)' ,
			'6 X 9, 1, 3',
		'Qpl($20)' ,
			'11 X 9, 1, 3',
		'Qpl, Qin($10)' ,
			'6, 9, 1, 11 X 7, 14, 12',
		'-----------ideally-----------------',
		'Qpl, Qin($10)' ,
			'6, 9, 1, 11 X 4, 10, 13',
	],
];
