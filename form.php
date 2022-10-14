<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="firstname"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select name="user_subject" id="subject">
            <option value="plainte">Plainte :</option>
            <option value="remerciment">Remerciment :</option>
            <option value="other">Other :</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
    </main>
</body>
</html>