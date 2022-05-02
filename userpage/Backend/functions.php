<?php 

include 'conn.php';

class Controller extends Model{
	public  function insertCustomer($name,$phone,$address,$deliverytype,$price,$deliveryfood,$date,$wishes){
		$sql_statement= "INSERT INTO pick_go(name,phone,address,deliverytype,price,deliveryfood,date,wishes	)
		Values(?,?,?,?,?,?,?,?)";
		$query = $this->connect()->prepare($sql_statement);
		$query->execute([$name,$phone,$address,$deliverytype,$price,$deliveryfood,$date,$wishes]);
	}
	public function allCustomers(){
		$sql_statement = "SELECT * FROM pick_go ORDER BY customer_id";
		$query = $this->connect()->prepare($sql_statement);
		$query->execute();
		$users = $query->fetchAll();
		$output = '';

		$output .="
		<div class='table-container'>
			<table class='table is-bordered is-striped is-hoverable is-fullwidth'>
				<tr>
					<th>Customer Name</th>
					<th>Phone Number </th>
					<th>Address </th>
					<th>Delivery Type </th>
					<th>Price</th>
					<th>Delivery Food </th>
					<th>Order Date </th>
					<th>Extra Wishes</th>
				</tr>";
		if ($query->rowCount() >0) {
			foreach ($users as $key => $value) {
				$output .="
				<tr>
				<td>".$value['name']."</td>
				<td>".$value['phone']."</td>
				<td>".$value['address']."</td>
				<td>".$value['deliverytype']."</td>
				<td>".$value['price']."</td>
				<td>".$value['deliveryfood']."</td>
				<td>".$value['date']."</td>
				<td>".$value['wishes']."</td>

				</tr>
				</div>";
			}
			$output .='</table>';
			echo $output;
		}
	}




	public function findCustomer($findName){
		$findName;
		$sql_statement = "SELECT * from pick_go where name REGEXP ? ";
		$query = $this->connect()->prepare($sql_statement);
		$query->execute([$findName]);
		$data_fetch = $query->fetchAll();
		$output = '';

		$output .="
		<div class='table-container'>
			<table class='table is-bordered is-striped is-hoverable is-fullwidth'>
				<tr>
					<th>Customer Name</th>
					<th>Phone Number </th>
					<th>Address </th>
					<th>Delivery Type </th>
					<th>Price</th>
					<th>Delivery Food </th>
					<th>Order Date </th>
					<th>Extra Wishes</th>
				</tr>";
		if ($query->rowCount() >0) {
			foreach ($data_fetch as $key => $value) {
				$output .="
				<tr>
				<td>".$value['name']."</td>
				<td>".$value['phone']."</td>
				<td>".$value['address']."</td>
				<td>".$value['deliverytype']."</td>
				<td>".$value['price']."</td>
				<td>".$value['deliveryfood']."</td>
				<td>".$value['date']."</td>
				<td>".$value['wishes']."</td>

				</tr>
				</div>";
			}
			$output .='</table>';
			echo $output;
		}else{
			echo "<div class='notification is-warning'>
					<header class='is-size-4 has-text-weight-bold ml-6'>This Customer Info Does not exist</header>
			</div>";
		}

	}

}