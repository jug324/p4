<?php
 
class RegionTableSeeder extends Seeder {
 
  public function run()
  {
  $region = Region::create(array(
  	'name' => 'Archipelago',
  	'description' => 'Comprised of a dozen islands ranging in size, the Archipelago is the only completely autonomous region. While not directly a part of the Farenian Unified Kingdom, there are strong economic ties with the mainland. The vast majority of islanders are Human, though their distinct physical traits and personal values remain unique.',  
  	'flag' => 'flags/archipelagoflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Farenia',
  	'description' => 'Farenia is the capital region of the Farenian Unified Kingdom, and home to the royal city of Faren. As a middle point between the eastern and western sides of the continent, Farenia played a vital role in controlling cross-continental land travel. While the majority of inhabitants are Farenian, the region is also home to the royal cities of the Pizca and Roccans.',  
  	'flag' => 'flags/fareniaflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Free Cities of the Sea',
  	'description' => 'The Free Cities of the Sea is the amalgamation of the regions that once fought with each other for control of the eastern coast. Not united as one, they are the most prosperous and progressive region with many social and technological advancements that are non-existent in many other regions. The region is run by the East World Senate, whose members are elected to represent each settlement in the region. These members are led by their peer elected Chancellor, who also serves as the go between with the leader of the Farenian Unified Kingdom.',  
  	'flag' => 'flags/cotsflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Hoderose',
  	'description' => 'Hoderose is home to Sandspire, the royal city of the west, as well as Asalt, the most populous city on the continent. The region is ruled by the High Prince, who acts as the head of government and also the head of state for Lilliland and Trizonale, and is considered the second most powerful person in the Farenian Unified Kingdom. The region relies heavily on the Kayli River to help with transporting goods and people up and down the continent.',  
  	'flag' => 'flags/hoderoseflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Lilliland',
  	'description' => 'Lilliland, known as the Golden Fields region, was named by the Pizca who controlled the lands after the Dragons were banished from the area. The soil of the area is enriched by water from the Dragon Springs, making it a prime area for growing crops. After the Farenians replaced the Pizca as rulers, the area was populated with many farming communities. Lilliland is also home to the last remaining Dwarven kingdom-state, Titicus.',  
  	'flag' => 'flags/lillilandflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Ryseno',
  	'description' => 'The Ryseno region has some of the oldest remaining Farenian settlements on the continent, including its capital Triant. The region has the highest concentration of Farenians and has few inhabitants of other species. The region was originally established as a grand duchy, but has since given up some of its independence in order to strengthen the Farenian Unified Kingdom. While the head of government is an appointed Governor, the head of state is still the Duke or Duchess of Triant.',  
  	'flag' => 'flags/rysenoflag.jpg'
  	));
  $region = Region::create(array(
  	'name' => 'Trizonale',
  	'description' => 'The Trizonale was the original name for area along the eastern bank of the Kayli River in the south of the continent. It was a buffer zone between the Human Kingdom of Havard and the Farenian Kingdoms of Faren and Sandspire, and was designated too vital for crop growth to risk destroying during any wars. After the formation of the Farenian Unified Kingdom, the name was applied to the entire region. The region is led by an appointed Governor who rules from the capital city Havard, though its head of state is the High Prince of Sandspire.',  
  	'flag' => 'flags/trizonaleflag.jpg'
  	));
  }
 
}