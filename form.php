<form  action="thanks.php"  method="post">
  <div>
    <label  for="nom">Nom :</label>
    <input  type="text"  id="nom"  name="user_name">
  </div>
  <div>
    <label  for="prenom">Prénom:</label>
    <input  type="text"  id="prenom"  name="user_firstname">
  </div>
  <div>
    <label  for="telephone">Entrez votre numéro de téléphone:</label>
    <input type="tel" id="phone" name="phone"
       pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
       required>
  </div>
  <div>
    <label for="sujet">Choisissez un bijoux:</label>
    <select name="sujet" id="sujetMail">
    <option value="">Choisissez un sujet --</option>
    <option value="collier">Collier</option>
    <option value="bague">Bague</option>
    <option value="bracelet">Bracelet</option>
    <option value="bouclesdoreilles">Boucles d'oreilles</option>
    </select>
  </div>

  <div>
    <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form>



