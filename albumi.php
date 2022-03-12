<!DOCTYPE html>
<html>
<lang="SR">

<head>
	<title>2Pac Shakur</title>
	<meta charset="UTF-8">
	<link href="style.css", rel="stylesheet", type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
	<?php
	require "classes/header.class.php";
	$h= new Header;
	$h->meni();
	$h->provjera1();
	
	if ($_SESSION ['username']==("Superadmin") || $_SESSION ['username']==("Luxus"))
	{
		echo '
	
    <div id="adminmeni">
			
			<ul>
				<li><a href="dodajTekst.php">Dodaj tekst</a></li>
				<li><a href="obrisitekst.php">Obriši tekst</a></li>
			</ul>
		</div><br>
		';} ?>
		<div class="albumi">
		

		<a href="#2pacalypse Now">
		<img src="images/albumi/2Pacalypse-Now.jpg" alt="2Pacalypse Now"></img>
			<p class="opisv">12. Novembar 1991. - 2Pacalypse Now</p></a>
		</div>
		
		<div class="albumi">
		<a href="#Strictly 4 My N.I.G.G.A.Z.">
		<img src="images/albumi/Strictly-4My-N.I.G.G.A.Z..jpg" alt="Strictly 4 My N.I.G.G.A.Z."></img>
			<p class="opisv">16. Februar 1993. - Strictly 4 My N.I.G.G.A.Z.</p></a>
		</div>
		
		<div class="albumi">
		<a href="#Thug Life: Volume 1">
		<img src="images/albumi/Thug-Life-Volume-1.jpg" alt="Thug Life:Volume 1"></img>
			<p class="opisv">26. Septembar 1994. - Thug Life:Volume 1</p></a>
		</div>
		
		<div class="albumi">
		<a href="#Me Against The World">
		<img src="images/albumi/Me-Against-The World.jpg" alt="Me Against The World"></img>
			<p class="opisv">27. Februar 1995. - Me Against The World</p></a>
		</div>
		
		<div class="albumi">
		<a href="#All Eyez On me">
		<img src="images/albumi/All-Eyez-On-me.jpg" alt="All Eyez On me"></img>
			<p class="opisv">13. Februar 1996. - All Eyez On me</p></a>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/The-Don Killuminati-The-7-Day-Theory.jpg" alt="The Don Killuminati: The 7 Day Theory"></img>
			<p class="opisv">5. Novembar 1996. - The Don Killuminati: The 7 Day Theory</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/R-U-Still-Down-(Remember-Me).jpg" alt="R U Still Down? (Remember Me)"></img>
			<p class="opisv">25. Novembar 1997. - R U Still Down? (Remember Me)</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Greatest-Hits.jpg" alt="Greatest Hits"></img>
			<p class="opisv">24. Novembar 1998. - Greatest Hits</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Still-I-Rise.jpg" alt="Still I Rise"></img>
			<p class="opisv">19. Decembar 1999. - Still I Rise</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/The-Lost-Tapes.jpg" alt="The Lost Tapes" class="slikealbumi"></img>
			<p class="opisv">12. Juni 2000. - The Lost Tapes</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/The-Rose-That-Grew-From-Concrete.jpg" alt="The Rose That Grew From Concrete" class="slikealbumi"></img>
			<p class="opisv">17. Oktobar 2000. - The Rose That Grew From Concrete</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Until-The-End-Of-Time.jpg" alt="Until The End Of Time"></img>
			<p class="opisv">27. Mart 2001. - Until The End Of Time</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Better-Dayz.jpg" alt="Better Dayz" class="slikealbumi"></img>
			<p class="opisv">26. Novembar 2002. - Better Dayz</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/The-Prophet-The-Best-Of-The-Works.jpg" alt="The Prophet: The Best Of The Works" class="slikealbumi"></img>
			<p class="opisv">2003. - The Prophet: The Best Of The Works</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Nu-Mixx-Klazzics.jpg" alt="Nu-Mixx Klazzics" class="slikealbumi"></img>
			<p class="opisv">7. Oktobar 2003. - Nu-Mixx Klazzics</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/2Pac-Live.jpg" alt="2Pac Live" class="slikealbumi"></img>
			<p class="opisv">6. Avgust 2004. - 2Pac Live</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Loyal-To-The-Game.jpg" alt="Loyal To The Game" class="slikealbumi"></img>
			<p class="opisv">14. Decembar 2004. - Loyal To The Game</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Ready-2-Die.jpg" alt="Ready 2 Die" class="slikealbumi"></img>
			<p class="opisv">31. Januar 2005. - Ready 2 Die</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/The-Rose-Vol.-2.jpg" alt="The Rose, Vol. 2" class="slikealbumi"></img>
			<p class="opisv">20. Septembar 2005. - The Rose, Vol. 2</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Tupac-Live-at-the-House-of-Blues.jpg" alt="Tupac: Live at the House of Blues" class="slikealbumi"></img>
			<p class="opisv">3. Oktobar 2005. - Tupac: Live at the House of Blues</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/A-Decade-Of-Silence.jpg" alt="A Decade Of Silence" class="slikealbumi"></img>
			<p class="opisv">24. April 2006. - A Decade Of Silence</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Pac's-Life.jpg" alt="Pac's Life" class="slikealbumi"></img>
			<p class="opisv">21. Novembar 2006. - "Pac's Life"</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Nu-Mixx-Klazzics-Vol.-2.jpg" alt="Nu-Mixx Klazzics Vol. 2" class="slikealbumi"></img>
			<p class="opisv">14. Avgust 2007. - Nu-Mixx Klazzics Vol. 2</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Best-of-2Pac-Part-1-Thug.jpg" alt="Best of 2Pac Part 1: Thug" class="slikealbumi"></img>
			<p class="opisv">4. Decembar 2007. - Best of 2Pac Part 1: Thug</p>
		</div>
		
		<div class="albumi">
		<img src="images/albumi/Best-of-2Pac-Part-2-Life.jpg" alt="Best of 2Pac Part 2: Life" class="slikealbumi"></img>
			<p class="opisv">4. Decembar 2007. - Best of 2Pac Part 2: Life</p>
		</div>
		
		<div id="al-main-foot">
		<br>
		<hr>
		
		<a name="2pacalypse Now"></a>
		<h2>2pacalypse Now</h2>
			<ol>
				<?php
				require "config/config.php";
				$q= ("SELECT * FROM tekstovi WHERE album='2pacalypse Now'");
				$ispis= mysqli_query ($conn, $q);
				while ($red= mysqli_fetch_assoc($ispis))
				{	
				?>
				<li><a href="tekstovi.php?tid=<?php echo $red['id'];?>">
				<?php 
				echo $red['naziv'] . " - " . $red['trajanje'] . "<br>"; }?></li></a>
			</ol>
			
		<hr>
		
		<a name="Strictly 4 My N.I.G.G.A.Z."></a>		
		<h2>Strictly 4 My N.I.G.G.A.Z.</h2>
		<ol>
			<?php
				$q= ("SELECT * FROM tekstovi WHERE album='Strictly 4 My N.I.G.G.A.Z.'");
				$ispis= mysqli_query ($conn, $q);
				while ($red= mysqli_fetch_assoc($ispis))
				{	
				?>
				<li><a href="tekstovi.php?tid=<?php echo $red['id'];?>">
				<?php 
				echo $red['naziv'] . " - " . $red['trajanje'] . "<br>"; }?></li></a>
		</ol>
		
		<hr>
		
		<a name="Thug Life: Volume 1"></a>		
		<h2>Thug Life: Volume 1</h2>
		<ol>
			<?php
				$q= ("SELECT * FROM tekstovi WHERE album='Thug Life: Volume 1'");
				$ispis= mysqli_query ($conn, $q);
				while ($red= mysqli_fetch_assoc($ispis))
				{	
				?>
				<li><a href="tekstovi.php?tid=<?php echo $red['id'];?>">
				<?php 
				echo $red['naziv'] . " - " . $red['trajanje'] . "<br>"; }?></li></a>
		</ol>
		
		<hr>
		
		<a name="Me Against The World"></a>		
		<h2>Me Against The World</h2>
		<ol>
			<li>"Intro" – 1:45</li>
			<li>"If I Die 2Nite" – 3:56</li>
			<li>"Me Against the World" (featuring Dramacydal) – 4:41</li>
			<li>"So Many Tearz" – 3:59</li>
			<li>"Temptations" – 5:00</li>
			<li>"Young Niggaz" – 4:53</li>
			<li>"Heavy In the Game" (featuring Richie Rich) – 4:23</li>
			<li>"Lord Knows" – 4:31</li>
			<li>"Dear Mama" – 4:39</li>
			<li>"It Ain't Easy" – 4:54</li>
			<li>"Can U Get AWay" – 5:45</li>
			<li>"Old School" – 4:40</li>
			<li>"Fuck the World" – 4:13</li>
			<li>"Death Around the Corner" – 4:07</li>
			<li>"Outlaw" (featuring Dramacydal) – 4:33</li>
		</ol>
		
		<hr>
		
		<a name="All Eyez On me"></a>			
		<h2>All Eyez On me</h2>
		<p class="opisv">CD1</p>
		<ol>
			<li>"Ambitionz Az A Ridah" – 4:38</li>
			<li>"All Bout U" (featuring Snoop Doggy Dogg, Nate Dogg, Dru Down, Yaki Kadafi & Hussein Fatal) – 4:37</li>
			<li>"Skandalouz" – 4:08</li>
			<li>"Got My Mind Made Up" (featuring Daz Dillinger, Kurupt, Method Man & Redman) – 5:12</li>
			<li>"How Do U Want It" (featuring K-Ci & JoJo) – 4:47</li>
			<li>"2 Of Amerikaz Most Wanted" (featuring Snoop Doggy Dogg) – 4:06</li>
			<li>"No More Pain" – 6:14</li>
			<li>"Heartz of Men" – 4:43</li>
			<li>"Life Goes On" – 5:01</li>
			<li>"Only God Can Judge Me" (featuring Rappin' 4-Tay) – 4:57</li>
			<li>"Tradin War Stories" (featuring Dramacydal, C-Bo & Storm) – 5:30</li>
			<li>"California Love (Remix" (featuring Dr. Dre & Roger Troutman) – 6:26</li>
			<li>"I Ain't Mad At Cha" (featuring Danny Boy) – 4:53</li>
			<li>"What'z Ya Phone #" (featuring Danny Boy) – 5:09</li>
		</ol>
		
		<p class="opisv">CD2</p>
		<ol>
		<li>"Can't C Me" – 5:31</li>
			<li>"Shorty Wanna Be A Thug" (featuring George Clinton) – 3:52</li>
			<li>"Holla At Me" – 4:55</li>
			<li>"Wonda Why They Call U Bitch" – 4:18</li>
			<li>"When We Ride" (featuring Outlaw Immortalz) – 5:09</li>
			<li>"Thug Passion" (featuring Jewell, Dramacydal & Storm) – 5:07</li>
			<li>"Picture Me Rollin’" (featuring Danny Boy, CPO & Big Syke) – 5:14</li>
			<li>"Check Out Time" (featuring Kurupt & Big Syke) – 4:39</li>
			<li>"Ratha Be Ya Nigga" (featuring Richie Rich) – 4:14</li>
			<li>"All Eyez On Me" (featuring Big Syke) – 5:08</li>
			<li>"Run Tha Streetz" (featuring Michel'le, Napoleon & Storm) – 5:16</li>
			<li>"Ain't Hard 2 Find"  (featuring E-40, B-Legit, D-Shot, C-Bo & Richie Rich) – 4:28</li>
			<li>"Heaven Ain't Hard 2 Find" (featuring Danny Boy) – 3:58</li>
		</ol>
		
		<hr>
		
		
		
		
		</div>
		
	</div> <!--Kraj glavnog DIVA-->
	
</body>

</html>
