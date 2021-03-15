<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/caculator_ja.css">
  <title>原神 樹脂 計算機</title>
</head>

<body>
  <div class="card" id="card">
    <h3 class="title">原神 樹脂計算機</h3>
    <span id="range-value" class="afterHour"></span><br><input type="range" min="1" max="24" value="1" id="range" class="selectBar">
    <div class="result">
      <span id="now"></span><span>に</span><br class="displayBr"><span class="spotlight" id="result"></span><span>個たまります。</span>
    </div>
    <div class="options">

      <div class="languages">
        <a href="caculator_ja.php">JA</a>
        <span>or</span>
        <a href="caculator_en.php">EN</a>
      </div>

      <span class="opinion">
        <a href="https://kosei.herokuapp.com/#contact" target="_blank" rel="noopener noreferrer">
          Opinion BOX
        </a>
      </span>
      <span class="partition">/</span>
      <span class="opinion">
        <a href="https://kosei.herokuapp.com/" target="_blank" rel="noopener noreferrer">
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
      document.getElementById('range-value').innerHTML = nowHour + ":00(現在)の" + range_value + "時間後";
      resin_quantity = range_value * 60 / 8;
      document.getElementById('result').innerHTML = "+" + String(resin_quantity);
      var afterHour = Number(nowHour) + Number(range_value);
      if (afterHour >= 24) {
        var afterHour = afterHour - 24;
        document.getElementById('now').innerHTML = "明日の" + String(afterHour) + ":00まで";
      } else {
        document.getElementById('now').innerHTML = "今日の" + String(afterHour) + ":00まで";
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
