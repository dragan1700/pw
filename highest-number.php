<?php

// get the highest value of an inputfield (in this case, called 'budget')
// useful if you need a range slider in the frontend using actual min/max data, not based on assumptions
$highestBudget = $pages->get('parent=1041, template=project, budget>1, sort=-budget, limit=1')->budget;
