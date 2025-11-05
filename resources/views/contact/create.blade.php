<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Ajouter un Contact</h1>
    
    <form action="{{route('contacts.store')}}" method="POST">
        <!-- TODO: Ajouter un token CSRF -->
        @csrf
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Entrez le nom">
        
        <!-- TODO: Ajouter un input pour l'email -->
        <label for="title">Email</label>
        <input type="email" id="email" name="email" placeholder="Entrez l'adresse e-mail">
        
        <!-- TODO: Ajouter un input pour le téléphone -->
        <label for="title">Téléphone</label>
        <input type="integer" id="telephone" name="telephone" placeholder="Entrez le numéro de téléphone">
        
        <!-- TODO: Ajouter un textarea pour l'adresse -->
        <textarea name="address" id="address" cols="30" rows="10"></textarea>
        <!-- TODO: Ajouter un input pour l'entreprise -->
        <label for="title">Entreprise</label>
        <input type="text" id="entreprise" name="entreprise" placeholder="Entrez le nom l'entreprise">
        
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="{{route('contacts.index')}}">Retour à la liste</a>
    
</body>
</html>