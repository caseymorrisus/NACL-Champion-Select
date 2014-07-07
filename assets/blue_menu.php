<div id="blue">
	<!-- PLAYER NAMES -->
	<div>
		<form>
			TEAM 1:<input type="text" name="team1" id="team_1">
		</form>
		<form>
			<input type="submit" value="BOTH TEAMS" class="both_teams">
		</form>
	</div>
	<article>
		<form>
			Player 1<input type="text" name="test1" id="p_name_b1">

		</form>
		<form>
			Player 2<input type="text" name="test1" id="p_name_b2">

		</form>
		<form>
			Player 3<input type="text" name="test1" id="p_name_b3">

		</form>
		<form>
			Player 4<input type="text" name="test1" id="p_name_b4">

		</form>
		<form>
			Player 5<input type="text" name="test1" id="p_name_b5">

		</form>
	</article>
	<!-- CHAMPION SWAP -->
	<div class="swap_champions blue">
		Swap:
		<select id="blue_swap_1">
			<option value="1">#1</option>
			<option value="2">#2</option>
			<option value="3">#3</option>
			<option value="4">#4</option>
			<option value="5">#5</option>
		</select>
		With:
		<select id="blue_swap_2">
			<option value="1">#1</option>
			<option value="2">#2</option>
			<option value="3">#3</option>
			<option value="4">#4</option>
			<option value="5">#5</option>
		</select>
		<form>
			<input type="submit" value="Swap Champs" class="btn_blue_swap">
		</form>
	</div>

	

	<!---------- BANNING PHASE ---------->
	<section>
		<h3>Banning Phase</h3>
		Ban 1:
		<select id="bc1" onChange="bChamp(1)">
			<?php include 'champions.php'; ?>
		</select><br>
		Ban 2:
		<select id="bc2" onChange="bChamp(2)">
			<?php include 'champions.php'; ?>
		</select><br>
		Ban 3:
		<select id="bc3" onChange="bChamp(3)">
			<?php include 'champions.php'; ?>
		</select>
	</section>
	<!---------- PLAYER ONE ---------->
	<article>
		<h3>Player 1</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp1" onChange="hImage(1)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd1" onChange="cImage(1)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_1 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_1 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button1" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER TWO ---------->
	<article>
		<h3>Player 2</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp2" onChange="hImage(2, 3)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd2" onChange="cImage(2)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_2 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_2 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button2" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER THREE ---------->
	<article>
		<h3>Player 3</h3>
		<b>Champion:</b>
		<select id="dd3" onChange="cImage(3)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_3 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_3 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button3" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER FOUR ---------->
	<article>
		<h3>Player 4</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp4" onChange="hImage(4, 5)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd4" onChange="cImage(4)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_4 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_4 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button4" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER FIVE ---------->
	<article>
		<h3>Player 5</h3>
		<b>Champion:</b>
		<select id="dd5" onChange="cImage(5)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_5 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_5 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button5" class="c_button">SUBMIT</button>
	</article>
	<b>ALL SPELLS:</b> <button type="button" id="button_all_1">SUBMIT</button>
</div>