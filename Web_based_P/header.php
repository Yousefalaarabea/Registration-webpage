<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style>
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background-color: #1f1f1f;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.name {
    text-decoration: none;
    color: #eee;
    font-weight: 700;
    font-size: 24px;
}

.navigation_bar a {
    text-decoration: none;
    color: #eee;
    font-weight: 500;
    padding-left: 20px;
    transition: color 0.3s ease;
}

.navigation_bar a:hover {
    color: #ddd;
}

section {
    padding: 50px;
}

</style>
<body>
<header>
        <p class="name">Registration Form</p>
        <nav class="navigation_bar">
            <a>Home <i class="fa fa-home"></i></a>
            <a>About Us <i class="fa fa-user-plus"></i></a>
            <a>Ask <i class="fas fa-search"></i></i></a>
        </nav>
    </header>