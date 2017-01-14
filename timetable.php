<!doctype html>
<html>
<head>
    <title>Timetable</title>
	<style type="text/css">
		table
		{
			white-space: normal;
			line-height: normal;
			font-weight: normal;
			font-size: medium;
			font-variant: normal;
			font-style: normal;
			color: -webkit-text;
			text-align: start;
			border-top-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 0px;
			border-left-width: 0px;
			border-spacing: 0px;
		}
		.quarter
		{
			color: #366092;
			font-size: 7.0pt;
			font-family: Arial, sans-serif;
			text-align: center;
			vertical-align: top;
			border-top: none;
			border-right: none;
			border-left: 1.0pt solid #1B58BB;
			background: #E8EEF7;
		}
		.oclock
		{
			color: navy;
			font-size: 9.0pt;
			font-family: Arial, sans-serif;
			text-align: center;
			vertical-align: top;
			border-top: .5pt solid #1B58BB;
			border-right: none;
			border-bottom: none;
			border-left: 1.0pt solid #1B58BB;
			background: #E8EEF7;
		}
		.dayOfWeek
		{
			color: white;
			font-size: 14.0pt;
			font-weight: 700;
			font-family: "Arial Narrow", sans-serif;
			text-align: center;
			border-right: 1.0pt solid silver;
			border-bottom: .5pt solid silver;
			background: #1B58BB;
			white-space: nowrap;
		}
		.weekend
		{
			border: none;
			width: 112pt;
			font-size: 8.0pt;
			color: windowtext;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			text-underline-style: none;
			font-family: "Arial Narrow";
			border-top: none;
			border-right: .5pt solid silver;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: #FFFFCC;
			text-align: left;
			vertical-align: top;
			white-space: normal;
			padding: 0px;
			border-style:none none none solid;
			border-width:1px; 

		}
		.weekday
		{
			width: 112pt;
			color: windowtext;
			font-size: 8.0pt;
			font-family: "Arial Narrow", sans-serif;
			text-align: left;
			vertical-align: top;
			border-top: none;
			border-right: .5pt solid silver;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: white;
			white-space: normal;
			padding: 0px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			border: none;
			border-style:none none none solid;
			border-width:1px; 
		}
		.Lecture
		{
			border-top: none;
			width: 112pt;
			color: windowtext;
			font-size: 14.0pt;
			font-family: "Arial Narrow", sans-serif;
			text-align: center;
			vertical-align: middle;
			border-right: .5pt solid #969696;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: #8DB4E2;
			white-space: normal;
			padding: 0px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			border: none;
			font-variant: normal;
			border-spacing: 2px;
			border-color: gray;
			border-style:solid none solid solid;
			border-width:1px; 
		}
		.Tutorial
		{
			border-top: none;
			width: 112pt;
			color: windowtext;
			font-size: 14.0pt;
			font-family: "Arial Narrow", sans-serif;
			text-align: center;
			vertical-align: middle;
			border-right: .5pt solid #969696;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: #C4D79B;
			white-space: normal;
			padding: 0px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			border: none;
			font-variant: normal;
			border-spacing: 2px;
			border-color: gray;
			border-style:solid none solid solid;
			border-width:1px; 
		}
		.Personal
		{
			border-top: none;
			width: 112pt;
			color: windowtext;
			font-size: 14.0pt;
			font-family: "Arial Narrow", sans-serif;
			text-align: center;
			vertical-align: middle;
			border-right: .5pt solid #969696;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: #CC9BD7;
			white-space: normal;
			padding: 0px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			border: none;
			font-variant: normal;
			border-spacing: 2px;
			border-color: gray;
			border-style:solid none solid solid;
			border-width:1px; 
		}
		.title
		{
			color: windowtext;
			font-size: 16.0pt;
			text-align: left;
			font-weight: 400;
			font-style: normal;
			font-family: Calibri, sans-serif;
			white-space: nowrap;
			font-variant: normal;
			border-spacing: 2px;
			border-color: gray;
		}
		
		.weekend_oclock
		{
			border: none;
			width: 112pt;
			font-size: 8.0pt;
			color: windowtext;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			text-underline-style: none;
			font-family: "Arial Narrow";
			border-top: none;
			border-right: .5pt solid silver;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: #FFFFCC;
			text-align: left;
			vertical-align: top;
			white-space: normal;
			padding: 0px;
			border-style:dashed none none solid;
			border-width:1px; 
		}
		.weekday_oclock
		{
			width: 112pt;
			color: windowtext;
			font-size: 8.0pt;
			font-family: "Arial Narrow", sans-serif;
			text-align: left;
			vertical-align: top;
			border-top: none;
			border-right: .5pt solid silver;
			border-bottom: none;
			border-left: .5pt solid #969696;
			background: white;
			white-space: normal;
			padding: 0px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			border: none;
			border-style:dashed none none solid;
			border-width:1px; 
		}
		
   </style>
</head>
<body>
	<div class="title">2014 Spring</div>
	<table>
		<?php 
			
			$col = 7;
			$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
			$event = array(
							array(1,11,30,14,15,"CSCI 5010","Lecture"),
							array(2,14,30,17,15,"CSCI 5060","Lecture"),

							array(1,17,30,18,15,"CSCI 2100","Tutorial")
							);
			function isSpanRow($event,$i,$j,$k)
			{
				for($e = 0 ; $e < count($event) ; $e++)
				{
					$begin =  $event[$e][1] * 60 +  $event[$e][2];
					$end = $event[$e][3] * 60 +  $event[$e][4];
					$cur = $i * 60 + $j;
					if ($k == $event[$e][0] && $cur == $begin)
					{
						return $e;
					}
				}
				return -1;
			}
			function afterSpanRow($event,$i,$j,$k)
			{
				for($e = 0 ; $e < count($event) ; $e++)
				{
					$begin =  $event[$e][1] * 60 +  $event[$e][2];
					$end = $event[$e][3] * 60 +  $event[$e][4];
					$cur = $i * 60 + $j;
					if ($k == $event[$e][0] && $cur > $begin && $cur < $end)
					{
						return true;
					}
				}
				return false;
			}
		?>
		<?php echo "<tr>" ?>
			<?php  echo "<th class = \"dayOfWeek\"></th>" ?>
			<?php for($j = 0 ; $j < $col ; $j ++){ ?>
				<?php  echo "<th class = \"dayOfWeek\">" . $dayOfWeek[$j] . "</th>" ?>
			<?php } ?>
		<?php echo "</tr>" ?>
		<?php for($i = 9 ; $i <= 22 ; $i ++){ ?>
			<?php for($j = 0 ; $j < 60 ; $j += 15){ ?>
				<?php if($i == 22 && $j > 0) break; ?>
				<?php echo "<tr>"; ?>
					<?php  
						if($j == 0)
							printf("<td class=\"oclock\">%s %s</td>", $i, $i >=12 ? "PM" : "AM" ); 
						else
							printf("<td class=\"quarter\">:%02d</td>", $j); 
					?>
					<?php for($k = 0 ; $k < $col ; $k ++){ ?>
						<?php
							$span = isSpanRow($event,$i,$j,$k);
							if ($span == -1)
							{
								$after = afterSpanRow($event,$i,$j,$k);
								if($after == false)
								{
									if ($j == 0)
									{
										if ($k == 0 || $k == 6)
											echo "<td class = \"weekend_oclock\">" . "</td>"; 
										else
											echo "<td class = \"weekday_oclock\">" . "</td>"; 
									}
									else
									{
										if ($k == 0 || $k == 6)
											echo "<td class = \"weekend\">" . "</td>"; 
										else
											echo "<td class = \"weekday\">" . "</td>"; 
									}
									
								}
							}
							else
							{
								$rows = ($event[$span][3] - $event[$span][1]) * 4 + ($event[$span][4] - $event[$span][2]) / 15;
								$title = $event[$span][5];
								$type = $event[$span][6];
								printf("<td rowspan = \"%s\" class = \"%s\">%s</td>", $rows, $type, $title . "<br>" . $type);
							}

						?>
					<?php } ?>
				<?php echo "</tr>" ?>
			<?php } ?>
		<?php } ?>
	</table>
</body>
</html>