<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-mn-cyrl.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% This file is part of hyph-utf8 package and resulted from
		% semi-manual conversions of hyphenation patterns into UTF-8 in June 2008.
		%
		% Source: mnhyphen.tex (2002-06-30)
		% Author: Oliver Corff, Dorjpalam Dorj
		%
		% The above mentioned file should become obsolete,
		% and the author of the original file should preferaby modify this file instead.
		%
		% Modificatios were needed in order to support native UTF-8 engines,
		% but functionality (hopefully) didn't change in any way, at least not intentionally.
		% This file is no longer stand-alone; at least for 8-bit engines
		% you probably want to use loadhyph-foo.tex (which will load this file) instead.
		%
		% Modifications were done by Jonathan Kew, Mojca Miklavec & Arthur Reutenauer
		% with help & support from:
		% - Karl Berry, who gave us free hands and all resources
		% - Taco Hoekwater, with useful macros
		% - Hans Hagen, who did the unicodifisation of patterns already long before
		%               and helped with testing, suggestions and bug reports
		% - Norbert Preining, who tested & integrated patterns into TeX Live
		%
		% However, the 'copyright/copyleft' owner of patterns remains the original author.
		%
		% The copyright statement of this file is thus:
		%
		%    Do with this file whatever needs to be done in future for the sake of
		%    'a better world' as long as you respect the copyright of original file.
		%    If you're the original author of patterns or taking over a new revolution,
		%    plese remove all of the TUG comments & credits that we added here -
		%    you are the Queen / the King, we are only the servants.
		%
		% If you want to change this file, rather than uploading directly to CTAN,
		% we would be grateful if you could send it to us (http://tug.org/tex-hyphen)
		% or ask for credentials for SVN repository and commit it yourself;
		% we will then upload the whole 'package' to CTAN.
		%
		% Before a new 'pattern-revolution' starts,
		% please try to follow some guidelines if possible:
		%
		% - \lccode is *forbidden*, and I really mean it
		% - all the patterns should be in UTF-8
		% - the only 'allowed' TeX commands in this file are: \patterns, \hyphenation,
		%   and if you really cannot do without, also \input and \message
		% - in particular, please no \catcode or \lccode changes,
		%   they belong to loadhyph-foo.tex,
		%   and no \lefthyphenmin and \righthyphenmin,
		%   they have no influence here and belong elsewhere
		% - \begingroup and/or \endinput is not needed
		% - feel free to do whatever you want inside comments
		%
		% We know that TeX is extremely powerful, but give a stupid parser
		% at least a chance to read your patterns.
		%
		% For more unformation see
		%
		%    http://tug.org/tex-hyphen
		%
		%------------------------------------------------------------------------------
		%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%        File: mnhyphen.tex
		%      Author: Oliver Corff and Dorjpalam Dorj
		%        Date: February 26th, 1999		% mls.sty prevails
		%     Version: \VersionRelease			% see mls.sty!
		%   Copyright: Ulaanbaatar, Beijing, Berlin
		%
		% Description: The Mongolian Hyphenation Pattern File
		%	       to be used together with LMC encoding.
		%	       Hyphenation exceptions should be stored
		%              in mnhyphex.tex.
		%
		%              It may well be possible that the hyphenation
		%              patterns given below are incomplete or plainly
		%              wrong. It should also be mentioned that TeX
		%              sometimes ignores correct hyphenation information
		%              and makes up its own mind. Anyway, please con-
		%              sider all hyphenation data strictly experimental
		%              and *not yet stable*.
		%
		%              This file is mostly based on Cäwäl's Mongol
		%              Xälniï Towq Taïlbar Tol' (MXTTT for short;
		%              ``Short Explanatory Dictionary of Mongolian)
		%              but contains a few other sources as well.
		%
		%              Comments, corrections and suggestions are
		%              highly appreciated and should be directed to
		%              the authors at corff@zedat.fu-berlin.de
		%
		%              U/B/B, February 1999
		%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		% -------------------     identification     -------------------
		%
		% \message{mnhyphen.tex - Hyphenation Patterns for
		% 			Xalx Mongolian, LMC Encoding}
		%
		%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		%
		% The following code is closely modelled after russian.sty and
		% its accompanying hyphenation file.
		% 
		% We first must make some of the non-ASCII range characters known
		% as characters to TeX, and include case mapping information.


//============================================================================================================	
	
*/

$patgenLanguage = 'Mongolian (Cyrillic)';

$patgenExceptions = array();

$patgenMaxSeg = 6;

$patgen = array(
'begin'=>array(
'аа'=>'002',
'ин'=>'002',
'оё'=>'002',
'оо'=>'002',
'өө'=>'002',
'уу'=>'002',
'үү'=>'002',
'ээ'=>'002'
),
'end'=>array(
'дүү'=>'3000'
),
'all'=>array(
'ааж'=>'0020',
'ад'=>'010',
'ади'=>'0200',
'айб'=>'0020',
'ап'=>'010',
'асаа'=>'00003',
'ат'=>'010',
'аф'=>'010',
'ах'=>'010',
'ац'=>'010',
'ацд'=>'0320',
'ач'=>'010',
'аш'=>'010',
'аю'=>'010',
'аяал'=>'02000',
'ба'=>'100',
'байду'=>'000200',
'бами'=>'00300',
'бг'=>'210',
'би'=>'100',
'бл'=>'200',
'бр'=>'210',
'буж'=>'0030',
'ва'=>'100',
'вб'=>'010',
'вг'=>'210',
'вд'=>'210',
'ве'=>'100',
'вед'=>'0020',
'вж'=>'010',
'вз'=>'010',
'ви'=>'100',
'вл'=>'210',
'вн'=>'210',
'во'=>'100',
'вө'=>'100',
'вр'=>'210',
'вс'=>'010',
'вт'=>'210',
'ву'=>'100',
'вү'=>'100',
'вц'=>'010',
'вш'=>'210',
'вэ'=>'100',
'вя'=>'100',
'га'=>'100',
'гб'=>'010',
'гв'=>'010',
'гг'=>'210',
'гд'=>'210',
'гж'=>'210',
'ги'=>'100',
'гл'=>'210',
'гм'=>'210',
'гн'=>'210',
'го'=>'100',
'годи'=>'00200',
'гө'=>'100',
'гр'=>'010',
'грам'=>'02000',
'гре'=>'3000',
'гс'=>'200',
'гт'=>'210',
'гу'=>'100',
'гуулиу'=>'0000002',
'гү'=>'100',
'гх'=>'010',
'гц'=>'010',
'гч'=>'210',
'гш'=>'210',
'гши'=>'0300',
'гы'=>'100',
'гэ'=>'100',
'гэнү'=>'00200',
'гял'=>'0003',
'давы'=>'00100',
'дб'=>'010',
'дв'=>'210',
'дг'=>'210',
'дд'=>'210',
'дек'=>'2000',
'дж'=>'210',
'диа'=>'0001',
'дит'=>'2000',
'дл'=>'210',
'дм'=>'210',
'дн'=>'210',
'др'=>'210',
'дс'=>'210',
'дт'=>'210',
'дх'=>'210',
'дц'=>'210',
'дч'=>'210',
'дъ'=>'200',
'дı'=>'200',
'еб'=>'010',
'ев'=>'010',
'ег'=>'012',
'ед'=>'010',
'ез'=>'010',
'еи'=>'010',
'ел'=>'010',
'ем'=>'010',
'ео'=>'001',
'еп'=>'010',
'ере'=>'0100',
'етру'=>'03200',
'ех'=>'010',
'ец'=>'010',
'еци'=>'0001',
'еш'=>'010',
'ёд'=>'010',
'ёз'=>'010',
'ёоч'=>'0020',
'ёх'=>'002',
'жа'=>'100',
'жв'=>'210',
'жг'=>'210',
'жд'=>'210',
'жж'=>'210',
'жи'=>'100',
'жиг'=>'3000',
'жин'=>'3000',
'жл'=>'210',
'жм'=>'210',
'жн'=>'210',
'жө'=>'100',
'жр'=>'210',
'жс'=>'210',
'жт'=>'210',
'жу'=>'100',
'жү'=>'100',
'жы'=>'100',
'жэ'=>'100',
'за'=>'100',
'зв'=>'210',
'зг'=>'210',
'зд'=>'210',
'зж'=>'210',
'зи'=>'100',
'зл'=>'210',
'зм'=>'210',
'зн'=>'210',
'зо'=>'100',
'зө'=>'100',
'зр'=>'210',
'зс'=>'210',
'зт'=>'210',
'зу'=>'100',
'зү'=>'100',
'зх'=>'010',
'зц'=>'010',
'зч'=>'010',
'зш'=>'210',
'зы'=>'100',
'зı'=>'200',
'зэ'=>'100',
'игра'=>'00200',
'ид'=>'010',
'идал'=>'03000',
'иды'=>'0200',
'иж'=>'010',
'из'=>'010',
'илди'=>'00200',
'исп'=>'0030',
'ит'=>'010',
'их'=>'010',
'иц'=>'010',
'иш'=>'010',
'йб'=>'010',
'йв'=>'010',
'йг'=>'010',
'йгр'=>'0200',
'йд'=>'010',
'йж'=>'010',
'йп'=>'010',
'йпл'=>'0200',
'йр'=>'010',
'йс'=>'010',
'йт'=>'010',
'йх'=>'010',
'йц'=>'010',
'йч'=>'010',
'ка'=>'100',
'ке'=>'100',
'кж'=>'010',
'ки'=>'100',
'кк'=>'010',
'кл'=>'010',
'кн'=>'010',
'коо'=>'0010',
'ксп'=>'0030',
'кт'=>'010',
'ку'=>'100',
'кц'=>'210',
'кэ'=>'100',
'ла'=>'100',
'лб'=>'210',
'лв'=>'010',
'лг'=>'210',
'лд'=>'210',
'ле'=>'100',
'лж'=>'210',
'лз'=>'210',
'ли'=>'100',
'лл'=>'210',
'лли'=>'0001',
'лм'=>'210',
'лн'=>'200',
'ло'=>'100',
'лод'=>'0020',
'лө'=>'100',
'лр'=>'210',
'лс'=>'210',
'лт'=>'210',
'лу'=>'100',
'лү'=>'100',
'лх'=>'210',
'лц'=>'210',
'лч'=>'200',
'лш'=>'200',
'лъ'=>'200',
'лы'=>'100',
'лı'=>'200',
'лэ'=>'100',
'лю'=>'010',
'ма'=>'100',
'мб'=>'010',
'мг'=>'010',
'мд'=>'010',
'ме'=>'100',
'ми'=>'100',
'мин'=>'2000',
'мк'=>'012',
'мл'=>'010',
'мн'=>'010',
'мо'=>'100',
'мө'=>'100',
'мп'=>'210',
'мр'=>'010',
'му'=>'100',
'мү'=>'100',
'мф'=>'010',
'мх'=>'010',
'мц'=>'010',
'мш'=>'010',
'мы'=>'100',
'мэ'=>'100',
'на'=>'100',
'нб'=>'010',
'нв'=>'010',
'нг'=>'010',
'нгр'=>'0200',
'нгре'=>'00200',
'нд'=>'010',
'нёврл'=>'100000',
'ни'=>'100',
'нк'=>'010',
'нл'=>'010',
'нм'=>'010',
'но'=>'100',
'нө'=>'100',
'нп'=>'010',
'нс'=>'010',
'нсд'=>'0320',
'нт'=>'010',
'ну'=>'100',
'нү'=>'100',
'нх'=>'010',
'нц'=>'010',
'ны'=>'100',
'нэ'=>'100',
'ня'=>'010',
'оа'=>'010',
'об'=>'010',
'огр'=>'0120',
'од'=>'010',
'ое'=>'010',
'ож'=>'010',
'оне'=>'0100',
'онст'=>'00300',
'онт'=>'0030',
'оп'=>'012',
'опе'=>'0200',
'осп'=>'0100',
'от'=>'010',
'оф'=>'010',
'ох'=>'010',
'оц'=>'010',
'оэ'=>'010',
'өд'=>'010',
'өж'=>'010',
'өри'=>'0200',
'өх'=>'010',
'өц'=>'010',
'өч'=>'010',
'пд'=>'210',
'по'=>'001',
'пос'=>'0030',
'пп'=>'210',
'пра'=>'2000',
'про'=>'0200',
'пт'=>'210',
'ра'=>'100',
'раб'=>'2000',
'рб'=>'010',
'рв'=>'010',
'рг'=>'210',
'рд'=>'210',
'ри'=>'100',
'рл'=>'210',
'рм'=>'010',
'рн'=>'210',
'ро'=>'100',
'рө'=>'100',
'рп'=>'010',
'рр'=>'010',
'рс'=>'210',
'рт'=>'210',
'ру'=>'100',
'рук'=>'2000',
'рү'=>'100',
'рх'=>'210',
'рц'=>'010',
'рч'=>'200',
'рш'=>'210',
'ры'=>'100',
'рэ'=>'100',
'са'=>'100',
'сб'=>'010',
'св'=>'210',
'сг'=>'210',
'сд'=>'210',
'се'=>'100',
'сж'=>'210',
'сз'=>'010',
'си'=>'100',
'ск'=>'102',
'скв'=>'2000',
'сл'=>'210',
'см'=>'210',
'сн'=>'210',
'со'=>'100',
'сө'=>'100',
'сп'=>'010',
'спе'=>'0200',
'спи'=>'0200',
'ср'=>'210',
'сс'=>'210',
'ст'=>'210',
'су'=>'100',
'сү'=>'100',
'сф'=>'010',
'сх'=>'210',
'сц'=>'010',
'сч'=>'210',
'сшт'=>'0320',
'сы'=>'100',
'сэ'=>'100',
'та'=>'100',
'тб'=>'210',
'тв'=>'210',
'тг'=>'210',
'тд'=>'210',
'тж'=>'210',
'тз'=>'210',
'ти'=>'100',
'тл'=>'210',
'тм'=>'210',
'тн'=>'210',
'то'=>'100',
'тө'=>'100',
'тр'=>'210',
'тро'=>'0200',
'тру'=>'1000',
'тс'=>'210',
'тт'=>'210',
'тү'=>'100',
'тх'=>'210',
'тц'=>'210',
'тч'=>'210',
'тш'=>'210',
'ты'=>'100',
'тэ'=>'100',
'уд'=>'010',
'ужи'=>'0200',
'уз'=>'010',
'ул'=>'010',
'ут'=>'010',
'уф'=>'010',
'ух'=>'010',
'уц'=>'010',
'уш'=>'010',
'үд'=>'010',
'үз'=>'010',
'үзэ'=>'0200',
'үл'=>'010',
'үп'=>'010',
'үсд'=>'0020',
'үх'=>'010',
'үц'=>'010',
'үш'=>'010',
'фд'=>'010',
'фм'=>'010',
'фо'=>'100',
'ха'=>'100',
'хаады'=>'000200',
'хаю'=>'0020',
'хб'=>'210',
'хв'=>'210',
'хг'=>'210',
'хд'=>'210',
'хж'=>'210',
'хз'=>'210',
'хи'=>'100',
'хида'=>'00200',
'хиı'=>'2000',
'хл'=>'210',
'хм'=>'210',
'хн'=>'210',
'хо'=>'100',
'хө'=>'100',
'хр'=>'210',
'хс'=>'210',
'хт'=>'210',
'ху'=>'100',
'хуж'=>'0030',
'хү'=>'100',
'хх'=>'210',
'хц'=>'210',
'хч'=>'200',
'хш'=>'210',
'хы'=>'100',
'хı'=>'200',
'хэ'=>'100',
'ца'=>'100',
'цв'=>'210',
'цг'=>'210',
'цд'=>'210',
'цж'=>'210',
'цл'=>'210',
'цм'=>'210',
'цн'=>'210',
'цр'=>'210',
'цс'=>'210',
'цт'=>'210',
'цх'=>'210',
'цч'=>'210',
'цъ'=>'200',
'ча'=>'100',
'чв'=>'010',
'чг'=>'210',
'чд'=>'210',
'чи'=>'100',
'чл'=>'210',
'чм'=>'210',
'чн'=>'210',
'чо'=>'100',
'чр'=>'210',
'чс'=>'210',
'чт'=>'210',
'чу'=>'100',
'чү'=>'100',
'чх'=>'210',
'чэ'=>'100',
'ша'=>'100',
'шб'=>'010',
'шв'=>'210',
'шг'=>'210',
'шд'=>'210',
'шж'=>'210',
'ши'=>'100',
'шк'=>'210',
'шл'=>'210',
'шм'=>'210',
'шн'=>'210',
'шо'=>'100',
'шө'=>'100',
'шр'=>'210',
'шс'=>'210',
'шт'=>'210',
'шу'=>'100',
'шү'=>'100',
'шүүлı'=>'000300',
'шх'=>'210',
'шч'=>'210',
'шэ'=>'100',
'ъе'=>'012',
'ъё'=>'012',
'ъя'=>'012',
'ыг'=>'010',
'ыс'=>'010',
'ых'=>'010',
'ıб'=>'010',
'ıд'=>'010',
'ıк'=>'010',
'ıт'=>'010',
'ıх'=>'010',
'ıц'=>'010',
'ıч'=>'010',
'ıш'=>'010',
'ıя'=>'012',
'эд'=>'010',
'эж'=>'010',
'эз'=>'010',
'энэхи'=>'020000',
'эх'=>'010',
'эц'=>'010',
'юд'=>'200',
'яа'=>'100',
'яд'=>'010',
'яншд'=>'00020',
'ят'=>'010',
'ях'=>'010',
'яш'=>'010'
)
);

?>