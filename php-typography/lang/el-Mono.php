<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-el-monoton.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% ****************************************************************
		%
		% File name: grmhyph5-unicode.tex
		%
		% This file was first created by mechanical translation from 
		% GRMhyph5.tex via 'elhyph-utf8 -m -c' (version 0.1 by Peter 
		% Heslin -- p.j.heslin@durham.ac.uk). Some additions were 
		% also made by hand.
		%
		% Created:       June 6, 2008
		%
		% Hyphenation patterns for Modern Monotonic Greek.
		%
		% Created by Dimitrios Filippou with some ideas borrowed from 
		% Yannis Haralambous, Kostis Dryllerakis and Claudio Beccari.
		% 
		% These hyphenation patterns are explained in 'ancient.pdf'.
		% Hyphenation examples are given in the file 'anc-test.pdf'.
		% Some doubtful patterns are marked by three question marks '???'. 
		% 
		% Documentation in English can be found in: D. Filippou,
 		% 'Hyphenation patterns for Ancient and Modern Greek, ' in 
		% 'TeX, XML, and Digital Typography' (A. Syropoulos et al.,
		% eds.), Lecture Notes in Computer Science 3130, Springer-Verlag
		% Berlin-Heidelberg, 2004. ISBN 3-540-22801-2.
		% 
		% ****************************************************************
		%
		% \message{UTF-8 hyphenation patterns for Modern, Monotonic Greek}


//============================================================================================================	
	
*/

$patgenLanguage = 'Greek (Modern Monotonic)';

$patgenExceptions = array();

$patgenMaxSeg = 4;

$patgen = array(
'begin'=>array(
'ι'=>'03',
'ί'=>'03',
'η'=>'03',
'ή'=>'03',
'υ'=>'03',
'ύ'=>'03',
'β'=>'04',
'γ'=>'04',
'δ'=>'04',
'ζ'=>'04',
'θ'=>'04',
'κ'=>'04',
'λ'=>'04',
'μ'=>'04',
'ν'=>'04',
'ξ'=>'04',
'π'=>'04',
'ρ'=>'04',
'σ'=>'04',
'ϲ'=>'04',
'τ'=>'04',
'φ'=>'04',
'χ'=>'04',
'ψ'=>'04'
),
'end'=>array(
'άη'=>'030',
'άι'=>'030',
'όη'=>'030',
'όι'=>'030',
'β'=>'40',
'γ'=>'40',
'γκ'=>'400',
'δ'=>'40',
'ζ'=>'40',
'θ'=>'40',
'κ'=>'40',
'λ'=>'40',
'μ'=>'40',
'μπ'=>'400',
'ν'=>'40',
'ντ'=>'400',
'ξ'=>'40',
'π'=>'40',
'ρ'=>'40',
'σ'=>'40',
'ϲ'=>'40',
'ς'=>'40',
'τ'=>'40',
'τζ'=>'400',
'τσ'=>'400',
'τϲ'=>'400',
'τς'=>'400',
'φ'=>'40',
'χ'=>'40',
'ψ'=>'40',
'βρ'=>'400',
'γλ'=>'400',
'κλ'=>'400',
'κτ'=>'400',
'γκς'=>'4000',
'γκϲ'=>'4000',
'γκσ'=>'4000',
'κς'=>'600',
'κϲ'=>'600',
'κσ'=>'400',
'λς'=>'400',
'λϲ'=>'400',
'λσ'=>'400',
'μπλ'=>'4000',
'μπν'=>'4000',
'μπρ'=>'4000',
'μς'=>'400',
'μϲ'=>'400',
'μσ'=>'400',
'νς'=>'400',
'νϲ'=>'400',
'νσ'=>'400',
'ρς'=>'400',
'ρϲ'=>'400',
'ρσ'=>'400',
'σκ'=>'400',
'ϲκ'=>'400',
'στ'=>'400',
'ϲτ'=>'400',
'τλ'=>'400',
'τρ'=>'400',
'ντς'=>'4000',
'ντϲ'=>'4000',
'ντσ'=>'4000',
'φτ'=>'400',
'χτ'=>'400'
),
'all'=>array(
'α'=>'01',
'ε'=>'01',
'η'=>'01',
'ι'=>'01',
'ο'=>'01',
'υ'=>'01',
'ω'=>'01',
'ϊ'=>'01',
'ϋ'=>'01',
'ά'=>'01',
'έ'=>'01',
'ή'=>'01',
'ί'=>'01',
'ό'=>'01',
'ύ'=>'01',
'ώ'=>'01',
'ΐ'=>'01',
'ΰ'=>'01',
'αι'=>'020',
'αί'=>'020',
'άι'=>'020',
'άϊ'=>'020',
'αυ'=>'020',
'αύ'=>'020',
'άυ'=>'030',
'ει'=>'020',
'εί'=>'020',
'έι'=>'020',
'έϊ'=>'020',
'ευ'=>'020',
'εύ'=>'020',
'έυ'=>'030',
'ηυ'=>'020',
'ηύ'=>'020',
'ήυ'=>'030',
'οι'=>'020',
'οί'=>'020',
'όι'=>'020',
'όϊ'=>'020',
'ου'=>'020',
'ού'=>'020',
'όυ'=>'030',
'υι'=>'020',
'υί'=>'020',
'ύι'=>'030',
'αη'=>'020',
'αϊ'=>'020',
'αϋ'=>'020',
'εϊ'=>'020',
'εϋ'=>'020',
'οει'=>'0200',
'οη'=>'020',
'οϊ'=>'020',
'ια'=>'020',
'ιά'=>'020',
'ιε'=>'020',
'ιέ'=>'020',
'ιο'=>'020',
'ιό'=>'020',
'οϊό'=>'0330',
'ιω'=>'020',
'ιώ'=>'020',
'ηα'=>'020',
'ηά'=>'020',
'ηε'=>'020',
'ηέ'=>'020',
'ηο'=>'020',
'ηό'=>'020',
'ηω'=>'020',
'ηώ'=>'020',
'υα'=>'020',
'υά'=>'020',
'υο'=>'020',
'υό'=>'020',
'υω'=>'020',
'υώ'=>'020',
'\''=>'40',
'ʼ'=>'40',
'᾿'=>'40',
'β\''=>'400',
'βʼ'=>'400',
'β᾿'=>'400',
'γ\''=>'400',
'γʼ'=>'400',
'γ᾿'=>'400',
'δ\''=>'400',
'δʼ'=>'400',
'δ᾿'=>'400',
'ζ\''=>'400',
'ζʼ'=>'400',
'ζ᾿'=>'400',
'θ\''=>'400',
'θʼ'=>'400',
'θ᾿'=>'400',
'κ\''=>'400',
'κʼ'=>'400',
'κ᾿'=>'400',
'λ\''=>'400',
'λʼ'=>'400',
'λ᾿'=>'400',
'μ\''=>'400',
'μʼ'=>'400',
'μ᾿'=>'400',
'μπ\''=>'4000',
'μπʼ'=>'4000',
'μπ᾿'=>'4000',
'ν\''=>'400',
'νʼ'=>'400',
'ν᾿'=>'400',
'ντ\''=>'4000',
'ντ’'=>'4000',
'ντ᾿'=>'4000',
'ξ\''=>'400',
'ξʼ'=>'400',
'ξ᾿'=>'400',
'π\''=>'400',
'πʼ'=>'400',
'π᾿'=>'400',
'ρ\''=>'400',
'ρʼ'=>'400',
'ρ᾿'=>'400',
'σ\''=>'400',
'σʼ'=>'400',
'σ᾿'=>'400',
'ϲ\''=>'400',
'ϲʼ'=>'400',
'ϲ᾿'=>'400',
'τ\''=>'400',
'τʼ'=>'400',
'τ᾿'=>'400',
'τζ\''=>'4000',
'τζʼ'=>'4000',
'τζ᾿'=>'4000',
'τσ\''=>'4000',
'τσʼ'=>'4000',
'τσ᾽'=>'4000',
'τϲ\''=>'4000',
'τϲʼ'=>'4000',
'τϲ᾿'=>'4000',
'φ\''=>'400',
'φʼ'=>'400',
'φ᾿'=>'400',
'χ\''=>'400',
'χʼ'=>'400',
'χ᾿'=>'400',
'ψ\''=>'400',
'ψʼ'=>'400',
'ψ᾿'=>'400',
'ββ'=>'410',
'γγ'=>'410',
'δδ'=>'410',
'ζζ'=>'410',
'θθ'=>'410',
'κκ'=>'410',
'λλ'=>'410',
'μμ'=>'410',
'νν'=>'410',
'ππ'=>'410',
'ρρ'=>'410',
'σσ'=>'410',
'ϲϲ'=>'410',
'ττ'=>'410',
'φφ'=>'410',
'χχ'=>'410',
'ψψ'=>'410',
'βζ'=>'410',
'βθ'=>'410',
'βκ'=>'410',
'βμ'=>'410',
'βν'=>'410',
'βξ'=>'410',
'βπ'=>'410',
'βσ'=>'410',
'βϲ'=>'410',
'βτ'=>'410',
'βφ'=>'410',
'βχ'=>'410',
'βψ'=>'410',
'γβ'=>'410',
'γζ'=>'410',
'γθ'=>'410',
'γμ'=>'410',
'ργμ'=>'4520',
'γξ'=>'410',
'γπ'=>'410',
'γσ'=>'410',
'γϲ'=>'410',
'γτ'=>'410',
'γφ'=>'410',
'γχ'=>'410',
'γψ'=>'410',
'δβ'=>'410',
'δγ'=>'410',
'δζ'=>'410',
'δθ'=>'410',
'δκ'=>'410',
'δλ'=>'410',
'δξ'=>'410',
'δπ'=>'410',
'δσ'=>'410',
'δϲ'=>'410',
'δτ'=>'410',
'δφ'=>'410',
'δχ'=>'410',
'δψ'=>'410',
'ζβ'=>'410',
'ζγ'=>'410',
'ζδ'=>'410',
'ζθ'=>'410',
'ζκ'=>'410',
'ζλ'=>'410',
'ζμ'=>'410',
'τζμ'=>'0020',
'ζν'=>'410',
'ζξ'=>'410',
'ζπ'=>'410',
'ζρ'=>'410',
'ζσ'=>'410',
'ζϲ'=>'410',
'ζτ'=>'410',
'ζφ'=>'410',
'ζχ'=>'410',
'ζψ'=>'410',
'θβ'=>'410',
'θγ'=>'410',
'θδ'=>'410',
'θζ'=>'410',
'θκ'=>'410',
'θμ'=>'410',
'ρθμ'=>'4520',
'σθμ'=>'0020',
'ϲθμ'=>'0020',
'θξ'=>'410',
'θπ'=>'410',
'θσ'=>'410',
'θϲ'=>'410',
'θτ'=>'410',
'θφ'=>'410',
'θχ'=>'410',
'θψ'=>'410',
'κβ'=>'410',
'κγ'=>'410',
'κδ'=>'410',
'κζ'=>'410',
'κθ'=>'410',
'κμ'=>'410',
'λκμ'=>'4520',
'ρκμ'=>'4520',
'κξ'=>'410',
'κπ'=>'410',
'κσ'=>'410',
'κϲ'=>'410',
'κφ'=>'410',
'νκφ'=>'4520',
'κχ'=>'410',
'κψ'=>'410',
'λβ'=>'410',
'λγ'=>'410',
'λδ'=>'410',
'λζ'=>'410',
'λθ'=>'410',
'λκ'=>'410',
'λμ'=>'410',
'λν'=>'410',
'λξ'=>'410',
'λπ'=>'410',
'λρ'=>'410',
'λσ'=>'410',
'λϲ'=>'410',
'λτ'=>'410',
'λφ'=>'410',
'λχ'=>'410',
'λψ'=>'410',
'μβ'=>'410',
'μγ'=>'410',
'μδ'=>'410',
'μζ'=>'410',
'μθ'=>'410',
'μκ'=>'410',
'μλ'=>'410',
'μξ'=>'410',
'μρ'=>'410',
'μσ'=>'410',
'μϲ'=>'410',
'μτ'=>'410',
'μφ'=>'410',
'μχ'=>'410',
'μψ'=>'410',
'νβ'=>'410',
'νγ'=>'410',
'νδ'=>'410',
'νζ'=>'410',
'νθ'=>'410',
'νκ'=>'410',
'νλ'=>'410',
'νμ'=>'410',
'νξ'=>'410',
'νπ'=>'410',
'νρ'=>'410',
'νσ'=>'410',
'νϲ'=>'410',
'νφ'=>'410',
'νχ'=>'410',
'νψ'=>'410',
'ξβ'=>'410',
'ξγ'=>'410',
'ξδ'=>'410',
'ξζ'=>'410',
'ξθ'=>'410',
'ξκ'=>'410',
'ξλ'=>'410',
'ξμ'=>'410',
'ξν'=>'410',
'ξπ'=>'410',
'ξρ'=>'410',
'ξσ'=>'410',
'ξϲ'=>'410',
'ξτ'=>'410',
'γξτ'=>'4520',
'ρξτ'=>'4520',
'ξφ'=>'410',
'ξχ'=>'410',
'ξψ'=>'410',
'πβ'=>'410',
'πγ'=>'410',
'πδ'=>'410',
'πζ'=>'410',
'πθ'=>'410',
'πκ'=>'410',
'πμ'=>'410',
'πξ'=>'410',
'πσ'=>'410',
'πϲ'=>'410',
'πφ'=>'410',
'πχ'=>'410',
'πψ'=>'410',
'ρβ'=>'410',
'ργ'=>'410',
'ρδ'=>'410',
'ρζ'=>'410',
'ρθ'=>'410',
'ρκ'=>'410',
'ρλ'=>'410',
'ρμ'=>'410',
'ρν'=>'410',
'ρξ'=>'410',
'ρπ'=>'410',
'ρσ'=>'410',
'ρϲ'=>'410',
'ρτ'=>'410',
'ρφ'=>'410',
'ρχ'=>'410',
'ρψ'=>'410',
'σδ'=>'410',
'ϲδ'=>'410',
'σζ'=>'410',
'ϲζ'=>'410',
'σν'=>'410',
'ϲν'=>'410',
'σξ'=>'410',
'ϲξ'=>'410',
'σρ'=>'410',
'ϲρ'=>'410',
'σψ'=>'410',
'ϲψ'=>'410',
'τβ'=>'410',
'τγ'=>'410',
'τδ'=>'410',
'τθ'=>'410',
'τκ'=>'410',
'τν'=>'410',
'τξ'=>'410',
'τπ'=>'410',
'τφ'=>'410',
'στφ'=>'0020',
'ϲτφ'=>'0020',
'τχ'=>'410',
'τψ'=>'410',
'φβ'=>'410',
'φγ'=>'410',
'φδ'=>'410',
'φζ'=>'410',
'φκ'=>'410',
'φμ'=>'410',
'φν'=>'410',
'ρφν'=>'4520',
'φξ'=>'410',
'φπ'=>'410',
'φσ'=>'410',
'φϲ'=>'410',
'φχ'=>'410',
'φψ'=>'410',
'χβ'=>'410',
'χγ'=>'410',
'χδ'=>'410',
'χζ'=>'410',
'χκ'=>'410',
'χμ'=>'410',
'ρχμ'=>'4520',
'χξ'=>'410',
'χπ'=>'410',
'χσ'=>'410',
'χϲ'=>'410',
'χφ'=>'410',
'χψ'=>'410',
'ψβ'=>'410',
'ψγ'=>'410',
'ψδ'=>'410',
'ψζ'=>'410',
'ψθ'=>'410',
'ψκ'=>'410',
'ψλ'=>'410',
'ψμ'=>'410',
'ψν'=>'410',
'ψξ'=>'410',
'ψπ'=>'410',
'ψρ'=>'410',
'ψσ'=>'410',
'ψϲ'=>'410',
'ψτ'=>'410',
'μψτ'=>'4520',
'ψφ'=>'410',
'ψχ'=>'410',
'γκφ'=>'4520',
'γκτ'=>'4100',
'μπτ'=>'4100',
'ντζ'=>'4100',
'ντσ'=>'4100',
'ντϲ'=>'4100',
'γκμπ'=>'40100',
'γκντ'=>'40100',
'γκτζ'=>'40100',
'γκτσ'=>'40100',
'γκτϲ'=>'40100',
'μπντ'=>'40100',
'μπτζ'=>'40100',
'μπτσ'=>'40100',
'μπτϲ'=>'40100',
'ντμπ'=>'40100',
'τσγκ'=>'40100',
'τϲγκ'=>'40100',
'τσμπ'=>'40100',
'τϲμπ'=>'40100',
'τσντ'=>'40100',
'τϲντ'=>'40100'
)
);

?>