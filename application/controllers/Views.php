<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends Application
{
	/**
	 * Index Page for this controller.
	 */
	public function index()
    {
        $this->data['pagetitle'] = 'Ordered TODO List';
        $tasks = $this->tasks->all();   // get all the tasks
        $this->data['content'] = 'Ok'; // so we don't need pagebody
        $this->data['leftside'] = 'by_priority';
        $this->data['rightside'] = 'by_category';
		
		// fill in panels with data
		$this->data['leftside'] = $this->makePrioritizedPanel($tasks);
		$this->data['rightside'] = $this->makeCategorizedPanel($tasks);
		
        $this->render('template_secondary'); 
    }
	
	
	/**
	* Function to display task in order of priority (high to low)
	*/
	function makePrioritizedPanel($tasks) {
		$parms = ['display_tasks' => []];
		
		// extract the undone tasks
		foreach ($tasks as $task)
		{
			if ($task->status != 2)
				$undone[] = $task;
		}
		usort($undone, "orderByPriority");
		
		// substitute the priority name
		foreach ($undone as $task)
			$task->priority = $this->priorities->get($task->priority)->name;
			
		// convert the array of task objects into an array of associative objects       
		foreach ($undone as $task)
			$converted[] = (array) $task;	
		
		// and then pass them on
		$parms = ['display_tasks' => $converted];
		return $this->parser->parse('by_priority', $parms, true);
	}
	
	
	/**
	* Function to display task in order of category (alphabetical)
	*/
	function makeCategorizedPanel($tasks)
	{
		$parms = ['display_tasks' => $this->tasks->getCategorizedTasks()];
		return $this->parser->parse('by_category', $parms, true);
	}

}


// return -1, 0, or 1 of $a's priority is higher, equal to, or lower than $b's
function orderByPriority($a, $b)
{
	if ($a->priority > $b->priority)
		return -1;
	elseif ($a->priority < $b->priority)
		return 1;
	else
		return 0;
}