<?php
    # Side panel
    echo $HTML->side_panel_start();
    //echo $HTML->para('');
    echo $HTML->side_panel_end();

    # Main panel
    echo $HTML->main_panel_start();
    include('_subnav.php');

    


    echo $HTML->heading1('Viewing Order Tax Evidence');

    if ($message) echo $message;

    $smartbar_selection = 'evidence';
    include('_order_smartbar.php');




//echo $HTML->heading2('Tax Evidence');

    if (PerchUtil::count($exhibits)) {

        echo '<table class="">';

        echo '<thead>';
        echo '<tr>';
                echo '<th>'.$Lang->get('Type').'</th>';
                echo '<th>'.$Lang->get('Detail').'</th>';
                echo '<th>'.$Lang->get('Country').'</th>';
                echo '<th>'.$Lang->get('Source').'</th>';
        echo '</tr>';
        echo '</thead>';

        foreach($exhibits as $Item) {
            #PerchUtil::debug($Item);
            echo '<tr>';
                echo '<td>'.$Item->exhibitType().'</td>';
                echo '<td>'.$Item->exhibitDetail().'</td>';
                echo '<td>'.$Countries->country_name((int)$Item->countryID()).'</td>';
                echo '<td>'.$Item->exhibitSource().'</td>';
                
            echo '</tr>';
        }

        echo '</table>';

    }




    echo $HTML->main_panel_end();


    function echo_if($val, $HTML)
    {
        if (isset($val) && $val) {
            echo $HTML->encode($val).'<br>';
        }
    }
