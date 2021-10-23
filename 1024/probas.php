<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'1, 7, 4, 12, 13, 2, 8, 9, 6, 14, 3, 11, 10, 5',
		'Qin(opt $20, ideal $40)' 
			'1, 7, 4, 12',
		'Qpl($30, ideal $50)' 
			'1 X 4, 13, 2',
		'Qpl($10, ideal $20)' 
			'1, 7, 4 X 6, 11, 10',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'1, 7, 4 X 14, 3, 5',
	],
	'2' => [
		/**
		Race 2
		*/
		'6, 5, 8, 2, 1, 3, 7, 11, 9, 4, 12, 10',
		'Qin(opt $20, ideal $40)' 
			'6, 5, 8, 2',
		'Qpl($30, ideal $50)' 
			'6 X 5, 1, 3',
		'Qpl($10, ideal $20)' 
			'6, 5, 8 X 7, 9, 12',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'6, 5, 8 X 11, 4, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'12, 1, 3, 13, 5, 8, 6, 7, 14, 9, 2, 11, 4, 10',
		'Qin(opt $20, ideal $40)' 
			'12, 1, 3, 13',
		'Qpl($30, ideal $50)' 
			'12 X 13, 8, 6',
		'Qpl($10, ideal $20)' 
			'12, 1, 3 X 11, 4, 10',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'12, 1, 3 X 7, 14, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'8, 6, 4, 5, 7, 12, 13, 1, 10, 3, 14, 2, 9, 11',
		'Qin(opt $20, ideal $40)' 
			'8, 6, 4, 5',
		'Qpl($30, ideal $50)' 
			'8 X 5, 7, 12',
		'Qpl($10, ideal $20)' 
			'8, 6, 4 X 3, 14, 9',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'8, 6, 4 X 10, 2, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'1, 8, 2, 5, 3, 6, 4, 9, 13, 14, 12, 7, 11, 10',
		'Qin(opt $20, ideal $40)' 
			'1, 8, 2, 5',
		'Qpl($30, ideal $50)' 
			'1 X 8, 2, 6',
		'Qpl($10, ideal $20)' 
			'1, 8, 2, 5 X 13, 11, 10',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'1, 8, 2, 5 X 14, 12, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'6, 7, 11, 9, 8, 1, 5, 3, 4, 10, 2, 12',
		'Qin(opt $20, ideal $40)' 
			'6, 7, 11, 9',
		'Qpl($30, ideal $50)' 
			'6 X 7, 9, 1',
		'Qpl($10, ideal $20)' 
			'6, 7, 11 X 5, 3, 12',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'6, 7, 11 X 4, 10, 2',
	],
	'7' => [
		/**
		Race 7
		*/
		'7, 12, 1, 11, 8, 3, 4, 5, 9, 10, 13, 2, 6, 14',
		'Qin(opt $20, ideal $40)' 
			'7, 12, 1, 11',
		'Qpl($30, ideal $50)' 
			'7 X 11, 8, 4',
		'Qpl($10, ideal $20)' 
			'7, 12, 1 X 13, 2, 6',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'7, 12, 1 X 5, 9, 14',
	],
	'8' => [
		/**
		Race 8
		*/
		'4, 5, 6, 1, 8, 11, 9, 12, 3, 10, 7, 2',
		'Qin(opt $20, ideal $40)' 
			'4, 5, 6, 1',
		'Qpl($30, ideal $50)' 
			'4 X 5, 1, 9',
		'Qpl($10, ideal $20)' 
			'4, 5, 6 X 12, 3, 7',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'4, 5, 6 X 11, 10, 2',
	],
	'9' => [
		/**
		Race 9
		*/
		'3, 11, 9, 2, 4, 5, 10, 8, 1, 6, 7, 12',
		'Qin(opt $20, ideal $40)' 
			'3, 11, 9, 2',
		'Qpl($30, ideal $50)' 
			'3 X 11, 2, 4',
		'Qpl($10, ideal $20)' 
			'3, 11, 9 X 10, 8, 6',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'3, 11, 9 X 1, 7, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'3, 9, 2, 1, 4, 8, 7, 13, 12, 6, 11, 10, 5',
		'Qin(opt $20, ideal $40)' 
			'3, 9, 2, 1',
		'Qpl($30, ideal $50)' 
			'3 X 2, 4, 8',
		'Qpl($10, ideal $20)' 
			'3, 9, 2 X 6, 11, 10',
		'-----------ideally-----------------',
		'Qpl($10)' 
			'3, 9, 2 X 7, 12, 5',
	],
];
