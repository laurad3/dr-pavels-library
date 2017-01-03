-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2017 at 09:45 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Dr_Pavel`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `story_image` varchar(50) NOT NULL,
  `story_title` varchar(50) NOT NULL,
  `story_text` varchar(10000) NOT NULL,
  `story_genre` varchar(50) NOT NULL,
  `story_author` varchar(50) NOT NULL,
  `story_likes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `story_image`, `story_title`, `story_text`, `story_genre`, `story_author`, `story_likes`) VALUES
(1, 'db/uploads/arabian.jpg', 'Arabian Nights', 'Sire, there was once upon a time a merchant who possessed great wealth, in land and merchandise, as well as in ready money. He was obliged from time to time to take journeys to arrange his affairs. One day, having to go a long way from home, he mounted his horse, taking with him a small wallet in which he had put a few biscuits and dates, because he had to pass through the desert where no food was to be got. He arrived without any mishap, and, having finished his business, set out on his return. On the fourth day of his journey, the heat of the sun being very great, he turned out of his road to rest under some trees. He found at the foot of a large walnut-tree a fountain of clear and running water. He dismounted, fastened his horse to a branch of the tree, and sat by the fountain, after having taken from his wallet some of his dates and biscuits. When he had finished this frugal mean he washed his face and hands in the fountain.\r\n\r\nWhen he was thus employed he saw an enormous Genie, white with rage, coming towards him, with a scimitar in his hand.\r\n\r\n"Arise," he cried in a terrible voice, "and let me kill you as you have killed my son!"\r\n\r\nAs he uttered these words he gave a frightful yell. The merchant, quite as much terrified at the hideous face of the monster as at his words, answered him tremblingly, "Alas, good sir, what can I have done to you to deserve death?"\r\n\r\n"I shall kill you," repeated the Genie, "as you have killed my son."\r\n\r\n"But," said the merchant, "How can I have killed your son? I do not know him, and I have never even seen him."\r\n\r\n"When you arrived here did you not sit down on the ground?" asked the Genie, "and did you not take some dates from your wallet, and whilst eating them did not you throw the stones about?"\r\n\r\n"Yes," said the merchant, "I certainly did so."', 'fantasy', 'carl_grimes', 2),
(2, 'db/uploads/rumpelstiltskin.jpg', 'Rumpelstiltskin', 'Once there was a miller who was poor, but who had a beautiful daughter. Now it happened that he had to go and speak to the king, and in order to make himself appear important he said to him, &quot;I have a daughter who can spin straw into gold.&quot;\r\n\r\n     The king said to the miller, &quot;That is an art which pleases me well, if your daughter is as clever as you say, bring her to-morrow to my palace, and I will put her to the test.&quot;\r\n\r\n     And when the girl was brought to him he took her into a room which was quite full of straw, gave her a spinning-wheel and a reel, and said, &quot;Now set to work, and if by to-morrow morning early you have not spun this straw into gold during the night, you must die.&quot;\r\n\r\n     Thereupon he himself locked up the room, and left her in it alone. So there sat the poor miller''s daughter, and for the life of her could not tell what to do, she had no idea how straw could be spun into gold, and she grew more and more frightened, until at last she began to weep.\r\n\r\n     But all at once the door opened, and in came a little man, and said, &quot;Good evening, mistress miller, why are you crying so?&quot;\r\n\r\n     &quot;Alas,&quot; answered the girl, &quot;I have to spin straw into gold, and I do not know how to do it.&quot;\r\n\r\n     &quot;What will you give me,&quot; said the manikin, &quot;if I do it for you?&quot;\r\n\r\n     &quot;My necklace,&quot; said the girl.\r\n\r\n     The little man took the necklace, seated himself in front of the wheel, and whirr, whirr, whirr, three turns, and the reel was full, then he put another on, and whirr, whirr, whirr, three times round, and the second was full too. And so it went on until the morning, when all the straw was spun, and all the reels were full of gold.\r\n\r\n     By daybreak the king was already there, and when he saw the gold he was astonished and delighted, but his heart became only more greedy. He had the miller''s daughter taken into another room full of straw, which was much larger, and commanded her to spin that also in one night if she valued her life. The girl knew not how to help herself, and was crying, when the door opened again, and the little man appeared, and said, &quot;What will you give me if I spin that straw into gold for you?&quot;\r\n\r\n     &quot;The ring on my finger,&quot; answered the girl.\r\n\r\n     The little man took the ring, again began to turn the wheel, and by morning had spun all the straw into glittering gold.\r\n\r\n     The king rejoiced beyond measure at the sight, but still he had not gold enough, and he had the miller''s daughter taken into a still larger room full of straw, and said, &quot;You must spin this, too, in the course of this night, but if you succeed, you shall be my wife.&quot;\r\n\r\n     Even if she be a miller''s daughter, thought he, I could not find a richer wife in the whole world.\r\n\r\n     When the girl was alone the manikin came again for the third time, and said, &quot;What will you give me if I spin the straw for you this time also?&quot;\r\n\r\n     &quot;I have nothing left that I could give,&quot; answered the girl.\r\n\r\n     &quot;Then promise me, if you should become queen, to give me your first child.&quot;\r\n\r\n     Who knows whether that will ever happen, thought the miller''s daughter, and, not knowing how else to help herself in this strait, she promised the manikin what he wanted, and for that he once more spun the straw into gold.\r\n\r\n     And when the king came in the morning, and found all as he had wished, he took her in marriage, and the pretty miller''s daughter became a queen.\r\n\r\n     A year after, she brought a beautiful child into the world, and she never gave a thought to the manikin. But suddenly he came into her room, and said, &quot;Now give me what you promised.&quot;\r\n\r\n     The queen was horror-struck, and offered the manikin all the riches of the kingdom if he would leave her the child. But the manikin said, &quot;No, something alive is dearer to me than all the treasures in the world.&quot;\r\n\r\n     Then the queen began to lament and cry, so that the manikin pitied her.\r\n\r\n     &quot;I will give you three days, time,&quot; said he, &quot;if by that time you find out my name, then shall you keep your child.&quot;\r\n\r\n     So the queen thought the whole night of all the names that she had ever heard, and she sent a messenger over the country to inquire, far and wide, for any other names that there might be. When the manikin came the next day, she began with Caspar, Melchior, Balthazar, and said all the names she knew, one after another, but to every one the little man said, &quot;That is not my name.&quot;\r\n\r\n     On the second day she had inquiries made in the neighborhood as to the names of the people there, and she repeated to the manikin the most uncommon and curious. Perhaps your name is Shortribs, or Sheepshanks, or Laceleg, but he always answered, &quot;That is not my name.&quot;\r\n\r\n     On the third day the messenger came back again, and said, &quot;I have not been able to find a single new name, but as I came to a high mountain at the end of the forest, where the fox and the hare bid each other good night, there I saw a little house, and before the house a fire was burning, and round about the fire quite a ridiculous little man was jumping, he hopped upon one leg, and shouted -\r\n\r\n     ''To-day I bake, to-morrow brew,\r\n\r\n     the next I''ll have the young queen''s child.\r\n\r\n     Ha, glad am I that no one knew\r\n\r\n     that Rumpelstiltskin I am styled.''&quot;\r\n\r\n     You may imagine how glad the queen was when she heard the name. And when soon afterwards the little man came in, and asked, &quot;Now, mistress queen, what is my name?&quot;\r\n\r\n     At first she said, &quot;Is your name Conrad?&quot;\r\n\r\n     &quot;No.&quot;\r\n\r\n     &quot;Is your name Harry?&quot;\r\n\r\n     &quot;No.&quot;\r\n\r\n     &quot;Perhaps your name is Rumpelstiltskin?&quot;\r\n\r\n     &quot;The devil has told you that! The devil has told you that,&quot; cried the little man, and in his anger he plunged his right foot so deep into the earth that his whole leg went in, and then in rage he pulled at his left leg so hard with both hands that he tore himself in two.', 'fantasy', 'laurad', 0),
(3, 'db/uploads/narnia.jpg', 'Lost in Narnia', 'Some idiots wandered off into the wrong wardrobe...', 'comedy', 'laurad', 0),
(4, 'db/uploads/balloon.jpg', 'Floating Balloon', 'Just another balloon floating in the sky...', 'horror', 'laurad', 1),
(5, 'db/uploads/muumi.gif', 'Muumi', 'testing image upload...', 'comedy', 'laurad', 0),
(6, 'db/uploads/Screen Shot 2016-05-20 at 14.28.54.png', 'Want to Learn about Gamification?', 'Check out these recommended books', 'action', 'laurad', 0),
(7, 'db/uploads/floette.png', 'Story of Floette', 'Floette was a lonely pokemon...', 'romance', 'carl_grimes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`) VALUES
(1, 'laurad', '1234'),
(3, 'carl_grimes', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `user_liked_stories`
--

CREATE TABLE `user_liked_stories` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `story_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_liked_stories`
--

INSERT INTO `user_liked_stories` (`id`, `user_name`, `story_id`) VALUES
(6, 'carl_grimes', 1),
(7, 'laurad', 1),
(10, 'carl_grimes', 4),
(11, 'laurad', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_liked_stories`
--
ALTER TABLE `user_liked_stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_liked_stories`
--
ALTER TABLE `user_liked_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
