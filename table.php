<?php 
$users = [
	["ism" => "Alisher", "Familya" => "Yuldashev", "yosh" => 40],
	["ism" => "Bahrom", "Familya" => "Yuldashev", "yosh" => 37],
	["ism" => "Bobur", "Familya" => "Bahodirov", "yosh" => 14],
	["ism" => "Solayjon", "Familya" => "Bahodirov", "yosh" => 13],
	["ism" => "Muhammadjon", "Familya" => "Bahodirov", "yosh" => 3],
	["ism" => "Sulaymon", "Familya" => "Bahodirov", "yosh" => 3],
];


?>
<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chiroyli Jadval</title>

<style>
  body {
    font-family: "Poppins", sans-serif;
    background-color: #f5f6fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  table {
    border-collapse: collapse;
    width: 80%;
    max-width: 900px;
    background-color: #fff;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-radius: 20px;
    overflow: hidden;
  }

  th, td {
    text-align: center;
    padding: 15px;
  }

  th {
    background-color: #4CAF50;
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #dff0d8;
    transition: 0.3s;
  }

  caption {
    caption-side: top;
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #333;
    font-weight: bold;
  }
</style>
</head>

<body>

<table>
  <caption>Talabalar Ma'lumotlari</caption>
  <tr>
    <th>ID</th>
    <th>Ism</th>
    <th>Familya</th>
    <th>Yosh</th>
  </tr>
  <tr>
	<?php foreach($users as $key => $value): ?>
    <td><?php echo ++$key?></td>
    <td><?php echo $value['ism'] ?></td>
    <td><?php echo $value['Familya'] ?></td>
    <td><?php echo $value['yosh'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
