  
	<?php
	if($_GET)
	{
		$atime_mon1 = $_GET['atime_mon1'];
		$atime_mon2 = $_GET['atime_mon2'];
		$atime_mon3 = $_GET['atime_mon3'];
		$atime_mon4 = $_GET['atime_mon4'];
		$atime_mon5 = $_GET['atime_mon5'];
		$atime_mon6 = $_GET['atime_mon6'];
		$dept_time_mon1 =$_GET['dept_time_mon1'];
		$dept_time_mon2 =$_GET['dept_time_mon2'];
		$dept_time_mon3 =$_GET['dept_time_mon3'];
		$dept_time_mon4 =$_GET['dept_time_mon4'];
		$dept_time_mon5 =$_GET['dept_time_mon5'];
		$dept_time_mon6 =$_GET['dept_time_mon6'];
		$ptime_mon1 =$_GET['ptime_mon1'];
		$ptime_mon2 =$_GET['ptime_mon2'];
		$ptime_mon3 =$_GET['ptime_mon3'];
		$ptime_mon4 =$_GET['ptime_mon4'];
		$ptime_mon5 =$_GET['ptime_mon5'];
		$ptime_mon6 =$_GET['ptime_mon6'];
		$from_mon1=$_GET['from_mon1'];
		$from_mon2=$_GET['from_mon2'];
		$from_mon3=$_GET['from_mon3'];
		$from_mon4=$_GET['from_mon4'];
		$from_mon5=$_GET['from_mon5'];
		$from_mon6=$_GET['from_mon6'];
		$to_mon1 = $_GET['to_mon1'];
		$to_mon2 = $_GET['to_mon2'];
		$to_mon3 = $_GET['to_mon3'];
		$to_mon4 = $_GET['to_mon4'];
		$to_mon5 = $_GET['to_mon5'];
		$to_mon6 = $_GET['to_mon6'];
		$atime_tue1 = $_GET['atime_tue1'];
		$atime_tue2 = $_GET['atime_tue2'];
		$atime_tue3 = $_GET['atime_tue3'];
		$atime_tue4 = $_GET['atime_tue4'];
		$atime_tue5 = $_GET['atime_tue5'];
		$atime_tue6 = $_GET['atime_tue6'];
		$dept_time_tue1 =$_GET['dept_time_tue1'];
		$dept_time_tue2 =$_GET['dept_time_tue2'];
		$dept_time_tue3 =$_GET['dept_time_tue3'];
		$dept_time_tue4 =$_GET['dept_time_tue4'];
		$dept_time_tue5 =$_GET['dept_time_tue5'];
		$dept_time_tue6 =$_GET['dept_time_tue6'];
		$ptime_tue1 =$_GET['ptime_tue1'];
		$ptime_tue2 =$_GET['ptime_tue2'];
		$ptime_tue3 =$_GET['ptime_tue3'];
		$ptime_tue4 =$_GET['ptime_tue4'];
		$ptime_tue5 =$_GET['ptime_tue5'];
		$ptime_tue6 =$_GET['ptime_tue6'];
		$from_tue1=$_GET['from_tue1'];
		$from_tue2=$_GET['from_tue2'];
		$from_tue3=$_GET['from_tue3'];
		$from_tue4=$_GET['from_tue4'];
		$from_tue5=$_GET['from_tue5'];
		$from_tue6=$_GET['from_tue6'];
		$to_tue1 = $_GET['to_tue1'];
		$to_tue2 = $_GET['to_tue2'];
		$to_tue3 = $_GET['to_tue3'];
		$to_tue4 = $_GET['to_tue4'];
		$to_tue5 = $_GET['to_tue5'];
		$to_tue6 = $_GET['to_tue6'];
		$atime_wed1 = $_GET['atime_wed1'];
		$atime_wed2 = $_GET['atime_wed2'];
		$atime_wed3 = $_GET['atime_wed3'];
		$atime_wed4 = $_GET['atime_wed4'];
		$atime_wed5 = $_GET['atime_wed5'];
		$atime_wed6 = $_GET['atime_wed6'];
		$dept_time_wed1 =$_GET['dept_time_wed1'];
		$dept_time_wed2 =$_GET['dept_time_wed2'];
		$dept_time_wed3 =$_GET['dept_time_wed3'];
		$dept_time_wed4 =$_GET['dept_time_wed4'];
		$dept_time_wed5 =$_GET['dept_time_wed5'];
		$dept_time_wed6 =$_GET['dept_time_wed6'];
		$ptime_wed1 =$_GET['ptime_tue1'];
		$ptime_wed2 =$_GET['ptime_tue2'];
		$ptime_wed3 =$_GET['ptime_tue3'];
		$ptime_wed4 =$_GET['ptime_tue4'];
		$ptime_wed5 =$_GET['ptime_tue5'];
		$ptime_wed6 =$_GET['ptime_wed6'];
		$from_wed1=$_GET['from_wed1'];
		$from_wed2=$_GET['from_wed2'];
		$from_wed3=$_GET['from_wed3'];
		$from_wed4=$_GET['from_wed4'];
		$from_wed5=$_GET['from_wed5'];
		$from_wed6=$_GET['from_wed6'];
		$to_wed1 = $_GET['to_wed1'];
		$to_wed2 = $_GET['to_wed2'];
		$to_wed3 = $_GET['to_wed3'];
		$to_wed4 = $_GET['to_wed4'];
		$to_wed5 = $_GET['to_wed5'];
		$to_wed6 = $_GET['to_wed6'];
		$atime_thur1 = $_GET['atime_thur1'];
		$atime_thur2 = $_GET['atime_thur2'];
		$atime_thur3 = $_GET['atime_thur3'];
		$atime_thur4 = $_GET['atime_thur4'];
		$atime_thur5 = $_GET['atime_thur5'];
		$atime_thur6 = $_GET['atime_thur6'];
		$dept_time_thur1 =$_GET['dept_time_thur1'];
		$dept_time_thur2 =$_GET['dept_time_thur2'];
		$dept_time_thur3 =$_GET['dept_time_thur3'];
		$dept_time_thur4 =$_GET['dept_time_thur4'];
		$dept_time_thur5 =$_GET['dept_time_thur5'];
		$dept_time_thur6 =$_GET['dept_time_thur6'];
		$ptime_thur1 =$_GET['ptime_thur1'];
		$ptime_thur2 =$_GET['ptime_thur2'];
		$ptime_thur3 =$_GET['ptime_thur3'];
		$ptime_thur4 =$_GET['ptime_thur4'];
		$ptime_thur5 =$_GET['ptime_thur5'];
		$ptime_thur6 =$_GET['ptime_thur6'];
		$from_thur1=$_GET['from_thur1'];
		$from_thur2=$_GET['from_thur2'];
		$from_thur3=$_GET['from_thur3'];
		$from_thur4=$_GET['from_thur4'];
		$from_thur5=$_GET['from_thur5'];
		$from_thur6=$_GET['from_thur6'];
		$to_thur1 = $_GET['to_thur1'];
		$to_thur2 = $_GET['to_thur2'];
		$to_thur3 = $_GET['to_thur3'];
		$to_thur4 = $_GET['to_thur4'];
		$to_thur5 = $_GET['to_thur5'];
		$to_thur6 = $_GET['to_thur6'];
		$atime_fri1 = $_GET['atime_fri1'];
		$atime_fri2 = $_GET['atime_fri2'];
		$atime_fri3 = $_GET['atime_fri3'];
		$atime_fri4 = $_GET['atime_fri4'];
		$atime_fri5 = $_GET['atime_fri5'];
		$atime_fri6 = $_GET['atime_fri6'];
		$dept_time_fri1 =$_GET['dept_time_fri1'];
		$dept_time_fri2 =$_GET['dept_time_fri2'];
		$dept_time_fri3 =$_GET['dept_time_fri3'];
		$dept_time_fri4 =$_GET['dept_time_fri4'];
		$dept_time_fri5 =$_GET['dept_time_fri5'];
		$dept_time_fri6 =$_GET['dept_time_fri6'];
		$ptime_fri1 =$_GET['ptime_fri1'];
		$ptime_fri2 =$_GET['ptime_fri2'];
		$ptime_fri3 =$_GET['ptime_fri3'];
		$ptime_fri4 =$_GET['ptime_fri4'];
		$ptime_fri5 =$_GET['ptime_fri5'];
		$ptime_fri6 =$_GET['ptime_fri6'];
		$from_fri1=$_GET['from_fri1'];
		$from_fri2=$_GET['from_fri2'];
		$from_fri3=$_GET['from_fri3'];
		$from_fri4=$_GET['from_fri4'];
		$from_fri5=$_GET['from_fri5'];
		$from_fri6=$_GET['from_fri6'];
		$to_fri1 = $_GET['to_fri1'];
		$to_fri2 = $_GET['to_fri2'];
		$to_fri3 = $_GET['to_fri3'];
		$to_fri4 = $_GET['to_fri4'];
		$to_fri5 = $_GET['to_fri5'];
		$to_fri6 = $_GET['to_fri6'];
		$atime_sat1 = $_GET['atime_sat1'];
		$atime_sat2 = $_GET['atime_sat2'];
		$atime_sat3 = $_GET['atime_sat3'];
		$atime_sat4 = $_GET['atime_sat4'];
		$atime_sat5 = $_GET['atime_sat5'];
		$atime_sat6 = $_GET['atime_sat6'];
		$dept_time_sat1 =$_GET['dept_time_sat1'];
		$dept_time_sat2 =$_GET['dept_time_sat2'];
		$dept_time_sat3 =$_GET['dept_time_sat3'];
		$dept_time_sat4 =$_GET['dept_time_sat4'];
		$dept_time_sat5 =$_GET['dept_time_sat5'];
		$dept_time_sat6 =$_GET['dept_time_sat6'];
		$ptime_sat1 =$_GET['ptime_sat1'];
		$ptime_sat2 =$_GET['ptime_sat2'];
		$ptime_sat3 =$_GET['ptime_sat3'];
		$ptime_sat4 =$_GET['ptime_sat4'];
		$ptime_sat5 =$_GET['ptime_sat5'];
		$ptime_sat6 =$_GET['ptime_sat6'];
		$from_sat1=$_GET['from_sat1'];
		$from_sat2=$_GET['from_sat2'];
		$from_sat3=$_GET['from_sat3'];
		$from_sat4=$_GET['from_sat4'];
		$from_sat5=$_GET['from_sat5'];
		$from_sat6=$_GET['from_sat6'];
		$to_sat1 = $_GET['to_sat1'];
		$to_sat2 = $_GET['to_sat2'];
		$to_sat3 = $_GET['to_sat3'];
		$to_sat4 = $_GET['to_sat4'];
		$to_sat5 = $_GET['to_sat5'];
		$to_sat6 = $_GET['to_sat6'];
		$atime_sun1 = $_GET['atime_sun1'];
		$atime_sun2 = $_GET['atime_sun2'];
		$atime_sun3 = $_GET['atime_sun3'];
		$atime_sun4 = $_GET['atime_sun4'];
		$atime_sun5 = $_GET['atime_sun5'];
		$atime_sun6 = $_GET['atime_sun6'];
		$dept_time_sun1 =$_GET['dept_time_sun1'];
		$dept_time_sun2 =$_GET['dept_time_sun2'];
		$dept_time_sun3 =$_GET['dept_time_sun3'];
		$dept_time_sun4 =$_GET['dept_time_sun4'];
		$dept_time_sun5 =$_GET['dept_time_sun5'];
		$dept_time_sun6 =$_GET['dept_time_sun6'];
		$ptime_sun1 =$_GET['ptime_sun1'];
		$ptime_sun2 =$_GET['ptime_sun2'];
		$ptime_sun3 =$_GET['ptime_sun3'];
		$ptime_sun4 =$_GET['ptime_sun4'];
		$ptime_sun5 =$_GET['ptime_sun5'];
		$ptime_sun6 =$_GET['ptime_sun6'];
		$from_sun1=$_GET['from_sun1'];
		$from_sun2=$_GET['from_sun2'];
		$from_sun3=$_GET['from_sun3'];
		$from_sun4=$_GET['from_sun4'];
		$from_sun5=$_GET['from_sun5'];
		$from_sun6=$_GET['from_sun6'];
		$to_sun1 = $_GET['to_sun1'];
		$to_sun2 = $_GET['to_sun2'];
		$to_sun3 = $_GET['to_sun3'];
		$to_sun4 = $_GET['to_sun4'];
		$to_sun5 = $_GET['to_sun5'];
		$to_sun6 = $_GET['to_sun6'];
	}
	echo '<head><link rel="stylesheet" type="text/css" href="t.css"></head>';
	echo"<center><em><h1>Train Chatime</h1></em></center>
	<table>
		<tr>
			<th>TIME SLOT</th>
			<th>MONDAY</th>
			<th>TUEDSDAY</th>
			<th>WEDNESDAY</th>
			<th>THURSDAY</th>
			<th>FRIDAY</th>
			<th>SATURDAY</th>
			<th>SUNDAY</th>
		</tr>
		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
		<tr>
			
			<td><center>4:00 - 8:00</center></td>
			<td>
				<div> 
				
				<table>
					<tr>Arrival time :$atime_mon1</tr><br>
					<tr>Depatimeure time :$dept_time_mon1</tr><br>
					<tr>Pform No.:$ptime_mon1</tr><br>
					<tr>From :$from_mon1</tr><br>
					<tr>To:$to_mon1</tr><br>
				</table>
			
		</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue1</tr><br>
					<tr>Depatimeure time :$dept_time_tue1></tr><br>
					<tr>Pform No.:$ptime_tue1</tr><br>
					<tr>From :$from_tue1></tr><br>
					<tr>To :$to_tue1</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed1</tr><br>
					<tr>Depatimeure time :$dept_time_wed1</tr><br>
					<tr>Pform No.:$ptime_wed1</tr><br>
					<tr>From :$from_wed1</tr><br>
					<tr>To :$to_wed1</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur1</tr><br>
					<tr>Depatimeure time :$dept_time_thur1</tr><br>
					<tr>Pform No.:$ptime_thur1</tr><br>
					<tr>From :$from_thur1</tr><br>
					<tr>To :$to_thur1</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri1</tr><br>
					<tr>Depatimeure time :$dept_time_fri1</tr><br>
					<tr>Pform No.:$ptime_fri1</tr><br>
					<tr>From :$from_fri1</tr><br>
					<tr>To :$to_fri1</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sat1</tr><br>
					<tr>Depatimeure time :$dept_time_sat1<br>
					<tr>Pform No.:$ptime_sat1</tr><br>
					<tr>From :$from_sat1</tr><br>
					<tr>To :$to_sat1</tr><br>
					
				</table>
			</div>
			</td>
			<td>
			<div>
				<table>
					<tr>Arrival time :$atime_sun1</tr><br>
					<tr>Depatimeure time :$dept_time_sun1</tr><br>
					<tr>Pform No.:$ptime_sun1</tr><br>
					<tr>From :$from_sun1</tr><br>
					<tr>To :$to_sun1</tr><br>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td><center>8:00 - 12:00</center></td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_mon2</tr><br>
					<tr>Depatimeure time :$dept_time_mon2</tr><br>
					<tr>Pform No.:$ptime_mon2</tr><br>
					<tr>From :$from_mon2</tr><br>
					<tr>To:$to_mon2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue2</tr><br>
					<tr>Depatimeure time :$dept_time_tue2</tr><br>
					<tr>Pform No.:$ptime_tue2</tr><br>
					<tr>From :$from_tue2</tr><br>
					<tr>To :$to_tue2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed2</tr><br>
					<tr>Depatimeure time :$dept_time_wed2</tr><br>
					<tr>Pform No.:$ptime_wed2</tr><br>
					<tr>From :$from_wed2</tr><br>
					<tr>To :$to_wed2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur2</tr><br>
					<tr>Depatimeure time :$dept_time_thur2</tr><br>
					<tr>Pform No.:$ptime_thur2</tr><br>
					<tr>From :$from_thur2</tr><br>
					<tr>To :$to_thur2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri2</tr><br>
					<tr>Depatimeure time :$dept_time_fri2</tr><br>
					<tr>Pform No.:$ptime_fri2</tr><br>
					<tr>From :$from_fri2</tr><br>
					<tr>To :$to_fri2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sat2</tr><br>
					<tr>Depatimeure time :$dept_time_sat2</tr><br>
					<tr>Pform No.:$ptime_sat2</tr><br>
					<tr>From :$from_sat2</tr><br>
					<tr>To :$to_sat2</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sun2</tr><br>
					<tr>Depatimeure time :$dept_time_sun2</tr><br>
					<tr>Pform No.:$ptime_sun2</tr><br>
					<tr>From :$from_sun2</tr><br>
					<tr>To :$to_sun2</tr><br>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td><center>12:00 - 16:00</center></td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_mon3</tr><br>
					<tr>Depatimeure time :$dept_time_mon3</tr><br>
					<tr>Pform No.:$ptime_mon3</tr><br>
					<tr>From :$from_mon3</tr><br>
					<tr>To:$to_mon3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue3</tr><br>
					<tr>Depatimeure time :$dept_time_tue3</tr><br>
					<tr>Pform No.:$ptime_tue3</tr><br>
					<tr>From :$from_tue3</tr><br>
					<tr>To :$to_tue3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed3</tr><br>
					<tr>Depatimeure time :$dept_time_wed3</tr><br>
					<tr>Pform No.:$ptime_wed3</tr><br>
					<tr>From :$from_wed3</tr><br>
					<tr>To :$to_wed3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur3</tr><br>
					<tr>Depatimeure time :$dept_time_thur3</tr><br>
					<tr>Pform No.:$ptime_thur3</tr><br>
					<tr>From :$from_thur3</tr><br>
					<tr>To :$to_thur3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri3</tr><br>
					<tr>Depatimeure time :$dept_time_fri3</tr><br>
					<tr>Pform No.:$ptime_fri3/tr><br>
					<tr>From :$from_fri3</tr><br>
					<tr>To :$to_fri3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sat3</tr><br>
					<tr>Depatimeure time :$dept_time_sat3</tr><br>
					<tr>Pform No.:$ptime_sat3</tr><br>
					<tr>From :$from_sat3</tr><br>
					<tr>To :$to_sat3</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sun3</tr><br>
					<tr>Depatimeure time :$dept_time_sun3</tr><br>
					<tr>Pform No.:$ptime_sun3</tr><br>
					<tr>From :$from_sun3</tr><br>
					<tr>To :$to_sun3</tr><br>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td><center>16:00 - 20:00</center></td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_mon4</tr><br>
					<tr>Depatimeure time :$dept_time_mon4</tr><br>
					<tr>Pform No.:$ptime_mon4</tr><br>
					<tr>From :$from_mon4</tr><br>
					<tr>To:$to_mon4</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue4</tr><br>
					<tr>Depatimeure time :$dept_time_tue4</tr><br>
					<tr>Pform No.:$ptime_tue4</tr><br>
					<tr>From :$from_tue4</tr><br>
					<tr>To :$to_tue4</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed4</tr><br>
					<tr>Depatimeure time :$dept_time_wed4</tr><br>
					<tr>Pform No.:$ptime_wed4</tr><br>
					<tr>From :$from_wed4</tr><br>
					<tr>To :$to_wed4</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur4</tr><br>
					<tr>Depatimeure time :$dept_time_thur4</tr><br>
					<tr>Pform No.:$ptime_thur4</tr><br>
					<tr>From :$from_thur4</tr><br>
					<tr>To :$to_thur4</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri4</tr><br>
					<tr>Depatimeure time :$dept_time_fri4</tr><br>
					<tr>Pform No.:$ptime_fri4</tr><br>
					<tr>From :$from_fri4</tr><br>
					<tr>To :$to_fri4</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sat4</tr><br>
					<tr>Depatimeure time :$dept_time_sat4</tr><br>
					<tr>Pform No.:$ptime_sat4</tr><br>
					<tr>From :$from_sat4</tr><br>
					<tr>To :$to_sat4</tr><br>
					
				</table>
		</div>
			</td>
			<td>
			<div>	
				<table>
					<tr>Arrival time :$atime_sun4</tr><br>
					<tr>Depatimeure time :$dept_time_sun4</tr><br>
					<tr>Pform No.:$ptime_sun4</tr><br>
					<tr>From :$from_sun4</tr><br>
					<tr>To :$to_sun4</tr><br>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td><center>20:00 - 00:00</center></td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_mon5</tr><br>
					<tr>Depatimeure time :$dept_time_mon5</tr><br>
					<tr>Pform No.:$ptime_mon5</tr><br>
					<tr>From :$from_mon5</tr><br>
					<tr>To:$to_mon5</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue5</tr><br>
					<tr>Depatimeure time :$dept_time_tue5</tr><br>
					<tr>Pform No.:$ptime_tue5</tr><br>
					<tr>From :$from_tue5</tr><br>
					<tr>To :$to_tue5</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed5</tr><br>
					<tr>Depatimeure time :$dept_time_wed5</tr><br>
					<tr>Pform No.:$ptime_wed5</tr><br>
					<tr>From :$from_wed5</tr><br>
					<tr>To :$to_wed5</tr><br>
					>
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur5</tr><br>
					<tr>Depatimeure time :$dept_time_thur5</tr><br>
					<tr>Pform No.:$ptime_thur5</tr><br>
					<tr>From :$from_thur5</tr><br>
					<tr>To :$to_thur5</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri5</tr><br>
					<tr>Depatimeure time :$dept_time_fri5</tr><br>
					<tr>Pform No.:$ptime_fri5</tr><br>
					<tr>From :$from_fri5</tr><br>
					<tr>To :$to_fri5</tr><br>
					
				</table>
			</div>
			</td>
			<td>
			<div>
				<table>
					<tr>Arrival time :$atime_sat5</tr><br>
					<tr>Depatimeure time :$dept_time_sat5</tr><br>
					<tr>Pform No.:$ptime_sat5</tr><br>
					<tr>From :$from_sat5</tr><br>
					<tr>To :$to_sat5</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sun5</tr><br>
					<tr>Depatimeure time :$dept_time_sun5</tr><br>
					<tr>Pform No.:$ptime_sun5</tr><br>
					<tr>From :$from_sun5</tr><br>
					<tr>To :$to_sun5</tr><br>
					
				</table>
			</div>
			</td>
		</tr>
		<tr>
			<td><center>00:00 - 4:00</center></td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_mon6</tr><br>
					<tr>Depatimeure time :$dept_time_mon6</tr><br>
					<tr>Pform No.:$ptime_mon6</tr><br>
					<tr>From :$from_mon6</tr><br>
					<tr>To:$to_mon6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_tue6</tr><br>
					<tr>Depatimeure time :$dept_time_tue6</tr><br>
					<tr>Pform No.:$ptime_tue6</tr><br>
					<tr>From :$from_tue6</tr><br>
					<tr>To :$to_tue6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_wed6</tr><br>
					<tr>Depatimeure time :$dept_time_wed6</tr><br>
					<tr>Pform No.:$ptime_wed6</tr><br>
					<tr>From :$from_wed6</tr><br>
					<tr>To :$to_wed6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_thur6</tr><br>
					<tr>Depatimeure time :$dept_time_thur6</tr><br>
					<tr>Pform No.:$ptime_thur6</tr><br>
					<tr>From :$from_thur6</tr><br>
					<tr>To :$to_thur6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_fri6</tr><br>
					<tr>Depatimeure time :$dept_time_fri6</tr><br>
					<tr>Pform No.:$ptime_fri6</tr><br>
					<tr>From :$from_fri6</tr><br>
					<tr>To :$to_fri6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sat6</tr><br>
					<tr>Depatimeure time :$dept_time_sat6</tr><br>
					<tr>Pform No.:$ptime_sat6</tr><br>
					<tr>From :$from_sat6</tr><br>
					<tr>To :$to_sat6</tr><br>
					
				</table>
			</div>
			</td>
			<td>
				<div>
				<table>
					<tr>Arrival time :$atime_sun6</tr><br>
					<tr>Depatimeure time :$dept_time_sun6</tr><br>
					<tr>Pform No.:$ptime_sun6</tr><br>
					<tr>From :$from_sun6</tr><br>
					<tr>To :$to_sun6</tr><br>
				
				</table>
			</div>
			</td>
		</tr>"
	
	?>

