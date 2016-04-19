CREATE TABLE posts
(
	id_post INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(150) NOT NULL,
	content TEXT NOT NULL,
	created DATETIME NOT NULL NULL,
    modified DATETIME DEFAULT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE comments
( 
	id_comment INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	text_comment TEXT NOT NULL, 
	id_post INT NOT NULL,
	created DATETIME NOT NULL NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO posts 
VALUES (0,'No, the Moon Won''t Turn Green on Wednesday','Once again, a skywatching hoax has gone viral.

To go along with the infamous "Mars hoax," which claims that the Red Planet will appear as large as the full moon in the sky; the "Nibiru cataclysm," a supposed disastrous encounter between Earth and a large planetary object; and "Zero-Gravity Day," when people on Earth supposedly can experience weightlessness, we now have the "nights of the green moon."
This latest fallacy to sweep the blogosphere claims that on Wednesday (April 20), and again on May 29, the moon will appear to turn a shade of green. The full moon of April will occur on Friday, April 22. The explanation given for the verdant metamorphosis is that several planets are going to align (wrong!), causing the moon to glow with an eerie, greenish light for about 90 minutes. This spectacle is exceedingly rare (so we are told), and last took place way back in the year 1596.

As has been the case with the bogus Mars, Nibiru and zero-gravity hoaxes, the green-moon message implores you to "share this event!" And sadly, many people have apparently been snookered into doing just that.

Interestingly, the date given for the first "moon of a different color," April 20, is also "National Weed Day" — a day that celebrates the smoking of marijuana and cannabis culture in general. Pot enthusiasts refer to the day numerically ("four twenty"), and the stated interval between "green moons" is said to be 420 years.',NOW(),NOW());

INSERT INTO posts 
VALUES (0,'Did the Sun Eat a Primordial Super-Earth?','A new study suggests that at least one super-Earth — a planet that is larger than Earth, but smaller than Neptune — could have formed close to the sun. Over time, this hypothetical super-Earth would have swept up all the debris in the area. Then, it would have succumbed to the sun’s gravity and gotten eaten. 
This could be a possible explanation for why nothing is seen within the orbit of Mercury, although for now the evidence is based on modelling and the fact that the region between Mercury and the sun is so barren, the authors say."The only (physical) evidence that super-Earths could have formed in our solar system is the lack of anything in that region, not even a rock," said lead author Rebecca Martin, an assistant professor at the University of Nevada, Las Vegas, in an email to Discovery News. "So they could have formed there sweeping up all of the solid material, but then later fell into the sun."The only (physical) evidence that super-Earths could have formed in our solar system is the lack of anything in that region, not even a rock," said lead author Rebecca Martin, an assistant professor at the University of Nevada, Las Vegas, in an email to Discovery News. "So they could have formed there sweeping up all of the solid material, but then later fell into the sun." 
Observations of super-Earth exoplanets outside the solar system suggest they could have formed in two locations: in situ (where you see them today) or farther out from their observed locations, where of course they would have migrated over time.',NOW(),NOW());


INSERT INTO comments VALUES (0,'biarid','b2016@mail.com', 'Use your critical-thinking skills: If something sounds too weird, crazy or amazing to be true, it probably isn''t true. So, if somebody sends you an email or a tweet, or you see a Facebook post announcing that the moon will turn green on April 20 or May 29, just ignore it. Please?', 1, NOW());
INSERT INTO comments VALUES (0,'Руслана','ruslana@gmail.com','If the disc is sufficiently cool, the migration timescale for them to fall into the sun is short enough for this to happen in the lifetime of the disc', 2, NOW());
INSERT INTO comments VALUES (0,'Ian Isaac','iidss@mail.com','if the planet is fully green', 1, NOW());
INSERT INTO comments VALUES (0,'Max','vsdvsvd@gmai.com', 'awesome!', 2, NOW());

