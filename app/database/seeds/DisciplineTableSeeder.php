<?php
 
class DisciplineTableSeeder extends Seeder {
 
  public function run()
  {
  $discipline = Discipline::create(array(
  	'name' => 'Archer',
  	'description' => 'Archers are skilled with bows and other ranged weapons.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Assassin',
  	'description' => 'Assassins are primarily trained in small weapons, such as throwing knives, and prioritize stealth and patience.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Axeman',
  	'description' => 'Axeman are skilled in other types of melee weapons, including axes, hammers, clubs, etc.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Black Mage',
  	'description' => 'Black magic is the heart of decay and destruction. Most Black Mages have a very limited field that focuses primarily on inflicting pain.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Brawler',
  	'description' => 'Brawlers are fighters trained in hand to hand combat and strength conditioning.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Conjurer',
  	'description' => 'Conjurers are scholars of the ancient incantations and focus primarily on discovering and identifying new spells.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Elementor Mage',
  	'description' => 'Elementors are Mages which have the ability to create and extinguish different elements at will. Many have the ability to create fire or water from their finger tips.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Light Mage',
  	'description' => 'Light magic is the heart of perception and understanding. Light Mages have the ability to literally and figuratively manipulate how the world is viewed.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Potionmaker',
  	'description' => 'Potionmakers combine their vast knowledge with natural supplies to create a variety of substances. Their concoctions have applications that be can helpful or harmful.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Swordsman',
  	'description' => 'Swordsman are skilled with swords, daggers, javelins, and other thrusting weapons.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'Terra-Mage',
  	'description' => 'Terra-Mages use magic connected with the natural world. Their abilities allow them to do such things as summon rainstorms or help trees blossom.'  	
  	));
  $discipline = Discipline::create(array(
  	'name' => 'White Mage',
  	'description' => 'White magic is the heart of health and regrowth. Most White Mages tend to the sick and injured.'  	
  	));
  }
 
}