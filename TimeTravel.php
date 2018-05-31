<?php
class TimeTravel
{
  public $start;
  public $end;
  public $interval;

  public function __construct($start, $end){
    $this->start = new DateTime($start);
    $this->end = new DateTime($end);
  }
  public function getTravelInfo(){
    if ($this->start < $this->end) {
      return $this->end->diff($this->start)->format("Il y a %y années,
      %m mois, %d jours, %h heures, %i minutes et %s secondes");
    }
  }
  public function findDate($interval){
    $this->interval = new DateInterval($interval);
    return ($this->start->sub($this->interval)->format('d/m/Y h:i:s'));
  }
  public function backToFutureStepByStep($step){
    $step = new DateInterval($step);
    $stop = new DatePeriod($this->start, $step, $this->end);
    foreach ($stop as $date){
    echo $date->format('M ' .'d ' .'Y ' .'A ' .'g:' .'i') .'<br>';
}
}
}
?>
