{"filter":false,"title":"item_2.php","tooltip":"/item_2.php","undoManager":{"mark":27,"position":27,"stack":[[{"start":{"row":55,"column":49},"end":{"row":55,"column":50},"action":"remove","lines":["l"],"id":2},{"start":{"row":55,"column":48},"end":{"row":55,"column":49},"action":"remove","lines":["m"]},{"start":{"row":55,"column":47},"end":{"row":55,"column":48},"action":"remove","lines":["t"]},{"start":{"row":55,"column":46},"end":{"row":55,"column":47},"action":"remove","lines":["h"]}],[{"start":{"row":55,"column":46},"end":{"row":55,"column":47},"action":"insert","lines":["p"],"id":3},{"start":{"row":55,"column":47},"end":{"row":55,"column":48},"action":"insert","lines":["h"]},{"start":{"row":55,"column":48},"end":{"row":55,"column":49},"action":"insert","lines":["p"]}],[{"start":{"row":56,"column":64},"end":{"row":56,"column":65},"action":"remove","lines":["l"],"id":4},{"start":{"row":56,"column":63},"end":{"row":56,"column":64},"action":"remove","lines":["m"]},{"start":{"row":56,"column":62},"end":{"row":56,"column":63},"action":"remove","lines":["t"]},{"start":{"row":56,"column":61},"end":{"row":56,"column":62},"action":"remove","lines":["h"]}],[{"start":{"row":56,"column":61},"end":{"row":56,"column":62},"action":"insert","lines":["p"],"id":5},{"start":{"row":56,"column":62},"end":{"row":56,"column":63},"action":"insert","lines":["h"]},{"start":{"row":56,"column":63},"end":{"row":56,"column":64},"action":"insert","lines":["p"]}],[{"start":{"row":57,"column":51},"end":{"row":57,"column":52},"action":"remove","lines":["l"],"id":6},{"start":{"row":57,"column":50},"end":{"row":57,"column":51},"action":"remove","lines":["m"]},{"start":{"row":57,"column":49},"end":{"row":57,"column":50},"action":"remove","lines":["t"]},{"start":{"row":57,"column":48},"end":{"row":57,"column":49},"action":"remove","lines":["h"]}],[{"start":{"row":57,"column":48},"end":{"row":57,"column":49},"action":"insert","lines":["p"],"id":7},{"start":{"row":57,"column":49},"end":{"row":57,"column":50},"action":"insert","lines":["h"]},{"start":{"row":57,"column":50},"end":{"row":57,"column":51},"action":"insert","lines":["p"]}],[{"start":{"row":58,"column":51},"end":{"row":58,"column":52},"action":"remove","lines":["l"],"id":8},{"start":{"row":58,"column":50},"end":{"row":58,"column":51},"action":"remove","lines":["m"]},{"start":{"row":58,"column":49},"end":{"row":58,"column":50},"action":"remove","lines":["t"]},{"start":{"row":58,"column":48},"end":{"row":58,"column":49},"action":"remove","lines":["h"]}],[{"start":{"row":58,"column":48},"end":{"row":58,"column":49},"action":"insert","lines":["p"],"id":9},{"start":{"row":58,"column":49},"end":{"row":58,"column":50},"action":"insert","lines":["h"]},{"start":{"row":58,"column":50},"end":{"row":58,"column":51},"action":"insert","lines":["p"]}],[{"start":{"row":52,"column":7},"end":{"row":53,"column":2},"action":"insert","lines":["","\t\t"],"id":10}],[{"start":{"row":53,"column":2},"end":{"row":59,"column":4},"action":"insert","lines":["<?php","\t\t\tglobal $mysqli;","        \t$mysqli = new mysqli(\"localhost\", \"anastasya0409\", \"\", \"lab2DB\");","        \t$query = \"SELECT * FROM news\";","        \t$mysqli->query(\"SET NAMES 'utf8'\");","        \t$result = $mysqli->query($query);","\t\t?>"],"id":11}],[{"start":{"row":56,"column":36},"end":{"row":56,"column":37},"action":"remove","lines":["s"],"id":12},{"start":{"row":56,"column":35},"end":{"row":56,"column":36},"action":"remove","lines":["w"]},{"start":{"row":56,"column":34},"end":{"row":56,"column":35},"action":"remove","lines":["e"]},{"start":{"row":56,"column":33},"end":{"row":56,"column":34},"action":"remove","lines":["n"]}],[{"start":{"row":56,"column":33},"end":{"row":56,"column":39},"action":"insert","lines":["images"],"id":13}],[{"start":{"row":68,"column":65},"end":{"row":69,"column":3},"action":"insert","lines":["","\t\t\t"],"id":14}],[{"start":{"row":69,"column":3},"end":{"row":70,"column":5},"action":"insert","lines":["<?php while($row = $result->fetch_array(MYSQLI_ASSOC)) {","\t\t\t?>"],"id":15}],[{"start":{"row":71,"column":68},"end":{"row":72,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":72,"column":0},"end":{"row":72,"column":3},"action":"insert","lines":["\t\t\t"]}],[{"start":{"row":72,"column":3},"end":{"row":73,"column":4},"action":"insert","lines":["<?php }","\t\t?>"],"id":17}],[{"start":{"row":73,"column":2},"end":{"row":73,"column":3},"action":"insert","lines":["\t"],"id":18}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":67},"action":"remove","lines":["\"https://st.kp.yandex.net/images/poster/sm_3147402.jpg\""],"id":19},{"start":{"row":71,"column":12},"end":{"row":71,"column":42},"action":"insert","lines":["<?php echo $row[\"introText\"]?>"]}],[{"start":{"row":71,"column":37},"end":{"row":71,"column":38},"action":"remove","lines":["t"],"id":20},{"start":{"row":71,"column":36},"end":{"row":71,"column":37},"action":"remove","lines":["x"]},{"start":{"row":71,"column":35},"end":{"row":71,"column":36},"action":"remove","lines":["e"]},{"start":{"row":71,"column":34},"end":{"row":71,"column":35},"action":"remove","lines":["T"]},{"start":{"row":71,"column":33},"end":{"row":71,"column":34},"action":"remove","lines":["o"]},{"start":{"row":71,"column":32},"end":{"row":71,"column":33},"action":"remove","lines":["r"]},{"start":{"row":71,"column":31},"end":{"row":71,"column":32},"action":"remove","lines":["t"]},{"start":{"row":71,"column":30},"end":{"row":71,"column":31},"action":"remove","lines":["n"]},{"start":{"row":71,"column":29},"end":{"row":71,"column":30},"action":"remove","lines":["i"]}],[{"start":{"row":71,"column":29},"end":{"row":71,"column":30},"action":"insert","lines":["l"],"id":21},{"start":{"row":71,"column":30},"end":{"row":71,"column":31},"action":"insert","lines":["i"]},{"start":{"row":71,"column":31},"end":{"row":71,"column":32},"action":"insert","lines":["n"]},{"start":{"row":71,"column":32},"end":{"row":71,"column":33},"action":"insert","lines":["k"]}],[{"start":{"row":71,"column":33},"end":{"row":71,"column":34},"action":"insert","lines":["O"],"id":22},{"start":{"row":71,"column":34},"end":{"row":71,"column":35},"action":"insert","lines":["n"]},{"start":{"row":71,"column":35},"end":{"row":71,"column":36},"action":"insert","lines":["I"]},{"start":{"row":71,"column":36},"end":{"row":71,"column":37},"action":"insert","lines":["m"]},{"start":{"row":71,"column":37},"end":{"row":71,"column":38},"action":"insert","lines":["a"]}],[{"start":{"row":71,"column":38},"end":{"row":71,"column":39},"action":"insert","lines":["g"],"id":23},{"start":{"row":71,"column":39},"end":{"row":71,"column":40},"action":"insert","lines":["e"]}],[{"start":{"row":74,"column":3},"end":{"row":86,"column":68},"action":"remove","lines":["<img src=\"https://st.kp.yandex.net/images/poster/sm_3147339.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3147310.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3147220.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3112690.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_2877279.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3145479.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3114312.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3144080.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3045725.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3146652.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3146419.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3145925.jpg\">","\t\t\t<img src=\"https://st.kp.yandex.net/images/poster/sm_3146067.jpg\">"],"id":24},{"start":{"row":74,"column":2},"end":{"row":74,"column":3},"action":"remove","lines":["\t"]},{"start":{"row":74,"column":1},"end":{"row":74,"column":2},"action":"remove","lines":["\t"]},{"start":{"row":74,"column":0},"end":{"row":74,"column":1},"action":"remove","lines":["\t"]}],[{"start":{"row":73,"column":5},"end":{"row":74,"column":0},"action":"remove","lines":["",""],"id":25}],[{"start":{"row":74,"column":8},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":75,"column":0},"end":{"row":75,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":75,"column":2},"end":{"row":77,"column":3},"action":"insert","lines":["<?php","        $mysqli->close();","\t?>"],"id":27}],[{"start":{"row":77,"column":1},"end":{"row":77,"column":2},"action":"insert","lines":["\t"],"id":28}],[{"start":{"row":76,"column":8},"end":{"row":76,"column":9},"action":"insert","lines":["\t"],"id":29}]]},"ace":{"folds":[],"scrolltop":840,"scrollleft":0,"selection":{"start":{"row":79,"column":7},"end":{"row":79,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":59,"state":"start","mode":"ace/mode/php"}},"timestamp":1526726166164,"hash":"cf0f95cf841c90bb832f56f000a3c906ff6dee02"}