<script type"text/javascript" language="javascript">
function verif(){
   var message = "";  
   var form=true;
   if(document.formulaire.nom.value=="") {
	   message = message + "Il faut entrer votre nom.\n";
   }
   if(document.formulaire.prenom.value=="") {
	   message = message + "Il faut entrer votre prénom.\n";
   }
   if(document.formulaire.telephone.value=="") {
	   message = message + "Il faut entrer un numéro de téléphone.\n";
   }
   if(document.formulaire.nomr.value=="") {
	   message = message + "Il faut entrer le nom de votre résidence.\n";
   }
   if(document.formulaire.adresser.value=="") {
	   message = message + "Il faut entrer l'adresse de votre résidence.\n";
   }
   if(!(message=="")){
   alert(message);
   form=false;
   }
   if(form=true){
	   alert("Formulaire envoyé!");
   }
   return form;
}
</script>

<div id="contenu">
<div class="card"  class="rounded">
  <div class="card-body">
<div class="jumbotron">
  <h1 class="display-3">Connectons Ensemble</h1>
  <p class="lead">S'inscrire</p>
  <hr class="my-4">

Si vous desirez inscrire votre résidence afin d'obtenir un atelier <i>Connectons Ensemble</i>, vous devez remplir le formulaire ci-dessous. Suite à l'envoi
du formulaire, nous nous engageons à vous contactez par téléphone dans un maximum de 5 jours ouvrables afin de prendre un rendez-vous pour l'atelier.


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Formulaire</h1>
    <p class="my-4">
<p>
<form action='contenu/formulaire.php' onsubmit="return verif();"  method="post"  name="formulaire">
<div class="form-row">
    <div class="form-group col-md-6">
<label for="nom"><u>Votre nom:</u> </label><input type="text" name="nom"   id="nom" maxlength="20" class="form-control"/><br><br>
</div>
<div class="form-group col-md-6">
<label for="prenom"><u>Votre prénom:</u> </label><input type="text" name="prenom" id="prenom" maxlength="20"  class="form-control"/><br><br>
</div>

<div class="form-group col-md-2"><u>Votre date de naissance:</u></div>
<div class="form-group col-md-2">
<label for="jour"> Jour: </label>
<select name="jour" id="jour" class="form-control">
<option>01</option> <option>02</option> <option>03</option><option>04</option>
<option>05</option> <option>06</option> <option>07</option><option>08</option>
<option>09</option> <option>10</option> <option>11</option><option>12</option>
<option>13</option> <option>14</option> <option>15</option><option>16</option>
<option>17</option> <option>18</option> <option>19</option><option>20</option>
<option>21</option> <option>22</option> <option>23</option><option>24</option>
<option>25</option> <option>26</option> <option>27</option><option>28</option>
<option>29</option> <option>30</option> <option>31</option>
</select>
</div><div class="form-group col-md-2">
<label for="mois"> Mois: </label>
<select name="mois" id="mois" class="form-control">
<option>Janvier</option> <option>Février</option> <option>Mars</option><option>Avril</option>
<option>Mai</option> <option>Juin</option> <option>Juillet</option><option>Août</option>
<option>Septembre</option> <option>Octobre</option> <option>Novembre</option><option>Décembre</option>
</select></div><div class="form-group col-md-2">
<label for="annee"> Année: </label>
<select name="annee" id="annee"  class="form-control">
<option>1999</option> <option>1998</option> <option>1997</option><option>1996</option>
<option>1995</option> <option>1994</option> <option>1993</option><option>1992</option>
<option>1991</option> <option>1990</option> <option>1989</option><option>1988</option>
<option>1987</option> <option>1986</option> <option>1985</option><option>1984</option>
<option>1983</option> <option>1982</option> <option>1981</option><option>1980</option>
<option>1979</option> <option>1978</option> <option>1977</option><option>1976</option>
<option>1975</option> <option>1974</option> <option>1973</option><option>1972</option>
<option>1971</option> <option>1970</option> <option>1969</option>
<option>1968</option> <option>1967</option> <option>1966</option><option>1965</option>
<option>1964</option> <option>1963</option> <option>1962</option><option>1961</option>
<option>1960</option> <option>1959</option> <option>1958</option><option>1957</option>
<option>1956</option> <option>1955</option> <option>1954</option><option>1953</option>
<option>1952</option> <option>1951</option> <option>1950</option><option>1949</option>
<option>1948</option> <option>1947</option> <option>1946</option><option>1945</option>
<option>1944</option> <option>1943</option> <option>1942</option><option>1941</option>
<option>1940</option> <option>1939</option> <option>1938</option>
</select><br><br>
</div></div>
<div class="form-row">
<div class="form-group col-md-4">
<label for="telephone"><u>Votre numéro de téléphone:</u></label> <input type="text" name="telephone" id="telephone" maxlength="10" class="form-control"/><br><br>
</div><div class="form-group col-md-4">
<label for="nomr"><u>Nom de la résidence:</u></label><input type="text" name="nomr" id="nomr" maxlength="20"  class="form-control"/><br><br>
</div><div class="form-group col-md-4">
<label for="adresser"><u>Adresse de la résidence:</u></label> <textarea name="adresser" id="adresser"  maxlength="100" class="form-control"></textarea><br><br>
</div></div>
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-legend col-sm-2"><u>Durée de l'atelier:</u></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="duree" id="30" value="30 minutes">
            30 minutes
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="duree" id="une" value="une heure" checked>
            Une heure
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="duree" id="deux" value="deux heure">
            Deux heures
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-legend col-sm-2"><u>Heure de l'atelier:</u></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="heure" id="matin" value="matin">
            Matin
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="heure" id="pm" value="apres-midi" checked>
            Après-midi
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="heure" id="soir" value="soir">
            Soir
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-legend col-sm-2"><u>Type de l'atelier:</u></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="type" id="petit" value="petit" checked>
            Petit groupe
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="type" id="grand" value="grand">
            Grand groupe
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="type" id="complete" value="complete">
            Résidence complète
          </label>
        </div>
      </div>
    </div>
  </fieldset>

<input class="btn btn-success" name="reset1" type="reset" value="Rénitialiser"/> <input class="btn btn-success" type="submit" value="Envoyer le formulaire"/>
</form><br>
<script type"text/javascript" language="javascript">
function form() {
var url="contenu/form.html";
var request= new XMLHttpRequest();
request.onreadystatechange = function(){
    if (request.readyState ==4 && request.status == 200)
          document.getElementById('form').innerHTML=request.responseText;

    };
request.open("POST", url, true);
request.send(); 
}

</script>
<div class="btn btn-success" onclick="form()" role="button">Formulaire précédent</div>
<div id="form"></div>
<br>


</div></div></div></div></div>
