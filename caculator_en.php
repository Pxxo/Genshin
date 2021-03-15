<?php echo "2020"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/caculator_en.css">
  <title>Genshin Impact resin caculator</title>
</head>

<body>
  <div class="card" id="card">
    <h3 class="title">Genshin Resin calculator</h3>
    <span id="range-value" class="afterHour"></span><br><input type="range" min="1" max="24" value="1" id="range" class="selectBar">
    <div class="result">
      <span id="now"></span><span class="spotlight" id="result"></span><br class="displayBr"><span> will be collected.</span>
    </div>
    <div class="options">

      <div class="languages">
        <a href="caculator_ja.html">JA</a>
        <span>or</span>
        <a href="caculator_en.html">EN</a>
      </div>

      <span class="opinion">
        <a href="http://pxxo.php.xdomain.jp/portfolio2021/index.php#contact" target="_blank" rel="noopener noreferrer">
          Opinion BOX
        </a>
      </span>
      <span class="partition">/</span>
      <span class="opinion">
        <a href="http://pxxo.php.xdomain.jp/portfolio2021/index.php" target="_blank" rel="noopener noreferrer">
          Produced By Kosei.
        </a>
      </span>
    </div>

  </div>

  <script>
    get_range_value = () => {
      // 現在時刻
      var now = new Date();
      var nowHour = now.getHours();
      range_value = document.getElementById('range').value;
      document.getElementById('range-value').innerHTML = range_value + " " + "hour after " + nowHour + ":00(current)";
      resin_quantity = range_value * 60 / 8;
      document.getElementById('result').innerHTML = " +" + String(resin_quantity);
      var afterHour = Number(nowHour) + Number(range_value);
      if (afterHour >= 24) {
        var afterHour = afterHour - 24;
        document.getElementById('now').innerHTML = "By " + String(afterHour) + ":00 tomorrow";
      } else {
        document.getElementById('now').innerHTML = "By " + String(afterHour) + ":00 Today";
      }
    }
    setInterval(get_range_value, 1);

    getWindowSize = () => {
      var sW, sH, s;
      sW = window.innerWidth;
      sH = window.innerHeight;
      sH = sH / 2;
      document.getElementById("card").style.transform = "translateY(-50%)";
      document.getElementById("card").style.marginTop = String(sH) + "px";
    }
    setInterval(getWindowSize, 1);
  </script>
</body>

</html>