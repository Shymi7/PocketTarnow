<?php
/**
 * Funkcja sprawdza czy podana data jest dniem pracującym (TRUE) lub święto/sobota/niedziele (FALSE)
 *
 * @param string $date Data w formacie Y-m-d (np. 2015-08-26)
 * @return boolean
 */
function isThatDateWorkingDay($date)
{
    $time = strtotime($date);
    $dayOfWeek = (int)date('w',$time);
    $year = (int)date('Y',$time);
 
 
    #lista swiat stalych
    $holiday=array('01-01', '01-06','05-01','05-03','08-15','11-01','11-11','12-25','12-26');
 
    #dodanie listy swiat ruchomych
    #wialkanoc
    $easter = date('m-d', easter_date( $year ));
    #poniedzialek wielkanocny
    $easterSec = date('m-d', strtotime('+1 day', strtotime( $year . '-' . $easter) ));
    #boze cialo
    $cc = date('m-d', strtotime('+60 days', strtotime( $year . '-' . $easter) ));
    #Zesłanie Ducha Świętego
    $p = date('m-d', strtotime('+49 days', strtotime( $year . '-' . $easter) ));
 
    $holiday[] = $easter;
    $holiday[] = $easterSec;
    $holiday[] = $cc;
    $holiday[] = $p;
 
    $md = date('m-d',strtotime($date));
    if(in_array($md, $holiday)) return false;
 
    return true;
}
?>