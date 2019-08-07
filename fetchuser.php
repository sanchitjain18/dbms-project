<?php
$connect = mysqli_connect("localhost", "root", "", "recharge");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM plans 
	WHERE plan_id LIKE '%".$search."%'
	OR plan_com_name LIKE '%".$search."%' 
	OR plan_desc LIKE '%".$search."%' 
	OR validity LIKE '%".$search."%' 
    OR plan_price LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM plans ORDER BY plan_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>PLAN_NO</th>
							<th>COMPANY NAME</th>
							<th>PLAN</th>
							<th>VALIDITY</th>
                            <th>PRICE</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["plan_id"].'</td>
				<td>'.$row["plan_com_name"].'</td>
				<td>'.$row["plan_desc"].'</td>
				<td>'.$row["validity"].'</td>
                <td>'.$row["plan_price"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>