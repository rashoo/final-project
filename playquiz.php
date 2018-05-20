<?php
//if (!defined('BASEPATH')) exit('No access allowed');
class Questions extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function quizdisplay()
    {
        $this->load->model('quizmodel');
        $this->data['questions'] = $this->quizmodel->getQuestions();
        $this->load->view('play_quiz',$this->data);
        
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Play</title>
</head>
<body>
    <div id="container">
        <h1>Play Quiz</h1>
        
        <?php foreach($questions as $row) { ?>
        
        <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3,
        $row->answer);
        shuffle($ans_array); ?>
        
        <p><?=$row->quizID?>.<?=$row->question?> </p>
        
        <input type="radio" name"quizid<?=$row->quizID?>" value="<?=$ans_array[0]?>"> <?=$ans_array[0]?><br>
        <input type="radio" name"quizid<?=$row->quizID?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
        <input type="radio" name"quizid<?=$row->quizID?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
        <input type="radio" name"quizid<?=$row->quizID?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
        
    <?php } ?>
        
    </div>
</body>
</html>