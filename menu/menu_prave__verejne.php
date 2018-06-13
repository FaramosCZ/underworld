<a href="?"><img src=obrazky/vamp_red_mensi.png style="width:100%" /></a>

<form id="form_login" class="form_login" action="?page=login" method="post">
  <input type="submit" value="Přihlásit" />
  <input type="text" name="login" placeholder="Jméno" required autofocus />
  <input type="password" name="password" placeholder="Heslo" required />
</form>

<br />

<form id="form_register" class="form_login form_register" action="?page=register" method="post">
  <input type="submit" value="Registrovat" />
  <input type="email" name="email" placeholder="E-mail" required />
  <input type="text" name="login" placeholder="Jméno" required />
  <input type="password" name="password" placeholder="Heslo" required />
</form>




<style>

.form_login
  {
   background-color: rgb(150,0,0);
   transition: background-color 0.3s linear;
   margin-bottom: 1vh;

   display: flex;
   flex-direction: column;
   align-items: center;
  }
.form_login:hover
  {
   background-color: rgb(200,0,0);
   padding-top: 10px;
   padding-bottom: 10px;
  }

.form_login:hover input
  {
   display: block;
  }

.form_login input:focus
  {
   display: block;
  }


.form_login input
  {
   background-color: Maroon;
   color: yellow;

   width: 95%;
   padding: 6px 10px;
   margin: 8px 0;
   box-sizing: border-box;

   border-radius: 1px;
   font-size:100%;
   font-weight: bold;

   display: none;
  }
.form_login input[type=submit] 
  {
   background-color: rgb(110,0,0);
   color: Gold;
   font-size: 125%;
   font-family: times;

   display: block;
   order: 10;
  }

</style>
