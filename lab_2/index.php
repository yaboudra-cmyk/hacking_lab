<html>
<body>
  <h1>Modules</h1>
  <form action="index.php" method="GET">
    <select name="module">
      <option value="neural_networks.txt">Neural Networks</option>
      <option value="reinforcement_learning.txt">Reinforcement Learning</option>
    </select>
	<button type="submit">Include Module</button>
  </form>
</body>
</html>

<?php
  if(isset($_GET['module'])) {
    include("./modules/" . $_GET['module']);
  }
?>