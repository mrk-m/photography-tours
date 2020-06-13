<?php 
// JSON string
$toursJSON = '[
	{
		"id":"1",
		"name":"LUXURY TENTED KRUGER",
		"description":"A relaxing luxurious tour through South Africa",
		"image":"images/tours/1.jpg",
		"travel_link":"http://www.perfectafrica.com/destinations/south-africa/kruger-national-park/private-reserves/luxury-tented-kruger/",
		"booking_link":"book?id=1"
	},
	{
		"id":"2",
		"name":"ULTIMATE KRUGER",
		"description":"The ultimate luxurious tour through South Africa",
		"image":"images/tours/2.jpg",
		"travel_link":"http://www.perfectafrica.com/destinations/south-africa/kruger-national-park/private-reserves/ultimate-kruger/",
		"booking_link":"book?id=2"
	},
	{
		"id":"3",
		"name":"UNIQUE WILDLIFE EXPLORER",
		"description":"A wildlife exporation tour through South Africa",
		"image":"images/tours/3.jpg",
		"travel_link":"http://www.perfectafrica.com/destinations/botswana/kalahari-salt-pans/unique-wildlife-explorer/",
		"booking_link":"book?id=3"
	}
]';

// Convert JSON string to Object
$tours = json_decode($toursJSON);
// print_r($toursObject);      // Dump all data of the Object
?>
