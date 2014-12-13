<?php
 
class RaceTableSeeder extends Seeder {
 
  public function run()
  {
  $race = Race::create(array(
  	'name' => 'Dwarf',
  	'description' => 'Dwarves are a hardened group that spends most of their lives underground. Due to effects caused by close proximation with magical elements within the ground, Dwarves are able to greatly resist all magic. Though usually slow footed and hot tempered, Dwarves are cunning and reliable fighters. They have remained mostly isolated from the rest of the races and are the only species not part of the Farenian Unified Kingdom.',  
  	'traits' => 'Dark curly hair, long beards, short stature'
  	));
  $race = Race::create(array(
  	'name' => 'Farenian',
  	'description' => 'Farenians have the strongest capacity to use magic and as a species are considered one of the most intelligent. Combined with strong tactical traits, Farenians have been able to hold strong influence over the continent and the other species, including leading the Farenian Unified Kingdom.',  
  	'traits' => 'Pointed ears, pale skin, blue eyes, blonde hair'
  	));
  $race = Race::create(array(
  	'name' => 'Human',
  	'description' => 'Humans are average in many aspects, from magical ability to physicality. Their strongest trait is their ability to reproduce, not only at higher rates than all other species, but also being able to cross-breed with all other races. As such, Humans have the highest population of all species.',  
  	'traits' => 'Reddish hair, brown eyes, average height'
  	));
  $race = Race::create(array(
  	'name' => 'Pizca',
  	'description' => 'The Pizca are an intelligent and sophisticated race that lives primarily underwater in rivers and lakes. Considered at one time to be dominant race, the Pizca have mostly vanished from society due to conflicts with Farenians. The Pizca are highly susceptible to magic and physically are not impressive, though their military tactics and information gathering processes make them the typical "smarter not harder" species.',  
  	'traits' => 'Hairless, greenish skin tone, above average height, able to breathe underwater'
  	));
  $race = Race::create(array(
  	'name' => 'Roccan',
  	'description' => 'Roccans are giant creatures considered to be the physically strongest race. Their hardened outer skin allows them to withstand many elements, allowing them to thrive in areas such as deserts and mountainsides, where many others cannot. This also makes them resistant to most magic. Their bodies are rounded in shape, allowing them to roll like a ball at high speeds.',  
  	'traits' => 'Tall, massive round body frames, thick protective skin'
  	));
  }
 
}