<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'5, 3, 2, 6, 11, 4, 10, 1, 12, 7, 9, 8',
		'Poor man\'s bet' ,
			'Qpl' => '2, 6 X 3, 5',
			'Qin' => 'Qin1: 2, 6, Qin2: 3, 5',
		'Qin(opt $20, ideal $40)' ,
			'5, 3, 2, 6',
		'Qpl($30, ideal $50)' ,
			'5 X 2, 6, 11',
		'Qpl($10, ideal $20)' ,
			'5, 3, 2 X 4, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 3, 2 X 12, 7, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'1, 8, 5, 3, 7, 2, 4, 6',
		'Poor man\'s bet' ,
			'Qpl' => '8 X 1, 3, 5',
			'Qin' => '1, 3, 5',
		'Qin(opt $20, ideal $40)' ,
			'1, 8, 5, 3',
		'Qpl($30, ideal $50)' ,
			'1 X 8, 2, 4',
		'Qpl($10, ideal $20)' ,
			'1, 8, 5 X 2, 4, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 8, 5 X 5, 3, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'7, 1, 2, 4, 9, 3, 6, 11, 12, 13, 5, 10, 8, 14',
		'Poor man\'s bet' ,
			'Qpl' => '2, 4 X 1, 7',
			'Qin' => 'Qin1: 2, 4, Qin2: 1, 7',
		'Qin(opt $20, ideal $40)' ,
			'7, 1, 2, 4',
		'Qpl($30, ideal $50)' ,
			'7 X 2, 4, 6',
		'Qpl($10, ideal $20)' ,
			'7, 1, 2 X 13, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 1, 2 X 12, 5, 14',
	],
	'4' => [
		/**
		Race 4
		*/
		'7, 4, 3, 2, 9, 6, 8, 12, 1, 5, 10, 11',
		'Poor man\'s bet' ,
			'Qpl' => '2, 4 X 3, 7',
			'Qin' => 'Qin1: 2, 4, Qin2: 3, 7',
		'Qin(opt $20, ideal $40)' ,
			'7, 4, 3, 2',
		'Qpl($30, ideal $50)' ,
			'7 X 4, 2, 6',
		'Qpl($10, ideal $20)' ,
			'7, 4, 3 X 8, 10, 11',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 4, 3 X 12, 1, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'2, 12, 3, 13, 1, 6, 7, 11, 10, 4, 9, 8, 5',
		'Poor man\'s bet' ,
			'Qpl' => '2, 13 X 3, 12',
			'Qin' => 'Qin1: 2, 13, Qin2: 3, 12',
		'Qin(opt $20, ideal $40)' ,
			'2, 12, 3, 13',
		'Qpl($30, ideal $50)' ,
			'2 X 12, 3, 1',
		'Qpl($10, ideal $20)' ,
			'2, 12, 3, 13 X 7, 9, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 12, 3, 13 X 10, 4, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'5, 4, 7, 9, 8, 2, 10, 12, 1, 11, 3, 6',
		'Poor man\'s bet' ,
			'Qpl' => '4 X 5, 7, 9',
			'Qin' => '5, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'5, 4, 7, 9',
		'Qpl($30, ideal $50)' ,
			'5 X 4, 8, 2',
		'Qpl($10, ideal $20)' ,
			'5, 4, 7 X 10, 11, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 4, 7 X 12, 1, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'3, 10, 7, 8, 6, 9, 4, 1, 11, 5, 2',
		'Poor man\'s bet' ,
			'Qpl' => '8, 10 X 3, 7',
			'Qin' => 'Qin1: 8, 10, Qin2: 3, 7',
		'Qin(opt $20, ideal $40)' ,
			'3, 10, 7, 8',
		'Qpl($30, ideal $50)' ,
			'3 X 10, 8, 6',
		'Qpl($10, ideal $20)' ,
			'3, 10, 7 X 4, 11, 2',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 10, 7 X 9, 1, 5',
	],
	'8' => [
		/**
		Race 8
		*/
		'1, 6, 8, 3, 4, 7, 9, 11, 2, 5, 10, 12',
		'Poor man\'s bet' ,
			'Qpl' => '6, 8 X 1, 3',
			'Qin' => 'Qin1: 6, 8, Qin2: 1, 3',
		'Qin(opt $20, ideal $40)' ,
			'1, 6, 8, 3',
		'Qpl($30, ideal $50)' ,
			'1 X 6, 8, 4',
		'Qpl($10, ideal $20)' ,
			'1, 6, 8, 3 X 11, 2, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 6, 8, 3 X 9, 5, 12',
	],
];
