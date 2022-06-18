<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quote Sauce Theme Creator</title>
</head>
<body>
    <h1>Quote Sauce Theme Creator</h1>
    <div id="creator">
        <div id="infos">
            <input id="name" placeholder="Nom">
        </div>
        <div id="questions">
            <div id="Q-1">
                <p>Citation 1</p>
                <input id="quote-1" placeholder="Citation">
                <div id="answers-1">
                    <input id="answer-1-1" placeholder="Réponse 1">
                    <button onclick="addAnswer(1)" id="addAnswer-1">+</button>
                    <button onclick="removeAnswer(1)" id="removeAnswer-1">-</button>
                </div>
            </div>
            <div id="Q-2">
                <p>Citation 2</p>
                <input id="quote-2" placeholder="Citation">
                <div id="answers-2">
                    <input id="answer-2-1" placeholder="Réponse 1">
                    <button onclick="addAnswer(2)" id="addAnswer-2">+</button>
                    <button onclick="removeAnswer(2)" id="removeAnswer-2">-</button>
                </div>
            </div>
        </div>
        <br>
        <button onclick="addQuote()">+</button>
        <button onclick="removeQuote()">-</button>
        <br><br>
        <button onclick="download()" id="download">Télécharger</button>
    </div>
</body>
<script src="creator.js"></script>
<script src="download.js"></script>
</html>