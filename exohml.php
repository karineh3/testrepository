<html>
<body>
<Form
     name="Exo formulaire" method='post' enctype="multipart/form-data">
    
    <fieldset> <legend>Classiques</legend>
         <label for="Texte">texte</label>
         <input type="text" name="Text"><br>
         <br>
         <label for="Email">Email</label>
         <input type="email" name="email"> <br>
         <br>
         <label for="Tel">Tél</label>
         <input type="Tel" name="tel"> <br>
         <br>
         <label for="Password">Mot de passe</label>
         <input type="password" name="password" <br>
    </fieldset>
         <br>
         <br>
    
    <input type="Checkbox" name="Checkbox">Je suis content d'être là<br>
    <br>
   <p>Vous êtes :</p>
   <input type="Radio" name="un_homme"id="homme">
   <label for="homme">Un homme</label><br>
   <input type="Radio" name="femme"id="femme">
   <label for="femme">Une femme</label><br>
   <input type="Radio" name="autre"id="autre">
   <label for="autre">Autre</label><br>
   <br>

   <label for="file">Envoyer un fichier</label>
   <input type="file" name="fichier"><br>
   <br>
   <label for="url">Site internet :</label>
   <input type="url" name="nom_site" id=nom_site><br>
   <br>
   <label for="number">Combien de doigt avez-vous sur votre main droite (entre 1 et 5) ?</label>
   <input type="number" name="nb_doigt" min=1 max=5 id=doigt><br>
   <br>
   <label for="date">Ma date de naissance :</label>
   <input type="date" name="date_naissance" id=date_naissance><br>
   <br>
   <label for="datetime-local">Date et heure locale :</label>
   <input type="datetime-local" name="date_heure_local" id=date_heure_local><br>
   <br>
   <label for="month">Mois et année de votre plus haut diplôme :</label>
   <input type="month" name="date_diplome" id=date_diplome><br>
   <br>
   <label for="time">heure de rendez-vous :</label>
   <input type="time" name="date_diplome" id="heure_rdv"><br>
   <br> 
   <label for="week">Prochaine semaine de vacances :</label>
   <input type="week" name="sem-vacance" id="sem_vacance"><br>
   <br>
   <label for="week">Prochaine semaine de vacances :</label>
   <input type="week" name="sem-vacance" id="sem_vacance"><br>
   <br>
   <label for="color">Ma couleur préférée : </label>
   <input type="color" name="couleur" value="#FF0000" id="couleur"><br>
   <br>
   <label for="range">Combien de livres lisez-vous par mois :</label>
   <input type="range" min=0 max=10 value="#0000FF" id="nb_livre"><br>
   <br>
   <label for="search">Recherche Google :</label>
   <input type="search" id="google"><br>
   <br
   <label for="file">Avancé :</label>
   <progress max="100" value="30" id="avance">30%</progress><br>
   <br
   <label for="button"></label>
   <button type="button" >Clique moi !</button><br>

</Form>










