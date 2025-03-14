.flex1 {
    display: flex;
    justify-content: space-between;
}

.flex2 {
    display: flex;
    flex-direction: column;
    margin-left: 1em;
}

h1 {
    margin-bottom: 0px;
    color:rgba(215, 194, 87, 0.981);
    font-family: "Dancing Script", serif;
    font-size: 3.9em;
    font-weight: 700;
  font-style: normal;
  margin-top: 20px;
  padding-left: 30px;
}

.hr_footer {
    display: flex;
    margin-top: 5em;
    margin-left: 3em;
    margin-right: 3em;
}

.footer {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    max-width: 1000px;
    margin-left: 3em;
    color: rgb(112, 101, 101);
}

.flex_connexion {
    margin-top: -50px;
    display: flex;
    flex-direction: column;
    margin-right: 150px;
    width: 100%;
    max-width: 400px;
    padding: 10px;
    color: white;
    border: 2px solid rgba(215, 194, 87, 0.981);
    box-sizing: border-box;
   

}

main {
    display: flex;
    justify-content: flex-end;
    padding-top: 3em;
}


section {
    margin-bottom: 20px;
}

#creation {
    display: none;
}

h2 {
    margin-top: 150px;
    padding-left: 70px;
    font-size :5.2em;
    margin-right: 500px;
    color: white;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input {
    margin-bottom: 15px;
    padding: 10px;
    font-size: 1em;
    background-color:  rgb(23, 22, 22);
    color:white;
}

.button_connexion {
    margin-top: 10px;
   
    color: white;
    background-color: rgb(23, 22, 22);
    padding:  10px;
    font-size: 1.2em;
    cursor: pointer;
    margin-top: 10px;
}

.button_creer {
    margin-top: 10px;
  color: white;
  background-color: rgb(23, 22, 22);
  padding:  10px;
  font-size: 1.2em;
}


button:hover {
    background-color: rgba(54, 53, 53, 0.375);
}


@media (min-width: 320px) and (max-width: 720px) {
}



.liens{
    padding-left: 750px;
    font-size: 1.5em;
    margin-top: -500px;
    margin-bottom: 150px;
    
  }

  a{
    text-decoration: none;
  }
  a:hover{
    font-weight: 900;
    text-decoration: underline;
  }

  
  h3{
    display: flex;
    margin-left: 100px;
    text-decoration: underline;
    font-family: "Dancing Script", serif;
    font-size: 2.9em;
    font-weight: 700;
  font-style: normal;
  }

body{
    background-color:  rgb(23, 22, 22);
    background-image: url(images/cercle.png);
    background-repeat: no-repeat;
    background-size: 20%;
    background-position: 10px;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
