<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);


include('Config.php');

var_dump($_POST["rating_data"]);

if(isset($_POST["rating_data"]))
{
    echo("BONJOUR");
	$data = array(
		':usermail'		=>	$_POST["usermail"],
		':userrating'		=>	$_POST["rating_data"],
		':comment'		=>	$_POST["comment"],
	);
	$query = "INSERT INTO tabcomment (usermail, userrating, comment) VALUES (:usermail, :userrating, :comment)";

    $statement = $pdo->prepare($query);
	$statement->execute($data);

	echo "Your Review & Rating Successfully Submitted";
}



if(isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_userrating = 0;
	$review_content = array();

	$query = "SELECT * FROM review_table ORDER BY review_id DESC";
	$result = $pdo->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'usermail'		=>	$row["usermail"],
			'comment'	=>	$row["comment"],
			'rating'		=>	$row["userrating"],
		);

		if($row["userrating"] == '5')
		{
			$five_star_review++;
		}

		if($row["userrating"] == '4')
		{
			$four_star_review++;
		}

		if($row["userrating"] == '3')
		{
			$three_star_review++;
		}

		if($row["userrating"] == '2')
		{
			$two_star_review++;
		}

		if($row["userrating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_userrating = $total_userrating + $row["userrating"];
	}

	$average_rating = $total_userrating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}
