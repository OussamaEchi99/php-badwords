<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $text = 
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, asperiores voluptatum. Laboriosam doloremque non blanditiis explicabo aliquid voluptatibus et! Voluptas magni incidunt rerum cumque, ipsum expedita suscipit blanditiis error repudiandae.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum iure eum inventore iusto nisi incidunt molestiae dolores iste placeat, repudiandae pariatur nobis esse! Assumenda deleniti labore magni aut nemo.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi odit libero fuga voluptate molestias tenetur? Explicabo harum veniam modi omnis? Pariatur quod eos nemo voluptates dignissimos quas consectetur, ratione esse!';
    $text_length = strlen($text);
    $parola_da_censurare = $_GET['word'];
    $replace_word = str_replace($parola_da_censurare, '***', $text);
    $text_replaced_text = strlen($replace_word);
    ?>

    <p> <?php echo $text; ?></p>
    <span>Lunghezza del testo: <?php echo $text_length; ?> caratteri</span>

    <p><?php echo $replace_word; ?></p>
    <span>Lunghezza del testo: <?php echo $text_replaced_text ?> caratteri</span>
</body>
</html>