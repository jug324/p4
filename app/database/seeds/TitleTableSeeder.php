<?php
 
class TitleTableSeeder extends Seeder {
 
  public function run()
  {
  $title = Title::create(array(
  	'name' => 'Sentinel',
  	'description' => 'The Sentinel Title Order is the oldest and original title order. It was given to those who trained at Hewytt that wished to stay on and guard the school. They were chosen not for their physical strength, but for their ability to use reason and judgement as well as being ambitious and strong-willed. After the Hewytt School was placed under its protective barrier, Sentinels shifted their focus from specifically protecting Hewytt to becoming involved in any matters which may be connected with the school. Sentinels are the primary members who attend to disturbances when the Red Bells ring for help.',  
  	'flag' => 'flags/sentinelshield.jpg'
  	));
  $title = Title::create(array(
  	'name' => 'Knight',
  	'description' => 'The Knight Title Order was the second order created by the Hewytt School. It was originally done in partnership with the Farenian King of Altessa, who wished to have personal guards that had trained with The Nine. Over time, knights came to serve all the kingdoms of Farenia, shifting in focus from protectors to those who enforced the laws of their leader. Knights are associated with their strong work ethic, commitment to community, and their reliable nature to act responsibly.',  
  	'flag' => 'flags/knightshield.jpg'
  	));
  $title = Title::create(array(
  	'name' => 'Ranger',
  	'description' => 'The Ranger Title Order was the third order created by the Hewytt School. As societies continued to develop and establish larger settlements, members of Hewytt felt it was wise to give equal attention to the natural world. Rangers, unlike the Sentinels and Knights before them, are not directly employed. They work to monitor and maintain Farenia as a whole, rather than in service to anyone in particular. Rangers are known for their ability to adapt to their surroundings, their skillset with crafts and tools, and their tactical mindset.',  
  	'flag' => 'flags/rangershield.jpg'
  	));
  $title = Title::create(array(
  	'name' => 'Maven',
  	'description' => 'Created soon after Rangers, the Maven Title Order was the last created order. As the Hewytt School began to turn out more graduates, they saw the need to place talented youths in positions not necessarily associated with protecting and serving. Mavens are those who wish to be employed in any variety of fields where their knowledge and experience can help the greater good. Many Mavens tend to be altruistic, and enjoy positions that assist in the well-being of others. They also tend to be the most scholarly. As such, the majority of professors at the Hewytt School graduated Maven Title Order.',  
  	'flag' => 'flags/mavenshield.jpg'
  	));
  }
 
}