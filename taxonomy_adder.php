<?php
/*
Structure

Class 11
--Science
------Physics
------Chemistry
------Biology
------Mathematics
------English
------Computer

--Management
------Business Studies
------Economics
------Accountacy
------Travel And Tourism
------Mathematics
------English

--Humanities
------Major English
------Mass Communication
------Sociology
------Mathmatics
------English

Class 12
--Science
------Physics
------Chemistry
------Biology
------Mathematics
------English
------Computer
------Nepali

--Management
------Business Studies
------Economics
------Accountacy
------Travel And Tourism
------Mathematics
------English

--Humanities
-----Major English
*/
add_action('init',function(){
	if (get_option('note_taxonomy_inserted')) {	
     return;
    }
    //It is for Navigation
	$notes_navigation_class11 = wp_insert_term('Class 11', 'note_navigation',["slug"=>"11"]); 
	if(is_wp_error($notes_navigation_class11)){
		return;
	}

	$notes_navigation_class11_science = wp_insert_term('Science', 'note_navigation', ['parent' => $notes_navigation_class11['term_id'],'slug'=>'11-science']);
	wp_insert_term('Physics', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-physics']);
	wp_insert_term('Chemistry', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-chemistry']);
	wp_insert_term('Biology', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-biology']);
	wp_insert_term('Mathematics', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-mathematics']);
	wp_insert_term('English', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-english']);
	wp_insert_term('Computer', 'note_navigation', ['parent' => $notes_navigation_class11_science['term_id'],'slug'=>'11-computer']);

	$notes_navigation_class11_management = wp_insert_term('Management', 'note_navigation', ['parent' => $notes_navigation_class11['term_id'],'slug'=>'11-management']);
	wp_insert_term('Business Studies', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-business-studies']);
	wp_insert_term('Economics', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-economics']);
	wp_insert_term('Accountacy', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-accountacy']);
	wp_insert_term('Travel And Tourism', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-travel-and-tourism']);
	wp_insert_term('Mathematics', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-management-mathematics']);
	wp_insert_term('English', 'note_navigation', ['parent' => $notes_navigation_class11_management['term_id'],'slug'=>'11-management-english']);

	$notes_navigation_class11_humanities = wp_insert_term('Humanities', 'note_navigation', ['parent' => $notes_navigation_class11['term_id'],'slug'=>'11-humanities']);
	wp_insert_term('Major English', 'note_navigation', ['parent' => $notes_navigation_class11_humanities['term_id'],'slug'=>'11-major-english']);
	wp_insert_term('Mass Communication', 'note_navigation', ['parent' => $notes_navigation_class11_humanities['term_id'],'slug'=>'11-mass-communication']);
	wp_insert_term('Sociology', 'note_navigation', ['parent' => $notes_navigation_class11_humanities['term_id'],'slug'=>'11-sociology']);
	wp_insert_term('Mathmatics', 'note_navigation', ['parent' => $notes_navigation_class11_humanities['term_id'],'slug'=>'11-humanities-mathematics']);
	wp_insert_term('Major English', 'note_navigation', ['parent' => $notes_navigation_class11_humanities['term_id'],'slug'=>'11-humanities-english']);


	$notes_navigation_class12 = wp_insert_term('Class 12', 'note_navigation',["slug"=>"12"]); 
	$notes_navigation_class12_science = wp_insert_term('Science', 'note_navigation', ['parent' => $notes_navigation_class12['term_id'],'slug'=>'12-science']);

	wp_insert_term('Physics', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-physics']);
	wp_insert_term('Chemistry', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-chemistry']);
	wp_insert_term('Biology', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-biology']);
	wp_insert_term('Mathematics', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-mathematics']);
	wp_insert_term('English', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-english']);
	wp_insert_term('Computer', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-computer']);
	wp_insert_term('Nepali', 'note_navigation', ['parent' => $notes_navigation_class12_science['term_id'],'slug'=>'12-nepali']);


	$notes_navigation_class12_management = wp_insert_term('Management', 'note_navigation', ['parent' => $notes_navigation_class12['term_id'],'slug'=>'12-management']);
	wp_insert_term('Economics', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-economics']);
	wp_insert_term('Business Studies', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-business-studies']);
	wp_insert_term('Hotel Management', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-hotel-management']);
	wp_insert_term('Mathmatics', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-management-mathematics']);
	wp_insert_term('English', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-management-english']);
	wp_insert_term('Computer', 'note_navigation', ['parent' => $notes_navigation_class12_management['term_id'],'slug'=>'12-management-computer']);

	$notes_navigation_class12_humanities = wp_insert_term('Humanities 12', 'note_navigation', ['parent' => $notes_navigation_class12['term_id'],'slug'=>'12-humanities']);
	wp_insert_term('Major English', 'note_navigation', ['parent' => $notes_navigation_class12_humanities['term_id'],'slug'=>'12-major-english']);
	add_option('note_taxonomy_inserted', true);
});