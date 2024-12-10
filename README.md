body {
    background-color: black;
}
.profile {
    display: flex;
    justify-items: center;
    align-items: center;
    flex-direction: column;
    margin-top: 40px;
    font-size: 25px;
    font-family: "Comic Neue", cursive;
    font-weight: 700;
    font-style: normal;
}
.profile img {
    width: 200px;
    border-style: 50%;
    position: relative;
}
.biodata img {
    width: 300px;
    position: relative;
    border-radius: 50%;
}
.profile h1 {
    color: #ffffff;
}
.profile h2 {
    color: #ffffff;
}
.profile h4 {
    color: #ffffff;
}
.biodata {
    display: flex;
    justify-content: center; 
    align-items: center; 
    flex-direction: column;
    margin-top: 20px;
    color: #ffffff;
    font-size: 25px;
    font-family: "Comic Sans MS", cursive sans-serif;
}
.contact {
    display: flex;
    justify-content: flex-end; 
    align-items: center; 
    flex-direction: column;
    color: #ffffff;
    margin-top: 20px; 
    padding-right:20px; 
    font-size: 25px;
    font-family: "Comic Sans MS", cursive sans-serif;
}

.container {
    color: #ffffff;
}
.contact img { 
    width: 350px;
    border-radius: 50%;
    position: relative;
}

nav {
    width: 100%;
    background: linear-gradient(45deg, #4b6cb7, #000000); 
    box-shadow: 0 4px 6px #000; 
    padding: 10px 0;
    position: fixed; 
    top: 0;
    z-index: 1000;
}

nav ul {
    display: flex;
    justify-content: center; 
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
}

nav li {
    margin-left: 25px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    padding: 10px 15px;
    transition: all 0.3s ease; 
    border-radius: 5px;
}

nav a:hover {
    background-color: #000000; 
    transform: scale(1.05); 
}
