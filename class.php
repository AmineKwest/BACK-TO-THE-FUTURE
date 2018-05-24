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
    $i=1;
    $step = new DateInterval($step);
    $stop = new DatePeriod($this->start, $step, $this->end);
    foreach ($stop as $date){
      ?><div class="col-xs-2 col-md-2 ">
        <table>
          <thead>
            <tr>
              <th colspan="2">Date number <?php echo $i++;?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2"><?php echo $date->format('M d Y A g:i');?></td>
            </tr>
          </tbody>
        </table>
      </br>
    </div>
    <?php
  }
}
}
?>
