<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    상세정보 페이지


    <?php if($detail_info) : ?>
    
    <?php $id = $detail_info-> id; ?>
    <?php $title = $detail_info-> title; ?>
    <?php $content = $detail_info-> content; ?>
    
    <?php endif ?>
</body>
</html>