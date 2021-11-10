<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'4, 11, 1, 12, 2, 7, 3, 10, 9, 5, 8, 6',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 4, 10, 11, 12',
			'Qpl/Qin/Fct' => '4, 11' X '1, 12',
		'Qin(opt $20)' ,
			'4, 11, 1, 12',
		'Qpl($30)' ,
			'4 X 1, 12, 7',
		'Qpl($20)' ,
			'11 X 1, 12, 7',
		'Qpl($10)' ,
			'4, 11, 1 X 3, 9, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 11, 1 X 10, 8, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'3, 11, 2, 1, 12, 4, 8, 7, 10, 5, 9, 6',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 7, 11, 12',
			'Qpl/Qin/Fct' => '3, 1' X '11, 2',
		'Qin(opt $20)' ,
			'3, 11, 2, 1',
		'Qpl($30)' ,
			'3 X 11, 2, 4',
		'Qpl($20)' ,
			'1 X 11, 2, 4',
		'Qpl($10)' ,
			'3, 11, 2, 1 X 8, 10, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 11, 2, 1 X 7, 5, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'2, 3, 1, 5, 8, 10, 4, 12, 11, 7, 6, 9',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 5, 8, 10',
			'Qpl/Qin/Fct' => '2' X '3, 1, 5',
		'Qin(opt $20)' ,
			'2, 3, 1, 5',
		'Qpl($30)' ,
			'2 X 3, 1, 5',
		'Qpl($20)' ,
			'8 X 3, 1, 5',
		'Qpl($10)' ,
			'2, 3, 1, 8 X 12, 7, 9',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 3, 1, 8 X 4, 11, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'4, 5, 8, 3, 7, 1, 2, 6, 9',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 5, 6, 8',
			'Qpl/Qin/Fct' => '4, 8' X '5, 3',
		'Qin(opt $20)' ,
			'4, 5, 8, 3',
		'Qpl($30)' ,
			'4 X 5, 3, 7',
		'Qpl($20)' ,
			'8 X 5, 3, 7',
		'Qpl($10)' ,
			'4, 5, 8 X 7, 1, 9',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 5, 8 X 8, 2, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'4, 7, 3, 10, 1, 6, 2, 8, 11, 5, 12, 9',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 6, 7, 10',
			'Qpl/Qin/Fct' => '4, 10' X '7, 3',
		'Qin(opt $20)' ,
			'4, 7, 3, 10',
		'Qpl($30)' ,
			'4 X 7, 3, 1',
		'Qpl($20)' ,
			'10 X 7, 3, 1',
		'Qpl($10)' ,
			'4, 7, 3, 10 X 5, 12, 9',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 7, 3, 10 X 2, 8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'6, 3, 2, 1, 8, 4, 9, 5, 7',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 6, 8',
			'Qpl/Qin/Fct' => '6, 2' X '3, 1',
		'Qin(opt $20)' ,
			'6, 3, 2, 1',
		'Qpl($30)' ,
			'6 X 3, 1, 9',
		'Qpl($20)' ,
			'2 X 3, 1, 9',
		'Qpl($10)' ,
			'6, 3, 2 X 9, 5, 7',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 3, 2 X 2, 8, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'3, 7, 12, 11, 8, 9, 10, 4, 2, 5, 6, 1',
		'Poor man\'s bet' ,
			'Win' => '3, 7, 9, 11, 12',
			'Qpl/Qin/Fct' => '3, 7, 12' X '11',
		'Qin(opt $20)' ,
			'3, 7, 12, 11',
		'Qpl($30)' ,
			'3 X 11, 8, 10',
		'Qpl($20)' ,
			'7 X 11, 8, 10',
		'Qpl($10)' ,
			'3, 7, 12 X 4, 2, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 7, 12 X 9, 5, 1',
	],
	'8' => [
		/**
		Race 8
		*/
		'4, 9, 2, 10, 3, 1, 12, 7, 5, 6, 8, 11',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6, 9, 10',
			'Qpl/Qin/Fct' => '4, 2, 10' X '9',
		'Qin(opt $20)' ,
			'4, 9, 2, 10',
		'Qpl($30)' ,
			'4 X 9, 3, 1',
		'Qpl($20)' ,
			'2 X 9, 3, 1',
		'Qpl($10)' ,
			'4, 9, 2 X 12, 7, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 9, 2 X 6, 8, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'8, 2, 9, 7, 5, 4, 3, 10, 6, 11, 1, 12',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 7, 8, 9, 10',
			'Qpl/Qin/Fct' => '8, 2' X '9, 7',
		'Qin(opt $20)' ,
			'8, 2, 9, 7',
		'Qpl($30)' ,
			'8 X 9, 7, 5',
		'Qpl($20)' ,
			'2 X 9, 7, 5',
		'Qpl($10)' ,
			'8, 2, 9 X 3, 1, 12',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'8, 2, 9 X 10, 6, 11',
	],
];
