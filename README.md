# 🐝EasyBee - Gestion des formations apicoles

![Logo](logoEasybee.webp)


## 🌍Contexte
EasyBee est une entreprise fictive spécialisée dans la vente de matériel apicole (ruches, combinaisons, pots, etc.) et la formation en apiculture. Pour optimiser la gestion des formations, une application web a été développée.  
Cette application est destinée :  
- aux **clients**, qui peuvent consulter les formations disponibles et s'y inscrire,  
- aux **administrateurs**, qui peuvent gérer les inscriptions et trier les participants selon divers critères.

## ⚙️Fonctionnalités 
 **Clients** : 
  - Voir les détails des formations proposées par l'entreprise (dates, contenu, prix, etc.).
  - S'inscrire à une formation.

 **Administrateurs** :
  - Afficher la liste des clients inscrits à une formation spécifique. 
  - Trier les inscriptions selon différents critères (sur liste d'attente, en attente de paiement, date.).


## 📋Prérequis
- PHP (8.2 minimum)
- Symfony (version 6.3 ou supérieure recommandée)  
- IDE compatible (VS Code, PHPStorm, etc.)
- Serveur web (WAMP, XAMP, etc)
- MySQL ou un autre serveur de base de données relationnelle
- Composer (pour gérer les dépendances PHP).


## 🚀Installation  
#### Base de données :
 1. Importez le fichier  *bdd.sql* dans votre serveur de base de données pour créer la structure de la base.   
 2. Importez le fichier *data.sql* pour y ajouter les données de test (formations, utilisateurs, etc.).  
#### Application :  
 1. Clonez ou téléchargez ce dépôt.
 2. Assurez-vous que Composer est installé, puis exécutez :
      ```bash
      composer install
 3. Modifiez le fichier .env pour y renseigner vos identifiants de base de données :
     ```bash
     DATABASE_URL="mysql://utilisateur:motdepasse@127.0.0.1:3306/nom_de_la_base"
     
#### Lancement :
 1. Démarrez le serveur Symfony
     ```bash
     symfony server:start
     
 2. Accédez à l'application : ouvrez votre navigateur et rendez-vous sur http://localhost:8000.

## 📝 Notes supplémentaires : 
Pour vous connecter, utilisez les identifiants présents dans les données de test.

## 👤Auteur
Développé par [@L-Matteo](https://github.com/L-Matteo).
