 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles-global.css">
     <title>Document</title>
 </head>
 <body>
     <form action="notas.php " method="POST">
        <div class="input-group">
            <label for="QTnotas"><h1>Digite a quantidade de notas:</h1></label>
            <input type="number" name="QTnotas" id="QTnotas" min="1" required placeholder="digite a quantidade de notas">
        </div>
        <button>Enviar</button>
        <button type="reset">Apagar</button>
     </form>
 </body>
 </html>