<!DOCTYPE html>
<html>
<head>
	<title>GOGO</title>

	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<style>
		* {
	font-family: arial, sans-serif;
	color: #545454;
}

html,
body {
	margin: 0;
	height: 100%;
}

.wrapper {

	display: flex;
    flex-direction: column;
    min-height: 100%;
	
}

.wrapper.indexPage {
	justify-content: center;
}

.mainSection {
	display: flex;
	flex-direction: column;
	align-items: center;
}

.mainSection .searchContainer {
	margin-top: 20px;
    width: 100%;
}

.mainSection .searchContainer form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

.searchContainer .searchButton {

	color: #757575;
    background-color: #f5f5f5;
    border: none;
    height: 36px;
    width: 125px;
    border-radius: 1px;
    font-size: 13px;
    font-weight: bold;
	margin-top: 20px;
	margin-bottom: 20px;
	cursor: pointer;
	outline-style: outset;
	outline-color: #D3D3D3;

}

.mainSection .searchContainer .searchBox {
	border: none;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
    height: 44px;
    border-radius: 2px;
    outline: none;
    padding: 10px;
    box-sizing: border-box;
    font-size: 16px;
    width: 70%;
    max-width: 630px;
    color: #000;
}

	</style>

	<div class="wrapper indexPage">
	

		<div class="mainSection">

			<div class="logoContainer">
				<img src="assets/images/gogo.png">
			</div>


			<div class="searchContainer">

				<form action="search.php" method="GET">

					<input class="searchBox" type="text" name="term">
					<input class="searchButton" type="submit" value="Search">


				</form>

			</div>


		</div>


	</div>

</body>
</html>