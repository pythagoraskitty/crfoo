<?php
header('Origin-Trial: AoKor+80cfhxE3Q+TWSehsIpF+kYMGCQ1QMUOX9T/G4EKG7t7ZU4boUTjiCe8M6Fw51j7WUtZooKUq4r9s1UeQcAAABteyJvcmlnaW4iOiJodHRwczovL2t1bmdmb28ubmV0OjQ0MyIsImZlYXR1cmUiOiJDb252ZXJzaW9uTWVhc3VyZW1lbnQiLCJleHBpcnkiOjE2NDMxNTUxOTksImlzU3ViZG9tYWluIjp0cnVlfQ==');
?>

<html>
<head>
  <title> Conversions test </title>
</head>
<body>
  <h2> Test page for stuff </h2>
</body>
<script>
  var adLink = document.createElement("a");
  adLink.target = "_blank";
  adLink.href = "https://cr2.kungfoo.net/conversions/target.html";
  adLink.innerText = "Click me";

  // Come up with a random 64 bit hex number for the id.
  var randomNums = new Uint32Array(2);
  window.crypto.getRandomValues(randomNums);

  // TODO: This should move away from setAttribute (crbug.com/1097144)
  adLink.setAttribute("attributionsourceeventid",  randomNums[0].toString(16) + randomNums[1].toString(16));
  adLink.setAttribute("attributiondestination", "https://cr2.kungfoo.net");

  document.body.appendChild(adLink);
</script>
</html>
