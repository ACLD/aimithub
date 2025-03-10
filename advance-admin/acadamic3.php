<!Doctype Html>
<head>
	<title>Acadamic Performance</title>
	 <link href="css/acadamic.css" rel="stylesheet" />
</head>
<body>
<div class="ui">
  <div class="ui__sidebar left">
    <div class="ui__person">
      <div class="ui__person__name">Stefan</div>
    </div>
    <nav class="ui__nav">
      <ul>
        <li class="ui__nav__item"><input id="navItemOverview" type="radio" name="selectedNav" checked="checked"><label class="entypo-chart-bar" for="navItemOverview" data-label="Overview">Overview</label>
        <li class="ui__nav__item"><input id="navItemRadio" type="radio" name="selectedNav"><label class="entypo-folder" for="navItemRadio" data-label="Files">Files</label>
        <li class="ui__nav__item"><input id="navItemPhotos" type="radio" name="selectedNav"><label class="entypo-docs" for="navItemPhotos" data-label="Photos">Photos</label>
        <li class="ui__nav__item"><input id="navItemMusic" type="radio" name="selectedNav"><label class="entypo-sound" for="navItemMusic" data-label="Music">Music</label>
        <li class="ui__nav__item"><input id="navItemLinks" type="radio" name="selectedNav"><label class="entypo-globe" for="navItemLinks" data-label="Links">Links</label>
      </ul>
    </nav>
  </div>
  <div class="ui__main">
    <div class="ui__sidebar right">
      <input class="ui__search__input" type="search" placeholder="search">
      <h2 class="ui__friendsList__headline">Online</h2>
      <ul class="ui__friendsList">
        <li class="ui__person__small">
          <div class="ui__person__name small online">Ute Inge</div>
        <li class="ui__person__small">
          <div class="ui__person__name away">Ulla Schmidt</div>
        <li class="ui__person__small">
          <div class="ui__person__name notDisturb">Harry Winter</div>
      </ul>
      <h2 class="ui__friendsList__headline">Offline</h2>
      <ul class="ui__friendsList">
        <li class="ui__person__small">
          <div class="ui__person__name small offline">Bob Calsow</div>
        <li class="ui__person__small">
          <div class="ui__person__name offline">Chris Brase</div>
        <li class="ui__person__small">
          <div class="ui__person__name offline">Tom Madler</div>
        <li class="ui__person__small">
          <div class="ui__person__name offline">Reni Jadi</div>
        <li class="ui__person__small">
          <div class="ui__person__name offline">Radl Black</div>
      </ul>
    </div>
    <main class="ui__main__content">
      <h1 class="ui__main__headline">Overview</h1>
      <div class="ui__timeline" width=548 height=224>
        
      </div>
      <ul class="ui__downloadList">
        <li class="ui__downloadList__item red" data-value=110 data-type=music>
          <div class="ui__downloadList__graphic" width=154 height=160></div>
          <h2 class="ui__downloadList__headline">Music</h2>
          <h3 class="ui__downloadList__subHeadline">120 Files</h3>
        <li class="ui__downloadList__item purple" data-value=958 data-type=photos>
          <div class="ui__downloadList__graphic" width=154 height=160></div>
          <h2 class="ui__downloadList__headline">Photos</h2>
          <h3 class="ui__downloadList__subHeadline">65 Files</h3>
        <li class="ui__downloadList__item cyan" data-value=587 data-type=files>
          <div class="ui__downloadList__graphic" width=154 height=160></div>
          <h2 class="ui__downloadList__headline">Files</h2>
          <h3 class="ui__downloadList__subHeadline">98 Files</h3>
      </ul>
    </main>
  </div>
</div>
	<script src="js/d3.min.js" charset="utf-8"></script>
	    <script type="text/javascript" src="js/aca.js"></script>
	
</body>
</html>