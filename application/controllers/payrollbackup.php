// public function computePayroll($data){
   // 	if($GLOBALS['startDate']!="0000-00-00"&&$GLOBALS['endDate']!="0000-00-00"){
   // 		$absentCount = $this->MdFiles->getAbsent($data['emp_id'],$GLOBALS['startDate'] ,$GLOBALS['endDate'] );
   
   // 		// print_r($absentCount);
   // 	}
   
   // 	// echo count($absentCount)."-";
   // 	$salary = $this->MdFiles->getSalary($data['emp_id']);
   // 	// print_r($salary[0]['basic']);
   // 	if(count($salary)>0){
   // 		$salaryRate = $salary[0]['basic'];
   // 	}else{
   // 		$salaryRate = 0;
   // 	}
   	
   // 	$hourlyRate= $salaryRate/26/8;
   // 	$absentDeduction = count($absentCount)*($hourlyRate*8);
   // 	$sss =  $this->MdFiles->getdeductionSSS($salaryRate);
   // 	$philHealth =  $this->MdFiles->getdeductionPhilHealth($salaryRate);
   // 	// echo $hourlyRate;
   // 	// print_r();
   	
   // 	if(count($sss)>0){
   // 		$sssDeduction = @$sss[0]['equivalent'];
   // 	}else{
   // 		// @$sssDeduction[0]['equivalent']=0;
   // 		$sssDeduction = 0;
   // 	}
   
   // 	if(count($philHealth)>0){
   // 		$philhealthDeduction = @$philHealth[0]['equivalent'];
   // 	}else{
   // 		// @$sssDeduction[0]['equivalent']=0;
   // 		$philhealthDeduction = 0;
   // 	}
   
   // 	// echo $philhealthDeduction;
   // 	$explode = explode(" " , $data['time_in']);
   // 	$explode1 = explode(" " , $data['time_out']);
   // 	$time_in = date_parse($explode[0]);
   // 	$time_out = date_parse($explode1[0]);
   
   // 	$in= $time_in['hour']*3600 + $time_in['minute']*60;
   // 	$out= $time_out['hour']*3600 + $time_out['minute']*60;
   
   // 	$totalHours = ($out - $in)/3600;
   
   // 	if($out<64800){
   // 		if($out<43200){
   // 			$undertime_deduc_hours = ((65700-$out)/3600)-1;
   // 			$countUnderTime=1;
   // 		}else{
   // 			$undertime_deduc_hours = (65700-$out)/3600;
   // 			$countUnderTime=1;
   // 		}
   		
   // 	}else{
   // 		$undertime_deduc_hours=0;
   // 		$countUnderTime=0;
   // 	}
   
   // 	if($totalHours>8){
   // 		$totalHours = 8;
   // 		// $countUnderTime=0;
   // 	}
   // 	if($in>33300){
   // 		$late= ($in - 33300)/3600;
   // 		$countLate=1;
   // 	}else{
   // 		$late = 0;
   // 		$countLate=0;
   // 	}
   // 	// echo $data['emp_id'];
   // 	$game = $this->MdFiles->getPointInfo($data['emp_id']);
   // 	// echo $game['points'];
   // 	// print_r($game);
   // 	if($late == 0){
   // 		$point = 100;
   // 	}else{
   // 		$point =50-100;
   // 	}
   // 	$gameArray = array(
   // 			'emp_id'=>$data['emp_id'],
   // 			'points' =>$point
   // 		);
   // 	// print_r($gameArray);
   // 	if(count($game)>0){
   // 	$gameArray = array(
   // 			'emp_id'=>$data['emp_id'],
   // 			'points' =>$point+$game[0]['points']
   // 		);
   // 		$gameQuery = $this->MdFiles->updatePoint($data['emp_id'],$gameArray);
   // 	}else{
   // 		$gameQuery = $this->MdFiles->insertPoints($gameArray);
   // 	}
   
   // 	$latededuction = $late*$hourlyRate;
   
   // 	$hourlySalary = ($totalHours - $late) * $hourlyRate;	 	
   // 	$payment = explode('-',$GLOBALS['endDate']);
   // 	// echo $payment[2];
   // 	if($payment[2]>20){
   // 		$payment_quarter = '2';
   // 	}else{
   // 		$payment_quarter = '1';
   // 	}
   // 	$otNum = $this->MdFiles->getOt($data['emp_id']);
   // 	$oThours=0;
   // 	foreach ($otNum as $key) {
   // 		$oThours += $key['total_hours'];
   // 		// echo $key['total_hours'];
   
   // 	}
   
   // 	// print_r($otNum);
   // 	$payroll = array(
   // 			'payment_year'=>$payment[0],
   // 			'payment_month'=>$payment[1],
   // 			'payment_quarter'=>$payment_quarter,
   // 			'emp_id'=>$data['emp_id'],
   // 			'ot_num'=>count($otNum),
   // 			'ot_hours'=>$oThours,
   // 			'ot_pay'=>$oThours*$hourlyRate*1.25,
   // 			'sat_num'=>'',
   // 			'sun_num'=>'',
   // 			'legal_num'=>'',
   // 			'special_num'=>'',
   // 			'night_diff_pay'=>'',
   // 			'night_diff_hours'=>'',
   // 			'tardy_num'=>$countLate,
   // 			'tardy_deduc'=>$latededuction,
   // 			'absent_num'=>count($absentCount),
   // 			'absent_deduc'=>$absentDeduction,
   // 			'meal_count'=>"",
   // 			'hour_rate'=>$hourlyRate,
   // 			'gross_pay'=>"",
   // 			'sss'=> $sssDeduction ,
   // 			'philhealth'=>100,
   // 			'pagibig'=>100,
   // 			'sss_loan'=>" ",
   // 			'ph_loan'=>" ",
   // 			'other_deduc'=>" ",
   // 			'net_pay'=>$latededuction-$absentDeduction-$sssDeduction-100-100,
   // 			'undertime_num'=>$countUnderTime,
   // 			'undertime_deduc'=>$undertime_deduc_hours,
   // 			'sat_num_over'=>" ",
   // 			'sun_num_over'=>" ",
   // 			'legal_num_over'=>" ",
   // 			'special_num_over'=>" ",
   // 			'sat_amount'=>" ",
   // 			'sat_amount_over'=>" ",
   // 			'sun_amount'=>" ",
   // 			'sun_amount_over'=>" ",
   // 			'leg_amount'=>" ",
   // 			'leg_amount_over'=>" ",
   // 			'spc_amount'=>" ",
   // 			'spc_amount_over'=>" "
   // 		);
   // 	// print_r($payroll);
   
   // 	$sumUp = $this->MdFiles->savePayroll($payroll);
   
   // 	// // echo(count($sumUp));
   // 	if(count($sumUp)>0){
   	
   // 		$payroll = array(
   // 			'payment_year'=>$payment[0],
   // 			'payment_month'=>$payment[1],
   // 			'payment_quarter'=>$payment_quarter,
   // 			'emp_id'=>$data['emp_id'],
   // 			'ot_num'=>count($otNum),
   // 			'ot_hours'=>$oThours,
   // 			'ot_pay'=>$oThours*$hourlyRate*1.25,
   // 			'sat_num'=>'',
   // 			'sun_num'=>'',
   // 			'legal_num'=>'',
   // 			'special_num'=>'',
   // 			'night_diff_pay'=>'',
   // 			'night_diff_hours'=>'',
   // 			'tardy_num'=>$countLate+$sumUp[0]['tardy_num'],
   // 			'tardy_deduc'=>$latededuction+$sumUp[0]['tardy_deduc'],
   // 			'absent_num'=>count($absentCount),
   // 			'absent_deduc'=>$absentDeduction,
   // 			'meal_count'=>"",
   // 			'hour_rate'=>$hourlyRate,
   // 			'gross_pay'=>"",
   // 			'sss'=> $sssDeduction ,
   // 			'philhealth'=>100,
   // 			'pagibig'=>100,
   // 			'sss_loan'=>" ",
   // 			'ph_loan'=>" ",
   // 			'other_deduc'=>" ",
   // 			'net_pay'=>$salaryRate-$latededuction-$absentDeduction-$sssDeduction-100-100,
   // 			'undertime_num'=>$countUnderTime,
   // 			'undertime_deduc'=>$undertime_deduc_hours,
   // 			'sat_num_over'=>" ",
   // 			'sun_num_over'=>" ",
   // 			'legal_num_over'=>" ",
   // 			'special_num_over'=>" ",
   // 			'sat_amount'=>" ",
   // 			'sat_amount_over'=>" ",
   // 			'sun_amount'=>" ",
   // 			'sun_amount_over'=>" ",
   // 			'leg_amount'=>" ",
   // 			'leg_amount_over'=>" ",
   // 			'spc_amount'=>" ",
   // 			'spc_amount_over'=>" "
   // 		);
   
   // 		$query = $this->MdFiles->updatePayroll($sumUp[0]['payroll_id'],$payroll);
   // 	}else{
   // 		$query = $this->MdFiles->insertPayroll($payroll);
   // 	}	
   
   
   // }
  