<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'11, 4, 5, 2, 7, 12, 10, 1, 8, 9, 6, 3',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 5, 10, 11',
		'Qin(opt $20, ideal $40)' ,
			'11, 4, 5, 2',
		'Qpl($30, ideal $50)' ,
			'11 X 5, 7, 12',
		'Qpl($10, ideal $20)' ,
			'11, 4, 5 X 1, 9, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'11, 4, 5 X 10, 8, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'7, 4, 1, 5, 2, 3, 6',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 4, 5, 7',
		'Qin(opt $20, ideal $40)' ,
			'7, 4, 1, 5',
		'Qpl($30, ideal $50)' ,
			'7 X 4, 2, 6',
		'Qpl($10, ideal $20)' ,
			'7, 4, 1 X 4, 2, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 4, 1 X 1, 5, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'7, 4, 8, 5, 1, 3, 2, 9, 12, 11, 10, 6',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 4, 5, 7, 8',
		'Qin(opt $20, ideal $40)' ,
			'7, 4, 8, 5',
		'Qpl($30, ideal $50)' ,
			'7 X 4, 8, 2',
		'Qpl($10, ideal $20)' ,
			'7, 4, 8, 5 X 11, 10, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 4, 8, 5 X 3, 9, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'1, 2, 5, 9, 6, 4, 12, 11, 8, 7, 3, 10',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 5, 9, 12',
		'Qin(opt $20, ideal $40)' ,
			'1, 2, 5, 9',
		'Qpl($30, ideal $50)' ,
			'1 X 2, 6, 4',
		'Qpl($10, ideal $20)' ,
			'1, 2, 5 X 11, 8, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 2, 5 X 12, 7, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'5, 7, 6, 11, 8, 9, 2, 4, 10, 1, 3',
		'Poor man\'s bet' ,
			'Win' => '1, 5, 6, 7, 9, 11',
		'Qin(opt $20, ideal $40)' ,
			'5, 7, 6, 11',
		'Qpl($30, ideal $50)' ,
			'5 X 6, 11, 8',
		'Qpl($10, ideal $20)' ,
			'5, 7, 6 X 2, 4, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 7, 6 X 9, 1, 3',
	],
	'6' => [
		/**
		Race 6
		*/
		'10, 2, 6, 12, 3, 1, 7, 5, 4, 8, 9, 11',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6, 10, 12',
		'Qin(opt $20, ideal $40)' ,
			'10, 2, 6, 12',
		'Qpl($30, ideal $50)' ,
			'10 X 12, 3, 1',
		'Qpl($10, ideal $20)' ,
			'10, 2, 6 X 7, 5, 9',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'10, 2, 6 X 4, 8, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'6, 1, 8, 3, 9, 2, 4, 7, 5',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 6, 8',
		'Qin(opt $20, ideal $40)' ,
			'6, 1, 8, 3',
		'Qpl($30, ideal $50)' ,
			'6 X 1, 3, 9',
		'Qpl($10, ideal $20)' ,
			'6, 1, 8 X 9, 7, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 1, 8 X 8, 2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'7, 10, 2, 6, 11, 4, 8, 3, 1, 5, 12, 9',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 5, 6, 7, 10',
		'Qin(opt $20, ideal $40)' ,
			'7, 10, 2, 6',
		'Qpl($30, ideal $50)' ,
			'7 X 10, 2, 6',
		'Qpl($10, ideal $20)' ,
			'7, 10, 2, 3 X 11, 4, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 10, 2, 3 X 5, 12, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'4, 3, 1, 7, 11, 12, 8, 9, 10, 2, 6, 5',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 4, 7, 8, 10, 11',
		'Qin(opt $20, ideal $40)' ,
			'4, 3, 1, 7',
		'Qpl($30, ideal $50)' ,
			'4 X 3, 1, 7',
		'Qpl($10, ideal $20)' ,
			'4, 3, 1, 11 X 12, 9, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 3, 1, 11 X 10, 2, 6',
	],
	'10' => [
		/**
		Race 10
		*/
		'3, 9, 7, 1, 6, 2, 11, 4, 10, 5, 8, 12',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'3, 9, 7, 1',
		'Qpl($30, ideal $50)' ,
			'3 X 6, 2, 11',
		'Qpl($10, ideal $20)' ,
			'3, 9, 7 X 4, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 9, 7 X 1, 5, 12',
	],
];
