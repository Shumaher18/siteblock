<div class="col_wrap">
	<div class="mainblock">

			<div class="posts">
				<div class="section">Кулинария</div>
				<div class="article">Рецепт приготовления тортика</div>
				<div class="autor">Posted by Витёк</div>
				<div class="date">30.11.2018</div>
				<div class="post_text">Белки взбить с 1 ст. ложкой лимонного сока, 280 г сахара и 150 г кокоса. Выложить в форме 2 кругов на пергамент и выпекать 50 мин (120°). Один корж промазать расплавленным шоколадом и посыпать кокосом. Пюрировать 125 г ягод, остальные разрезать пополам. Желтки взбить со 150 г сахара и ванилином. В пахту ввести желатин с 2 ст. ложками лимонного сока и соединить с желтками. Дать застыть. Крем разделить пополам. 300 мл взбитых сливок вместе с половиной ягод и пюре подмешать к одной половине крема. 2. Вокруг одного коржа установить бортик. Выложить крем с ягодами, положить второй корж и выложить крем без ягод. Поставить на 3 ч в холодильник. Остатки сливок взбить с закрепителем. Торт смазать и украсить ягодами. А далее.. </div>
			</div>

			<?php
			$link=mysqli_connect('localhost', 'user07', 'Password01','db07');
			mysqli_query($link, 'set names utf8');
			$qr = mysqli_query($link, 'select * from foxs_posts;');

  		while ($result = mysqli_fetch_array($qr)) {
				echo "<div class='posts'>";
    		echo "<div class='section'>{$result['Label']}</div>";
				echo "<div class='article'>{$result['Theme']}</div>";
				echo "<div class='autor'>Posted by {$result['Author']}</div>";
				echo "<div class='date'>{$result['Date']}</div>";
				echo "<div class='post_text'>{$result['Content']}</div>";
				echo "</div>";
  		}
			?>

		<!-- <div id="divfilterbutton">
			<a href="javascript:void(0)" onclick="showHide('filterwindow')">ФИЛЬТР</a>
					<div id="filterwindow" class="hidden">

						<div id="filter1">
						</div>

						<div id="filterSearch">
							<form>
								<input type="search" placeholder="Найти...">
								<button type="submit"></button>
							</form>
						</div>

						<div id="filter2">
						</div>
					</div>
	</div> -->

</div>


	<div class="sideblock">
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>
		<div class="posts">
			<div class="section"></div>
			<div class="article"></div>
			<div class="autor"></div>
			<div class="date"></div>
			<div class="post_text"></div>
		</div>


	</div>
</div>
