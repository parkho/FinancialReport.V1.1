<?php
class Pfinance extends CodonModule    
{
		
	public $title = 'Financial Report';	
		
	public function index() 
    {
		$revision = trim(file_get_contents(CORE_PATH.'/version'));
			if($revision != 'simpilot 5.5.2')
				{
					echo '<center>phpVMS Version Installed Is Not Compatible With This Module!</center><br />';
					echo '<center>phpVMS Version Installed: '.$revision.'</center>';
				}
			else
			{
				$this->show('/pfinance/pilot_finance.php');
			}
 	}
	
	public function pilots()
	{
		$this->set('allpilots', PilotData::findPilots(array()));
		$this->show('/pfinance/pilots_finance.php');
	}
}
?>
