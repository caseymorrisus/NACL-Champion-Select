<div id="red">
	<!-- PLAYER NAMES -->
	<div>
		<form>
			TEAM 2:<input type="text" name="team1" id="team_2">
		</form>
	</div>
	<article>
		<form>
			Player 1<input type="text" name="test1" id="p_name_r1">

		</form>
		<form>
			Player 2<input type="text" name="test1" id="p_name_r2">

		</form>
		<form>
			Player 3<input type="text" name="test1" id="p_name_r3">

		</form>
		<form>
			Player 4<input type="text" name="test1" id="p_name_r4">

		</form>
		<form>
			Player 5<input type="text" name="test1" id="p_name_r5">

		</form>
		<form>
			<input type="submit" value="All Players" class="all_players">
		</form>
	</article>
	<!-- CHAMPION SWAP -->
	<div class="swap_champions red">
		Swap:
		<select id="red_swap_1">
			<option value="6">#1</option>
			<option value="7">#2</option>
			<option value="8">#3</option>
			<option value="9">#4</option>
			<option value="10">#5</option>
		</select>
		With:
		<select id="red_swap_2">
			<option value="6">#1</option>
			<option value="7">#2</option>
			<option value="8">#3</option>
			<option value="9">#4</option>
			<option value="10">#5</option>
		</select>
		<form>
			<input type="submit" value="Swap Champs" class="btn_red_swap">
		</form>
	</div>


	<!---------- BANNING PHASE ---------->
	<section>
		<h3>Banning Phase</h3>
		Ban 1:
		<select id="bc4" onChange="bChamp(4)">
			<?php include 'champions.php'; ?>
		</select><br>
		Ban 2:
		<select id="bc5" onChange="bChamp(5)">
			<?php include 'champions.php'; ?>
		</select><br>
		Ban 3:
		<select id="bc6" onChange="bChamp(6)">
			<?php include 'champions.php'; ?>
		</select>
	</section>
	<!---------- PLAYER ONE ---------->
	<article>
		<h3>Player 1</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp6" onChange="hImage(6, 7)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd6" onChange="cImage(6)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_6 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_6 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button6" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER TWO ---------->
	<article>
		<h3>Player 2</h3>
		<b>Champion:</b>
		<select id="dd7" onChange="cImage(7)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_7 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_7 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button7" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER THREE ---------->
	<article>
		<h3>Player 3</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp8" onChange="hImage(8, 9)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd8" onChange="cImage(8)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_8 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_8 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button8" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER FOUR ---------->
	<article>
		<h3>Player 4</h3>
		<b>Champion:</b>
		<select id="dd9" onChange="cImage(9)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_9 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_9 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button9" class="c_button">SUBMIT</button>
	</article>
	<!---------- PLAYER FIVE ---------->
	<article>
		<h3>Player 5</h3>
		<div>
			<b>Currently Picking:</b>
			<select id="hChamp10" onChange="hImage(10)">
				<option value="yes" selected>Yes</option>
				<option value="no">No</option>
			</select>
		</div>
		<b>Champion:</b>
		<select id="dd10" onChange="cImage(10)">
			<?php include 'champions.php'; ?>
		</select><br>
		<h3 style="text-align: center;">Summoner Spells:</h3>
		<select id="c_10 spell_dd">
			<?php include 'spells.php'; ?>
		</select>
		<select id="c_10 spell_dd2">
			<?php include 'spells.php'; ?>
		</select>
		<button type="button" id="button10" class="c_button">SUBMIT</button>
	</article>
	<b>ALL SPELLS:</b> <button type="button" id="button_all_2">SUBMIT</button>
</div>