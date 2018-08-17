<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 14/08/2018
 * Time: 14:25
 */

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$action = $postData['action'];
unset($postData['action']);

switch ($action) {
    case 'more_articles':
        
        require_once __DIR__ . '/config.php';
        
        $read = new \CRUD\Read;
        $read->readFull("SELECT * FROM posts ORDER BY post_date DESC, post_id DESC LIMIT 10 OFFSET " . $postData['offsetCount']);
        
        $template = "<div class='card'>

                    <div class='card_header'>
                        <h1>#%s %s</h1>
                    </div>

                    <div class='card_content'>
                        <p>%s</p>
                    </div>

                    <div class='card_footer'>
                        <a href='javascript:void(0)'>Curtir</a>
                        <a href='javascript:void(0)'>Compartilhar</a>
                    </div>

                </div>";

        $result = "";
        
        if($read->getResult()){
            foreach ($read->getResult() as $item) {
                $array = [
                    'post_id' => $item['post_id'],
                    'post_title' => $item['post_title'],
                    'post_content' => $item['post_content']
                ];

                $result .= vsprintf($template, $array);
            }
        }

        $json['content'] = $result;
        break;
}

echo json_encode($json);